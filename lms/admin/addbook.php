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

<form method="post" action="addbook.php" enctype="multipart/form-data">
	<div class="divborder marpad">
	<input type="text" name="name" placeholder="Book Name" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="author" placeholder="Author Name" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="number" name="rack" placeholder="Rack Number" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="isbn" placeholder="ISBN" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="department" placeholder="Department" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="file" name="bimg"  required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="submit" name="submit" value="Submit" style="margin-top: 2%;max-width: 100%;max-height: 100%">
</div>
</form>	
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$name=$_POST['name'];
		$author=$_POST['author'];
		$rack=$_POST['rack'];
		$isbn=$_POST['isbn'];
		$department=$_POST['department'];
		
		$imagename=$_FILES['bimg']['name'];
		  $tempname=$_FILES['bimg']['tmp_name'];
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
		$qry="INSERT INTO books(name, author, rack, isbn, department, image) VALUES ('$name','$author','$rack','$isbn','$department','$imagename')";
		
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