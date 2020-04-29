<?php
	include('conn.php');

	$id=$_GET['ingredient'];

	$name=$_POST['name'];
	$qty=$_POST['quantity'];

	$sql="select * from Ingredients where id='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update Ingredients set Name='$name', Quantity='$qty' where id='$id'";
	$conn->query($sql);

	header('location:manager.php');
?>

