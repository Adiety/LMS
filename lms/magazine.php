<?php
    include('header.php');
    include('tablestyle.php');
?>
<style>
body
{
	font-size: 15px !important;
}
</style>
<div id="wrapper" style="margin-top: 4%">
<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.NO</span></th>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Category</span></th>
        <th><span>Frequency</span></th>
      </tr>
    </thead>
    <tbody>	

	<?php 

	include('dbcon.php');
	//$bname=$_POST['name'];
	
	$sql="SELECT * FROM magazine";
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
		<td><?php echo $data['mid'];?></td>
		<td><?php echo $data['mname'];?></td>
		<td><?php echo $data['category']; ?></td>
		<td><?php echo $data['frequency']; ?></td> 
		</tr>
		
		<?php
	}
	}
	
?>
</tbody>
</table>
</div>
