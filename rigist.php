<?php
session_start();

include "conecct_db.php";
include "desin/rigist.html";


if(!empty($_SESSION['user'])){
    header("LOCATION:index.php");
}

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    // $newp = pass_user($password);
    $ri = rigist ($username,$email,$password);
    if($ri== true){
        
        echo "yes add new user";

    }else{

        echo "not add in error ";
    }
    if ($ri == true){
        header("LOCATION:desin/login.html");

    
    }
    
    }
?>