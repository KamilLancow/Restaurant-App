<?php
   session_start();
   $user_session = $_SESSION['user'];
   
   if(!isset($_SESSION['user'])){
      header("location: ../../index.php");
      die();
   }
?>