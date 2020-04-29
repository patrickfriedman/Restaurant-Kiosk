<?php
	include('conn.php');

	$id = $_GET['ingredient'];

	$sql="delete from Ingredients where ID='$id'";
	if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	header('location:manager.php');
?>