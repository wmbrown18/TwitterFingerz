
<html>
<body style ="background-color: #FFFFFF; font-size: 25px;">
<body>

<title>FinanceItAll Stream</title>


<!--
<div id="startStream" style="height:800px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;background-color:#CAE1F9">
-->
	
	

<?php 

require __DIR__. '../../../../vendor/autoload.php';
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'tmhOAuthExample.php';
require __DIR__. '../../../../vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php';
$tmhOAuth = new tmhOAuthExample();



//@washingtonpost
//@business
//@YahooFinance
//@DWSKTrader
//@dennischonAC
//@webapperc
//@DoubleTGolle
//@stocktwits
//@shopseasonal
//@stockstotrade
//telyshaaaa
//$UsersToFollow = array('follow'    => '2467791, 34713362, 19546277, 898400251123453952, 839488222724046852, 842409795462299648, 1328120858, 14886375,  4568979016, 747173826488840193, 831723043, 128395368');


function autolink($str, $attributes=array()){
  $attrs = '';
  foreach ($attributes as $attribute => $value) {
    $attrs .= " {$attribute}=\"{$value}\"";
  }
  $str = ' ' . $str;
  $str = preg_replace(
    '`([^"=\'>])((http|https|ftp)://[^\s<]+[^\s<\.)])`i',
    '$1<a href="$2"'.$attrs.'>$2</a>',
    $str
  );
  $str = substr($str, 1);
  
  return $str;
}

function getResults($json){
  $results = array();
  foreach($json["results"] as $e){
      //clean up wierd characters
      $clean = preg_replace('/[^(\x20-\x7F)\x0A]*/','', $e['text']);
      $text = autolink($clean);
      $results[] = $text;
  }
  return $results;
}

function removeSimilar($results){
  $return = array();
  foreach($results as $a){
    $check = 0;
    foreach($results as $b){
      if($a != $b){
        similar_text($a, $b, $sim);
        if($sim > 70){
          //similarity to other elements based on 70
          $check = 1; 
        }
      }
    }
    if($check == 0){
      $return[] = $a;
    }
  }
  return $return;
}
global $newAccount;

$newAccount = $_GET['newAccount'];
if(strcmp($newAccount, "all") == 0)
{
  $newAccount = '2467791, 34713362, 19546277, 898400251123453952, 839488222724046852, 842409795462299648, 1328120858, 14886375,  4568979016, 747173826488840193, 831723043';
}

else if(is_numeric($newAccount) == false)
{
  $settings = array(
    'oauth_access_token' => "828704970593673217-fpjQo9kpuJ7dLSMtmmbPnPxRmo1OCEo",
    'oauth_access_token_secret' => "SHHc9AvOBWVPGJdzyZQ5G5zOcHa6YR7wKoqyE2Lqjby5x",
    'consumer_key' => "6je5nYuL8cVF94JitwF2UmAB8",
    'consumer_secret' => "Y6KeSGp2LzEeM8FecE4YcKnpoI2ie1n2v8mftH46uz4h4c7ig4"
);
  $url = 'https://api.twitter.com/1.1/user/lookup.json';

  $request = "GET";
  $getField = "?screen_name=" . $newAccount . "&count=1";

  $TwitterAPI = new TwitterAPIExchange($settings);
  $accountNumber = $TwitterAPI -> setGetfield($getField)
                               -> buildOauth($url, $request)
                               -> performRequest();
  $accountNumber = json_decode($accountNumber, true);

  $newAccount = $accountNumber[0]['id'];

}

$UsersToFollow = array('follow', $newAccount);


function my_streaming_callback($data, $length, $metrics) {
  $file = __DIR__.'/metrics.txt';


//------------WORKING CODE---------------------//
 
//Users (USER IDs) to follow, a comma seperated list
global $UsersToFollow;
global $symbolGame;
global $symbol;

$users = $UsersToFollow["follow"];
$symbols = $symbolGame["symbols"];

//Array list of users to check and make sure only original tweets are coming in
$checkUsers = explode( ', ', $users );

 
//Json formatted tweet
$tweet = $data .PHP_EOL;

//Transfers json String into an array for easy access
$tweetsArray = json_decode($tweet, true);

      if(strpos($tweetsArray['text'], '@washingtonpost') !== false)
        $symbol = 'NYSE:GHC';

       else if(stripos($tweetsArray['text'], 'Apple') !== false)
         $symbol = 'AAPL';
       else if(stripos($tweetsArray['text'], 'Google') !== false)
         $symbol = 'GOOGL';
       else if(stripos($tweetsArray['text'], 'Nvidia') !== false || stripos($tweetsArray['text'], 'NVIDIA') !== false)
         $symbol = 'NVDA';
       else if(stripos($tweetsArray['text'], 'Microsoft') !== false)
         $symbol = 'MSFT';
       else if(stripos($tweetsArray['text'], 'Bank of America') !== false || stripos($tweetsArray['text'], 'Bank Of America') !== false)
         $symbol = 'BAC';
       else if(stripos($tweetsArray['text'], 'Amazon') !== false)
         $symbol = 'AMZN';
       else if(stripos($tweetsArray['text'], 'Facebook') !== false)
         $symbol = 'FB';
       else if(stripos($tweetsArray['text'], 'Johnson & Johnson') !== false || stripos($tweetsArray['text'], 'Johnson and Johnson') !== false || stripos($tweetsArray['text'], 'J&J') !== false || stripos($tweetsArray['text'], 'J & J') !== false)
         $symbol = 'JNJ';
       else if(stripos($tweetsArray['text'], 'Exxon') !== false)
         $symbol = 'XOM';
       else if(stripos($tweetsArray['text'], 'J.P.Morgan') !== false || stripos($tweetsArray['text'], 'J. P. Morgan') !== false || stripos($tweetsArray['text'], 'J.P. Morgan') !== false)
         $symbol = 'JPM';
       else if(stripos($tweetsArray['text'], 'Wells Fargo & Corp.') !== false || strpos($tweetsArray['text'], 'Wells Fargo') !== false || strpos($tweetsArray['text'], 'Wells Fargo & Corporation') !== false || strpos($tweetsArray['text'], 'Wells Fargo and Corporation') !== false)
         $symbol = 'WFC';
       else if(stripos($tweetsArray['text'], 'Walmart') !== false)
         $symbol = 'WALM34';
       else
          $symbol = '';
//$results = getResults($tweetsArray);
//$clean = removeSimilar($results);

/*echo "<ul>";
foreach($clean as $a){
     echo "<li>".$a."</li>";
}
echo "</ul>";*/
//foreach($checkUsers as $follows)
//{
		//Only stream this tweet if the owner of the tweet matches the user id
		//if( $tweetsArray['user']['id'] == $follows)
		//{
			//Displays the screen name of the user who tweeted

  //OLD WAY TO POPULATE TWEETS!!! REALLY SLOW!
    // if(substr($tweetsArray['text'], 0, 2) !== "RT"){
    //   echo $tweetsArray['user']['screen_name'];
    //   echo ': ';
    //   //Displays the text of the tweet, followed by a line break
    //   echo $tweetsArray['text'] . "<br>" . PHP_EOL; 
    // }
  //Connect to MongoDB client
  $m =  new MongoDB\Client;

	   //select a database
	   $db = $m->Tweetdemo;
	   
	   //Select collection
	   $collection = $db->selectCollection('tweetfeed');
		
    // $count = 0;
    // if($count == 0)
    // {
    //   $collection -> remove(array("title"=>"MongoDB Tutorial"),false);
    //   $count = 1;
    // }

		//Insert tweet into database
		$doc = $collection->insertOne (["Screen Name" => $tweetsArray['user']['screen_name'], "text" => $tweetsArray['text'], "symbol" => $symbol]);
	//	}

    $cursor = $collection->find();
    
    foreach($cursor as $doc)
    {
      if(substr($doc['text'], 0, 2) !== "RT"){

       echo '<div style ="border: 5px solid #aaa;">';
       echo $doc['symbol'] . ': ';
       
       echo $doc['Screen Name'] .  ': ';
       //Displays the text of the tweet, followed by a line break
       
       echo  $doc['text'] . "<br>" . PHP_EOL; 
       echo '</div>';
       ?>

       <!-- <script>
        function pushFirstTweet()
        {
          
            var list = document.getElementById("stream");
            list.insertBefore(document.getElementById("tweet"), list.childNodes[0]);
            document.getElementById("tweet").removeAttribute("div");
          
        }
        pushFirstTweet();

      </script> -->
      <?php
     }
    
    }
//}
//---------------------------------------------//

//--------------DO NOT DELETE THE BELOW CODE SECTION----------------//

  //echo json_decode($data, true);// .PHP_EOL;
  /*if (!is_null($metrics)) {
    if (!file_exists($file)) {
      $line = 'time' . "\t" . implode("\t", array_keys($metrics)) . PHP_EOL;
      file_put_contents($file, $line);
    }
    $line = time(oid)me() . "\t" . implode("\t", $metrics) . PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND);
  }*/

//--------------DO NOT DELETE THE ABOVE CODE SECTION----------------//  


  return file_exists(dirname(__FILE__) . '/STOP');
}

//$twitter_feed = array();

/*
$api_url = "https://api.twitter.com/1.1/statuses/filter.json/".$twitter['user'].
  ".json?include_entities=".$twitter['entities'].
  "&include_rts=".$twitter['retweet'].
  "&exclude_replies=".$twitter['exclude_replies'].
  "&contributor_details=".$twitter['contributor_details'].
  "&trim_user=".$twitter['trim_user'].
  "&count=".$twitter['count'];
 
// obtain the results 
 
//$json = file_get_contents($api_url, true);
 
// decode the json response as a PHP array
 
//$decode = json_decode($json, true); */


//Washington Post and ESPN ///Use comma seperated list for followers


$code = $tmhOAuth->streaming_request(
  'POST',
  'https://stream.twitter.com/1.1/statuses/filter.json',
  $UsersToFollow,
  'my_streaming_callback'
);
$tmhOAuth->render_response();
?>

<!--Telisha Everett's Code 
function stop() {
    sourceElement.setAttribute("empty", "");
    mongoSearch.stop();
    //stop mongo
    mongoSearch(function () { 
        loadTweets.stop(); // This stops the stream from downloading
    });-->


</div>

</body>
</html>