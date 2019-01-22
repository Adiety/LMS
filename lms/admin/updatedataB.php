<?php


include('../dbcon.php');
		$name=$_POST['name'];
		$author=$_POST['author'];
		$rack=$_POST['rack'];
		$isbn=$_POST['isbn'];
		$department=$_POST['department'];
		
		$id=$_POST['bid'];
		
		$qry="UPDATE books SET name= '$name',author= '$author', `rack` = '$rack', isbn = '$isbn',department= '$department' WHERE books.id = '$id'";
		
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Updated Succesfully');
				window.open('updateform.php?bid=<?php echo $id;?>','_self');
			</script>
			<?php
		}



?>