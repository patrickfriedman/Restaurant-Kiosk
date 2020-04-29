<?php
	include('conn.php');

	$id=$_GET['coupon'];
	$c_type=$_POST['c_type'];
	$c_avail=$_POST['c_avail'];
	$c_start=$_POST['c_start'];
	$c_end=$_POST['c_end'];

	
	$sql="select * from Coupons where Coupon_ID='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update Coupons set Coupon_Type='$c_type', Coupon_Avail='$c_avail', Coupon_Start='$c_start', Coupon_end='$c_end' where Coupon_ID='$id'";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>