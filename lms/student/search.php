<?php

session_start();
		
		if(isset($_SESSION['stid']))
		{
			echo "";
		
		}
		else
		{
			header('location:../login3.php');
		}
?>
<?php
    include('header.php');
	include('titlehead.php');
	include('tablestyle.php');
?> 
<div id="wrapper" style="margin-top: 4%">
<form action="search.php" method="post" align="center">
<span style="font-size: 15px">Enter Book Name</span></br><input type="text" name="name" placeholder="Book Name" required></br>

	<input type="submit" name="submit" value="search">
	
</form></br>
	<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.No</span></th>
        <th><span>ID</span></th>
        <th><span>Name</span></th>
        <th><span>Author</span></th>
        <th><span>Rack</span></th>
        <th><span>ISBN</span></th>
        <th><span>Count</span></th>
      </tr>
    </thead>
    <tbody>
	<?php 
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$bname=$_POST['name'];
	
	$sql="SELECT * FROM books WHERE name like '%$bname%' AND id not IN(SELECT bid from bookisssue) order by id";
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
		$n=$data['name'];
		$a=$data['author'];
		$qry="SELECT COUNT(name) AS num FROM books where name='$n' and author='$a'";
		//$qry="select count(*) AS num from (select distinct name,author from books where name='$n')";
		
		$count = mysqli_query($con,$qry);
		$row = mysqli_fetch_assoc($count);
		$numUsers = $row['num'];
		$bcount++;
		?>
		<tr>
		<td><?php echo $bcount;?></td>
		<td><?php echo $data['id'];?></td>
		<td><?php echo $data['name'];?></td>
		<td><?php echo $data['author']; ?></td>
		<td><?php echo $data['rack']; ?></td>
		<td><?php echo $data['isbn']; ?></td> 
		<td><?php echo $numUsers; ?></td>	
		</tr>
		
		<?php
	}
	}
}	
?>
</tbody>
</table>
</div>
