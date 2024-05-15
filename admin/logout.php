<?php
session_start();
if(isset($_SESSION["aid"]))
{
	session_destroy();
	
	echo "<script>alert('Logout');window.location.href='../login.php'</script>";
}
else
{
	echo "<script>alert('First Login Then Goto NaxtZone');window.location.href='../login.php'</script>";
}
?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="min-height:90px;background:orange;font-size:40px;text-align:center;">
<h1 style="text-align:center;text-shadow:2px 2px 2px red;margin-top:8px;">ADMIN ZONE</h1>
</div></div>
<div class="row">
<div class="col-sm-2" style="min-height:500px;background:black;">
<a href="dashboard.php" style="text-decoration:none;margin-top:10px;color:white;font-weight:500;">Dashboard</a><br/><br/>
<a href="appointment.php" style="text-decoration:none;color:white;font-weight:500;">Booking Appointment</a><br/><br/>
<a href="contact.php" style="text-decoration:none;color:white;font-weight:500;">Contact Management</a><br/><br/>
<a href="logout.php" style="text-decoration:none;color:white;font-weight:500;">Logout</a><br/><br/>
</div>
<div class="col-sm-10" style="min-height:600px;background:darkred;">
<h1 style="text-align:center;color:white;">Logout</h1>



</div></div>
</div>

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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>