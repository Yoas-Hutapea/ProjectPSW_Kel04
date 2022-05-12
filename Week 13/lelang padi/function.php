<?php
function header_s(){
echo '
<div class="topnav" id="myTopnav">
<div class="right">
<div class="dropdown">
  <button class="btn btn-primary " type="button" data-toggle="dropdown" style="font-size:10px;" aria-haspopup="true" aria-expanded="false">Petani
  <i class="fas fa-user-circle" style="font-size:15px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="logout.php">Logout</a></li> </ul>
</div>
</div>
<a class="navbar-brand" href="index.html"><img src="image/logo.png" alt="Image"  style="width:30%;"> </img></a>
  <a class="a" href="home.php">Home</a>
  <a class="a" href="daftar_lelang.php">Daftar Lelang</a>
  <a class="a" href="add_lelang.php">Product Lelang</a>
  <a  class="a"href="review.php">Review</a>
  

  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>



';
}

function header_t(){
  echo '
<div class="topnav" id="myTopnav">
<div class="right">
<div class="dropdown">
  <button class="btn btn-primary " type="button" data-toggle="dropdown" style="font-size:10px;" aria-haspopup="true" aria-expanded="false">Penawar
  <i class="fas fa-user-circle" style="font-size:12px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="logout.php">Logout</a></li> </ul>
</div>
</div>
<a class="navbar-brand" href="home.php"><img src="image/logo.png" alt="Image"  style="width:30%;"> </img></a>
  <a class="a" href="home.php">Home</a>
  <a class="a" href="daftar_lelang.php">Daftar Lelang</a>
  <a class="a" href="product_lelang.php">Product Lelang</a>
  <a  class="a"href="review.php">Review</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



';
    
}
function footer_y(){
  echo '
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
  
  
';
}
  ?>
