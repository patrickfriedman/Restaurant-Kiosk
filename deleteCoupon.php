<?php
	include('conn.php');

	$id=$_GET['coupon'];

	$sql="delete from Coupons where Coupon_ID='$id'";
	if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>