<?php
session_start();
include_once './db.php';

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM `tbl_user` WHERE u_mail = '$mail' AND u_pass = '$pass' AND u_permission = 'member'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!empty($row)) {
        echo "<script>window.location='./user1/index.php';</script>";
    } else {
        echo "<script>window.location='login.php';</script>";
        $_SESSION['error'] = 'error';
    }
}
?>