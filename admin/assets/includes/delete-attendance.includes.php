<?php
session_start();

include '../../../assets/config/dbconfig.php';

if (isset($_SESSION['admin']) && isset($_GET['date'])) {
    $adminEmail = $_SESSION['admin'];
} else {
    header("location: ../../employee");
}

$date = $_GET['date'];

$sql = "DELETE FROM attendance WHERE  date = '$date'";

$result = mysqli_query($con, $sql);

if ($result) {
    $msg = "Attendance Deleted";
    header("Location: ../../attendance?suc=$msg");

    exit();
} else {
    $msg = "Delete Failed";
    header("Location: ../../attendance?err=$msg");

    exit();
}
