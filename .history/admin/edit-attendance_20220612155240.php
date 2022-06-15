<?php
if (!isset($_GET['date'])) {
    header("location: attendance");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/admin-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Edit Attendance</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>

    <div class="container-fluid profile-body">
        <div class="row align-items-center justify-content-center" style="min-height: 92vh;">

            <div class="card col-11 col-md-9 cus-card" style="min-height: 80vh;">
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <h3>Update Attendance</h3>
                    <div>
                        <a href="attendance" class="btn btn-sm btn-primary">View All</a>
                        <a href="add-attendance" class="btn btn-sm btn-primary">Add New</a>
                    </div>
                </div>
                <form method="POST" action="./assets/includes/update-attendance.includes.php">
                    <input class="border rounded col-2 my-3" disabled value="<?= $_GET['date'] ?>" style="height:40px;padding-left:10px;" type="date" name="date" id="">
                    <input class="border rounded col-2 my-3" hidden value="<?= $_GET['date'] ?>" style="height:40px;padding-left:10px;" type="date" name="date" id="">
                    <?php require "../assets/includes/alert.includes.php" ?>

                    <div style="height:60vh;overflow-y:scroll;" id="cus-scroll">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="employee-data">

                                <?php

                                $date = $_GET['date'];
                                $sql = "select * from attendance INNER JOIN employee on attendance.empId = employee.empId where date = '$date'";
                                $results = mysqli_query($con, $sql);
                                $rescheck = mysqli_num_rows($results);
                                $count = 0;
                                if ($rescheck > 0) {
                                    while ($row = mysqli_fetch_assoc($results)) {
                                        $count++;
                                ?>
                                        <tr>
                                            <th scope="row"><?= $count ?></th>
                                            <td><?= $row["name"] ?></td>
                                            <td><?= $row['emailAddress'] ?></td>
                                            <td><?= $row['department'] ?></td>
                                            <td>
                                                P <input type="radio" name="attendance[<?= $row['empId'] ?>]" value="Present" <?= $row['status'] == 'Present' ? "checked" : "" ?> id="">
                                                A <input type="radio" name="attendance[<?= $row['empId'] ?>]" value="Absent" <?= $row['status'] == 'Absent' ? "checked" : "" ?> id="">
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-end my-2">
                        <button class="btn btn-sm btn-success align-self-end">Update</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
    <?php require "./assets/Components/footer.php" ?>

</body>

</html>