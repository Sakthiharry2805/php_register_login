<?php
require $_SERVER["DOCUMENT_ROOT"] . '/config/database.php';

if (isset($_POST['email']) || isset($_POST['password'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = md5($pass);
    $sql = "SELECT * FROM user WHERE email='{$email}' and password='{$password}'";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0) {
        session_start();
        $_SESSION['useremail'] = $_POST['email'];
        if (isset($_POST['s_cookie'])) {
            setcookie('useremail', $email, time() + (90 * 24 * 60), "/");
        }
        $status = 1;
        // $_SESSION['email']=1;  
    } else {
        $status = 0;
    }
    // $data['query'] = $query;
    $data['status'] = $status;
    echo json_encode($data);
    exit;
}
