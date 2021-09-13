<?php

session_start();
session_destroy();
include "desin/login.html";
include "conecct_db.php";

if (!empty($_SESSION['user'])) {
    header("LOCATION:index.php");
}

if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email'] && !empty($_POST['password']))) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $newp = pass_user($password);
    
  
    $userdata = login($email, $password);
   
    if (!empty($userdata)) {
        $_SESSION['user'] = $userdata;
        header("LOCATION:index.php");
    } else {
        echo "inveld user and pass";
    }
}
