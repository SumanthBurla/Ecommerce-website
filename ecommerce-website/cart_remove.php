<?php
include 'include/common.php';
$item_id=$_GET['id'];
$users_id=$_SESSION['id'];

$delete="DELETE FROM user_items WHERE user_id='$users_id' and item_id='$item_id' ";
$result=mysqli_query($con,$delete) or die('die');

header('location:cart.php');

?>