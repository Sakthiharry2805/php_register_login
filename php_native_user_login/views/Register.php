<?php
require 'index.php';
require $_SERVER["DOCUMENT_ROOT"] . '/config/baseurl.php';
// session_start();
if (isset($_SESSION['useremail'])) {
    header('location:welcomeuser.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration form</title>
    <script type="text/javascript" src="<?php echo $baseurl; ?>/css/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>/css/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo $baseurl; ?>/controller/control.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h4>Register User Here!</h4>
                    <form id="form-register" action="<?php echo $baseurl; ?>/Server/Registeruser.php" actionregafter="<?php echo $baseurl; ?>/views/login.php" actionemail="<?php echo $baseurl; ?>/validation/validationemail.php" actionphone="<?php echo $baseurl; ?>/validation/validationphone.php" method="POST" enctype="multipart/form-data">

                        <label>First Name:</label>
                        <input type="text" id="f_name" name="f_name" value="" placeholder="Enter your first name" class="form-control" autofocus><br>

                        <label>Last Name:</label>
                        <input type="text" id="l_name" name="l_name" value="" placeholder="Enter your last name" class="form-control"><br>

                        <label>Email:</label>
                        <input type="email" id="email" name="email" value="" placeholder="Enter your email" class="form-control">
                        <!-- <p><span style="color:red" id="invalid_email"></span></p> -->
                        <br>

                        <label>Contact Info:</label>
                        <input maxlength=10 type="tel" id="phone_no" name="phone_no" value="" placeholder="Enter your contact number" class="form-control">
                        <!-- <p><span style="color:red" id="invalid_email"></span></p> -->
                        <br>

                        <label>Gender:</label>
                        <label class="form-control">
                            <input type="radio" name="gender" value="Male" checked>
                            <label>Male</label>
                            <input type="radio" name="gender" value="Female">
                            <label>Female</label>
                            <input type="radio" name="gender" value="Other">
                            <label>Other</label>
                        </label>
                        <br>

                        <label>Password:</label>
                        <input maxlength=8 id="pass" type="password" name="password" placeholder="Enter your password" class="form-control"><br>

                        <label>Confirm Password:</label>
                        <input maxlength=8 id="con_pass" type="password" name="confirm_password" placeholder="Enter your confirm password" class="form-control">
                        <!-- <p><span style="color:red" id="invalid_con_pass"></span></p> -->
                        <br>

                        <label>Profile Picture:</label>
                        <input type="file" name="my_image" accept="image/*" value="" class="form-control"><br>

                        <!-- <input type="submit" value="Submit" name="submit" class="btn btn-success" > -->
                        <input type="submit" name="register" class="btn btn-success" value="Register">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>