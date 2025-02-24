<?php
	include 'includes/header.php';
	include 'includes/left-bar.php';
	include 'config/database.php';
	$sum1 = $_GET['amountt'];
?>
<div class="col-md-10" style="
    background-image: url('images/cart.jpg'); 
    background-size: cover; 
    background-position: center; 
    min-height: 670px;
    padding: 20px;
    color: black;">
	<br/>
    <form method="post" action="">
        <table style="width: 100%; max-width: 600px; margin: 0 auto; background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 8px;">
            <tr>
                <td colspan="2" style="text-align: center; font-size: 20px; color: white;">
                    <b>Order Confirmation</b>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color: black; padding: 10px;">
                    <b>Customer Name:</b>
                </td>
                <td>
                    <input type="text" name="c_name" placeholder="Enter Customer Name..." style="width: 100%; padding: 5px;"/>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color: black; padding: 10px;">
                    <b>Phone Number:</b>
                </td>
                <td>
                    <input type="text" name="pn" placeholder="Enter Phone Number..." style="width: 100%; padding: 5px;"/>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color: black; padding: 10px;">
                    <b>Address:</b>
                </td>
                <td>
                    <input type="text" name="add" placeholder="Enter Address..." style="width: 100%; padding: 5px;"/>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color: black; padding: 10px;">
                    <b>Total Amount:</b>
                </td>
                <td>
                    <input type="text" name="add1" value="<?php echo htmlspecialchars($sum1); ?>" style="width: 100%; padding: 5px;" readonly/>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color: black; padding: 10px;">
                    <b>Mode of Payment:</b>
                </td>
                <td>
                    <select id="pay" name="pm" style="width: 100%; padding: 5px; color: black;">
                        <option value="Debit Card">Debit Card</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Cash on Delivery">Cash On Delivery</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; padding: 20px;">
                    <button type="submit" name="sub" id="subm" style="padding: 10px 20px; color: black; font-weight: bold; background-color: #fff; border: none; border-radius: 5px;">Order Confirm</button>
                </td>
            </tr>
        </table>      
    </form>
    <?php
    if (isset($_POST['sub'])) {
        echo '<script>alert("Order Successfully... Thank you visit again")</script>';
        echo "<script> location.href='myaccount.php'; </script>";
    }
    ?>
<?php include 'includes/footer.php'?>	
