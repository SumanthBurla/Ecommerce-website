<?php
include 'include/common.php';

$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$insert="INSERT INTO user_items(user_id,item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";
mysqli_query($con,$insert) or die("ncskjnc");
header('location:products.php');
?>