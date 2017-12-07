<?php
	if(isset($_POST['Stop Stream'])){
        stopIT();
	}


function stopIT(){
	echo "Stop The Stream";
	exit();
}
 ?>