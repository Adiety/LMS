<?php

session_start();
		
		if(isset($_SESSION['uid']))
		{
			echo "";
		
		}
		else
		{
			header('location:../login.php');
		}
?>
<?php
    include('header.php');
	include('titlehead.php');
	include('../dbcon.php');
	$sid=$_GET['sid'];
	$sql="SELECT * FROM student WHERE sid='$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>
<form method="post" action="updatedataS.php" enctype="multipart/form-data">
	
	
	Username<input type="text" name="username"  value="<?php echo $data['username']?>" required></br>
	Password<input type="text" name="password"   value="<?php echo $data['password']?>"required></br>
	Student Name<input type="text" name="sname" value="<?php echo $data['sname']?>" required></br>
	Date Of Birth<input type="date" name="dob" value="<?php echo $data['dob']?>" required></br>
	Department<input type="text" name="department" value="<?php echo $data['department']?>" required></br>
	Contact<input type="number"name="contact" value="<?php echo $data['contact']?>" required></br>
	Fine<input type="number"name="fine" value="<?php echo $data['fine']?>" required></br>
	<input type="hidden"  name="sid" value="<?php echo $data['sid'];?>" ></br>
	<input type="submit" name="submit" value="Submit">
</form>	
</body>