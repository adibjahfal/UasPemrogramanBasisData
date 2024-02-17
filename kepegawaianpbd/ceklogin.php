<?php
   session_start();
   include "library/config.php";

   $username = $_POST['username'];
   // Enkripsi password dengan md5
   $password = $_POST['password'];

   $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
   $data = mysqli_fetch_array($query);
   $jml = mysqli_num_rows($query);

   if ($jml > 0) {
      // Buat session username dan password
      $_SESSION['username'] = $data['username'];
      $_SESSION['password'] = $data['password'];
      
      // Menuju halaman index
      header('location: index.php');
   } else {
      echo "<p align='center'>Login Gagal</p>";
      echo "<meta http-equiv='refresh' content='2; url=login.php'>";
   }
?>