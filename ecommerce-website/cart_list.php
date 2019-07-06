<?php
  require 'include/common.php';
  
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
          <?php
            require 'include/header.php';
          ?>             
        
       <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                            <?php
                       
                            $sum=0; 
                            $id=$_SESSION['id'];
                            $select_query="SELECT t.pid,t.name,t.price from items t INNER JOIN user_items us ON
                            t.pid=us.item_id AND us.user_id=$id WHERE us.status='Added to cart' ";
                            $result=mysqli_query($con,$select_query) or die("$select_query");
                            while($row= mysqli_fetch_array($result)){
                                $id=$row['pid'];
                                $name=$row['name'];
                                $price=$row['price'];
                                $sum+=$price;
                                echo "<tr>
                                <td>$id</td>
                                <td>$name</td>
                                <td>$price</td>
                                <td> <a href='cart_remove.php?id={$id}'
                                class='remove_item_link'> Remove</a></td>
                              </tr>";
                            }
                        
                        ?>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td><td>Total</td><td>Rs <?php echo $sum; ?></td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    
        <?php
            require 'include/footer.php';
          ?>
    </body>
</html>