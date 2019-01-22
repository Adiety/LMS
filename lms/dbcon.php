<?php 

	$con=mysqli_connect('localhost','root','','lms');
	
	if($con)
		echo "";
	else
		echo "Connection error";
?>