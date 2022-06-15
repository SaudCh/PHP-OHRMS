<?php
include '../assets/config/dbconfig.php';
$output = '';
if (isset($_POST['query'])) {

    $search = $_POST['query'];
    $sql = "SELECT * FROM employee WHERE name LIKE '%$search%'";
    $result = mysqli_query($con, $sql);
    $queryResult = mysqli_num_rows($result);
    $count = 0;
    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $count++;
            $output .= '

            <tr>
                <th scope="row">' . $count . '</th>
                <td>' . $row["name"] . '</td>
                <td>' . $row['emailAddress'] . '</td>
                <td>
                <?php
                if (' . $row['empStatus'] . ' == 1) {
                    Active
                } else {
                    echo "Inactive";
                }
                ?>
                </td>
                <td>' . $row['salary'] . '</td>
                <td>
                    <a href="edit-salary?id=' . $row['empId'] . '" class="btn btn-sm btn-success"><i class="fa-solid fa-sack-dollar"></i></a>
                </td>
                <td>
                    <a href="edit-employee?id=' . $row['empId'] . '" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="assets/includes/delete-employee.includes.php?id=' . $row['empId'] . '" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    <a href="view-employee?id=' . $row['empId'] . '" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i></a>
                    </td>
            </tr>
                
           
                ';
        }
    } else {
        $output = '<tr>
        <td colspan="6" class="text-center">No Employee Found</td>
        </tr>
        ';
    }
    echo $output;
}
