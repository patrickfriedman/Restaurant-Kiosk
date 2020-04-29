<?php
	include('conn.php');

	$email=$_POST['email'];

	$sql="INSERT INTO Subscription(Email) VALUES ('$email')";
	$conn->query($sql);
	
    header('Location: ' . $_SERVER['HTTP_REFERER']);


?>