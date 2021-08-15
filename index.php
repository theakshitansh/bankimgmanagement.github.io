<!DOCTYPE html>
<html>
<head>
	<title>home page</title>

	<?php include 'connection.php'?>
	<?php include 'links.php'?>
	<?php include 'navbar.php'?>

	<link rel="stylesheet" href="CSS/index.css">
</head>
<body>

  <div class="container" >
  	<div class="row">
  		<div class="col-sm-6 banner-info">
  			<h1> WELCOME TO <br><span style="color:#17a2b8;"> The Foundation Bank </span><br></h1>
			  <h2>
            Easiest Way to
            <span id="sp" class="font-weight-bold" style="color:#17a2b8;">Transfer Money</span>
          </h2>
          <p class="lead muted">
            <b>TRANSFER MONEY</b>
            <span id="sp" class="font-weight-bold" style="color:#17a2b8;">IN SECONDS</span>
          </p>

  			<a href="users.php" class="btn btn-first"> View Customers</a>
  			<a href="history.php" class="btn btn-second"> Transfer History</a>
  		</div>
		  
  		<div class="col-sm-6 banner-image">
			  
  			<img src="Images/pigy.png" class="img-fluid">
  			
  		</div>
  		
  	</div>
  </div>

  <!--===== ABOUT =====-->
  <section class="about section" id="about">
      <h2
        class="section-title"
        style="color:chocolate; font:italic;color:#1b9ce3 ;background-color:#0d1128; text-align: center"
      >
        ABOUT US
      </h2>
	  <div class="container">
  	<div class="row">
  		<div class="col-sm-6 banner-info">
		  <h2 style = margin-top:70px;color:#17a2b8>
            The Foundation Bank
          </h2>

           <p class="about__text"></p>

          <p class="about__text">Always here for Service!</p>

          <p class="about__text">
            We provide transfer, accept deposits and best results!
            </p>
          <p class="about__text">EASY TRANSACTION IN ONE STEP!</p>
  		</div>
  		<div class="col-sm-6 banner-image">
  			<img src="Images/abut.png" class="img-fluid">
  			
  		</div>
  		
  	</div>
  </div>   
    </section>
  	
  <div class="footer" style="background-color:#232323;">
  	<h5 style="color:white;"> © 2021 Copyright|Akshit Ansh </h5>

	  <a href="https://www.facebook.com/theakshitansh/"> <i class="fa fa-1.5x fa-facebook"></i></a>
  	<a href="https://twitter.com/theakshitansh"> <i class="fa fa-1.5x fa-twitter"></i></a>
  	<a href="https://instagram.com/theakshitansh?utm_medium=copy_link"> <i class="fa fa-1.5x fa-instagram"></i></a>
  	<a href="https://www.linkedin.com/in/akshit-ansh-8900b3202" target="_blank"> <i class="fa fa-1.5x fa-linkedin"></i></a>
  	
  </div>

</body>
</html>