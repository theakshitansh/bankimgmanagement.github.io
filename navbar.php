<!DOCTYPE html>
<html>
<head>
	<title>nav page</title>

	<?php include 'connection.php' ?>
	<?php include 'links.php'?>

	<link rel="stylesheet" href="CSS/navbar.css">

</head>
<body>

	<div class="bgimg" style="background-color:#0d1128;">
		<nav class="navbar navbar-expand-md ">
			<div class="container">
				<a href="" class="navbar-brand font-weight-bold" id="head" style="color: white;">BANKING MANAGEMENT SYSTEM</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"> </span>
				</button>

				<div class="collapse navbar-collapse" id="collapsenavbar">
				

				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> <a href="index.php" class="nav-link  p-3" id="menu" style="color: #1b9ce3;"> Home </a></li> 
					<li class="nav-item"> <a href="#about" class="nav-link  p-3" id="menu" style="color: #1b9ce3;"> About </a></li> 
					<li class="nav-item"> <a href="users.php" class="nav-link  p-3" id="menu" style="color: #1b9ce3;"> View Customers </a></li> 
					<li class="nav-item"> <a href="history.php" class="nav-link p-3" id="menu" style="color: #1b9ce3;"> Transfer History </a></li> 
				</ul>

					
				</div>

			</div>
		</nav>
	</div>

</body>
</html>