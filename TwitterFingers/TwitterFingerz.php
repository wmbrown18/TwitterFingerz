<DOCTYPE html>
<head>
<!-- Title -->
<title>TwitterFingerz</title>

<link rel="stylesheet" type="text/css" href="css/magic.css"/>


<body>
	<div id="nav1">
     <h1><a href="main.html"> Finance It All</a></h1>
     <ul>
        <li><a href="main.html">Home</a></li>
        <li id="active"><a href="TwitterFingerz.php">Stream</a></li>
        <li><a href="StatisticalAnalysis.php">Statistical Analysis</a></li>
    </ul>

</div>
<div id="main-content">
	<br><br>
	<!-- Emmett Elliott code -->
<button type="submit" form="stream" value="stream">Start Stream</button>
<button onclick="location.href='TwitterFingerz.php'" type="button">Stop Stream</button>
<br><br><br>

	<h1 style ="color:white;">Add User</h1>
	<form action="tmhOAuth/StreamAccess.php" method="get" id="all">
	    <button type="submit" form="all" value="Submit">Search</button>
	    <input type="text" name="newAccount"><br><br>
  	</form>
  	<br>


	<h1 style ="color:white;">Search Tweets</h1>

<div id="searchbox">

	<!--Search Box for User-->
	<!--
	<form action="mongoSearchText.php" method="get" target="iframe_1" id="textForm">
	<button type="submit" form="textForm" value="Submit">Search Text</button>
	<input type="text" name="tweetText"><br><br>
	</form>
	-->

	<!--Search Box for User-->
	<!--
	<form action="mongoSearchUsers.php" method="get" target="iframe_1" id="userForm">
	<button type="submit" form="userForm" value="Submit">Search Users</button>
	<input type="text" name="users"><br><br>
	</form> -->
	


	<form action="mongoSearch.php" method="get" target="iframe_1" id="all">
	<button type="submit" form="all" value="Submit">Search All</button>
	<input type="text" onfocus ="this.value=''" name="wholeTweet"><button class="close-icon" type="reset"></button><br><br>
	</form>



  <!--

	<form action="mongoSearchUsers.php" method="get" target="_blank">
	<input type="submit" value="Search Users">
	<input type="text" name="users"><br><br>

	<form action="mongoSearch.php" method="get" target="_blank">
	<input type="submit" value="Search All">
	<input type="text" name="all"><br><br>
	</form> -->



</div>
<br><br>



<br>

</div>
<div id="footer">
    <h2>By: William Brown III, Kendall Lane, Telisha Everett, Emmett Elliot, Khadijah Muhammad</h2>
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
	'Raleway', sans-serif
}


</style>
<br><br>

<!-- Emmett Elliott code -->
<!--
<button type="submit" form="stream" value="stream">Start Stream</button>
<button onclick="location.href='TwitterFingerz.php'" type="button">Stop Stream</button>


<br>
-->
<!--
<h1>Search Tweets</h1>


<div id="searchbox">
-->
	<!--Search Box for User-->
	<!--
	<form action="mongoSearchText.php" method="get" target="iframe_1" id="textForm">
	<button type="submit" form="textForm" value="Submit">Search Text</button>
	<input type="text" name="tweetText"><br><br>
	</form>
	-->

	<!--Search Box for User-->
	<!--
	<form action="mongoSearchUsers.php" method="get" target="iframe_1" id="userForm">
	<button type="submit" form="userForm" value="Submit">Search Users</button>
	<input type="text" name="users"><br><br>
	</form> -->

<!--

	<form action="mongoSearch.php" method="get" target="iframe_1" id="all">
	<button type="submit" form="all" value="Submit">Search All</button>
	<input type="text" name="wholeTweet"><br><br>
	</form>


-->
  <!--

	<form action="mongoSearchUsers.php" method="get" target="_blank">
	<input type="submit" value="Search Users">
	<input type="text" name="users"><br><br>

	<form action="mongoSearch.php" method="get" target="_blank">
	<input type="submit" value="Search All">
	<input type="text" name="all"><br><br>
	</form> -->



</div>
</div>


<iframe id="iframe_a" height="800px" width="100%"  name="iframe_1"
  style="border:none;"></iframe>

<!-- stops here
<form action="loadTweets.php" method="post" target="iframe_1" id="stream" style ="float:right;background-color:powderblue;"">
</form>-->

<form action="tmhOAuth/StreamAccess.php" method="post" target="iframe_1" id="stream" style ="float:left;">
</form>


</body>

</html>
