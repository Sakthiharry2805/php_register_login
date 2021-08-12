<?php

 require $_SERVER["DOCUMENT_ROOT"].'/config/database.php'; 
 
    $email=$_REQUEST['email'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'");
    if(mysqli_num_rows($query) > 0)
    {
        // $status=1;        
        // $messgae = "Email is already exists";
        echo 'false';
    }else{
        // $status=0;
        // $messgae = "";
        echo 'true';
    }

    // $data['status'] = $status;
    // $data['messgae'] = $messgae;
    // echo json_encode($data);
    exit;
