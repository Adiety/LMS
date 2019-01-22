<?php
session_start();
		
		if(isset($_SESSION['stid']))
		{
			echo "";
		
		}
		else
		{
			echo "error";
			header('location:../login3.php');
		}
?>
<?php
	include('../dbcon.php');
    include('header.php');
    include('tablestyle.php');
	include('titlehead.php');;
	$id= $_SESSION['stid'];
	$qry= "SELECT * FROM student WHERE sid='$id'";
	$run=mysqli_query($con,$qry);
	
	if(mysqli_num_rows($run)<1)
	{
     echo "Error";
	}
	else
	{
	
	while($data=mysqli_fetch_assoc($run))
	{   
		
		?>
		
		<div id="wrapper" style="margin-top: 4%">
 	<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Department</span></th>
        <th><span>Contact Number</span></th>
        <th><span>Date Of Birth</span></th>
      </tr>
    </thead>
    <tbody>
		<td><?php echo $data['sid'];?></td></br>
		<td><?php echo $data['sname'];?></td></br>
		
		<td><?php echo $data['department']; ?></td></br>
		<td><?php echo $data['contact']; ?></td></br>
		<td><?php echo $data['dob']; ?></td></br>
	</tbody>
</table>
</div>
		
		
		<?php
	}
	}
	
		
?>