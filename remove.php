<?php
	include('conn.php');

    $id = $row["Menu_ItemID"];
    $quan = $row["Quantity"];
    echo $id;
    echo $quan;
    
    if($quan == 1)
    {
        $sql="delete from Order where Menu_ItemID='$id'";
    	if($conn->query($sql));
    	else {
    		printf("Query failed: %s\n", $conn->error);
    	}
    }
    else if($quan > 1)
    {
        $sql="UPDATE Order set Quantity='$quan - 1'";
    	if($conn->query($sql));
    	else {
    		printf("Query failed: %s\n", $conn->error);
    	}
    }

	//header('location:cart.php');
?>