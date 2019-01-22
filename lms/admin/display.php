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
<style type="text/css">
	#wrapper
	{
		width: 1100px;
	}
</style>
	<div id="wrapper" style="margin-top: 4%">
 	

<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.NO</span></th>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Author</span></th>
        <th><span>Rack</span></th>
        <th><span>ISBN</span></th>
        
        <th><span>Department</span></th>
      </tr>
    </thead>
    <tbody>	

	<?php 

	include('../dbcon.php');
	//$bname=$_POST['name'];
	
	$sql="SELECT * FROM books order by department";
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
		<td><?php echo $bcount;?></td>
		<td><?php echo $data['id'];?></td>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['author']; ?></td>
		<td><?php echo $data['rack']; ?></td>
		<td><?php echo $data['isbn']; ?></td> 
		 
		<td><?php echo $data['department']; ?></td> 
		</tr>
		
		<?php
	}
	}
	
?>
</tbody>
</table>
</div>
