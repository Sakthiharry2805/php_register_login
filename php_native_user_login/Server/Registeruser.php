<?php
require $_SERVER["DOCUMENT_ROOT"] . '/config/database.php';

if (
    isset($_POST['f_name']) || isset($_POST['l_name']) || isset($_POST['email']) || isset($_POST['phone_no']) ||
    isset($_POST['gender']) || isset($_POST['password']) || isset($_FILES['my_image'])
) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $gender = $_POST['gender'];
    $pass = $_POST['password'];
    $password = md5($pass);

    $p_picture = "";
    // echo "<pre>";
    // print_r($_FILES['my_image']);
    // echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $img_size = $_FILES['my_image']['size'];
    $img_error = $_FILES['my_image']['error'];

    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);

    $allowed = array("jpg", "jpeg", "png");
    if (in_array($img_ex_lc, $allowed)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = 'upload/' . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
        $sql = "INSERT INTO user (f_name, l_name, email, phone_no, gender, password, p_picture)
                    VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$phone_no}', '{$gender}', '{$password}','{$new_img_name}')";

        if (mysqli_query($con, $sql)) {
            echo "<div class='alert alert-success'>Successfully Add the user</div>";
            http_response_code(201);
        } else {
            http_response_code(422);
        }
    } else {
        $sql = "INSERT INTO user (f_name, l_name, email, phone_no, gender, password, p_picture)
                    VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$phone_no}', '{$gender}', '{$password}','{$p_picture}')";

        if (mysqli_query($con, $sql)) {
            echo "<div class='alert alert-success'>Successfully Add the user</div>";
            http_response_code(201);
        } else {
            http_response_code(422);
        }
    }
}
// }
// if($img_error ===0)
        // {
        //     // if($img_size > 125000){
        //     //     $em = "Image is too large!";
            //     header("Location: Registeruser.php?error=$em");
        //     // }else{
        //         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        //         $img_ex_lc = strtolower($img_ex);

        //         $allowed = array("jpg","jpeg", "png");
        //         if(in_array($img_ex_lc,$allowed)){
        //             $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
        //             // $img_upload_path = 'upload/'.$new_img_name;
        //             // move_uploaded_file($tmp_name,$img_upload_path);
        //             $sql = "INSERT INTO user (f_name, l_name, email, gender, password, p_picture)
        //             VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$gender}', '{$password}','{$new_img_name}')";

        //             if(mysqli_query($con,$sql))
        //             {   
        //             echo "<div class='alert alert-success'>Successfully Add the user</div>";
        //                 http_response_code(201);
        //             }
        //             else{
        //                 http_response_code(422);
        //             }
        //         }
        //     // }

        // }else{
        //     $em = "Unknown error occurred!";
        //     header("Location: ../views/Register.php?error=$em");
        // }