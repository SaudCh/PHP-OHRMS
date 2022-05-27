<?php
session_start();
include './assets/config/dbconfig.php';
$email = $_SESSION['email'];
$output = '';
if (isset($_POST['query'])) {

    $search = $_POST['query'];
    $sql = "select * from attendance INNER JOIN employee on attendance.empId = employee.empId where employee.emailAddress = '$email' and attendance.date='$search'";
    if ($_POST['query'] == "") {
        $sql = "select * from attendance INNER JOIN employee on attendance.empId = employee.empId where employee.emailAddress = '$email'";
    }
    $result = mysqli_query($con, $sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $status = $row["status"] == "Present" ?
                "<p class='text-success'>Present</p>" : "<p class='text-danger'>Absent</p>";

            $output .= '

            <tr>
                <th scope="row"><?= $rescheck ?></th>
                <td>' . $row["date"] . '</td>
                
                <td>
                ' . $status . '
                </td>
            </tr>
                
           
                ';
        }
    } else {
        $output = '<tr>
        <td colspan="5" class="text-center">No Atendance Found</td>
        </tr>
        ';
    }
    echo $output;
}
