<?php
	include('conn.php');

	$id = $_GET['menu'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$allergens=$_POST['allergens'];
	$calories=$_POST['calories'];
	$description=$_POST['description'];
	$ingredients=$_POST['ingredients'];
	
	$sql="select * from Menu where Menu_ItemID='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update Menu set Menu_Name='$name', Price='$price', Allergens='$allergens', Calories='$calories', Description='$description', Menu_Ingredients='$ingredients' where Menu_ItemID='$id'";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
