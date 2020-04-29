<?php
	include('conn.php');

	$id=$_GET['staff'];

	$sname=$_POST['sname'];
	$category=$_POST['category'];
	$hours=$_POST['hours'];

	$sql="select * from staff where Staff_ID='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();

	$sql="update staff set Staff_Name='$sname', Rank='$category', Staff_Hours='$hours' where Staff_ID='$id'";
	$conn->query($sql);

	header('location:manager.php');
?>

