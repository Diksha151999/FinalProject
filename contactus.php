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
                width: 90%;
                margin-left:50px;
            }
            
</style>
    </head>
    <body>
        
        <?php include 'includes/header.php'; ?>
        <br>
        <br>
          
        <table class="table1">
            <tr>
                <th><h3>
                    LIVE SUPPORT
                    </h3>
                </th>
                <th>
                    
                </th>
                
            </tr>
            <tr>
                <td>
                    24 hours | 7 days a week | 365 days a year Live Technical Support<br><br>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem<br>
                    Ipsum is that has a more-or-less normal distribution of letters. There are many variations of passages of Lorem Ipsum available, but the majority <br>
                    have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a <br>
                    passage of Lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                </td>
                <td>
                    <img src="img/contact.png">
                    <br>
                    <br>
                </td>
            </tr>
      
            <tr>
                <th> CONTACT US</th>
            <br>
            <br>
                <TH> COMPANY INFORMATION</th>
            </tr>
            <tr>
            <td>
             <div id="content">
                 
                            <div class="form-group">
                                <label for="message">Name:</label>
                                <input class="form-control input-lg" name="name1"  >
                            </div>
                 
                            <div class="form-group">
                                <label for="message">Email:</label>
                                <input type="email" class="form-control input-lg"  name="e-mail1">
                            </div>
                     <div class="form-group">
      <label for="message">Mesage:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
                     </div>
                  <button type="submit" name="submit" class="btn btn-primary" inline="right">Submit</button>
                            </div>
             </td>
             <td>
                 500 Lorem Ipsum Dolor Sit,<BR>
                 22-56-2-9 Sitamet. Lorem,<br>
                 USA<br>
                 Phone: 00222666444<br>
                 FAX:(000) 000 00 00 0<br>

                 Email info@mycompany.com<br>
                 Follow on: Facebook, Twitter<br>
             </td>
        </tr>
        </table>
    </body>
    <?php include 'includes/footer.php'; ?>
</html>