<!DOCTYPE html>
<head>
<!-- Title -->
<title>TwitterFingerz</title>

<link rel="stylesheet" type="text/css" href="css/magic.css"/>


<body>
	<div id="nav1">
     <h1><a href="index.html"> Finance It All</a></h1>
     <ul>
        <li><a href="index.html">Home</a></li>
        <li id="active"><a href="TwitterFingerz.php">Start Stream</a></li>
        <li><a href="statistics.html">Statistical Analysis</a></li>
    </ul> 

</div>
<div id="main-content">

</div>

</head>


	<?php require __DIR__. '../../../vendor/autoload.php';
	   // connect to mongodb
	   // $m =  new MongoDB\Client;


	   //echo "Connection to database successfully" ."<br>" . PHP_EOL;

	   //select a database
	  // $db = $m->test;
	   //echo "Database test selected" . "<br>" . PHP_EOL;
	?>



<!-- Scrollable box the stream of tweets will be displayed in -->


<!-- Start the Twitter Stream in a new Window -->

<div id="content_area">
<style>

h1, h2{
	font-family:cursive;
}


</style>



<h1>Stream</h1>

<!-- Emmett Elliott code -->
<iframe id="iframe_a" height="300px" width="100%" src="http://i.picresize.com/images/2017/10/26/lGgpW.jpg" name="iframe_1"
  style="border:none;"></iframe>

<!-- stops here -->
<form action="loadTweets.php" method="post" target="iframe_1" id="stream" style ="float:right;">
</form>
<form action="tmhOAuth/StreamAccess.php" method="post" target="iframe_1" id="stream" style ="float:left;">
</form>

<button type="submit" form="stream" value="stream">Start Stream</button>


<br>

<h1>Search Tweets</h1>

<div id="searchbox">

	<!--Search Box for User-->
	<form action="mongoSearchText.php" method="get" target="iframe_1" id="textForm">
	<button type="submit" form="textForm" value="Submit">Search Text</button>
	<input type="text" name="tweetText"><br><br>
	</form>

	<!--Search Box for User-->
	<form action="mongoSearchUsers.php" method="get" target="iframe_1" id="userForm">
	<button type="submit" form="userForm" value="Submit">Search Users</button>
	<input type="text" name="users"><br><br>
	</form>


	<form action="mongoSearch.php" method="get" target="iframe_1" id="all">
	<button type="submit" form="all" value="Submit">Search All</button>
	<input type="text" name="wholeTweet"><br><br>
	</form>
	<!--

	<form action="mongoSearchUsers.php" method="get" target="_blank">
	<input type="submit" value="Search Users">
	<input type="text" name="users"><br><br>

	<form action="mongoSearch.php" method="get" target="_blank">
	<input type="submit" value="Search All">
	<input type="text" name="all"><br><br>
	</form> -->

    
</form>

</div>
</div>

</body>

</html>
