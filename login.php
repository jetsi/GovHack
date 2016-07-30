


<?php include("header.php");?>


<title> Login</title>
<link type="text/css" href="css/register.css" rel="stylesheet" />



<form class="form-group " id="login_form" action ="login_check.php"  method="post">
    <div id="login_form" class="col-md-4">
    <h1> Login Form</h1>
     <br>
<?php   



?>
    Name:<br>
    <input type="text" name="name"><br><br>
    Password:<br>
    <input type="password" name="password"><br><br>
    <button type="submit" name="submit"> Sign In</button> <button><a href="index.php">back to home page</button>
     <br><br>
    <button id="register"> <a href="register.php">Register here </a></button>
        
        
    </div>
</form>

    


<?php  include("footer.php") ?>