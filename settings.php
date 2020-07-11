<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>


<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Store</title>
        <style>
            .row_style{
                margin-top:100px;
            }
</style>
    </head>
    <body>
        
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
                            <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
     
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-">
                        <br>
                        <br>
                        <br>
                        <form method="POST" action="settings_script.php">
                            <h2> Change Password</h2>
                            <div id="content">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="oldpassword"  >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New Psssword"  name="newpassword">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-Type New Password" name="password" >
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                            <?php
                        echo "<br><br><b class='red'>"  .filter_input(INPUT_GET, 'error') ."</b>";
                        ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <?php include 'includes/footer.php'; ?>
    </body>
    </<html>
        