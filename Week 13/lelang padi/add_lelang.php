<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website &mdash; Lelang Padi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<style>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #F9F3D3;
  padding:20px;
}

.topnav .a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color: black;
  text-align: center;
  padding: 9px;
  padding-left:30px;
  padding-right:30px;
  text-decoration: none;
  font-size: 14px; 
  line-height: 25px;
  border-radius: 20px;
  background-color: #ddd;
  margin-left:20px;
  margin-right:20px;
}
.topnav .right {
float:right;   
}
.container{
  margin-top:50px;
  margin-bottom:50px;
}
/* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
.topnav .a:hover {
  background-color: #FCB346;
  color: white;
}

.topnav .a.active {
  background-color: #FCB346;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: left;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
    border-radius: 0px;
  }
  .topnav.responsive .navbar-brand{
    display:none;
  }
}
@media screen and (max-width: 600px) {
  .cd {
    display: none;
  }
}



</style>
</head>
<body>

<div class="topnav" id="myTopnav">
<div class="right">
<div class="dropdown">
  <button class="btn btn-primary " type="button" data-toggle="dropdown" style="font-size:15px;" aria-haspopup="true" aria-expanded="false">User
  <i class="fas fa-user-circle" style="font-size:15px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="#">Logout</a></li> </ul>
</div>
</div>
<a class="navbar-brand" href="index.html"><img src="image/logo.png" alt="Image"  style="width:30%;"> </img></a>
  <a class="a" href="#news">Home</a>
  <a class="a" href="#news">Daftar Lelang</a>
  <a class="a" href="#contact">Product Lelang</a>
  <a  class="a"href="#about">Review</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<div class="container" style="height:430px;"> 
<div class="form">
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label font-form " style="font-size:14px;">Nama Padi:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control form-control-lg" id="namapadi" placeholder="namapadi" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label font-form" style="font-size:14px;">Deskripsi:</label>
    <div class="col-sm-10">
    <textarea class="form-control form-control-lg" id="deskripsi" rows="3"></textarea>
  </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size:14px;">Berat Padi:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control form-control-lg" id="namapadi" placeholder="Berat padi" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label font-form" style="font-size:14px;">Harga Lelang:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control form-control-lg" id="namapadi" placeholder="Harga Lelang" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label font-form" style="font-size:14px;">Tanggal Tutup:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control form-control-lg" id="namapadi" placeholder="Tanggal-tutup" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label font-form" style="font-size:14px;">Gambar padi:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control form-control-lg"  required>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg" style="font-size:20px;">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4" style=" background-color: #F9F3D3;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 style="margin:20px"class="text-uppercase">Copyright © startend 2022 | By Kelompk 04 A.K.A Slebew</h5>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->

        <ul class="list-unstyled">
          <li>
          <a class="social-media-icon" href="https://link_social_mendia_anda"><span style="font-size:16px" class="fab fa-facebook"> Facebook</span></a>
          </li>
          <li>
          <a class="social-media-icon" href="https://link_social_mendia_anda"><span style="font-size:16px" class="fab fa-instagram"> Instagram</span></a>
          </li>
          <li>
          <a class="social-media-icon" href="https://link_social_mendia_anda"><span style="font-size:16px" class="fab fa-facebook"> Facebook</span></a>
          </li>
        </ul>

      </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

