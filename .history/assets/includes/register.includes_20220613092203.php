<?php
session_start();

include '../config/dbconfig.php';

$name = $_POST['name'];
$department = $_POST['department'];
$phoneNumber = $_POST['phoneNum'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$address = $_POST['address'];

$sql = "select * from employee where emailAddress = '$email'";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $msg = "Email Already exist";
    header("Location: ../../register?err=$msg");
    exit();
} else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $token = random_bytes(15);
    $token = bin2hex($token);
    $sql = "insert into employee (name, phoneNumber, department, emailAddress, password, address,gender,token) values ('$name','$phoneNumber','$department','$email','$hashedPassword','$address','$gender','$token')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "Sign up Has been Success";
        header("location: ../../login?suc=$msg");
    } else {
        $msg = "Sign up Has been Failed";
        header("location: ../../register?err=$msg");
    }
}
