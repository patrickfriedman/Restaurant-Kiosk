<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">

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
    <link href="css/ionicons.min.css" rel="stylesheet" />
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="css/jquery.timepicker.css" rel="stylesheet" />
    <link href="css/flaticon.css" rel="stylesheet" />
    <link href="css/icomoon.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!--jss for cart-->
</head>

<body onload="doShowAll()">
    <p>
        <script>
        function fn1() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn2() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn3() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn4() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn5() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn6() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn7() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn8() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn9() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn10() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn11() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn12() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn13() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn14() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn15() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn16() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn17() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn18() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn19() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn20() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn21() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn22() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn23() {
            var str = document.getElementById( & quot; password & quot;).value;
        }

        function fn24() {
            var str = document.getElementById( & quot; password & quot;).value;
        }
        </script>
    </p>

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
                        <li class="nav-item active"><a class="nav-link" href="cart.php">Cart</a></li>
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
                    <h1 class="mb-2 bread">CART</h1>

                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home </a></span><span>Cart</span></p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- _____________________Cart_____________________ -->
<?php
        if(isset($_SESSION['login_user2'])){
?>
    <form action="helpme.php" method="post">
        <h7 class="text-info">Table Number: <input type="number" min="1" max="25" name="table" class="form-control" value="1" style="width: 60px;">
        <button class="input" name= "status" onclick="alert('Waiter has been called!')" value="Help">Call Waiter 
        <button class="input" name = "status" onclick="alert('Refill Requested!')" value="Refill">Request Refill</button></h7>
    </form>
    </br>
    <?php        
    }
    ?>

    <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th width="40%">Item</th>
                    <th width="15%">Quantity</th>
                    <th width="15%">Subtotal</th>
                    <th width="10%">Total</th>
                    <th width="5%">Action</th>
                </tr>
            </thead>


            <!-- SQL -->
            <?php
        include('conn.php');
        
        $sql="SELECT * FROM Orders LEFT JOIN Menu ON Orders.Menu_ItemID=Menu.Menu_ItemID WHERE Orders.status = 'cart'";                    
        $result=$conn->query($sql);
        $tax = .0625;
        $total = 0;

        while($row =$result->fetch_array())                 //Loop to print items in cart
        {

            $subtotal = $row["Price"] * $row["Quantity"];
            $itemtotal = $subtotal + ($subtotal * $tax);
            $total = $total + $itemtotal;

        ?>

            <tr>
                <td><?php echo $row["Menu_Name"]; ?></td>
                <td><?php echo $row["Quantity"]; ?></td>
                <td>&#x24; <?php echo number_format($subtotal, 2); ?></td>
                <td>&#x24; <?php echo number_format($itemtotal, 2); ?></td>

                <!-- Form for delete -->
                <td><a href="#removeOrder<?php echo $row['Order_ID']; ?>" data-toggle="modal"
                        class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        <?php include('cart_modal.php'); ?>
                </td>
            </tr>
            <?php }
            include('cart_modal.php');
            ?>


            <!-- COUPON -->
            <tr>
                <td>
                <form method="POST" action="completeOrder.php?total=<?php echo $total; ?>" enctype="multipart/form-data">
                    <label for="coupon">Coupon Code:&ensp; </label>
                    <input type="text" id ="coupon" name="coupon" value = "">
                </td>
                    


                <!-- End-->
                <td colspan="2" align="right"> <strong>Order Total: </td>
                <td align="right"><strong>&#x24; <?php echo number_format($total, 2); ?></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5" align="center">
                    <input type = "submit" value = "Place Order">
                </td>

        </table>
    </div>

</form>
<button onclick="window.location.href = 'https://unt.az1.qualtrics.com/jfe/form/SV_ellfYf59cQkqAAJ';">Quick Survey</button>

    <!-- _________________Footer_________________ -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Everything Rice</h2>

                        <p>There's no love sincere than love for food.</p>

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
                        
                        &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | MTKBNP
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- loader -->

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
    </div>
    </div>
    </div>
    </section>
</body>

</html>