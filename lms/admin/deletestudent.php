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
 	
<form action="deletestudent.php" method="post" align="center">
<span style="font-size: 20px">Enter Student Name</span></br><input type="text" name="name" placeholder="Student Name" required style="margin-top: 1%"></br>

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
      </tr>
    </thead>
    <tbody>
	<?php 
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$bname=$_POST['name'];
	
	$sql="SELECT * FROM student WHERE sname LIKE '%$bname%'";
	$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5'>No Records Found</td></tr>";
	}
	else
	{ 
		$bcount=0;
	while($data=mysqli_fetch_assoc($run))
	{   
		$bcount++;
		?>
		<tr>
		<td class="lalign"><?php echo $bcount;?></td>
		<td><?php echo $data['sid'];?></td>
		<td><?php echo $data['sname'];?></td>
		<td><?php echo $data['department']; ?></td>
		<td><?php echo $data['dob']; ?></td>
		
		<td><a href="deleteformS.php?bid=<?php echo $data['sid']; ?>"><span style="color: #555">Delete</span></a></td>
		</tr>
		
		<?php
	}
	}
}	
?>
</tbody>
</table>
</div>