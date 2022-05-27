<?php
session_start();

include '../../../assets/config/dbconfig.php';

if (isset($_SESSION['admin']) && isset($_GET['id'])) {
    $adminEmail = $_SESSION['admin'];
} else {
    header("location: ../../employee");
}

$empId = $_GET['id'];

$sql = "DELETE FROM employee WHERE  empId='$empId'";

$result = mysqli_query($con, $sql);

if ($result) {
    $msg = "User Deleted";
    header("Location: ../../employee?suc=$msg");

    exit();
} else {
    $msg = "Delete Failed";
    header("Location: ../../employee?err=$msg");

    exit();
}
