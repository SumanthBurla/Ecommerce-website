<?php
include 'include/common.php';
if(!isset($_SESSION['id'])){
      header('location:index.php');
  }else{
      session_unset();
      session_destroy();
      header('location:index.php');
  }

  ?>