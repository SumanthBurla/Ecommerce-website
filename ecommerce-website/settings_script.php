 
<?php
  require 'include/common.php';

  if(!isset($_SESSION['email'])){
    header('location:index.php');
          }
        $checkpas=$_POST['oldpassword'];
        $newpass=$_POST['password'];
        $newpass2=$_POST['password1'];
        $email=$_SESSION['email'];
        
  $select_query="SELECT password FROM users WHERE email='$email'";
  $result=mysqli_query($con,$select_query) or die($select_query);
  $res=mysqli_fetch_array($result);
          if($checkpas==$res['password'] and $newpass==$newpass2){
            
              $updat="update users set password='$newpass' where email='$email' ";
              mysqli_query($con,$updat) or die(mysqli_error($updat)); 
              echo '<center><h3>password_changed</h3></center>';
          }
          else{
              header('location:settings.php?error_change=retry..');
          }
  ?>
