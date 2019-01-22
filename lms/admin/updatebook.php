
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
 	
<form action="updatebook.php" method="post" align="center">
<span style="font-size: 20px">Enter Book Name</span></br><input type="text" name="name" placeholder="Book Name" required style="margin-top: 1%"></br>

	<input type="submit" name="submit" value="search" style="margin-top: 1%">
	
</form></br>
<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.NO</span></th>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Author</span></th>
        <th><span>Rack</span></th>
        <th><span>ISBN</span></th>
		<th><span>Image</span></th>
      </tr>
    </thead>
    <tbody>
	<?php 
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$bname=$_POST['name'];
	
	$sql="SELECT * FROM books WHERE name LIKE '%$bname%'";
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
		<td><?php echo $data['id'];?></td>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['author']; ?></td>
		<td><?php echo $data['rack']; ?></td>
		<td><?php echo $data['isbn']; ?></td> 
		<td><img src="../dataimg/<?php echo $data['image']; ?> style="max-width:100px;"/></td> 
		<td><a href="updateform.php?bid=<?php echo $data['id']; ?>"><span style="color: #555">Edit</span></a></td>
		</tr>
		
		<?php
	}
	}
}	
?>
</tbody>
</table>
</div>
