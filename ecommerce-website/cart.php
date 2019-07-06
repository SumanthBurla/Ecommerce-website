 
 <?php
  require 'include/common.php';
  if(!isset($_SESSION['id'])){
    header('location:login.php');
  }

  $user_id=$_SESSION['id'];
  $select_query="SELECT t.pid,t.name,t.price from items t INNER JOIN user_items us ON
   t.pid=us.item_id AND us.user_id='$user_id' WHERE us.status='Added to cart' ";
  $result=mysqli_query($con,$select_query) or die("$select_query");
   if(mysqli_num_rows($result) ==0){
        include 'include/confirm.php';
   }else{
    header('location:cart_list.php');
   }
  

  
?>

