<?php
require ('includes/common.php');
// Redirects the user to products page if he/she is logged in.
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
        
    <?php 
    include 'includes/header.php';
    ?>
       <div class="container-fluid">
            <div class="row row_style">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4> Samsung Galaxy(6 GB)</h4>
                        </div>
                        <div class="panel-body">
                            <center>
                           <img src="img/1.jpg" alt="">
                            </center>
                        </div>
                        <center>
                        <h3> Rs.16,999 </H3>
                        </center>
                            <button class="btn btn-primary btn-block">Order Now</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Real Me C2(Diamond Blue,3GB RAM)</h4>
                        </div>
                        <div class="panel-body">
                            <center>
                           <img src="img/y.jpg">
                            </center>
                       </div>
                                                <center>
                        <h3> Rs.7,999 </H3>
                        </center>
                        <button class="btn btn-primary btn-block">Order Now</button>  
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>OPPO A5 2020(MIRROR BLACK,3GB RAM)</h4>
                        </div>
                        <div class="panel-body">
                            <center>
                           <img src="img/3.jpg" alt="Responsive image">
                            </center>      
                       </div>
                              <center>
                        <h3> Rs.9,990 </H3>
                        </center>
                        <button class="btn btn-primary btn-block">Order Now</button>
                    </div>
                </div>
            </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Google Pixel 3(Just Black,4GB RAM)</h4>
                        </div>
                        <div class="panel-body">
                            <center>
                           <img src="img/4.jpg" alt="">
                            </center>
                            
                        </div>
                                                <center>
                        <h3> Rs.44,999 </H3>
                        </center>
                            <button class="btn btn-primary btn-block">Order Now</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Iphone X (Silver,64 GB)</h4>
                        </div>
                        <div class="panel-body">
                            <center>
                           <img src="img/5.jpg">
                            </center>
                       </div>
                                                <center>
                        <h3> Rs.85,990 </H3>
                        </center>
                            <button class="btn btn-primary btn-block">Order Now</button>
                    </div>
                </div>
            
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Vivo V11 Pro(Night Black,6GB RAM)</h4>
                        </div>
                        <div class="panel-body">
                            <center>
                           <img src="img/6.jpg" alt="Responsive image">
                            </center>
                       </div>
                                                <center>
                        <h3> Rs.14,990</H3>
                        </center>
                        <button class="btn btn-primary btn-block">Order Now</button>
                    </div>
                </div>
            </div>
       
            <?php
            include 'includes/footer.php';
            ?>
    </body>
</html>