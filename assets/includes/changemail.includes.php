<?php
session_start();
include '../config/dbconfig.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "select * from employee where token = '$token'";

    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $data = mysqli_fetch_assoc($result);
        $email = $data['tempMail'];
        $sql = "update employee set emailAddress = '$email' where token = '$token'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            session_destroy();
            $msg = "Your email has been changed. Please login again";
            header("Location: ../../login?suc=$msg");
        } else {
            $msg = "Activation Failed";
            header("Location: ../../index?err=$msg");
        }
    } else {
        $msg = "Activation Failed";
        header("Location: ../../index?err=$msg");
    }
}
