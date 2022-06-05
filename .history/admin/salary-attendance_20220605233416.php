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
            if ($row['status'] == 'Present') {
                $present++;
            } else {
                $absent++;
            }
        }

        $output .= '

        <p class="card-text p-0 m-0 mb-2">Absents: ' . $absent . '</p>
        <p class="card-text p-0 m-0 mb-2">Presents: ' . $present . '</p>    
            ';
    } else {
        $output = '
        <p colspan="5" class="text-center">No Atendance Found</p>
        
        ';
    }

    echo $output;
}
