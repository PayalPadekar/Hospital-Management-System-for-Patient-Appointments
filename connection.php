<?php
error_reporting("E_ALL");
$pagename=basename($_SERVER['PHP_SELF']);
if($pagename=='index.php'){
    session_start();
    session_destroy();
}
session_start();
date_default_timezone_set('Asia/Kolkata');
$servername="localhost";
$username="root";
$password="";
$con=mysqli_connect($servername, $username, $password);
if(!$con){
    die('connection not successful please check again.');
} else{
    // echo "connection successfully.";
}
mysqli_select_db($con,"medicaldb");
?>