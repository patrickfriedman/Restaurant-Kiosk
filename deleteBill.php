<?php
	include('conn.php');

	$id=$_GET['bill'];
	
	$sql="delete from receipts where transaction_id='$id'";
	if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>