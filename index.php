<?php

session_start();
session_destroy();
include "desin/index.php";
include "conecct_db.php";
if (empty($_SESSION['user'])) {

    header("LOCATION:login.php");
}

$data = Alidata();
