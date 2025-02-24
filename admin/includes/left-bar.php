	<div class="row">
		<div class="col-md-2 fix">
			<br/><br/><br/>
			<div>
				<?php
					// Check, if username session is NOT set then this page will jump to login page
					if(isset($_SESSION['sid']) && $_SESSION['sid'] == 1)
					{
						if(isset($_SESSION['sadmin']))
						{	
							echo "<button class='btn btn0 btn-default' type='button' id='menu1'>";
							echo $_SESSION['suname'];
							echo "&nbsp;&nbsp;&nbsp;<img src='images/icons/4.png' style='height:30px;width:30px;'>";
						}
						else
						{
							echo "<a href='cart.php'>";
							echo "<button class='btn btn0 btn-default' type='button' id='menu1'>";
							echo $_SESSION['suname'];
							echo "&nbsp;&nbsp;&nbsp;<img src='images/icons/cart.png' style='height:30px;width:30px;'>";
						}
						echo "</button></a>";
					}	
					else
					{
						echo "<a href='login.php'>";
						echo "<button class='btn btn0 btn-default' type='button' id='menu1'>";
						echo "My Account";
						echo "</button></a>";
					}
					?>
			</div>	
			<br/>
			<div class="panel panel-default panel-list">
				<div class="panel-heading panel-heading-dark>
					
					<h1 class="panel-title">CATEGORIES</h1>
				</div>
				<div class="list-group">
				  <a href="plants.php" class="list-group-item btn1">PLANTS</a>
		
				</div>
			</div>	
		</div>
		<br/><br/>
		<div class="col-md-2">
		</div>