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
	<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
	<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a>&nbsp;</li>
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

<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5" style="background-image: url('images/bg_3.jpg');">
<div class="overlay"></div>

<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 ftco-animate text-center mb-4">
<h1 class="mb-2 bread">Contact</h1>

<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home </a></span> <span>Contact us </span></p>
</div>
</div>
</div>
</section>

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

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
<div class="container">
<div class="row d-flex align-items-stretch no-gutters">
<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
<h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>

<form method="post" action="">
<div class="form-group"><input class="form-control" id="name" name="name" placeholder="Your Name" type="text" /></div>

<div class="form-group"><input class="form-control" id="email" name="email" placeholder="Your Email" type="email" /></div>

<div class="form-group"><input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" /></div>

<div class="form-group"><textarea class="form-control" cols="30" type="textarea" id="message" name="message" placeholder="Message" rows="7"></textarea></div>

<div class="form-group">
<input class="btn btn-primary py-3 px-5" type="submit" name="submit" type="button" id="submit" name="submit" />
</div>
</form>
</div>

<div class="col-md-6 d-flex align-items-stretch">
<div id="map"></div>
</div>
</div>
</div>
</section>


<?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$subject = $conn->real_escape_string($_POST['subject']);
$message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contactus(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter message: ".$conn->error);
}

$conn->close();
}
?>





<section class="ftco-section contact-section">
<div class="container">
<div class="row d-flex contact-info">
<div class="col-md-12 mb-4">
<h2 class="h4 font-weight-bold">Contact Information</h2>
</div>

<div class="w-100"></div>

<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Address:</span> Denton Texas</p>
</div>
</div>

<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Phone:</span> <a href="tel://1234567920">+ 1940-565-3000</a></p>
</div>
</div>

<div class="col-md-3 d-flex">
<div class="dbox">
<p><span></span> <a href="mailto:info@yoursite.com"></a></p>
</div>
</div>

<div class="col-md-3 d-flex">
<div class="dbox">
<p><span>Website</span> <a href="#">tad-j.com</a></p>
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

<p>There's no love sincere than love for food</p>

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
	<li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
	<li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
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
                  <input class="form-control mb-2 text-center" placeholder="Enter email address" type="text" name = "email" >
                  <input class="form-control submit px-3" type="submit" value="Subscribe" >
              </div>
          </div>
      </div>
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
<script src="js/jquery.min.js"></script><script src="js/jquery-migrate-3.0.1.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.1.3.js"></script><script src="js/jquery.waypoints.min.js"></script><script src="js/jquery.stellar.min.js"></script><script src="js/owl.carousel.min.js"></script><script src="js/jquery.magnific-popup.min.js"></script><script src="js/aos.js"></script><script src="js/jquery.animateNumber.min.js"></script><script src="js/bootstrap-datepicker.js"></script><script src="js/jquery.timepicker.min.js"></script><script src="js/scrollax.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script><script src="js/google-map.js"></script><script src="js/main.js"></script>



</body>
</html>