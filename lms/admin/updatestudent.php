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
	include('tablestyle.php')
?>
<style type="text/css">
	#wrapper
	{
		width: 1300px;
	}
</style>
<div id="wrapper" style="margin-top: 4%">
 	
<form action="updatestudent.php" method="post" align="center">


	<input type="submit" name="submit" value="search" >
	<input type="text" name="department" placeholder="Enter department" required="required"/>
	<input type="text" name="name" placeholder="Enter name" required="required"/>
	<input type="submit" name="submit" value="Submit" style="margin-top: 1%">
</form></br>
<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.NO</span></th>
        <th><span>ID</span></th>
        <th><span>UserName</span></th>
        <th><span>Password</span></th>
        <th><span>Sname</span></th>
        <th><span>DOB</span></th>
        <th><span>Department</span></th>
        <th><span>Fine</span></th>
        <th><span>Contact</span></th>
      </tr>
    </thead>
    <tbody>
	
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');

$name=$_POST['name'];
$department=$_POST['department'];
$sql="SELECT * FROM student WHERE department='$department' AND sname LIKE '%$name%'";	
$run=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='9'>No Records Found</td></tr>";
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
		<td><?php echo $data['username'];?></td>
		<td><?php echo $data['password']; ?></td>
		<td><?php echo $data['sname']; ?></td>
		<td><?php echo $data['dob']; ?></td> 
		<td><?php echo $data['department']; ?></td> 
		<td><?php echo $data['fine']; ?></td> 
		<td><?php echo $data['contact']; ?></td> 
		<td><a href="updateformS.php?sid=<?php echo $data['sid']; ?>"><span style="color: #555;">Edit</span></a></td>
		</tr>
		
		<?php
	}
	}
}	
?>
</tbody>
</table>
</div>

