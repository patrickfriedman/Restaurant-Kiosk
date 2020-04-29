<?php
	include('conn.php');

	$coupon = $_POST['coupon']; //Coupon code


	//Generate receipt
	$sql="SELECT * FROM Orders LEFT JOIN Menu ON Orders.Menu_ItemID=Menu.Menu_ItemID WHERE Orders.status = 'cart'";                    
	$result=$conn->query($sql);
	$taxpct = .0625;
	$tax = 0;
	$total = 0;
	$subtotal = 0;
	$cust_id = 6;
	$timezone = -6;
	$coupon_applied = false;
	$datetime = gmdate("Y-m-d H:i:s", time() + 3600*($timezone+date("I")));		//Get current time (UTC -6:00)


	
	while($row = $result->fetch_array())                 //Loop to obtain data from query
	{
		$itemsubtotal = $row["Price"] * $row["Quantity"];
		$itemtotal = $itemsubtotal + ($itemsubtotal * $taxpct);
		$total = $total + $itemtotal;
		
		$new_order_total = $row["total_orders"];
		$new_order_total = $new_order_total + 1;
		$current_id = $row["Menu_ItemID"];
		
		$sql="UPDATE Menu set total_orders='$new_order_total' WHERE Menu_ItemID='$current_id'";
		$conn->query($sql);
	}

	$sql="INSERT INTO receipts (customer_id, total, date) VALUES ($cust_id, $total, CURRENT_TIMESTAMP)";                    
	$result=$conn->query($sql);

	$sql="SELECT transaction_id FROM receipts WHERE 1 ORDER BY date DESC LIMIT 1";

	if ($result = $conn->query($sql)) {
		//If query return data
	}
	//If query fails
	else {
		printf("Query failed: %s\n", $conn->error);
	}
	$row=$result->fetch_array();
	$transaction_id = $row[0];

	//Create receipt
	echo "<h2>Transaction Complete</h2>Date:$datetime<br>Transaction Number: #$transaction_id<br>";
	echo "<h3>Order Details:</h3>";
	echo "<p> Item -------------------------------------- Price</p>";

	$sql="SELECT * FROM Orders LEFT JOIN Menu ON Orders.Menu_ItemID=Menu.Menu_ItemID WHERE Orders.status = 'cart'";                    
	if ($result = $conn->query($sql)) {
		//If query return data
	}
	//If query fails
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	while($row = $result->fetch_array())                 //Loop to obtain data from query
	{
		$itemsubtotal = $row["Price"] * $row["Quantity"];
		$subtotal = $subtotal + $itemsubtotal;
		
		echo "<p>", $row["Menu_Name"], " ------------------ $", number_format($itemsubtotal, 2), "</p>";

	}
	
	//Apply Coupon
	$sql="SELECT * FROM Coupons where Coupon_ID = '$coupon'";
	if($result=$conn->query($sql))
	{
		while($row = $result->fetch_array())
		{
			if($row["Coupon_Avail"] = '1')
			{
				$sql="update Coupons set Coupon_Avail='0' where Coupon_ID='$coupon'";
				$conn->query($sql);
				
				$discount = $subtotal * .15;
				
				$subtotal = $subtotal - $discount;
				$coupon_applied = true;
			}
		}
	}
	
	$tax = $subtotal * $taxpct;
	$total = $subtotal + $tax;
	if($coupon_applied == true)
	{
		echo "Coupon applied! You saved: $", number_format($discount, 2), "!";
		echo "<br>";
	}
	echo "<br>";
	echo "<p> Subtotal:", " ---- $", number_format($subtotal, 2), " ---------------------- Tax: $", number_format($tax,2),"</p>";
	echo "<p><strong> Total:", " -------------------------------------------- $", number_format($total, 2), "</p>";
	
	$sql="UPDATE Orders SET Status = 'in_progress' WHERE Status = 'cart'";	//Change order status after payment
	if ($result = $conn->query($sql)) {
		//If query return data
	}
	//If query fails
	else {
		printf("Query failed: %s\n", $conn->error);
	}

	$sql="INSERT INTO Revenue (Date, Amount, Description) VALUES (CURDATE(), $total, $transaction_id)";
	if ($result = $conn->query($sql)) {
		//If query return data
	}
	//If query fails
	else {
		printf("Query failed: %s\n", $conn->error);
	}

?>
	<br><a href="index.php" data-toggle="modal" class="btn"><span class="glyphicon glyphicon-pencil"></span> Return</a>


