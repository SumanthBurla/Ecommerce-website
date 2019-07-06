
<?php
require 'include/common.php';
$email=$_POST['email'];
$name=$_POST['name'];
$passw=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];

$pass_patter='/^[0-9a-zA-Z_]{8,}$/';
$contact_patter='/^[0-9]{10}$/';
$city_patter='/^[a-zA-Z]{3,}$/';

if(!preg_match($pass_patter,$passw) or !preg_match($contact_patter,$contact) )
{
if(!preg_match($pass_patter,$passw)){
    header('location:signup.php?password_error=incorrect');
    
    die();
}
if(!preg_match($contact_patter,$contact)){
  header('location:signup.php?contact_error=incorrect');
  die();
}

}else{

$email = mysqli_real_escape_string($con, $email);
$passwor= mysqli_real_escape_string($con, $passw);
$select_query="select id from users where email='$email' ";
$result=mysqli_query($con,$select_query);

if(mysqli_num_rows($result)>0){
    header('location:signup.php?email_error=email alrady exists');
}else{
    $insert_query="insert into users(email,password,contact,city,address) values('$email','$passwor','$contact','$city','$address')";
    mysqli_query($con,$insert_query);
   $_SESSION['id']=mysqli_insert_id($con);
   $_SESSION['email']=$email;
   header('location:products.php');
}
}


?>