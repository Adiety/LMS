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
<form method="post" action="issue.php" enctype="multipart/form-data">
	<div class="divborder marpad">
	
	<input type="number" name="sid" placeholder="Enter Student ID" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="password" name="password" placeholder="Enter Your Password" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	<input type="number" name="bid" placeholder="Enter Book ID" required style="padding-top: 2%;max-width: 100%;max-height: 100%"></br>
	
	<input type="submit" name="submit" value="Submit" style="margin-top: 2%;max-width: 100%;max-height: 100%">
	
</div>
</form>	
	
</body>
</html>
<?php
	include('../dbcon.php');
	if(isset($_POST['submit']))
	{
		$sid=$_POST['sid'];
		$password= $_POST['password'];
		$qry= "SELECT * FROM student WHERE sid = '$sid' AND password='$password'";
		$runl=mysqli_query($con,$qry);
		$row=mysqli_num_rows($runl);
		if($row<1)
	{
		?>
		<script>
			alert('Username or Password incorrect!');
			window.open('issue.php','_self');
		</script>
		<?php	
		
	}
	else
	{
		
		$bid=$_POST['bid'];
		$book="SELECT name FROM books WHERE id='$bid'";
		$run=mysqli_query($con,$book);
		$data=mysqli_fetch_assoc($run);
		$bname= $data['name'];
		$date = date("Y-m-d");
        $NewDate=Date('Y-m-d', strtotime("+28 days"));
		$daysLeft = strtotime($date) - strtotime($NewDate);
        $days = $daysLeft/(60 * 60 * 24);
		$fine= $days*2;
		if($fine<0)
			$fine=0;
		$qry="INSERT INTO bookisssue(sid,bid,book,issuedate,returndate,fine) VALUES ('$sid','$bid','$bname','$date','$NewDate','$fine')";
		
		
		$run=mysqli_query($con,$qry);
		
		
		if($run==true)
		{
			?>
			<script>
				alert('Book Issued Succesfully');
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert('Book Already Issued or wrong book ID!	');
			</script>
			<?php
		}
		
	}
	}
		?>