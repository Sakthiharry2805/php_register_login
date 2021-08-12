<?php
session_start();

session_unset();
session_destroy();

// echo "SuccessFully Logout";
header('location:login.php');
