<?php
	include('conn.php');


	$quantity=$_POST['quantity'];
    $menu_item= $_POST['Menu_item'];
    $table_number = 13;
    $status = "cart";

    $sql="INSERT INTO Orders(Table_Number,Status,Menu_ItemID,Quantity) VALUES ('$table_number','$status','$menu_item','$quantity')";

    if ($result = $conn->query($sql)) {
        //If query returns data
        
    }
    //If query fails
    else {
        printf("Query failed: %s\n", $conn->error);
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>