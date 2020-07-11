<?php
                if (isset($_SESSION['email'])) {
                    ?>

<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                            <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                            <li><a href = "logout_script"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<?php
                } else {
                    ?>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#" class="trigger-btn"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        
                 
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                        <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<?php 
                }
                ?>
        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
                <form role="form"  action="login_submit.php" method="POST">
                    <input type="hidden" name="_token" value="">
                    <p>Don't have account?<a href="signup.php"> Register</a> </p>
                    <div class="form-group">
                        
                        <div>
                            <input type="email" class="form-control input-lg" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                  
                        </div>
                        <div><?php echo filter_input(INPUT_GET, 'error') ?></div>
                    </div>
                    <div class="form-group">
                        
                        <div>
                            <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <br>
                            <br>
                            <a href="#">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
        </div>
        </div>
               