<?php
	include('conn.php');

	$menuID=$_POST['menuID'];
	$quantity=$_POST['quantity'];
	$status=$_POST['status'];
	$tnum=$_POST['tnum'];
	$orderID=$_POST['orderID'];

	$sql="select * from Orders where Order_ID='$orderID'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update Orders set Menu_ItemID='$menuID', Quantity='$quantity', Status='$status', Table_Number='$tnum' where Order_ID='$orderID'";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
