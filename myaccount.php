<?php
		include 'includes/header.php';
		if(!isset($_SESSION['suname']))
		{
			header("Location: http://localhost/Plants/index.php");
		}
		include 'includes/left-bar.php';
?>
	<div class="col-md-10" style="background: url('images/admin.avif') no-repeat;background-size: 100%;min-height:670px;">
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<center>
		<?php 
		if(isset($_SESSION['sadmin']))
		{
			echo "<h1>!!! WELCOME ADMIN !!! .</h1><br/>";
			
		}
		else
		{
			$name=$_SESSION['suname'];
			echo "<h1>Welcome $name!</h1><br/>";
			echo "<h4>1) Happy to place your orders!!!</h4>";
		}
		?>
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