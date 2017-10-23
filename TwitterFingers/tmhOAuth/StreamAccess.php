
<html>
<body style ="background-color: #38eeff;">
<body>

<title>Twitter Fingerz Stream</title>

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


//foreach($checkUsers as $follows)
//{
		//Only stream this tweet if the owner of the tweet matches the user id
		//if( $tweetsArray['user']['id'] == $follows)
		//{
			//Displays the screen name of the user who tweeted
			echo $tweetsArray['user']['screen_name'];
			echo ': ';

			//Displays the text of the tweet, followed by a line break
			echo $tweetsArray['text'] . "<br>" . PHP_EOL; 

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

</div>

</body>
</html>