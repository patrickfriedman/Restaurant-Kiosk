<?php
	include('conn.php');

	$id = $_GET['staff'];

	$sql="delete from staff where Staff_ID='$id'";
	if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	header('location:manager.php');
?>