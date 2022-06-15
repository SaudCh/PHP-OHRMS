<?php
session_start();

if (isset($_SESSION['email'])) {
    $preEmail = $_SESSION['email'];
} else {
    header("location: login");
}

include '../config/dbconfig.php';

$name = $_POST['name'];
$department = $_POST['department'];
$phoneNumber = $_POST['phoneNum'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];

if ($preEmail != $email) {
    $sql = "select * from employee where emailAddress = '$email'";

    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $msg = "Email Already exist";
        header("Location: ../../update?err=$msg");
        exit();
    } else {

        $sql = "UPDATE employee SET name ='$name',phoneNumber = '$phoneNumber', department = '$department', emailAddress = '$preEmail', address = '$address' ,gender = '$gender',tempMail	 = '$email' WHERE emailAddress = '$preEmail'";

        if (mysqli_query($con, $sql)) {

            $_SESSION['email'] = $preEmail;

            $msg = "Employee info Updated. Please Verify your email address to change email";
            header("location: ../../profile?suc=$msg");
        } else {
            $msg = "Employee info Update Failed";
            header("location: ../../update?err=$msg");
        }
    }
} else {
    $sql = "UPDATE employee SET name ='$name',phoneNumber = '$phoneNumber', department = '$department', emailAddress = '$email', address = '$address' ,gender = '$gender' WHERE emailAddress = '$preEmail'";

    if (mysqli_query($con, $sql)) {
        $msg = "Employee info Updated";
        header("location: ../../profile?suc=$msg");
    } else {
        $msg = "Employee info Update Failed";
        header("location: ../../update?err=$msg");
    }
}
