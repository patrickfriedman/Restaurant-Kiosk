<?php
	include('conn.php');



    $table_number = $_POST['table'];
    $Status = $_POST['status'];

    $sql="INSERT INTO Orders(Table_Number,Status) VALUES ('$table_number','$Status')";

    if ($result = $conn->query($sql)) {
        //If query returns data
        
    }
    //If query fails
    else {
        printf("Query failed: %s\n", $conn->error);
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
