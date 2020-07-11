<?php
require("includes/common.php");
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
        include('includes/header.php');
        include 'includes/check-if-added.php';
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
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?d=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
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
  <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart </a>
                                    <?php
                                }
                            }
                            ?>  
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
                          <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
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
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
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
  <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
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
                          <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
       
            <?php
            include 'includes/footer.php';
            ?>
       
            
    </body>
</html>
