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
					
					<h1 class="panel-title">LIST</h1>
				</div>
				<div class="list-group">
				  <a href="mens.php" class="list-group-item btn1">MENS</a>
				</div>

				<div class="list-group">
				  <a href="womens.php" class="list-group-item btn1">WOMENS</a>
				</div>

				<div class="list-group">
				  <a href="gits.php" class="list-group-item btn1">GIFTS</a>
				</div>

				<div class="list-group">
				  <a href="homeapp.php" class="list-group-item btn1">HOME APPLIANCES</a>
				</div>

				<div class="list-group">
				  <a href="electronic.php" class="list-group-item btn1">ELECTRONIC PRODUCTS</a>
				</div>

				<div class="list-group">
				  <a href="accessories.php" class="list-group-item btn1">ACCECCORIES</a>
				</div>

			</div>	
		</div>
		<br/><br/>
		<div class="col-md-2">
		</div>