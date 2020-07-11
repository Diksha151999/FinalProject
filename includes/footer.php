<style>
    footer {
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
}
#1 {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
</style>
<footer>
    <div class="container">
        
            
                <table style="width:200%">
                    <tr>
                    <br>
                    <th>
                        Information
                    </th>
                    <th>
                        My Account 
                    </th>
                    <th>
                        Contact Us
                    </th>
                    </tr>
                    <tr>
                        <td>
                            
                    <a href="aboutus.php" id="1">About us</a>
                        </td>
                        <td>
                            <a href="#" class="trigger-btn"  data-toggle="modal" data-target="#myModal">Login</a>
                        </td>
                        <td>
                            Contact: +91-123-0000000
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="contactus.php" target="_blank" >Contact us </a>
                        </td>
                        <td>
                            <a href="signup.php">Sign Up </a>
                        </td>
                    </tr>
                </table>
    </div>
    </footer>
            
        
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