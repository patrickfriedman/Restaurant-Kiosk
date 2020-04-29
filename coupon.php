<?php
	include('conn.php');

	$coupon=$row['Coupon_Type'];
    echo $coupon;


	$sql="select * from Coupons where Coupon_Type ='$coupon'";
    if($conn->query($sql));
	else {
		printf("Query failed: %s\n", $conn->error);
	}
?>

<script>
function msg() {
    alert("Coupon Applied");
    <?php 
        $total = ($total + (($row["Quantity"] * .27) + ($row["Quantity"] * $price))) - 5.00 ;
    ?> 
}
</script>

<?php
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
?>