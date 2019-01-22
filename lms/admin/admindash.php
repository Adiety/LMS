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

?>
    
<div style="background-color: #e60000;background: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/itCjTBE/polygonal-grey-shapes-geometric-video-clip-animation-motion-background-hd-4k-3840x2160_sz9rhuymx_thumbnail-full01.png');">
	<img src="http://mba.hitbullseye.com/b-schools/chitkara/images/logo.png" style="max-width: 100%;max-height: 100%;padding-left: 30%">
</div>
<div class="admindiv"><span style="padding-left: 35%">WELCOME TO ADMIN DASHBOARD<span> <span style="padding-left: 30%"><a href="logout.php" class="acolor">Log Out</a></span></div><br>
	<div style="margin-top: 5%;width: 100%">
<div class="row">
	<div class="col" style="padding-left: 15%">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="addbook.php">Add a Book</a></h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
<div class="col" >
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="deletebook.php">Delete Book Record</a></h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
<div class="col" style="padding-right: 15%">
<div class="card text-white bg-info mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="updatebook.php">Update Book Details</a></h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
</div>
<div class="row" style="margin-top: 1%">
	
<div class="col" style="padding-left: 15%">
<div class="card text-white bg-primary mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="addstudent.php">Add student Record</a></h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
<div class="col">
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="deletestudent.php">Delete student Record</a></h5>
    <p class="card-text"></p>
  </div>
</div>
</div>
<div class="col" style="padding-right: 15%">
<div class="card text-white bg-info mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="updatestudent.php">Update student Details</a></h5>
    <p class="card-text"></p>
  </div>
  </div>
  </div>
</div>
<div class="row" style="margin-top: 1%">
  <div class="col" style="padding-left: 15%">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;height: 60%">
  <div class="card-body">
    <h5 class="card-title"><a href="issue.php">Book Issue Form</a></h5>
    <p class="card-text"></p>
  </div>
  </div>
  </div>
  <div class="col" >
  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;height: 60%">

  <div class="card-body">
    <h5 class="card-title"><a href="displayS.php">View All Students</a></h5>
    <p class="card-text"></p>
  </div>
  </div>
</div>
<div class="col" style="padding-right: 15%">
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;height: 60%">

  <div class="card-body">
    <h5 class="card-title"><a href="search.php">Search A Book</a></h5>
    <p class="card-text"></p>
  </div>
  </div>
</div>
  
</div>
<div class="row" style="margin-top: 1%">
  
<div class="col" style="padding-left: 15%">
<div class="card text-white bg-success mb-3" style="max-width: 18rem;height: 60%">
  
  <div class="card-body">
    <h5 class="card-title"><a href="return.php">Book Return Form</a></h5>
    <p class="card-text"></p>
  </div>
  </div>
</div>
<div class="col" >
  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;height: 60%">

  <div class="card-body">
    <h5 class="card-title"><a href="display.php">View All Books</a></h5>
    <p class="card-text"></p>
  </div>
  </div>
</div>
  

  <div class="col" style="padding-right: 15%">
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;height: 60%">

  <div class="card-body">
    <h5 class="card-title"><a href="searchS.php">Search A Student</a></h5>
    <p class="card-text"></p>
  </div>
  
</div>
</div>
</div>
</div>

	
</body>
</html>
		