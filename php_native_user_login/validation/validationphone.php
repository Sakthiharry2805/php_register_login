<?php

 require $_SERVER["DOCUMENT_ROOT"].'/config/database.php'; 
 
    $phone_no=$_REQUEST['phone_no'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE phone_no = '$phone_no'");
    if(mysqli_num_rows($query) > 0)
    {
        echo 'false';
    }else{
        echo 'true';
    }
    exit;
