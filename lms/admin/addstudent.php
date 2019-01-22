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
?>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<div class="divborder marpad">
		<h3>Enter Details</h3>
	<input type="text" name="name" placeholder="Student Name" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="date" name="dob" placeholder="DOB" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="department" placeholder="Department" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="contact" placeholder="Contact" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="username" placeholder="username" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="password" name="password" placeholder="password" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="submit" name="submit" value="Submit" style="margin-top: 5%;max-width: 100%;max-height: 100%">
</div>
</form>	
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$department=$_POST['department'];
		$contact=$_POST['contact'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		/*$imagename=$_FILES['bimg']['name'];
		  $tempname=$_FILES['bimg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimg/$imagename")*/
		
		$qry="INSERT INTO student(sname, dob, department,contact,username,password) VALUES ( '$name','$dob','$department','$contact','$username','$password' )";
		
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Inserted Succesfully');
			</script>
			<?php
		}
		
	}
		?>