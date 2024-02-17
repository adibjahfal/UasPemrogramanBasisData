<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  // Mengecek session username dan password
  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
      echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
      echo "<meta http-equiv='refresh' content='0; url=login.php'>";
  }else{
    define('INDEX', true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Sistem Informasi Pegawai</title>
  </head>
  <body>
    <!-- Nav Small (header) -->
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-dark">
      <div class="container-fluid">
        <div class="navbar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="images/ffea3ab99d95aca466f5c9f3ccb6a7f3.png_wh860.png" width="50" height="50">
        </div>
        <a class="navbar-brand" href="?hal=dashboard">Tugas UAS Pemrograman Basis Data</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav d-sm-none">
            <li class="nav-item">
              <a class="nav-link text-white" href="?hal=dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="?hal=pegawai"><i class="bi bi-person-lines-fill"></i> Data Pegawai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="?hal=jabatan"><i class="bi bi-sort-down"></i> Data Jabatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="logout.php"><i class="bi bi-box-arrow-left"></i> Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Nav Small -->

    <!-- Container -->
    <div class="container-fluid h-100">
      <div class="row h-100">
        <!-- Nav Big (sidebar) -->
        <nav class="col-md-2 col-sm-3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="?hal=dashboard"><i class="bi bi-house-door-fill"></i> Dashboard</a>
            </li>
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="?hal=pegawai"><i class="bi bi-person-lines-fill"></i> Data Pegawai</a>
            </li>
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="?hal=jabatan"><i class="bi bi-sort-down"></i> Data Jabatan</a>
            </li>
            <li class="list-group-item bg-dark">
              <a class="nav-link text-white" href="logout.php"><i class="bi bi-box-arrow-left"></i> Keluar</a>
            </li>
          </ul>
        </nav>
        <!-- End Nav Big -->

        <!-- Main Content -->
        <div class="col-md-10 col-sm-9 offset-md-2 offset-sm3">
          <section>
            <!-- The Main Content Will Be Here -->
            <?php include "konten.php"; ?>
          </section>
        </div>
        <!-- End Main Content -->
      </div>
    </div>
    <!-- End Container -->


    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
  }
?>