<?php
require 'index.php';
// session_start();
if (isset($_SESSION['useremail'])) {
    header('location:welcomeuser.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login form</title>
    <script type="text/javascript" src="<?php echo $baseurl; ?>/css/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>/controller/control.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h4>Login User Here!</h4>
                    <form id="form-login" style="padding-bottom: 10px;" action="<?php echo $baseurl ?>/Server/loginuser.php" actionlogafter="<?php echo $baseurl ?>/views/welcomeuser.php" method="POST">

                        <label>Email:</label>
                        <input type="text" name="email" value="" placeholder="Enter your email" class="form-control" autofocus required><br>

                        <label>Password:</label>
                        <input type="password" name="password" value="" placeholder="Enter your password" class="form-control" required>
                        <p><span style="color:Tomato" id="invalid"></span></p>
                        <br>

                        <input type="submit" name="login" class="btn btn-success" value="login">

                        <span class="psw" style="float: right;">Forgot <a href="#">password?</a></span>

                    </form>
                    <span class="psw">Don't have an account?<a href="<?php echo $baseurl; ?>/views/register.php">Register here!</a></span>
                </div>

            </div>
        </div>
    </div>
</body>

</html>