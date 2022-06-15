<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/admin-styles.css">

    <title>OHRMS</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid profile-body">
        <div class="row align-items-center justify-content-center" style="min-height: 80vh;">

            <div class="card col-11 col-md-9 cus-card">
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <h3>View Employee</h3>
                    <div>
                        <a href="employee" class="btn btn-sm btn-primary">View All</a>
                        <a href="add-employee" class="btn btn-sm btn-primary">Add</a>
                    </div>
                </div>
                <?php
                $id = $_GET['id'];
                $sql = "select * from employee where empId = '$id'";
                $results = mysqli_query($con, $sql);
                $rescheck = mysqli_num_rows($results);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["name"] ?></h5>
                            <h6 class="card-subtitle mb-3 ">Email: <?= $row['emailAddress'] ?></h6>
                            <h6 class="card-subtitle mb-2 ">Phone Number: <?= $row['phoneNumber'] ?></h6>
                            <p class="card-text p-0 m-0 mb-2">Gender: <?= $row['gender'] ?></p>
                            <p class="card-text p-0 m-0 mb-2">Salary: <?= $row['salary'] ?></p>
                            <p class="card-text p-0 m-0 mb-2">Department: <?= $row['department'] ?></p>
                            <p class="card-text p-0 m-0 mb-2">Address: <?= $row['address'] ?></p>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>
    <?php require "./assets/Components/footer.php" ?>

</body>

</html>