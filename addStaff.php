<?php
	include('conn.php');

	$sname=$_POST['sname'];
	$hours=$_POST['hours'];
	$category=$_POST['category'];

	
	$sql="insert into staff (Staff_Name, Staff_Hours, Rank) values ('$sname', '$hours', '$category')";
	$conn->query($sql);

	header('location:manager.php');

?>