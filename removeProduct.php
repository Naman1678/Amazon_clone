<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
?>
	<div class="col-md-10" style="background: url('images/bbb.jpg') no-repeat;background-size: 300%;min-height: 670px;">
		<br/>
		<div class="col-md-11" style="min-height:570px;">
		<br/><br/><br/><br/><br/>
		<div style="background:gray;">	
		<br/><br/><br/>	
		<div>
			<center><h4><u>Remove Product</u></h4></center>
		<?php
			
			echo "<form action='admin/removeProduct.php' method='post'>";
			echo "<center><table>";
			echo "<tr><td>ID of the product</td><td><input type='textbox' style='color:black;' name='pid'/></td></tr>";
			echo "<tr><td>Name of the product</td><td><input type='textbox' style='color:black;margin-top:10px;' name='pname'/></td></tr>";
			echo "</table><br/>";
			echo "<input type='submit' class='btn btn1' value='Remove'/>";
			echo "</form></center>";
		?>	
		<br/><br/><br/>
		</div>
		</div>
	</div>
	</div>
	<?php include 'includes/adminDashboardMenu.php';?>
<?php include 'includes/footer.php'?>			
 
