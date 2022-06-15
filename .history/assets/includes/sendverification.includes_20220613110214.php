<?php
session_start();
include '../config/dbconfig.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "select * from employee where emailAddress = '$email'";

    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        $msg = "Email don't exist";
        header("Location: ../../activate?err=$msg");
        exit();
    } else {
        $token = random_bytes(15);
        $token = bin2hex($token);

        $sql = "update employee set token = '$token' where emailAddress = '$email'";

        $result = mysqli_query($con, $sql);
        if ($result) {
            $subject = "Email Activation";
            $body = "Hi, $name. Click here to activate
        http://localhost/ohrm/activate?token=$token;
        ";
            $headers = "From: management@ohrms.com";

            if (mail($email, $subject, $body, $headers)) {
                $msg = "Please check your email for verification";
                header("Location: ../../login?suc=$msg");
            } else {
                $msg = "Verification Failed";
                header("location: ../../register?suc=$msg");
            }
        } else {
            $msg = "Email Verification has been failed";
            header("location: ../../register?err=$msg");
        }
    }
}
