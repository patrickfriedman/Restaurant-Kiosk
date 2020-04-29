<?php
	include('conn.php');

	
	$sql="select * from staff where Staff_ID = '6'";
	$result = $conn->query($sql);
	



	if($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			$hours = $row["Staff_Hours"];
			$clockin = $row["Staff_Clockin"];
		}	
	}
	
	$timestamp = date('Y-m-d H:i:s');
	
	
	$date1 = strtotime($clockin);
	$date2 = strtotime($timestamp);

	$hours_worked = ($date2 - $date1)/3600;
	$total_hours = $hours + $hours_worked;
	
	
	$sql="UPDATE staff SET Staff_Hours = $total_hours, Staff_Clockout = '$timestamp' WHERE Staff_ID = '6'";
	$conn->query($sql);
	

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>