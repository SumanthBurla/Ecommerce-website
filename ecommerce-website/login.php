  <?php
  require 'include/common.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | Life Style Store</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
          <?php
         require 'include/header.php';
           ?>

        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <div><?php if(isset($mess)){ echo $mess; } ?></div>
                                        <label>Email :</label><input type="email" class="form-control"  placeholder="name@example.com" name="email" required>
                                    </div>
                                    <div class="form-group">
                                    <label>Password :</label><input type="password" class="form-control" placeholder="●●●●●●●●" name="password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
          require 'include/footer.php';
           ?>

    </body>
</html>