

<div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav" >
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php if(isset($_SESSION['id'])) { ?>
                          <a href="products.php" class="navbar-brand">Lifestyle Store</a>
                           <?php }else{ ?>
                             <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                             <?php }  ?>
                </div>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="nav navbar-nav navbar-right">
                               <?php if(isset($_SESSION['id'])) { ?>
                            <li><a href="cart.php" class="glyphicon glyphicon-tasks"> Cart</a></li>
                            <li><a href="settings.php" class="glyphicon glyphicon-cog"> Settings</a></li>
                            <li><a href="logout.php" class="glyphicon glyphicon-copy"> Logout</a></li>
                      <?php }else{ ?>
                            <li><a href="signup.php" class="glyphicon glyphicon-paste"> SignUp</a></li>
                            <li><a href="login.php" class="glyphicon glyphicon-user"> Login</a></li>
                            
                       <?php }  ?>

                           
                              
                    </ul>
                </div>
            </div>
</div>
