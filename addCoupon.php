<?php
	include('conn.php');

	$c_id=$_POST['c_id'];
	$c_type=$_POST['c_type'];
	$c_start=$_POST['c_start'];
	$c_end=$_POST['c_end'];
	
	$sql="insert into Coupons (Coupon_ID, Coupon_Type, Coupon_Avail, Coupon_Start, Coupon_End) values ('$c_id','$c_type', '1', '$c_start', '$c_end')";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>