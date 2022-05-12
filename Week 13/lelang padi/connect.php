<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "lelang_padi";

    $koneksi = mysqli_connect($host,$user,$pass,$db);
    if(!$koneksi){
        die ("Tidak Terkoneksi : " . mysqli_connect_error());
    }
    if(isset($_POST["tujuan"])){

        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            $user = $_POST["nama"];
            $pass = $_POST["password"];
            
            $query_sql = "SELECT * FROM users 
                                   WHERE nama = '$user' AND password = '$pass'";
            
            $result = mysqli_query($koneksi, $query_sql);

            if(mysqli_num_rows($result) > 0){
                echo "<h1>Selamat Datang, ".$user."!</h1>";
            }else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
        }
    }
?>
