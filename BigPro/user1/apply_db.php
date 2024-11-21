<?php
session_start();
include_once '../db.php';

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $mail = $_POST['e-mail'];
    $pass = $_POST['pass'];
    $cfpass = $_POST['cfpass'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `tbl_user`(`u_name`, `u_mail`, `u_pass`, `u_cfpass`, `u_username`, `u_phone`) 
    VALUES ('$user','$mail','$pass','$cfpass','$username','$phone')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>window.location='../login.php';</script>";
        $_SESSION['insert'] = 'insert';
    } else {
        echo "<script>alert('Error!!!'); window.location='apply.php';</script>";
    }
}
?>
