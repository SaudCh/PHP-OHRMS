<?php
session_start();

include '../../../assets/config/dbconfig.php';

if (isset($_SESSION['admin'])) {
    $adminEmail = $_SESSION['admin'];
} else {
    header("location: ../../attendance");
    exit();
}

if (empty($_POST['date'])) {
    $msg = "Date Required";
    header("location: ../../add-attendance?err=$msg");
    exit();
}

$date = $_POST['date'];

$attendance = isset($_POST['attendance']) ? $_POST['attendance'] : "";

$sqlD = "SELECT * FROM attendance WHERE date = '$date' group by date";
$result = mysqli_query($con, $sqlD);
$numRows = mysqli_num_rows($result);

if ($numRows >= 1) {
    $msg = "Atendance Already taken for $date";
    header("location: ../../add-attendance?err=$msg");
    exit();
} else {


    $sql = "select * from employee";
    $results = mysqli_query($con, $sql);
    $rescheck = mysqli_num_rows($results);

    if ($rescheck > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            $id = $row['empId'];
            if (isset($attendance[$id]) && $attendance[$id] == 'Present') {
                $sqlAtt = "INSERT INTO attendance ( empId, status, date) VALUES ( '$id', 'Present', '$date')";
                $result = mysqli_query($con, $sqlAtt);
            } else {
                $sqlAtt = "INSERT INTO attendance ( empId, status, date) VALUES ( '$id', 'Absent', '$date')";
                $result = mysqli_query($con, $sqlAtt);
            }
        }
    }

    if ($result) {
        $msg = "Attendance Added";
        header("location: ../../attendance?suc=$msg");
    }
}
