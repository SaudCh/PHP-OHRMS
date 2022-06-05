<?php
if (!isset($_GET['id'])) {
    header("location: employee");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>

    <script src="../assets/Js/updateprofile.js"></script>

    <title>Edit Employee</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="card col-11 col-md-9 my-4 py-4">
                <?php
                $id = $_GET['id'];
                $sql = "select * from employee where empId = '$id'";
                $results = mysqli_query($con, $sql);
                $rescheck = mysqli_num_rows($results);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        $_SESSION["empEmail"] = $row["emailAddress"];
                        $_SESSION['empId'] =  $_GET["id"];

                ?>
                        <form name="updateform" method="POST" action="./assets/includes/update-employee.includes.php" onsubmit="return validateupdateform(this)" style="z-index: 10;position:relative;" class="mx-0 px-0 px-md-5 mx-md-5">
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <h3>Update Employee</h3>
                                <div>
                                    <a href="employee" class="btn btn-sm btn-primary">View All</a>
                                    <a href="add-employee" class="btn btn-sm btn-primary">Add</a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <?php require "../assets/includes/alert.includes.php" ?>
                            </div>
                            <div class="mb-1">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control bg-light" id="name" value="<?= $row['name'] ?>">
                                <p id="nameerr" class="text-danger" style="font-size: 11px;"></p>
                            </div>
                            <div class="mb-1">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" name="phoneNum" class="form-control" id="phone" value="<?= $row['phoneNumber'] ?>">
                                <p id="phonerr" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" name="salary" class="form-control" id="salary" value="<?= $row['salary'] ?>">
                                <p id="salaryerr" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="department" class="form-label">Department</label>
                                <select name="department" class="form-select" id="department">
                                    <option value="">Select Department</option>
                                    <option value="IT" <?= $row["department"] == 'IT' ? "selected" : "" ?>>IT</option>
                                    <option value="Finance" <?= $row["department"] == 'Finance' ? "selected" : "" ?>>Finance</option>
                                    <option value="Marketing" <?= $row["department"] == 'Marketing' ? "selected" : "" ?>>Marketing</option>
                                </select>
                                <p id="depterr" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="gender" class="form-label me-2">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?= $row['gender'] == 'male' ? "checked" : "" ?>>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?= $row['gender'] == 'female' ? "checked" : "" ?>>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <p id="gendererr" class="text-danger" style="font-size: 11px;"></p>
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= $row['emailAddress'] ?>" />
                                <p id="emailerr" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3"><?= $row['address'] ?></textarea>
                                <p id=" addresserr" class="text-danger" style="font-size: 11px;"></p>

                            </div>

                            <button type="submit" class="btn text-white" style="background-color: #fe9117;">Update</button>
                        </form>
                    <?php }
                } else { ?>
                    <p>No Employee for that id</p>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>