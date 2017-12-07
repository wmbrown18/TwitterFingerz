<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<script src="amcharts/amcharts.js"></script>
	<script src="amcharts/amstock.js"></script>
	<script src="amcharts/serial.js"></script>
	<script src="amcharts/plugins/dataloader/dataloader.min.js"></script>
	<script src="amcharts/themes/light.js"></script>
<title> Statistical Analysis </title>
<link href="css/magic.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="nav1">
     <h1><a href="main.html"> Finance It All</a></h1>
     <ul>
        <li><a href="main.html">Home</a></li>
        <li><a href="TwitterFingerz.php">Stream</a></li>
        <li id="active"><a href="StatisticalAnalysis.php">Statistical Analysis</a></li>
    </ul> 

</div>
<form action="" method="get" id="all">
  <button type="submit" form="all" value="Submit">Go</button>
  <input type="text" name="stockSymbol"><br><br>
  </form>
	<?php require __DIR__. '../../../vendor/dannyben/php-quandl/Quandl.php';
		// //  Initiate curl
		// $ch = curl_init();
		// // Disable SSL verification
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// // Will return the response, if false it print the response
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// // Set the url
		// $cURL = "https://www.quandl.com/api/v3/datasets/WIKI/FB.json?column_index=4&start_date=2014-01-01&end_date=2014-12-31&collapse=monthly";
		// curl_setopt($ch, CURLOPT_URL,$cURL);
		// // Execute
		// $result=curl_exec($ch);
		// // Closing
		// curl_close($ch);

		// // Will dump a beauty json :3
		// $result = json_decode($result, true);
		
		// print_r($result); echo "<br><br>";
		
		// foreach($result as $var)
		// 	echo $var['start_date'] . '<br>';
		
		//=====================WORKING CODE ============================
		$api_key = "vrf8_NNFgHthxUPX19MT";
		$quandl = new Quandl($api_key, "csv");
    
		$symbol = "WIKI/APPL";
		$data = $quandl->getSymbol("WIKI/".$_GET["stockSymbol"], [
			"sort_order"      => "desc",
			"rows"            => 10,
			"trim_start" => "today-30 days",
			"trim_end"   => "today",
		]);
		//$results = json_decode($data, true);
		//echo $data."<br><br><br>";

    $lines = explode("\n", $data);
    
    echo "<table>";
    foreach($lines as $line)
    {
      $lineData = explode(",", $line);
      $count = 1;
      echo "<tr>";

      foreach($lineData as $value)
      {
        if($count < 6)
          echo "<td>". $value. (chr(9))."</td>";
        
        $count++;
      }

      echo "</tr>";
    }
    echo "</table>";

		//===============================================================
	?>

   <center>
   	<!-- TradingView Widget BEGIN -->
		<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
		<script type="text/javascript">
		new TradingView.widget({
		  "width": 980,
		  "height": 610,
		  "symbol": "NASDAQ:AAPL",
		  "interval": "D",
		  "timezone": "Etc/UTC",
		  "theme": "Light",
		  "style": "1",
		  "locale": "en",
		  "toolbar_bg": "#f1f3f6",
		  "enable_publishing": false,
		  "allow_symbol_change": true,
		  "hideideas": true
		});
		</script>
	<!-- TradingView Widget END -->

   </center>

   <h3 style="text-align: center">
   		Here will be a graphical repesentation of the data we collect from stock quotes. <br>
   		Here will also show stock quotes prices
   </h3>

</body>
	<script>
		var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",

  "dataDateFormat": "DD-MM-YYYY",

  "dataSets": [ {
    "title": "MSFT",
    "fieldMappings": [ {
      "fromField": "Close",
      "toField": "value"
    }, {
      "fromField": "Volume",
      "toField": "volume"
    } ],
    "dataLoader": {

      /**
       * Originally we assume URL:
       * https://finance.google.co.uk/finance/historical?q=MSFT&startdate=Oct+1,2008&enddate=Oct+9,2008&output=csv
       * However, due to CORS restrictions, we are using the copy of the out
       */
      "url": "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/google_msft.csv",
      "format": "csv",
      "delimiter": ",",
      "useColumnNames": true,
      "skip": 1,
      "numberFields": ["Close", "Volume"],
      "reverse": true,

      /**
       * Google Finance API returns dates formatted like this "24-Apr-17".
       * The chart can't parse month names as well as two-digit years, so we 
       * need to use `postProcess` callback to reformat those dates into a 
       * chart-readable format
       */
      "postProcess": function( data ) {

        // Function that reformats dates
        function reformatDate( input ) {

          // Reformat months
          var mapObj = {
            "Jan": "01",
            "Feb": "02",
            "Mar": "03",
            "Apr": "04",
            "May": "05",
            "Jun": "06",
            "Jul": "07",
            "Aug": "08",
            "Sep": "09",
            "Oct": "10",
            "Nov": "11",
            "Dec": "12"
          };

          var re = new RegExp( Object.keys( mapObj ).join( "|" ), "gi" );
          input = input.replace( re, function( matched ) {
            return mapObj[ matched ];
          } );

          // Reformat years and days into four and two digits respectively
          var p = input.split("-");
          if (p[0].length == 1) {
            p[0] = "0" + p[0];
          }
          if (Number(p[2]) > 50) {
            p[2] = "19" + p[2];
          }
          else {
            p[2] = "20" + p[2];
          }
          return p.join("-");
        }

        // Reformat all dates
        for ( var i = 0; i < data.length; i++ ) {
          data[ i ].Date = reformatDate( data[ i ].Date );
        }
        
        console.log(data);

        return data;
      }
    },
    "categoryField": "Date"
  } ],

  "panels": [ {
      "showCategoryAxis": false,
      "title": "Value",
      "percentHeight": 70,

      "stockGraphs": [ {
        id: "g1",
        valueField: "value",
        comparable: true,
        compareField: "value",
        balloonText: "[[title]]:<b>[[value]]</b>",
        compareGraphBalloonText: "[[title]]:<b>[[value]]</b>"
      } ],

      stockLegend: {
        periodValueTextComparing: "[[percents.value.close]]%",
        periodValueTextRegular: "[[value.close]]"
      }
    },

    {
      "title": "Volume",
      "percentHeight": 30,
      "stockGraphs": [ {
        valueField: "volume",
        type: "column",
        showBalloon: false,
        fillAlphas: 1
      } ],

      stockLegend: {
        periodValueTextRegular: "[[value.close]]"
      }
    }
  ],

  "chartScrollbarSettings": {
    "graph": "g1"
  },

  "chartCursorSettings": {
    "valueBalloonsEnabled": true,
    "fullWidth": true,
    "cursorAlpha": 0.1,
    "valueLineBalloonEnabled": true,
    "valueLineEnabled": true,
    "valueLineAlpha": 0.5
  },

  periodSelector: {
    periods: [ {
      period: "MM",
      selected: true,
      count: 1,
      label: "1 month"
    }, {
      period: "YYYY",
      count: 1,
      label: "1 year"
    }, {
      period: "YTD",
      label: "YTD"
    }, {
      period: "MAX",
      label: "MAX"
    } ]
  }
} );
</script>
</html>
	