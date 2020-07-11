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
            .table1{
                width: 80%;
                margin-left:150px;
            }
            
</style>
    </head>
    <body>
        
<?php include 'includes/header.php'; ?>
        <BR>
        <BR>
        <BR>
        <br>
        <br>
        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <p>Don't have account?<a href="#"> Register</a> </p>
                    <div class="form-group">
                        
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="" placeholder="Email">
                        </div>
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
         
                
        <table class="table1">
            <tr>
            
                <th><h4> WHO WE ARE</h4>
                </TH>
                <TH><h4> OUR HISTORY </h4></TH>
                <TH><h4>OPPORTUNITIES </h4></TH>
            
            </tr>
                <tr>
                    <td>
                        <img src="img/e.jpg">
                        <br>
                        E-store is American electronics commerce<br>
                        company with headquater in Washington. It is<br> the largest Internet-based retailer in the United<BR>states.E-store started as an online blog, but<br> soon diversified, selling mobile phones.E-store <br>also sells certain low-end product like USB<br>cables and other 
                       accessories. E-store has<br>a separate retail website for United States,United<br>Kingdom and Ireland, France,Canada, Germany,<br>Italy, Spain.
                    </td>
                <td>
                <font color="blue">1998-<br>
                </font>
                The company was founded in 1998, spurred by<br>
what Velos called his "Initiating framework", which <br>
described his efforts as an initiate to participate in <br>
the internet business boom during that time <br>
In 1998, Velos left his employment as president of<br>
Ofcol & Co. and moved to Seattle. He began to <br>
work on a business plan for what would eventually<br>
become E Store.<br>
<br>
<font color="blue">2002-<br></font>
in January 2002. E store has received a funding <br>
of $12 million from Venture Partners and indo US <br>
Venture Partners.<br>
<br>
<font color="blue">
2008-<br></font>
in July 2008 the company raised a further $45 <br>
miles from Bessemer Venture Partners, along<br>
with existing investors Venture Partners and indo-<br>
US Venture Partners.<br>
<br>
<font color="blue">
2015-<br></font>
E-Store received its Srd round of funding of <br>
million on Feb 2015. The 3rd round of funding <br>
was led by Fcom with all the current institutional<br>
FIvestars including Kalaari Capital venture.
                </td>
                <td>
                    Available Roles<br>
                    <br>
        1. Jr./Sr. Web Developer (Full Time Role +
        <br>
        also available as a 6 Months Internship)
        <br>
        <br>
2. Business Apprentice [6 Months Internship]
<br>
<br>
3. Manager at backend operations [Full Time Role
<br>+ also available as a 6 Months Internship]
                </td>
                </tr>
            </table>
        
       <?php include 'includes/footer.php'; ?>
    </body>
</html>