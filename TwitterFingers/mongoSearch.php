<html>

<body style="font-size:25px;">



<?php 

global $termFound;
global $count;
require __DIR__. '../../../vendor/autoload.php';

echo "<h1>Search Results for: " . $_GET["wholeTweet"] . "</h1><br>";
//Connect to MongoDB client
  $m =  new MongoDB\Client;

	   //select a database
	   $db = $m->Tweetdemo;
	   
	   //Select collection
	   $collection = $db->tweetfeed;

	   $cursor =  $collection->find();

	   $count = 0;
	   foreach($cursor as $doc)
	   {


	   //$file = fopen("tweets.csv", "w");
	   //if(strpos($doc["text"] . $doc["Screen Name"], $_GET["wholeTweet"]) != false)
	   	if(preg_match('/\b'.$_GET["wholeTweet"].'\b/i', $doc["text"]))
	   	{
			
	   		if(substr($doc['text'], 0, 2) !== "RT")
	   		{
	   			echo '<div style ="border: 5px solid #aaa;">';
			   echo $doc['symbol'] . ': ';
		       
		       echo $doc['Screen Name'] .  ': ';
		       //Displays the text of the tweet, followed by a line break
		       echo $doc['text'] . "<br>" . PHP_EOL; 
		       echo '</div>';
		   	   $count = $count + 1;
		    }
		}
		else if(preg_match('/\b'.$_GET["wholeTweet"].'\b/i', $doc["Screen Name"]))
	   	{
			
	   		if(substr($doc['text'], 0, 2) !== "RT")
	   		{
	   			echo '<div style ="border: 5px solid #aaa;">';
			   echo $doc['symbol'] . ': ';
		       
		       echo $doc['Screen Name'] .  ': ';
		       //Displays the text of the tweet, followed by a line break
		       echo $doc['text'] . "<br>" . PHP_EOL; 
		       echo '</div>';
		   	   $count = $count + 1;
		    }
		}
		else if(preg_match('/\b'.$_GET["wholeTweet"].'\b/i', $doc["symbol"]))
	   	{
			
	   		if(substr($doc['text'], 0, 2) !== "RT")
	   		{
	   			echo '<div style ="border: 5px solid #aaa;">';
			   echo $doc['symbol'] . ': ';
		       
		       echo $doc['Screen Name'] .  ': ';
		       //Displays the text of the tweet, followed by a line break
		       echo $doc['text'] . "<br>" . PHP_EOL; 
		       echo '</div>';
		   	   $count = $count + 1;
		    }
		}

	}
	if($count > 0)
		echo "<h2>Number of tweets found: " . $count . "</h2><br>";

	else
		echo 'The term "' . $_GET["wholeTweet"] . '" was not found'."<br>";

?>

</body>
</html>