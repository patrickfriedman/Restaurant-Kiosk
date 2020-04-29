<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">
<style>
mark { 
  background-color: red;
  color: black;
}
html {
    scroll-behavior: smooth;
}
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
    <!--css-->
    <title>Everything Rice!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet" />
    <link href="css/open-iconic-bootstrap.min.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/aos.css" rel="stylesheet" />
    <link href="css/page.css" rel="stylesheet" />
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="css/jquery.timepicker.css" rel="stylesheet" />
    <link href="css/flaticon.css" rel="stylesheet" />
    <link href="css/icomoon.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!--jss for cart-->
</head>

<body onload="doShowAll()">


    <div class="py-1 bg-black top">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                        </div>

                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
                            <span class="text">Welcome</span>
                        </div>

                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span>
                                <span>8:00AM - 9:00PM</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">Everything Rice&nbsp;<button aria-controls="ftco-nav" aria-expanded="false"
                aria-label="Toggle navigation" class="navbar-toggler" data-target="#ftco-nav" data-toggle="collapse"
                type="button">Menu</button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <?php
        if(isset($_SESSION['login_user2'])){
    ?>
                    <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Kids</a></li>
                    <li class="nav-item"><a class="nav-link" href="cart.php">Cart</a></li>
                    <li class="nav-item cta"><a class="nav-link" href="reservation.php">Book a table</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout_u.php">Log Out</a></li>
                    <?php        
    }
    else{
    ?>
                    <li class="nav-item cta"><a class="nav-link" href="customerlogin.php">Order Now</a></li>
                    <?php
}
?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5"
        style="background-image: url('images/bg_3.jpg');">
        <div class="overlay"></div>

        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">MENU</h1>

                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home </a></span> <span>Menu </span>

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-------------->
    <div class="container-fluid">
    </div>

    <div id="myBtnContainer">
        
        <button class="btn" onclick="return fn1()"> Breakfast</button>
        <button class="btn" onclick="return fn2()"> Lunch</button>
        <button class="btn" onclick="return fn3()"> Dinner</button>
        <button class="btn" onclick="return fn4()"> Drinks</button>
        <button class="btn" onclick="return fn5()"> Dessert</button>
        <button class="btn" onclick="return fn6()"> Wine</button>
    </div>
    <script>
    function fn1() {
        window.scrollBy(100, 247);
    }

    function fn2() {
        window.scrollBy(100, 700);
    }

    function fn3() {
        window.scrollBy(100, 1500);
    }

    function fn4() {
        window.scrollBy(100, 2100);
    }

    function fn5() {
        window.scrollBy(100, 2700);
    }

    function fn6() {
        window.scrollBy(100, 3000);
    }

    function fn7() {
        window.scrollBy(1, 1);
    }
    </script>
<!---------------------------BUTTONS------------->

<form action="helpme.php" method="post">
 <h7 class="text-info">Table Number: <input type="number" min="1" max="25" name="table"
                                    class="form-control" value="1" style="width: 60px;"> <br />
<button class="input" name= "status" onclick="alert('Waiter has been called!')" value="Help">Call Waiter  
<button class="input" name = "status" onclick="alert('Refill Requested!')" value="Refill">Request Refill</button></h7>
</form>

    <!------------->
    <div class="container-fluid">
        <hr style="height:1px;background-color:black;border:none;" noshade />
    </div>

    <!------->
	
	<div class="container" style="width:95%;">
    <?php

require 'connection.php';
$conn = Connect();             

$sql = "SELECT * FROM Menu ORDER BY total_orders DESC LIMIT 1";
$highest_order = $conn->query($sql);
$highest_id = 1;

while($row =$highest_order->fetch_array())                 //Loop to print items in cart
{
    $highest_id = $row["Menu_ItemID"];
}



$sql = "SELECT * FROM Menu ORDER BY Menu_ItemID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;
  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
		echo "<div class='row'>";
?>
	<div class="col-md-3">
    <form method="post" action="add_to_cart.php" enctype="multipart/form-data">                  
	<div class="mypanel" align="center";>
	<!-- <div class="row no-gutters d-flex align-items-stretch">
             <div class="col-md-12 col-lg-6 d-flex align-self-stretch"> -->
                <div class="menus d-sm-flex ftco-animate align-items-stretch">
            <!--        <img src="<?php echo $row["Menu_Item_Picture"]; ?>" class="menu-img img"> -->
                        <div>
                            <img src="<?php echo $row["Menu_Item_Picture"]; ?>" class="menu-img img">
							<?php if($row["Menu_ItemID"] != $highest_id) {
								?>
								<h4 class="text-dark"><?php echo $row["Menu_Name"]; ?></h4>
								<?php
							}
							else{
								?>
								<h4 class="text-dark"><mark><?php echo $row["Menu_Name"]; ?></mark></h4>
								<?php
							}
							?>
                            <h5 class="text-danger">&#x24; <?php echo $row["Price"]; ?></h5>
                            <h6 class="text-info"><?php echo $row["Description"]; ?></h6>
                            <p>
                                <h6 class="text-info" <h2>Calories: <?php echo $row["Calories"]; ?></h6>
                            </p>
                            <p>
                                <h6 class="text-info" <h2>Ingredients: <?php echo $row["Menu_Ingredients"]; ?></h6>
                            </p>
                            <h6 class="text-info" Calories: <?php echo $row["Calories"]; ?></h6>
                            <h7 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h7><br />
                            <input type="hidden" value="<?php echo $row["Menu_ItemID"]; ?>" name="Menu_item">
                            <input class="form-control submit px-3" style="margin-top:5px;" type="submit" value="Add to Cart">
						 </div>
               </div>
<!--	 </div>
	 </div> -->
	</div>
	</form>
	</div>
	
    <?php
    $count++;
    if($count==4)
    {
      echo "</div>";
      $count=0;
    }
    }
?>
	</div>
    
    <?php
}
else{
?>
    <div class="container">
        <div class="jumbotron">
            <center><label style="margin-left: 5px;color: red;">
                    <h1>Oops! No food is available.</h1>
                </label>
                <p>Stay Hungry...! :P</p>
            </center>
        </div>
    </div>
    <?php
}
?>

    <br><br><br>
    <br>

    <!-- ____________________Footer____________________ -->
    <div class="container-fluid">
        <hr style="height:1px;background-color:black;border:none;" noshade />
    </div>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Everything Rice</h2>

                        <p>Delivering the best quality meals in town.</p>

                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"></li>
                            <li class="ftco-animate"></li>
                            <li class="ftco-animate"></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Open Hours</h2>

                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Monday&nbsp;</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Tuesday&nbsp;</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                            <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                            <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>

                        <div class="thumb d-sm-flex"></div>

                        <div class="thumb d-flex"></div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Newsletter</h2>

                        <p>Join our newsletter to stay up to date with Everything Rice!</p>

                        <form method="POST" action="subscribe.php" enctype="multipart/form-data">
                            <div class="form-group" style="margin-top:10px;">
                                <div class="row">
                                    <div class="col-md-3" style="margin-top:7px;">
                                        <label class="control-label">Name:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control mb-2 text-center" placeholder="Enter email address"
                                            type="text" name="email">
                                        <input class="form-control submit px-3" type="submit" value="Subscribe">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- This is is licensed under CC BY 3.0. -->Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | MTKBNP</p>
                </div>
            </div>
        </div>
    </footer>


    <div class="show fullscreen" id="ftco-loader"><svg class="circular" height="48px" width="48px">
            <circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4"></circle>
            <circle class="path" cx="24" cy="24" fill="none" r="22" stroke="#F96D00" stroke-miterlimit="10"
                stroke-width="4"></circle>
        </svg></div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
    </div>
</body>

</html>