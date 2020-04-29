<?php
	include('conn.php');

	$menuID=$_POST['menuID'];
	$quantity=$_POST['quantity'];
	$status=$_POST['status'];
	$tnum=$_POST['tnum'];
	$orderID=$_POST['orderID'];
	
	$sql="insert into Orders (Order_ID, Menu_ItemID, Quantity, Status, Table_Number) values ('$orderID', '$menuID', '$quantity', '$status', '$tnum')";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>