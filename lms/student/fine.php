<?php

session_start();
		
		if(isset($_SESSION['stid']))
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
	
	$sid=$_SESSION['stid'];
	$sql="SELECT fine FROM bookisssue WHERE sid='$sid'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='7'>No Records Found</td></tr>";
	}
	else
	{ 
		$bcount=0;
	while($data=mysqli_fetch_assoc($run))
	{   
		$bcount=$data['fine']+$bcount;
	
		
	}
	?>		<script>
			alert('<?php echo 'Your Total Fine is: '. $bcount;?>');
			window.open('studentdash.php','_self');
	</script>
	
<?php
	}
	
	
?>
</table>