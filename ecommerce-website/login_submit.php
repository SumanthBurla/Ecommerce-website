<?php
  require 'include/common.php';


  $email=mysqli_real_escape_string($con,$_POST['email']);
  $passw=mysqli_real_escape_string($con,$_POST['password']);
  

  $sql_query="select id,email from users where email='$email' and password='$passw' ";
  
  $query_result=mysqli_query($con,$sql_query) ;

  $rows=mysqli_num_rows($query_result);
   if($rows==0){
    $mess = "Invalid Username or Password!";
    header('location: login.php');
 
   }else{
    $rows=mysqli_fetch_array($query_result);
 
    $_SESSION['id']=$rows['id'];
    $_SESSION['email']=$rows['email'];
    header('location:products.php');
   }

?>