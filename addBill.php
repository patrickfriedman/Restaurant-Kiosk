<?php
	include('conn.php');

	$b_id=$_POST['b_id'];
	$b_cust=$_POST['b_cust'];
	$total=$_POST['total'];
	$b_date=$_POST['b_date'];
	
	$sql="insert into receipts (transaction_id, customer_id, total, date) values ('$b_id','$b_cust', '$total', '$b_date')";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>