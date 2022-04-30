<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website &mdash; Lelang Padi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<style>
  form{
    margin:50px;
  }
  .form {
  margin:50px;
  padding: 20px;
}
.container{
  border-color:black;
}
.header {
  overflow: hidden;
  background-color: #F9F3D3;
  padding:20px;
}
footer{
  overflow: hidden;
  background-color: #F9F3D3;
  padding: 20px;
}

.header .a {
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
.header .a:hover {
  background-color: #FCB346;
  color: white;
}

.header a.active {
  background-color: #FCB346;
  color: white;
}

.header-center {
  display: flex;
   justify-content: center;
       
}
.header-right {
float:right;    
}
.header a.logo {
  float:left;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-center {
    float: none;
  }
}
  </style>
</head>
<body>

<div class="container">
<div class="header">
          <a class="logo"href="index.php"> <img src="image/logo.png" alt="Image"  style="width:30%;"> </a> </img>
<div class="header-right">
<div class="dropdown">
  <button class="btn btn-primary" type="button" data-toggle="dropdown" style="font-size:15px;" aria-haspopup="true" aria-expanded="false">User
  <i class="fas fa-user-circle" style="font-size:15px;"></i>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li style="font-size:11px;"><a href="#">Profile</a></li>
    <li style="font-size:11px;"><a href="#">Logout</a></li> </ul>
</div>
</div>
  <div class="header-center">
    
    <a class="a" href="home.php">Home</a>
    <a class="a" href="daftar_.php">Daftar Produk Lelang</a>
    <a class="a active" href="add_lelang.php">Produk Lelang</a>
    <a class="a" href="look_review.php">Review</a>
    
</div>
</div>

  
<div class="form">
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Padi</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="namapadi" placeholder="namapadi" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
    <textarea class="form-control" id="deskripsi" rows="3"></textarea>
  </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Berat Padi</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="namapadi" placeholder="Berat padi" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Lelang</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="namapadi" placeholder="Harga Lelang" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Tutup</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="namapadi" placeholder="Tanggal-tutup" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Gambar padi</label>
    <div class="col-sm-10">
      <input type="file" class="form-control"  required>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>
  </div>
</form>
</div>
</div>

<footer> 
<div class="container">
  <div class="row">
    <div class="col">
    <p style="margin-top:20px;text-align:center;">Copyright © startend 2022 | All right Deserve </p>
    </div>
    <div class="col col-lg-2">
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"> Facebook</span></a><br>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-instagram"> Instagram</span></a><br>
    <a class="social-media-icon" href="https://link_social_mendia_anda"><span class="fab fa-facebook"> Facebook</span></a><br>
    </div>
  </div>
</div>
</footer>
</div>
</div>
</div>
