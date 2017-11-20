
<html>
<body style ="background-color: #FFFFFF;">
<body>

<title>FinanceItAll Stream</title>

<h1>Stream Window</h1>
<div id="startStream" style="height:300px;width:1220px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

	
	

<?php 

require __DIR__. '../../../../vendor/autoload.php';
require __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'tmhOAuthExample.php';
$tmhOAuth = new tmhOAuthExample();


//@washingtonpost
//@business
//@YahooFinance
$UsersToFollow = array('follow'    => '2467791, 34713362, 19546277');

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


function my_streaming_callback($data, $length, $metrics) {
  $file = __DIR__.'/metrics.txt';


//------------WORKING CODE---------------------//
 
//Users (USER IDs) to follow, a comma seperated list
global $UsersToFollow;

$users = $UsersToFollow["follow"];

//Array list of users to check and make sure only original tweets are coming in
$checkUsers = explode( ', ', $users );

 
//Json formatted tweet
$tweet = $data .PHP_EOL;

//Transfers json String into an array for easy access
$tweetsArray = json_decode($tweet, true);

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
    if(substr($tweetsArray['text'], 0, 2) !== "RT"){
      echo $tweetsArray['user']['screen_name'];
      echo ': ';
      //Displays the text of the tweet, followed by a line break
      echo $tweetsArray['text'] . "<br>" . PHP_EOL; 
    }
  //Connect to MongoDB client
  $m =  new MongoDB\Client;

	   //select a database
	   $db = $m->Tweetdemo;
	   
	   //Select collection
	   $collection = $db->selectCollection('tweetfeed');
		
		//Insert tweet into database
		$doc = $collection->insertOne (["Screen Name" => $tweetsArray['user']['screen_name'], "text" => $tweetsArray['text']]);
	//	}
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

<!--Telisha Everett's Code -->
function stop() {
    sourceElement.setAttribute("empty", "");
    mongoSearch.stop();
    //stop mongo
    mongoSearch(function () { 
        loadTweets.stop(); // This stops the stream from downloading
    });


</div>

</body>
</html>