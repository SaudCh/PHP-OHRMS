<?php
session_start();
include '../../../assets/config/dbconfig.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from admin where adminEmail = '$email'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_num_rows($query);

    if ($row == 1) {

        $data = mysqli_fetch_assoc($query);
        $hashedPassword = $data['adminPassword'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['admin'] = $email;
            $msg = "Welcome to the Website";
            header("location:../../index?suc=$msg");
        } else {
            $msg = "Incorrect Password";
            header("location:../../login?err=$msg");
        }
    } else {
        $msg = "Incorrect Email";
        header("location:../../login?err=$msg");
    }
}
