<?php
$con=mysqli_connect('localhost','root','','store1') or die(mysqli_error($con));

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
                    <h3 align="center"> :( No items added,Add items to cart</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to add items.</p>
                </div>
            </div>
        </div>
        <?php
            require 'include/footer.php';
          ?>
    </body>
</html>
