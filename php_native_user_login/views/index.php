<?php
require $_SERVER["DOCUMENT_ROOT"] . '/config/baseurl.php';
session_start();
if (isset($_SESSION['useremail'])) {
    header('location:welcomeuser.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <title>User Details</title>   -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/css/user.css" />
</head>

<body>
    <div class="container-fluid" style="padding-top: 20px; padding-left: 20px;">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <button class="button"><a href="Register.php">Register</a></button>
                <button class="button1"><a href="login.php">login</a></button>
            </ul>
        </div>
    </div>
</body>

</html>