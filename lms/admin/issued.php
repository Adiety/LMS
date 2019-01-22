<?php
session_start();
		
		if(isset($_SESSION['uid']))
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
    include('header.php');
	include('titlehead.php');
	include('tablestyle.php');
	$sid=$_GET['sid'];
?>
<div id="wrapper" style="margin-top: 4%">
<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>S.NO</span></th>
        <th><span>Book ID</span></th>
        <th><span>Book</span></th>
        <th><span>Issue Date</span></th>
        <th><span>Return Date</span></th>
        <th><span>Fine</span></th>
      </tr>
    </thead>
    <tbody>
	<?php 

	include('../dbcon.php');
	$qry= "SELECT * FROM bookisssue WHERE sid='$sid'";
	$run=mysqli_query($con,$qry);
	
	if(mysqli_num_rows($run)<1)
	{
     echo "<tr><td colspan='4'>No books issued currently!</td></tr>";
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
		<td><?php echo $data['bid'];?></td>
		<td><?php echo $data['book'];?></td>
		<td><?php echo $data['issuedate']; ?></td>
		<td><?php echo $data['returndate']; ?></td>
		<td><?php echo $data['fine']; ?></td>
		</tr>
		
		<?php
	}
	}
	
?>
</tbody>
</table>
</div>
