<?php
	include('conn.php');

	$name=$_POST['name'];
	$qty=$_POST['quantity'];
	
	$sql="insert into Ingredients (Name, Quantity) values ('$name', '$qty')";
	$conn->query($sql);

	header('location:manager.php');

?>