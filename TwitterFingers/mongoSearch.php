<html>

<body style ="background-color: #38eeff;">

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
		   echo '"'.$doc["Screen Name"].'","'.$doc["text"] ."<br>" . PHP_EOL ."<br>" . PHP_EOL;
		   $termFound = true;
		   $count = $count + 1;
		}

		//	fputcsv($file,explode(',', $str));
}

	echo "<h2>Number of tweets found: " . $count . "</h2><br>" . PHP_EOL;



	if($termFound != TRUE)
		echo 'search term not found'."<br>";

?>
</body>
</html>