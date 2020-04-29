<?php
	include('conn.php');

	$orderID=$_GET['order'];

	$sql="delete from Orders where Order_ID='$orderID'";
	if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>