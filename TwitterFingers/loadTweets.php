
<html>
<body style ="background-color: #000000;"> //Telisha changed color to black HAVEN'T SAVED YET
<body>

<title>FinanceItAll Stream</title>

<h1>Stream Window</h1>
<div id="startStream" style="height:300px;width:1220px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

	
	

<?php 

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

     if($count < 100 && substr($doc['text'], 0, 2) !== "RT"){
       echo '"'.$doc["Screen Name"].'","'.$doc["text"] ."<br>" . PHP_EOL ."<br>" . PHP_EOL;
       $termFound = true;
       $count = $count + 1;
    }
}
?>


</body>
</html>