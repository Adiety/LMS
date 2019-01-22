<?php


include('../dbcon.php');
		
		$id=$_REQUEST['bid'];
		$qry="DELETE FROM student WHERE sid='$id';";
		echo "Hey";
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Deleted Succesfully');
				window.open('deletestudent.php','_self');
			</script>
			<?php
		}



?>
