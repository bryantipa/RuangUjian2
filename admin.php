<?php 
 
include 'login/config.php';
 
error_reporting(0);
 
session_start();
 // jika anda sudah melakukan login sebelumnya, maka anda akan dialihkan ke bagian ujian
if (isset($_SESSION['nim']) || isset($_SESSION['nama'])) {
    header("Location:ujian/");
}else{
    header("location:ujian/index.php");
}
 
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $password = md5($_POST['pass']);
 
    $sql = "SELECT * FROM tb_mhs WHERE nim='$nim' AND login_pass='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nim'] = $row['nim'];
		$_SESSION['nama'] = $row['nama_mhs'];
		$_SESSION['prodi'] = $row['kode_prodi'];
        header("Location:../ujian/index.php");
    } else {
        echo "<script>alert('NIM atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Ujian | UNBN</title>
    <!-- icon -->
    <link rel="icon" href="img/icon-logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">

    <!-- Animation On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg p-2" style="background-color: #108bd3;">
      <div class="container ">
        <a class="navbar-brand" href="#" >
        <img src="img/logo.png" alt="logo.jpg" style="height:40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link"  aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              
              <a class="nav-link"  href="#kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link color-success" href="login/index.php">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">v1.2</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="container text-center p-5 rounded">
    <div class="row">
      <div class="col">
        <h1 style="color:#042940">
          Ujian Secara Online Menggunakan  <span >Ruangujian</span>
        </h1>
        <p>Selamat datang di RuangUjian, anda dapat melakukan ujian secara online dari mana saja.</p>
      </div>
    </div>
  </div>
  <section class="jumbotron ">
    <div class="container rounded-5 text-center shadow p-5" style="background: #fff;">
      <div class="row"> 
        <div class="col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000"> 
          <h3>Ujilah kemampuan Anda dengan mudah dan terpercaya bersama Aplikasi <b>Ruangujian</b>.</h3>
            <p class="pt-3">
            Ingin melakukan ujian dengan lebih mudah dan efisien? Kini, dengan Ruangujian, Anda dapat melakukan ujian secara online tanpa perlu khawatir tentang peralatan atau ruang ujian yang terbatas. 
            </p>  
        </div>
        <div class="col-md-6 text-center"  data-aos="flip-left" data-aos-duration="2000">
          <!-- <p>Daftar disini</p> -->
          
            <a href="login/register.php" style="color:honeydew;text-decoration:none;">
              <button class="btn btn-primary p-3 m-5">
                Daftar sekarang!
              </button>
            </a>
           
        </div>
      </div>
    </div>
  </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- animation On Scroll -->
    <script>
      AOS.init();
    </script>
  </body>
</html>