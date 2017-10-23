
 <?php require __DIR__. '../../../../vendor/autoload.php';


//This class is used for testing purposes. Use this class to practice executing the website without actually streaming any tweets,
//this is so that the rate limit is not exceeded when testing. Practice working with the arrays and related data structures in this file.





/* Test Json String

 $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';


 */


  //Test tweet in json format. Testing to convert to array

 $testTweet = '{"created_at":"Thu Apr 27 23:59:11 +0000 2017","id":857745975208808448,"id_str":"857745975208808448","text":"RT @washingtonpost: The NFL draft starts at 8 p.m. Before you watch, ponder this: Does your team botch the draft? Find out\u2026 ","source":"\u003ca href=\"http:\/\/twitter.com\" rel=\"nofollow\"\u003eTwitter Web Client\u003c\/a\u003e","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"user":{"id":39765206,"id_str":"39765206","name":"Ali Crawford","screen_name":"DONALDTRUMP","location":"Sunny SoFLA","url":"http:\/\/GotVideo.biz","description":"Obsessed #Bears fan #BearDown! Total Football fanatic! []_[] #Canes \u262e Classic Muscle Car freak. Jersey born and raised. Prosperity Planter. Proud Mom.","protected":false,"verified":false,"followers_count":2657,"friends_count":3072,"listed_count":154,"favourites_count":5520,"statuses_count":23522,"created_at":"Wed May 13 14:53:56 +0000 2009","utc_offset":-14400,"time_zone":"Eastern Time (US & Canada)","geo_enabled":false,"lang":"en","contributors_enabled":false,"is_translator":false,"profile_background_color":"80A6B8","profile_background_image_url":"http:\/\/pbs.twimg.com\/profile_background_images\/77110538\/IMG023.jpg","profile_background_image_url_https":"https:\/\/pbs.twimg.com\/profile_background_images\/77110538\/IMG023.jpg","profile_background_tile":false,"profile_link_color":"427585","profile_sidebar_border_color":"6E6752","profile_sidebar_fill_color":"E3E2DE","profile_text_color":"661C2C","profile_use_background_image":true,"profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/399744880\/twitterProfilePhoto_normal.jpg","profile_image_url_https":"https:\/\/pbs.twimg.com\/profile_images\/399744880\/twitterProfilePhoto_normal.jpg","profile_banner_url":"https:\/\/pbs.twimg.com\/profile_banners\/39765206\/1400296554","default_profile":false,"default_profile_image":false,"following":null,"follow_request_sent":null,"notifications":null},"geo":null,"coordinates":null,"place":null,"contributors":null,"retweeted_status":{"created_at":"Thu Apr 27 23:58:13 +0000 2017","id":857745732153077762,"id_str":"857745732153077762","text":"The NFL draft starts at 8 p.m. Before you watch, ponder this: Does your team botch the draft? Find out\u2026 https:\/\/t.co\/O6avu6GbOI","display_text_range":[0,140],"source":"\u003ca href=\"http:\/\/www.socialflow.com\" rel=\"nofollow\"\u003eSocialFlow\u003c\/a\u003e","truncated":true,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"user":{"id":2467791,"id_str":"2467791","name":"Washington Post","screen_name":"washingtonpost","location":"Washington, DC","url":"http:\/\/washingtonpost.com","description":"Tweet-length breaking news, analysis from around the world. Founded in 1877. Follow our journalists on Twitter: https:\/\/t.co\/VV0UBAMHg8","protected":false,"verified":true,"followers_count":9877265,"friends_count":1351,"listed_count":78795,"favourites_count":4517,"statuses_count":220495,"created_at":"Tue Mar 27 11:19:39 +0000 2007","utc_offset":-14400,"time_zone":"Eastern Time (US & Canada)","geo_enabled":true,"lang":"en","contributors_enabled":false,"is_translator":false,"profile_background_color":"333333","profile_background_image_url":"http:\/\/pbs.twimg.com\/profile_background_images\/464437503\/wp-capitol.png","profile_background_image_url_https":"https:\/\/pbs.twimg.com\/profile_background_images\/464437503\/wp-capitol.png","profile_background_tile":false,"profile_link_color":"0057EC","profile_sidebar_border_color":"FFFFFF","profile_sidebar_fill_color":"DBDBDB","profile_text_color":"323232","profile_use_background_image":true,"profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/753656134565785600\/iQ1GX-ov_normal.jpg","profile_image_url_https":"https:\/\/pbs.twimg.com\/profile_images\/753656134565785600\/iQ1GX-ov_normal.jpg","profile_banner_url":"https:\/\/pbs.twimg.com\/profile_banners\/2467791\/1469484132","default_profile":false,"default_profile_image":false,"following":null,"follow_request_sent":null,"notifications":null},"geo":null,"coordinates":null,"place":null,"contributors":null,"is_quote_status":false,"extended_tweet":{"full_text":"The NFL draft starts at 8 p.m. Before you watch, ponder this: Does your team botch the draft? Find out https:\/\/t.co\/4TIK0RGSZ0 https:\/\/t.co\/izAsGuGyeZ","display_text_range":[0,126],"entities":{"hashtags":[],"urls":[{"url":"https:\/\/t.co\/4TIK0RGSZ0","expanded_url":"http:\/\/wapo.st\/2qbWQLI","display_url":"wapo.st\/2qbWQLI","indices":[103,126]}],"user_mentions":[],"symbols":[],"media":[{"id":857745716306989057,"id_str":"857745716306989057","indices":[127,150],"media_url":"http:\/\/pbs.twimg.com\/tweet_video_thumb\/C-dTLzgXUAESM6x.jpg","media_url_https":"https:\/\/pbs.twimg.com\/tweet_video_thumb\/C-dTLzgXUAESM6x.jpg","url":"https:\/\/t.co\/izAsGuGyeZ","display_url":"pic.twitter.com\/izAsGuGyeZ","expanded_url":"https:\/\/twitter.com\/washingtonpost\/status\/857745732153077762\/photo\/1","type":"animated_gif","sizes":{"large":{"w":1024,"h":538,"resize":"fit"},"medium":{"w":600,"h":315,"resize":"fit"},"thumb":{"w":150,"h":150,"resize":"crop"},"small":{"w":340,"h":179,"resize":"fit"}},"video_info":{"aspect_ratio":[40,21],"variants":[{"bitrate":0,"content_type":"video\/mp4","url":"https:\/\/video.twimg.com\/tweet_video\/C-dTLzgXUAESM6x.mp4"}]}}]},"extended_entities":{"media":[{"id":857745716306989057,"id_str":"857745716306989057","indices":[127,150],"media_url":"http:\/\/pbs.twimg.com\/tweet_video_thumb\/C-dTLzgXUAESM6x.jpg","media_url_https":"https:\/\/pbs.twimg.com\/tweet_video_thumb\/C-dTLzgXUAESM6x.jpg","url":"https:\/\/t.co\/izAsGuGyeZ","display_url":"pic.twitter.com\/izAsGuGyeZ","expanded_url":"https:\/\/twitter.com\/washingtonpost\/status\/857745732153077762\/photo\/1","type":"animated_gif","sizes":{"large":{"w":1024,"h":538,"resize":"fit"},"medium":{"w":600,"h":315,"resize":"fit"},"thumb":{"w":150,"h":150,"resize":"crop"},"small":{"w":340,"h":179,"resize":"fit"}},"video_info":{"aspect_ratio":[40,21],"variants":[{"bitrate":0,"content_type":"video\/mp4","url":"https:\/\/video.twimg.com\/tweet_video\/C-dTLzgXUAESM6x.mp4"}]}}]}},"retweet_count":3,"favorite_count":5,"entities":{"hashtags":[],"urls":[{"url":"https:\/\/t.co\/O6avu6GbOI","expanded_url":"https:\/\/twitter.com\/i\/web\/status\/857745732153077762","display_url":"twitter.com\/i\/web\/status\/8\u2026","indices":[104,127]}],"user_mentions":[],"symbols":[]},"favorited":false,"retweeted":false,"possibly_sensitive":false,"filter_level":"low","lang":"en"},"is_quote_status":false,"retweet_count":0,"favorite_count":0,"entities":{"hashtags":[],"urls":[{"url":"","expanded_url":null,"indices":[124,124]}],"user_mentions":[{"screen_name":"washingtonpost","name":"Washington Post","id":2467791,"id_str":"2467791","indices":[3,18]}],"symbols":[]},"favorited":false,"retweeted":false,"filter_level":"low","lang":"en","timestamp_ms":"1493337551296"}';


 



 //Test Array
 $myArray = json_decode($testTweet,true);
 
 //MongoDB insert testing
 $ScreenName = $myArray['user']['screen_name'];

 //Test array for converting json string to an array
 //$newArray = json_decode($testTweet, true);

 //Function to return the type of a variable
 //echo gettype($myArray);






//Format of an array for listing user ids of followers to stream in StreamAccess.php file
/*
$list = array(
	'follow'    => '2467791', '4343434'
	);
*/




//Test statements for accessing data from an array of json formatted tweet
/* 
echo "<br>" . PHP_EOL; 

echo $newArray['user']['screen_name'];
echo ': ';
echo $newArray['text'] . "<br>" . PHP_EOL; //for new line breaks

echo $newArray['user']['screen_name'];
echo ': ';
echo $newArray['text'] . "<br>" . PHP_EOL; 

*/


 
	//Test statement for showing values of arrays
 //var_dump($myArray);
 
 //Message for scrolling box where tweets will be coming in
echo 'This is the area that the stream of tweets will be output to the screen' . "<br>" . PHP_EOL;




// connect to mongodb TEST
  $m =  new MongoDB\Client;

		
	   //echo "Connection to database successfully" ."<br>" . PHP_EOL;
	   
	   //select a database
	$db = $m->test;
	   //echo "Database test selected" . "<br>" . PHP_EOL;
	   
	   
	   //-----------------Search---------------------
	  // $collection = $db->mycol;
	  // $cursor =  $collection->find();
	   //$file = fopen("tweets.csv", "w");
	 //  foreach($cursor as $doc){
	   /*if(strpos($doc["text"], 'NFL') != false)
		   echo '"'.$doc["Screen Name"].'","'.$doc["text"] ."<br>" . PHP_EOL;
	   }
*/
	  
	  // $myCollections = $db->listCollections();
		//echo "Collection created succsessfully" . "<br>" . PHP_EOL; 
	   
	    //$doc = $collection->insertOne (["title" => "car 3", "make:" => "ford", "year:" => "2016"]);
		//$doc = $collection->insertOne (["Screen name" => $ScreenName, "make:" => "ford", "year:" => "2016"]);
		//$doc = $collection->insertOne (["Screen name" => $ScreenName, "make:" => "ford", "year:" => "2016"]);
	
	//$myCollections;
	//$str = "sydney,julian";
	//var_dump($myCollections);
	/*
	//Write to a csv file from database
	$collection = $db->mycol;
	   $cursor =  $collection->find();
	   
	  
	$file = fopen("tweets.csv", "w");
	foreach($cursor as $cur){
		//echo '"'.$cur["Screen name"].'","'.$cur['text']."\"\n";  
	
		fputcsv($file,explode(',',$cur),';');
		//fputcsv($file,explode(',',$cur["text"]));
	
	}
	
	fclose($file);
	*/ //--------------------------------------------------------WORKING
	
	/*foreach($collection as $data){
		   echo $data['Screen name']['text'];
		   
	   }*/
	
/*	foreach ($myCollections as $collection) {
    echo "amount of documents in: ", $collection, "\n";
    //echo $collection->count(), "\n";
}
	
	/*
		$screenNameQuery = array('Screen name' => 'alicraw');
		$cursor = $collection->find($screenNameQuery);
		foreach ( $cursor as $doc )
			{
				//echo "$id: ";
				echo json$doc;
			}
	
	
	
		/*
	
		foreach ($myCollections as $collection)
		{
			echo $collection;
		}

*/


$UsersToFollow = array('follow'    => '2467791, 2557521, 40129171, 2961589380, 714051110, 101002059, 239026022');

$users = $UsersToFollow["follow"];

$checkUsers = explode( ', ', $users );

var_dump($checkUsers, true);
 ?> 
