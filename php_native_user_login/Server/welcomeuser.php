<?php

require $_SERVER["DOCUMENT_ROOT"] . '/config/database.php';

$email = $_SESSION['useremail'];
$sql = "SELECT * FROM user WHERE email='{$email}'";
$result = mysqli_query($con, $sql);
$value = mysqli_fetch_assoc($result);
$id = $value['id'];
$f_name = $value['f_name'];
$l_name = $value['l_name'];
$email = $value['email'];
$phone_no = $value['phone_no'];
$gender = $value['gender'];
$img = $value['p_picture'];
