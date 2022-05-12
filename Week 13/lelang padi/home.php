<?php
session_start();
include 'connect.php';
require_once("function.php");
?>
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
  margin-left:40px;
  margin-right:40px;

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


<!-- TOP HEADER Start
    ================================================== -->
<div class="container">	
	<?php
if($_SESSION["role_id"] == '1'){
  header_s();
};
if($_SESSION["role_id"] == '2'){
  header_t();
};
?>
<br>
<br>
<br>
<br>
<br>
	<!-- End Of /.Container -->

<!-- Username display start -->
	<div class="container-fluid">
	 <?php echo $_SESSION['name']?>
	</div> 
<!-- Username display End -->

<!-- About website brief start -->
	<div class="container-fluid">
<h4 class="text-info">Sistem Informasi Lelang Padi Tobasa</h4><br>
<p> Sistem informasi ini bertujuan untuk mewujudkan keinginan masyarakat Petani di daerah Tobasa yang menginginkan adanya keterbukaan proses lelang padi hasil tani mereka.
	Dikarenakan selama ini proses cenderung dilakukan dan dikuasai tengkulak. Hal ini menurunkan pendapatan para petani secara signifikan.
	Maka dari itu website ini berfokus pada penyediaan layanan lelang online dengan padi objek lelang.
</div>
<!-- About website brief end -->

<br>

	<!-- SLIDER Start
    ================================================== -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/bgindex.JPG" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
	<img src="image/2.JPEG" class="d-block w-100" alt="Second slide">
    </div>
    <div class="carousel-item">
	<img src="image/3.JPEG" class="d-block w-100" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!-- SLIDER End
    ================================================== -->
<br>
<br>

<!-- Features brief -->
<p class="text-center text-success display-4"><b>&mdash; OUR FEATURES &mdash;</b></p>
<br>
<div class="container">
  <div class="row">
    <div class="col order-last">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Ulasan</h5>
    <img src="image/4.JPG" class="card-img-top" alt="Card image cap">
    <p class="card-text"><b>Review</b> dipergunakan untuk melihat ulasan yang dimasukkan oleh pembeli terhadap produk yang sudah dibeli.</p>
    <a href="look_review.php" class="card-link">Click Here</a>
  </div>
</div>
    </div>
    <div class="col">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Mulai Lelang</h5>
    <img src="image/6.JPG" class="card-img-top" alt="Card image cap ">
    <p class="card-text"><b>Produk Lelang</b> menampilkan padi yang kamu tawar dengan harga yang telah kamu masukkan, dan menunggu pemenang dari lelang tersebut.</p>
    <a href="#" class="card-link">Click Here</a>
  </div>
</div>
    </div>
    <div class="col order-first">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Daftar Produk Lelang</h5>
    <img src="image/5.JPG" class="card-img-top" alt="Card image cap">
    <p class="card-text"><b>Daftar Produk Lelang</b> menampilkan padi-padi yang terbaik di daerah TOBASA yang siap untuk kamu tawar dengan harga buka yang ditentukan.</p>
    <a href="daftar_product.php" class="card-link">Click Here</a>
  </div>
</div>
    </div>
  </div>
</div>
<!-- Features brief end -->
<br>
<br>

<!-- About US Start -->
<p class="text-center text-primary display-4"><b>&mdash; ABOUT US &mdash;</b></p>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321045 - Yoas S.M Hutapea</div>
  	<div class="card-body text-dark">
  	<img src="image/team-4.JPG" alt="..." class="img-thumbnail">
  	</div>
	</div>
</div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321043 - Suandika Napitupulu</div>
  	<div class="card-body text-dark">
	  <img src="image/suan.jpg" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321034 - Akdes.S.S</div>
  	<div class="card-body text-dark">
	  <img src="image/akdes.png" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321001 - Krisna Saragih</div>
  	<div class="card-body text-dark">
  	<img src="image/team-4.JPG" alt="..." class="img-thumbnail">
  	</div>
	</div>
</div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321062 - Olyvia Siahaan</div>
  	<div class="card-body text-dark">
	  <img src="image/team-3.JPG" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
    <div class="col-sm">
	<div class="card border-dark mb-3" style="max-width: 18rem;">
  	<div class="card-header">11321072 - Herlina Purba</div>
  	<div class="card-body text-dark">
	  <img src="image/herlina.png" alt="..." class="img-thumbnail">
  	</div>
	</div>
    </div>
  </div>
</div>
	
<!-- About US End -->

<br>
<br>
<!-- Footer End -->

<?php
footer_y();
?>
</footer>
<div class="container">	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>