<?php
	include('conn.php');

	
	$sql="UPDATE staff SET Staff_Clockin = CURRENT_TIMESTAMP() WHERE Staff_ID = 6;";
	$conn->query($sql);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>