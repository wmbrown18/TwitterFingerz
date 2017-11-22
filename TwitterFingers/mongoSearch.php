<html>

<body style ="background-color: #CAE1F9;"> <!--Telisha changed the color to black HAVEN'T SAVED YET -->

<body>



<?php 
echo "<h1>Search Results for: " . $_GET["wholeTweet"] . "</h1><br>";

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
	   if(strpos($doc["text"] . $doc["Screen Name"], $_GET["wholeTweet"]) != false){

	   		if(substr($doc['text'], 0, 2) !== "RT"){
		   echo '"'.$doc["Screen Name"].'","'.$doc["text"] ."<br>" . PHP_EOL ."<br>" . PHP_EOL;
		   $termFound = true;
		   $count = $count + 1;
		}
		}

		//	fputcsv($file,explode(',', $str));
}

	echo "<h2>Number of tweets found: " . $count . "</h2><br>" . PHP_EOL;



	if($termFound != TRUE)
		echo 'search term not found'."<br>";

?>
</body>
</html>