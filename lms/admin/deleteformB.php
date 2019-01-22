<?php


include('../dbcon.php');
		
		$id=$_REQUEST['bid'];
		$qry="DELETE FROM books WHERE id='$id';";
		
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Deleted Succesfully');
				window.open('deletebook.php','_self');
			</script>
			<?php
		}



?>