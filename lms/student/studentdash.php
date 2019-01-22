<?php

session_start();
		
		if(isset($_SESSION['stid']))
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
	
?>

<div style="background-color: #e60000;background: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/itCjTBE/polygonal-grey-shapes-geometric-video-clip-animation-motion-background-hd-4k-3840x2160_sz9rhuymx_thumbnail-full01.png');">
	<img src="http://mba.hitbullseye.com/b-schools/chitkara/images/logo.png" style="max-width: 100%;max-height: 100%;padding-left: 30%">
</div>
<div class="admindiv"><span style="padding-left: 35%">WELCOME TO STUDENT DASHBOARD<span> <span style="padding-left: 25%"><a href="logout.php" class="acolor">Log Out</a></span></div><br>

<div style="margin-top: 5%;width: 100%">
<div class="row">
	<div class="col" style="padding-left: 25%">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;height: 100%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="issued.php">View Issued Books</a></h5>
    <p class="card-text">To add a new book to the Library record</p>
  </div>
</div>
</div>
<div class="col" style="padding-right: 25%">
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;height: 100%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="fine.php">View Fine</a></h5>
    <p class="card-text">To update the records related to an existing book</p>
  </div>
</div>
</div>
</div>
<div class="row" style="margin-top: 2%">
<div class="col" style="padding-left: 25%">
<div class="card text-white bg-warning mb-3" style="max-width: 18rem;height: 100%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="search.php">Search Available Books</a></h5>
    <p class="card-text">To add the record of a new student to the Library Database</p>
  </div>
</div>
</div>
<div class="col" style="padding-right: 25%">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;height: 100%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="me.php">My Details</a></h5>
    <p class="card-text">To add the record of a new student to the Library Database</p>
  </div>
</div>
</div>
</div>



</body>
</html>