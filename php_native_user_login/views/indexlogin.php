<?php
require $_SERVER["DOCUMENT_ROOT"] . '/config/baseurl.php';
session_start();
if (!isset($_SESSION['useremail'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <title>welcomeuser</title>    -->
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>/css/user.css" />
</head>

<body>
    <form id="form-logout" action="<?php echo $baseurl ?>/views/logout.php">
        <div class="container-fluid" style="padding-top: 20px; padding-right: 20px;">
            <div id="navbar" class="navbar-collapse collapse">
                <!-- <ul class="nav navbar-nav"> -->
                <button style="float: right;" class="button">Logout</button>
                <!-- </ul> -->
            </div>
        </div>
    </form>
</body>

</html>