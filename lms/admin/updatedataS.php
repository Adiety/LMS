<?php
        
		include('../dbcon.php');
		$sid=$_POST['sid'];	
		$sname=$_POST['sname'];
		$dob=$_POST['dob'];
		$department=$_POST['department'];
		$contact=$_POST['contact'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$fine=$_POST['fine'];
		$id=$_POST['sid'];
		$qry="UPDATE student SET password='$password',sname='$sname',dob='$dob',department='$department',fine='$fine',contact='$contact' WHERE sid='$id'";
		
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Updated Succesfully');
				window.open('updateformS.php?sid=<?php echo $id?>','_self')
			</script>
			<?php
		}


?>