<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
?>
	<div class="col-md-6" style="background-color:#34495E ;min-height:570px;width :80%;">
		<br/>
		<br/><br/><br/><br/><br/>
		<center>
        <form id="contact_form" action="user/feedbackHandler.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<label for="name">User Name:</label><br />
				<input id="name" required class="input" name="name" type="text" value="" size="30" style="color:black;font-weight:bold;" /><br />
			</div>
			<div class="row">
				<label for="email">User Email Id:</label><br />
				<input id="email" required class="input" name="email" type="text" value="" size="30" style="color:black;font-weight:bold;" /><br />
			</div>
			<div class="row">
				<label for="message">Enter Your payment mode:</label><br />
				<textarea id="message" required class="input" name="message" rows="7" cols="30" style="color:black;font-weight:bold;"></textarea><br />
			</div>
			<input id="submit_button" style="color:black;font-weight:bold;" type="submit" value="Click" onclick="alert("Payment Sucessfull");" />

		</form>		
		</center>
	</div>

<?php include 'includes/footer.php'?>			

