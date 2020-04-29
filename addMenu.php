<?php
	include('conn.php');

	$menu_id=$_POST['menu_id'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	$allergens=$_POST['allergens'];
	$calories=$_POST['calories'];
	$description=$_POST['description'];
	$ingredients=$_POST['ingredients'];
	
	$sql="insert into Menu (Menu_ItemID, Menu_Name, Price, Allergens, Calories, Description, Menu_Ingredients) values ('$menu_id', '$name', '$price', '$allergens', '$calories', '$description', '$ingredients')";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>