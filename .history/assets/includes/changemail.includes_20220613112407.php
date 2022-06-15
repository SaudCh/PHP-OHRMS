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
        $email = $data['emailAddress'];
        $sql = "update employee set emailAddress = '$email' where token = '$token'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "Your account has been activated. Please login to continue";
            header("Location: ../../index?suc=$msg");
        } else {
            $msg = "Activation Failed";
            header("Location: ../../login?err=$msg");
        }
    } else {
        $msg = "Activation Failed";
        header("Location: ../../login?err=$msg");
    }
}
