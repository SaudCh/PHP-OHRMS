<?php
session_start();

include '../../../assets/config/dbconfig.php';

if (isset($_SESSION['admin']) && isset($_SESSION['empId'])) {
    $adminEmail = $_SESSION['admin'];
} else {
    header("location: ../../employee");
}

$empId = $_SESSION['empId'];
$preEmail = $_SESSION['empEmail'];
$name = $_POST['name'];
$department = $_POST['department'];
$phoneNumber = $_POST['phoneNum'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$salary = $_POST['salary'];

if ($preEmail != $email) {

    $sql = "select * from employee where emailAddress = '$email'";

    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $msg = "Email Already exist";
        header("Location: ../../edit-employee?id=$empId&err=$msg");

        exit();
    } else {

        $sql = "UPDATE employee SET name ='$name',phoneNumber = '$phoneNumber', department = '$department', emailAddress = '$email', address = '$address', salary = '$salary' ,gender = '$gender' WHERE emailAddress = '$preEmail'";

        if (mysqli_query($con, $sql)) {

            $_SESSION['email'] = $email;

            $msg = "Employee info Updated";
            header("location: ../../employee?suc=$msg");
        } else {
            $msg = "Employee info Update Failed";
            header("location: ../../edit-employee?err=$msg");
        }
    }
} else {
    $sql = "UPDATE employee SET name ='$name',phoneNumber = '$phoneNumber', department = '$department', emailAddress = '$email', address = '$address' ,gender = '$gender' WHERE emailAddress = '$preEmail'";

    if (mysqli_query($con, $sql)) {
        $msg = "Employee info Updated";
        header("location: ../../employee?suc=$msg");
    } else {
        $msg = "Employee info Update Failed";
        header("location: ../../edit-employee?err=$msg");
    }
}
