<?php
		include 'includes/header.php';
		if(!isset($_SESSION['suname']))
		{
			header("Location: http://localhost/Source code_Online_spectacles_PHP/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/7.jpg') no-repeat;background-size: 100%;min-height:570px;">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<center>
			<h1>Succesfully password changed .</h1>
	  </center>
	</div>
	<?php
		if(isset($_SESSION['sadmin']) && $_SESSION['sadmin']==1)
		{	
			include 'includes/adminDashboardMenu.php';
		}
		else
		{
			include 'includes/dashboardMenu.php';
		}
	?>
<?php include 'includes/footer.php'?>