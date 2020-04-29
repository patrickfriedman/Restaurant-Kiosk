<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
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
<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
</div>

<div class="col-md pr-4 d-flex topper align-items-center">
<div class="icon mr-2 d-flex justify-content-center align-items-center"></div>
<span class="text">Welcome</span></div>

<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
<p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
</div>
</div>
</div>
</div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container"><span style="color:#FFFFFF;">Everything Rice</span>&nbsp;<button aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#ftco-nav" data-toggle="collapse" type="button">Menu</button>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
	<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

	<?php
        if(isset($_SESSION['login_user2'])){
    ?>

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

<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5" style="background-image: url('images/bg_3.jpg');">
<div class="overlay"></div>

<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate text-center mb-4">
<h1 class="mb-2 bread">Kids!</h1>

<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home&nbsp;</a>Kids!</span></p>
</div>
</div>
</div>
</section>


<section class="ftco-section">
<div class="container">
<div class="ftco-search">
<div class="row">
<div class="col-md-12 nav-link-wrap">
<h3 aria-orientation="vertical" class="nav nav-pills d-flex text-center" role="tablist">Games!</h3>

<div aria-orientation="vertical" class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"><a aria-controls="v-pills-1" aria-selected="true" class="nav-link ftco-animate active" data-toggle="pill" href="#v-pills-1" id="v-pills-1-tab" role="tab">Shards</a> <a aria-controls="v-pills-2" aria-selected="false" class="nav-link ftco-animate" data-toggle="pill" href="#v-pills-2" id="v-pills-2-tab" role="tab">Millionaire Quiz</a> <a aria-controls="v-pills-3" aria-selected="false" class="nav-link ftco-animate" data-toggle="pill" href="#v-pills-3" id="v-pills-3-tab" role="tab">Hex Blitz</a> <a aria-controls="v-pills-4" aria-selected="false" class="nav-link ftco-animate" data-toggle="pill" href="#v-pills-4" id="v-pills-4-tab" role="tab">Flip Ninja</a></div>
</div>
</div>

<div class="col-md-12 tab-wrap">
<div class="tab-content" id="v-pills-tabContent">
<div aria-labelledby="day-1-tab" class="tab-pane fade show active" id="v-pills-1" role="tabpanel">
<div class="row no-gutters d-flex align-items-stretch">
<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
<div class="menus d-sm-flex ftco-animate align-items-stretch">
<div class="menu-img img"></div>

<div class="text d-flex align-items-center">
<div>
<div class="d-flex">
<div class="one-half">
<h3><iframe height="600" scrolling="no" src="https://www.addictinggames.com/embed/html5-games/18346" width="800"></iframe></h3>
</div>

<div class="one-forth"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div aria-labelledby="v-pills-day-2-tab" class="tab-pane fade" id="v-pills-2" role="tabpanel">
<div class="row no-gutters d-flex align-items-stretch">
<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
<div class="menus d-sm-flex ftco-animate align-items-stretch">
<div class="menu-img img"></div>

<div class="text d-flex align-items-center">
<div>
<div class="d-flex">
<div class="one-half">
<h3><iframe height="600" scrolling="no" src="https://www.addictinggames.com/embed/html5-games/19275" width="800"></iframe></h3>
</div>

<div class="one-forth"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div aria-labelledby="v-pills-day-3-tab" class="tab-pane fade" id="v-pills-3" role="tabpanel">
<div class="row no-gutters d-flex align-items-stretch">
<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
<div class="menus d-sm-flex ftco-animate align-items-stretch">
<div class="menu-img img"></div>

<div class="text d-flex align-items-center">
<div>
<div class="d-flex">
<div class="one-half">
<h3><iframe height="600" scrolling="no" src="https://www.addictinggames.com/embed/html5-games/23640" width="800"></iframe></h3>
</div>

<div class="one-forth"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div aria-labelledby="v-pills-day-4-tab" class="tab-pane fade" id="v-pills-4" role="tabpanel">
<div class="row no-gutters d-flex align-items-stretch">
<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
<div class="menus d-sm-flex ftco-animate align-items-stretch">
<div class="menu-img img"></div>

<div class="text d-flex align-items-center">
<div>
<div class="d-flex">
<div class="one-half">
<h3><iframe height="600" scrolling="no" src="https://www.addictinggames.com/embed/html5-games/22893" width="800"></iframe></h3>
</div>

<div class="one-forth"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
<div class="container">
<div class="row mb-5">
<div class="col-md-6 col-lg-3">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Everything Rice</h2>

<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

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
	<li class="d-flex"><span>Wednesday&nbsp;</span><span>9:00 - 24:00</span></li>
	<li class="d-flex"><span>Thursday&nbsp;</span><span>9:00 - 24:00</span></li>
	<li class="d-flex"><span>Friday&nbsp;</span><span>9:00 - 02:00</span></li>
	<li class="d-flex"><span>Saturday&nbsp;</span><span>9:00 - 02:00</span></li>
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

<p>There's no love sincere than love for food.</p>

<form action="#" class="subscribe-form">
<div class="form-group"><input class="form-control mb-2 text-center" placeholder="Enter email address" type="text" /> <input class="form-control submit px-3" type="submit" value="Subscribe" /></div>
</form>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 text-center">
<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MTKBNP<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div>
</div>
</div>
</footer>
<!-- loader -->

<div class="show fullscreen" id="ftco-loader"><svg class="circular" height="48px" width="48px"><circle class="path-bg" cx="24" cy="24" fill="none" r="22" stroke="#eeeeee" stroke-width="4"></circle><circle class="path" cx="24" cy="24" fill="none" r="22" stroke="#F96D00" stroke-miterlimit="10" stroke-width="4"></circle></svg></div>
<script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script><script src="js/google-map.js"></script><script src="js/main.js"></script></body>
</html>