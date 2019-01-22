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
	include('tablestyle.php');
?> 
<div id="wrapper" style="margin-top: 4%">
 	
<form action="searchS.php" method="post" align="center">
<span style="font-size: 20px">Enter Student Name</span></br><input type="text" name="sname" placeholder="Student Name" required style="margin-top: 1%"></br>

	<input type="submit" name="submit" value="search" style="margin-top: 1%">
	
</form></br>
<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.NO</span></th>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Department</span></th>
        <th><span>DOB</span></th>
        <th><span>Contact</span></th>
      </tr>
    </thead>
    <tbody>

	<?php 
if(isset($_POST['submit']))
{
	include('../dbcon.php');

	$sname=$_POST['sname'];
	$sql="SELECT * FROM student WHERE sname LIKE '%$sname%'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5'>No Records Found</td></tr>";
	}
	else
	{ 
		$count=0;
	while($data=mysqli_fetch_assoc($run))
	{   
		$count++;
		?>
		<tr>
		<td class="lalign"><?php echo $count;?></td>
		<td><?php echo $data['sid'];?></td>
		<td><?php echo $data['sname'];?></td>
		<td><?php echo $data['department']; ?></td>
		<td><?php echo $data['dob']; ?></td>
		<td><?php echo $data['contact']; ?></td> 
		<td><a href="issued.php?sid=<?php echo $data['sid'];?>"><span style="color: #555">View books issued by student</span></a></td>
		</tr>
		
		<?php
	}
	}
}	
?>
</tbody>
</table>
</div>
