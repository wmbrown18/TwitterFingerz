<html>
<head>
<!-- Title -->
<title>Twitter Fingerz</title>

<script 

type="text/javascript">




</script>
<link rel="stylesheet" href="table_design.css">
<body style ="background-color: #38eeff;">
<h1><font color = “#4099FF”><center>Finance It All</center></font></h1>

<center><img src="tf.png" alt="Twitter Fingerz" style="width:459px;height:274px;"></center>

<h2><center>by William Brown III, Kendall Lane, Emmett Elliott, Telisha Everett, Khadijah Muhammad<center></h2>
</head>

<body>

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


<style>

h1, h2{
	font-family:cursive;
}

</style>



<h1>Stream</h1>
<form action="tmhOAuth/StreamAccess.php" method="post" target="_blank" id="stream">
</form>

<button type="submit" form="stream" value="stream">Start Stream</button>


<br>

<h1>Search Tweets</h1>

<div id="searchbox">

<!--Search Box for User-->
<form action="mongoSearchText.php" method="get" target="_blank" id="textForm">
<button type="submit" form="textForm" value="Submit">Search Text</button>
<input type="text" name="tweetText"><br><br>
</form>

<!--Search Box for User-->
<form action="mongoSearchUsers.php" method="get" target="_blank" id="userForm">
<button type="submit" form="userForm" value="Submit">Search Users</button>
<input type="text" name="users"><br><br>
</form>


<form action="mongoSearch.php" method="get" target="_blank" id="all">
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

</div>


</body>

</html>
