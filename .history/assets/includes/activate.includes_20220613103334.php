<?php
session_start();
include '../config/dbconfig.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $sql = "select * from employee where token = '$token'";

    echo $sql;
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $sql = "update employee set empStatus = 1 where token = '$token'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "Your account has been activated. Please login to continue";
            header("Location: ../../login?suc=$msg");
        } else {
            $msg = "Activation Failed";
            header("Location: ../../login?err=$msg");
        }
    } else {
        $msg = "Activation Failed";
        header("Location: ../../login?err=$msg");
    }
}
