<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
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
</head>
<body>
<div class="py-1 bg-black top">
<div class="container">
<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
<div class="col-lg-12 d-block">
<div class="row d-flex">
<div class="col-md pr-4 d-flex topper align-items-center">
<div class="icon mr-2 d-flex justify-content-center align-items-center"><span><a href="https://tad-j.com/login.php">Open hours</a>: </span>&nbsp;&nbsp;<span>Monday - Sunday</span> <span>; 8:00AM - 9:00PM</span></div>
</div>
</div>
</div>
</div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
<h2><span style="color:#FFFFFF;">Everything Rice</span>&nbsp;<button aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#ftco-nav" data-toggle="collapse" type="button">Menu</button></h2>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
	<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
	<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
	<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
<!--	<li class="nav-item"><a class="nav-link" href="customerlogin.php">Menu</a></li> -->
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

<section class="home-slider owl-carousel js-fullheight">
<div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
<div class="overlay"></div>

<div class="container">
<div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
<div class="col-md-12 col-sm-12 text-center ftco-animate"><span class="subheading">Everything Rice</span>

<h1 class="mb-4">Best Restaurant</h1>
</div>
</div>
</div>
</div>

<div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
<div class="overlay"></div>

<div class="container">
<div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
<div class="col-md-12 col-sm-12 text-center ftco-animate"><span class="subheading">Everything Rice</span>

<h1 class="mb-4">Nutritious &amp; Tasty</h1>
</div>
</div>
</div>
</div>

<div class="slider-item js-fullheight" style="background-image: url(images/bg_3.jpg);">
<div class="overlay"></div>

<div class="container">
<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
<div class="col-md-12 col-sm-12 text-center ftco-animate"><span class="subheading">Everything Rice</span>

<h1 class="mb-4">Delicious Specialties</h1>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="featured">
<div class="row">
<div class="col-md-3">
<div class="featured-menus ftco-animate">
<div class="menu-img img" style="background-image: url(uploads/images/breakfast_fried_rice.png);"></div>

<div class="text text-center">
<h3>Breakfast Fried Rice</h3>
</div>
</div>
</div>

<div class="col-md-3">
<div class="featured-menus ftco-animate">
<div class="menu-img img" style="background-image: url(uploads/images/dirty_rice.png);"></div>

<div class="text text-center">
<h3>Dirty Rice</h3>
</div>
</div>
</div>

<div class="col-md-3">
<div class="featured-menus ftco-animate">
<div class="menu-img img" style="background-image: url(uploads/images/honey_garlic_shrimp.png);"></div>

<div class="text text-center">
<h3>Honey Garlic Shrimp</h3>
</div>
</div>
</div>

<div class="col-md-3">
<div class="featured-menus ftco-animate">
<div class="menu-img img" style="background-image: url(uploads/images/rice_bowl_with_red_lentil_curry.png);"></div>

<div class="text text-center">
<h3>Rice Bowl with Red Lentil Curry&nbsp;</h3>

<p></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section">
<div class="container"><!-- loader -->
<div class="show fullscreen" id="ftco-loader"><svg class="circular" height="48px" width="48px"><circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4"></circle><circle class="path" cx="24" cy="24" fill="none" r="22" stroke="#F96D00" stroke-miterlimit="10" stroke-width="4"></circle></svg> <script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script><script src="js/google-map.js"></script><script src="js/main.js"></script></div>
</div>
</section>
</body>
</html>