<?php
session_start();

include '../../../assets/config/dbconfig.php';

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
    header("Location: ../../add-employee?err=$msg");
    exit();
} else {
    $sql = "insert into employee (name, phoneNumber, department, emailAddress, password, address,gender) values ('$name','$phoneNumber','$department','$email','$password','$address','$gender')";
    $result = mysqli_query($con, $sql);

    $msg = "Employee Added";
    header("location: ../../employee?suc=$msg");
}
