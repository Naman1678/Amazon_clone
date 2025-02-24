<?php
		include 'includes/header.php';
		if(isset($_SESSION['suname']))
		{
			header("Location: http://localhost/Plants/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/Valid_b.avif') no-repeat;background-size: 100%;min-height:570px;">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<center>
			<!-- <h1>Registered Successfully</h1> -->
			<label style="color:black;">
			Registered Successfully
			  </label>
			<a href="login.php"><h3>LOGIN PAGE</h3></a>
	  </center>
	</div>
	</div>
<?php include 'includes/footer.php'?>