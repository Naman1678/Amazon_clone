<?php
	// Inialize session
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap core css
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!--custom core css-->
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #145A32">

	<div class="container-fluid">
		<!--header-->
		<nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" style="background-color: #">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			  </button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="contact.php">CONTACT US</a></li> 
				

			  </ul>
			  <ul class="nav navbar-nav navbar-right">
			  <!--Check, if username session is NOT set then this page will jump to login page-->
						<?php
							if(isset($_SESSION['sid']) && $_SESSION['sid'] == 1 && isset($_SESSION['sadmin']) && $_SESSION['sadmin']==1)
							{
								echo "<li><a href='myaccount.php'><span class='glyphicon glyphicon-user'> ADMIN</span>";
							}	
							else if(isset($_SESSION['sid']) && $_SESSION['sid'] == 1)
							{
								echo "<li><a href='myaccount.php'><span class='glyphicon glyphicon-user'> MyAccount</span>";
							}	
							else
							{
								echo "<li><a href='register.php'><span class='glyphicon glyphicon-user'> Register</span>";
							}
						?>
					</a></li>
				
						<?php
							if(isset($_SESSION['sid']) && $_SESSION['sid'] == 1)
							{
								echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'> LOGOUT</span>";
							}	
							else
							{
								echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'> Existing User</span>";
							}																																																				
						?>
				</a></li>
			  </ul>
			</div>
		  </div>
		</nav>