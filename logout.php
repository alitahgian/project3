<?php
session_start();
session_destroy();

header("LOCATION:desin/login.html");
