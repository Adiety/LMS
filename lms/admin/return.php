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
<form method="post" action="return.php" enctype="multipart/form-data">
	<div class="divborder marpad">
	
	<input type="number" name="bid" placeholder="Enter Book ID" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	
	<input type="submit" name="submit" value="Submit" style="margin-top: 2%;max-width: 100%;max-height: 100%">
	
</div>
</form>

</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		
		$bid=$_POST['bid'];
		
		
		
		$qry="Delete from bookisssue where bid='$bid'"; 
		
		
		$run=mysqli_query($con,$qry);
		
		
		if($run==true)
		{
			?>
			<script>
				alert('Book Returned');
			</script>
			<?php
		}
		else
		{
			echo "Error";
		}
		
	}
		?>