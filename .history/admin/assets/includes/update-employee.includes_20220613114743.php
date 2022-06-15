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

        $token = random_bytes(15);
        $token = bin2hex($token);

        $sql = "UPDATE employee SET name ='$name',phoneNumber = '$phoneNumber', department = '$department', emailAddress = '$preEmail', address = '$address' ,gender = '$gender',tempMail	 = '$email',token = '$token',salary = '$salary'  WHERE emailAddress = '$preEmail'";

        if (mysqli_query($con, $sql)) {

            $subject = "Email Activation";
            $body = "Hi, $name. Click here to activate
        http://localhost/ohrm/activate?etoken=$token;
        ";
            $headers = "From: management@ohrms.com";

            if (mail($email, $subject, $body, $headers)) {
                $_SESSION['email'] = $preEmail;

                $msg = "Employee info Updated. Please Verify your email address to change email";
                header("location: ../../profile?suc=$msg");
            } else {
                $msg = "Verification Failed";
                header("location: ../../register?err=$msg");
            }
        } else {
            $msg = "Employee info Update Failed";
            header("location: ../../employee?err=$msg");
        }
    }
} else {
    $sql = "UPDATE employee SET name ='$name',phoneNumber = '$phoneNumber', department = '$department', emailAddress = '$email', address = '$address' , salary = '$salary',gender = '$gender' WHERE emailAddress = '$preEmail'";

    if (mysqli_query($con, $sql)) {
        $msg = "Employee info Updated";
        header("location: ../../employee?suc=$msg");
    } else {
        $msg = "Employee info Update Failed";
        header("location: ../../edit-employee?err=$msg");
    }
}
