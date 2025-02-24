<?php
		include 'includes/header.php';
		include 'includes/left-bar.php';
		include 'config/database.php';
?>
	<div class="col-md-10" style="background:#D5D8DC;min-height:570px;">
		<br/>
<form method = "POST">
    <label for="fname">Product Total</label>
    <input type="text" id="fname" name="pname"  value="<?php echo $total; ?>">

    <label for="lname">Credit Card Number</label>
    <input type="text" id="lname" name="cardno" placeholder="Your Credit Card Number..">

    <label for="country">Expiry Date</label>
     <input type="text" id="lname" name="edate" placeholder="DD/MM">