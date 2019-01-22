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
<div id="wrapper" style="margin-top: 4%">
 	

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

	include('../dbcon.php');
	//$bname=$_POST['name'];
	
	$sql="SELECT * FROM student order by sid";
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
		$bcount++;
		?>
		<tr>
		<td class="lalign"><?php echo $bcount;?></td>
		<td><?php echo $data['sid'];?></td>
		<td><?php echo $data['sname'];?></td>
		<td><?php echo $data['department']; ?></td>
		<td><?php echo $data['dob']; ?></td>
		<td><?php echo $data['contact']; ?></td>  
		</tr>
		
		<?php
	}
	}
	
?>
</tbody>
</table>
</div>
