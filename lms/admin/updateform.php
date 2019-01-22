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
	
	$bid=$_GET['bid'];
	
	$sql="SELECT * FROM books WHERE id='$bid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?> 
<form method="post" action="updatedataB.php" enctype="multipart/form-data">
	<div class="divborder marpad" style="margin-top: 1%">
	<h3 style="max-width: 100%;max-height: 100%">Update Details</h3>
	<input type="text" name="name" value=<?php echo $data['name']; ?> required style="padding-top: 1%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="author" value=<?php echo $data['author'];?> required style="padding-top: 1%;max-width: 100%;max-height: 100%"></br>
	<input type="number" name="rack" value=<?php echo $data['rack'];?> required style="padding-top: 1%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="isbn" value=<?php echo $data['isbn'];?> required style="padding-top: 1%;max-width: 100%;max-height: 100%"></br>
	<input type="text" name="department" value=<?php echo $data['department'];?> required style="padding-top: 1%;max-width: 100%;max-height: 100%"></br>
	
	<input type="hidden" name="bid" value="<?php echo $data['id']; ?>"/>
	<input type="submit" name="submit" value="Submit" style="margin-top: 2%;max-width: 100%;max-height: 100%">
</div>
</form>	
</body>
</html>