<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website &mdash; Lelang Padi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
  form{
    margin-left:15px;
  }
  .form {
  margin:50px;
  padding: 20px;
}
.container{
  border-color:black;
}
.checked {
  color: orange;
  width: 15px;
  margin-left:5px;
}

.button{
margin-left:23cm;
}
article {
    overflow: hidden;
    width: 450px;
    float: left;
}
.header {
  overflow: hidden;
  background-color: #F9F3D3;
  padding:20px;
}
.gambar1{
  float:left;
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
caption {
  text-align: center;
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
.prof{
  border-radius: 180px;
}
#staticName{
  text-align : center;
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
    
    <a class="a" href="index.php">Home</a>
    <a class="a" href="daftar_.php">Daftar Lelang</a>
    <a class="a" href="add_lelang.php">Produk Lelang</a>
    <a class="a active" href="look_review.php">Review</a>
    
</div>
</div>

<div class="form">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="https://asset.kompas.com/crops/LGAgi_MJUfH5cG6u2abHw388cqw=/0x1:1840x1228/750x500/data/photo/2021/03/19/6054746e2e62f.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col">
                  <div class="mb-3 row">
                  <label for="staticName" class="col-sm-2 col-form-label">Nama Penawar</label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticName" value="Yoas">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">No Telephone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="text">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Harga Tawar</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="text">
                  </div>
              </div>
            </div>
          </div>
          <br>
        </div class="row">

        <div class="row">
          <div class="col">
            <p font-size="20px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
               Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div class="col">
          <div class="col">
              <center><img src="https://d220hvstrn183r.cloudfront.net/attachment/36170596897847692237.large" class="prof" width="50%" class="img-fluid" alt="...">
                <caption>
                  <input type="label" readonly class="form-control-plaintext" id="staticName" value="Petani">
                </caption>
              </center>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">No Rekening bank a</div>
                   xxx xxx xxx
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">No Rekening bank b</div>
                   xxx xxx xxx
                </div>

              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">No Rekening bank c</div>
                  xxx xxx xxx
                </div>
              </li>
            </ol>
          </div class="col">
        </div class="row">
        </div>  
        <br><br>
    <div class="container">
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Anonim....</div>
                  Rp. xxx xxx xxx
                </div>

              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Anonim....</div>
                  Rp. xxx xxx xxx
                </div>

              </li>
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                  <div class="fw-bold">Anonim....</div>
                  Rp. xxx xxx xxx
                </div>
              </li>
            </ol>
        </div>
      </div>
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

