<?php

session_start();
		
		if(isset($_SESSION['stid']))
		{
			echo "";
		
		}
		else
		{
			header('location:../login2.php');
		}
		
?>
<?php
    include('header.php');
?>

<div class="admintitle">
<h1>Welcome to Student dashboard</h1>
</div>
</body>
</html>