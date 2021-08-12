<?php
require 'indexlogin.php';
// session_start();
if (!isset($_SESSION['useremail'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome user</title>
    <script type="text/javascript" src="<?php echo $baseurl; ?>/css/icon.js"></script>
</head>

<body>
    <?php
    require $_SERVER["DOCUMENT_ROOT"] . '/Server/welcomeuser.php';
    // echo $_SERVER["DOCUMENT_ROOT"];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <a class="btn" href="<?php echo $baseurl ?>/views/edit.php" style="float: right;"><i class="fas fa-edit" style="font-size: 25px;"></i></a>
                    <h4>Welcome <?php echo $f_name; ?>!</h4>
                    <div id="imageContainer">
                        <form id="form-welcome" action="">
                            <img src="<?php echo $baseurl; ?>/Server/upload/<?php echo $img; ?>" onerror="this.src='<?php echo $baseurl; ?>/Server/upload/download.png'" alt="User profile picture" class="center" width="200" height="250">
                            <!-- <i style='font-size:24px' class='fas'>&#xf044;</i> -->
                            <h5><b>Username:</b> <?php echo $f_name . " " . $l_name; ?></h5>
                            <h5><b>useremail:</b> <?php echo $email; ?></h5>
                            <h5><b>Contact Info:</b> <?php echo $phone_no; ?></h5>
                            <h5><b>Gender:</b> <?php echo $gender; ?></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>