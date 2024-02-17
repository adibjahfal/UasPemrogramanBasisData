<?php
   session_start();
   // Hapus data session
   session_destroy();
   echo "<p align='center'>Anda telah logout!</p>";
   echo "<meta http-equiv='refresh' content='2; url=login.php'>";
?>