<?php 
session_start();
include 'connect.php';

$aid = mysqli_real_escape_string($con, $_POST['aid']);
$pass = mysqli_real_escape_string($con, $_POST['pass']);

$sql = mysqli_query($con, "SELECT * FROM admin WHERE adminid='$aid' AND password='$pass'");

if (mysqli_fetch_array($sql)) {
    $_SESSION['admin'] = $aid; // ✅ Set admin session
    header("location:after_login.php");
    exit();
} else {
    echo "<center><span style='color:red; font-size:2.3em; font-weight:bold;'>Please Enter Valid AdminID and Password</span></center>";
    include "index.php";
}
?>
