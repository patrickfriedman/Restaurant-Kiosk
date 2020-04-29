<?php
	include('conn.php');

	$id=$_GET['bill'];
	$b_cust=$_POST['b_cust'];
	$total=$_POST['b_total'];
	$b_date=$_POST['b_date'];

	$sql="update receipts set customer_id='$b_cust', total='$total', date='$b_date' where transaction_id='$id'";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>