<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: homepage.php');
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
        
<?php include 'includes/header.php'; ?>
        
        
        <br>
        <br>
        <div class="container">
        <div class="row">
  <div id="column" >
      <img src="img/yess.jpg">
  </div>
            <br>
            
  <div id="column">
<div class="container-fluid">
            <div class="row">
                    <div class="col-xs-12">
                       
                        <form method="POST" action="signup_script.php">
                            <h2> SIGN UP </h2>
                            <div id="content">
                            <div class="form-group">
                                <input class="form-control input-lg" placeholder="Name" name="name"  >
                            </div>
                            <div class="form-group">
                                <div>
                                <input type="email" class="form-control input-lg"  placeholder="Email"  name="email" required = "true">
                                </div>
                                <div><?php echo filter_input(INPUT_GET, 'm1');
                                        
                                ?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" placeholder="Password" name="password" >
                            </div>
                            <div class="form-group">
                                <div>
                                <input type="number" class="form-control input-lg"  placeholder="Contact" name="contact" >
                                </div>
                                <div>
                                    <?php echo filter_input(INPUT_GET, 'm2');
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg"  placeholder="City" name="city" >
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg"  placeholder="Address" name="address">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary" inline="right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
  </div>
        </div>
</div>
        
       <?php include 'includes/footer.php'; ?>
    </body>
</html>