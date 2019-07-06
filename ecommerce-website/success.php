
<?php
  require 'include/common.php';
  if(!isset($_SESSION['email'])){
      header('location:index.php');
  }
  $user_id=$_SESSION['id'];
  $update="UPDATE user_items SET status='confirmed' WHERE user_id=$user_id";
  $result=mysqli_query($con,$update) or die($update);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
            require 'include/header.php';
          ?>   
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <?php
            require 'include/footer.php';
          ?>
    </body>
</html>