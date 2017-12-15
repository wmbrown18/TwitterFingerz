<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #ddf7d4;}
#customers tr:nth-child(odd){background-color: #f7d7d7;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
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
<br>
  <h3 style="text-align: center">
      Please enter a stock quote in the box below <br>
      
   </h3>
  <form style="text-align: center" action="StatisticalAnalysis.php" method="get" name="all">
    <input type="text" id="input" placeholder="Ex. AAPL" name="stockSymbol">
    <!-- <select id="frame" name="frame">
      <option value="1min">1 minute</option>
      <option value="3min">3 minutes</option>
      <option value="5min">5 minutes</option>
      <option value="15min">15 minutes</option>
      <option value="30min">30 minutes</option>
      <option value="1hr">1 hour</option>
      <option value="2hr">2 hours</option>
      <option value="3hr">3 hours</option>
      <option value="4hr">4 hours</option>
      <option value="1day">1 day</option>
      <option value="1week">1 week</option>
    </select> -->
    <button class="button" style="vertical-align:middle"><span>Go</span></button>

    <br><br>
  </form>
  <script type="text/javascript">
    document.getElementById('input') = "<?php echo $_GET['stockSymbol'];?>";
  </script>
	<?php 
  require __DIR__. '../../../vendor/dannyben/php-quandl/Quandl.php';
  require __DIR__. '../../../vendor/autoload.php';
  global $symbol;
  //global $interval;
  $m =  new MongoDB\Client;

     //select a database
     $db = $m->Tweetdemo;
     
     //Select collection
     $collection = $db->tweetfeed;

     $cursor =  $collection->find();

     $Wcount = 0;
     $Acount = 0;
     $Gcount = 0;
     $Ncount = 0;
     $Mcount = 0;
     $Bcount = 0;
     $Fcount = 0;
     $Zcount = 0;
     foreach($cursor as $doc)
     {
        if(preg_match('/\b'.'NYSE: GHC'.'\b/i', $doc["symbol"]))
          $Wcount = $Wcount + 1;
        if(preg_match('/\b'.'AAPL'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Apple'.'\b/i', $doc["symbol"]))
          $Acount = $Acount + 1;
        if(preg_match('/\b'.'GOOGL'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Google'.'\b/i', $doc["symbol"]))
          $Gcount = $Gcount + 1;
        if(preg_match('/\b'.'Nvidia'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Nvidia'.'\b/i', $doc["symbol"]))
          $Ncount = $Ncount + 1;
        if(preg_match('/\b'.'MSFT'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Microsoft'.'\b/i', $doc["symbol"]))
          $Mcount = $Mcount + 1;
        if(preg_match('/\b'.'BAC'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Bank of America'.'\b/i', $doc["symbol"]))
          $Bcount = $Bcount + 1;
        if(preg_match('/\b'.'FB'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Facebook'.'\b/i', $doc["symbol"]))
          $Fcount = $Fcount + 1;
        if(preg_match('/\b'.'Amazon'.'\b/i', $doc["symbol"]) || preg_match('/\b'.'Amazon'.'\b/i', $doc["symbol"]))
          $Zcount = $Zcount + 1;
     }
     
		
		//=====================WORKING CODE ============================
     if(isset($_GET["stockSymbol"]))
       $symbol = "WIKI/".$_GET["stockSymbol"];
    
    // if(isset($_GET["frame"]))
    //   $interval = intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]))
    //   $interval = intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]))
    //   $interval = intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]) && $_GET["frame"] == "15 minutes")
    //   $interval = intval(substr($_GET["frame"], 0, 2));
    // else if(isset($_GET["frame"]))
    //   $interval = intval(substr($_GET["frame"], 0, 2));
    // else if(isset($_GET["frame"]))
    //   $interval = 60 * intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]))
    //   $interval = 60 * intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]))
    //   $interval = 60 * intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]))
    //   $interval = 60 * intval(substr($_GET["frame"], 0, 1));
    // else if(isset($_GET["frame"]))
    //   $interval = "D";
    // else if(isset($_GET["frame"]))
    //   $interval = "W";

    
		$api_key = "vrf8_NNFgHthxUPX19MT";
		$quandl = new Quandl($api_key, "csv");
    
		$data = $quandl->getSymbol($symbol, [
			"order"      => "asc",
			"rows"            => 7,
			"trim_start" => "today-30 days",
			"trim_end"   => "today",
		]);
		//$results = json_decode($data, true);
		//echo $data."<br><br><br>";
if($symbol !== null){
    $lines = explode("\n", $data);
    
    echo '<table id="customers">';
    $superCount = 1;
    foreach($lines as $line)
    {
      $lineData = explode(",", $line);
      $count = 1;
      echo "<tr>";

      foreach($lineData as $value)
      {
        if($count < 6 && $superCount < 9)
          echo "<td>". $value. (chr(9))."</td>";
        
        $count++;
      }

      echo "</tr>";
      $superCount++;
    }
    echo "</table>";


    //'.$interval.'
    echo '<center>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
    new TradingView.widget({
      "width": 980,
      "height": 610,
      "symbol": "NASDAQ:'. substr($symbol, 5) . '",
      "interval": "D",
      "timezone": "Etc/UTC",
      "theme": "Light",
      "style": "1",
      "locale": "en",
      "toolbar_bg": "#f1f3f6",
      "enable_publishing": false,
      "hide_top_toolbar": true,
      "save_image": false,
      "allow_symbol_change": false,
      "hideideas": true
    });
    </script>
   </center>';
 }
    else
      echo '<h3 style="text-align: center">
      Here will be a graphical repesentation of the data we collect from stock quotes. <br>
      Here will also show stock quotes prices
   </h3><br><br><br>';
		//===============================================================
     echo "There number of Graham Holdings symbols are ".$Wcount."<br>";
     echo "There number of Apple symbols are ".$Acount."<br>";
     echo "There number of Google symbols are ".$Gcount."<br>";
     echo "There number of Nvidia symbols are ".$Ncount."<br>";
     echo "There number of Microsoft symbols are ".$Mcount."<br>";
     echo "There number of Bank of America symbols are ".$Bcount."<br>";
     echo "There number of Facebook symbols are ".$Fcount."<br>";
     echo "There number of Amazon symbols are ".$Zcount."<br>";

	?>

   <!-- <center>
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
   </center> -->

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
	