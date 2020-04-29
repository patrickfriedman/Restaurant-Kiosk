<?php
	include('conn.php');

	$id = $_GET['menu'];

	$sql="delete from Menu where Menu_ItemID='$id'";
	if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>