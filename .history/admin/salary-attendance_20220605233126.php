<?php
include '../assets/config/dbconfig.php';
$output = '';
if (isset($_POST['query'])) {
    $id = $_POST['id'];
    $search = $_POST['query'];
    $sql = "select * from attendance where empId = '$id' and date like '$search%'";
    if ($_POST['query'] == "") {
        $search = Date('Y-m');
        $sql = "select * from attendance where empId = '$id' and date like '$search%'";
    }
    $result = mysqli_query($con, $sql);
    $queryResult = mysqli_num_rows($result);
    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        }

        $output .= '

        <tr>
            <th scope="row"><?= $rescheck ?></th>
            <td>' . $row["date"] . '</td>
            
            <td>
            <a href="edit-attendance?date=' . $row['date'] . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="assets/includes/delete-attendance.includes.php?id=' . $row['date'] . '" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
            <a href="view-attendance?date=' . $row['date'] . '" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i></a>
            </td>
        </tr>
            
       
            ';
    } else {
        $output = '<tr>
        <td colspan="5" class="text-center">No Atendance Found</td>
        </tr>
        ';
    }

    echo $output;
}
