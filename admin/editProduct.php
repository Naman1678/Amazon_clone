<?php
	include '../config/database.php';
	$id=$_POST['pid'];
	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	if($type==1)
		$category="Mens";
	if($type==2)
		$category="Womens";
	if($type==3)
		$category="Gifts";
	if($type==4)
		$category="Home Appliances";
	if($type==5)
		$category="Electronics";
	if($type==5)
		$category="Accessories";

	$image="images/".$category."/".basename($_FILES['image']['name']);
	$target="../".$image;
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		$res=mysqli_query($link,"update product set type='$type',location='$image',price='$price',name='$pname' where id='$id'")or die(mysql_error());
		echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
	}
	else
	{
		echo "File could not be uploaded successfully.";
	}
?>