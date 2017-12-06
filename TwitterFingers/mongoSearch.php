<html>

<body style ="background-color: #CAE1F9;"> <!--Telisha changed the color to black HAVEN'T SAVED YET -->

<body>



<?php 
echo "<h1>Search Results for: " . $_GET["wholeTweet"] . "</h1><br>";
global $termFound;
require __DIR__. '../../../vendor/autoload.php';
//Connect to MongoDB client
  $m =  new MongoDB\Client;

	   //select a database
	   $db = $m->Tweetdemo;
	   
	   //Select collection
	   $collection = $db->tweetfeed;

	   $cursor =  $collection->find();

	   $count = 0;
	   foreach($cursor as $doc){


	   //$file = fopen("tweets.csv", "w");
	   //if(strpos($doc["text"] . $doc["Screen Name"], $_GET["wholeTweet"]) != false)
	   	if(preg_match('/\b'.$_GET["wholeTweet"].'\b/i', $doc["text"] . $doc["Screen Name"]))
	   	{

	   		if(substr($doc['text'], 0, 2) !== "RT"){
			   echo $doc['symbol'] . ': ';
		       
		       echo $doc['Screen Name'] .  ': ';
		       //Displays the text of the tweet, followed by a line break
		       echo $doc['text'] . "<br>" . PHP_EOL; 
		   $termFound = true;
		   $count = $count + 1;
		}
		}

		//	fputcsv($file,explode(',', $str));
}

	echo "<h2>Number of tweets found: " . $count . "</h2><br>" . PHP_EOL;



	if($termFound != TRUE)
		echo 'The term "' . $_GET["wholeTweet"] . '" was not found'."<br>";

?>
</body>
</html>