<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>

    <title>OHRMS</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="min-height: 80vh;">

            <div class="card col-11 col-md-9">
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <form action="">
                        <h3>Edit Salary</h3>
                        <div>
                            <input type="month" id="date" name="date">
                            <button class="btn btn-sm btn-primary" id="search">Search</button>
                        </div>
                    </form>
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
                            <h6 class="card-subtitle mb-3 text-muted">Email: <?= $row['emailAddress'] ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted">Phone Number: <?= $row['phoneNumber'] ?></h6>
                            <p class="card-text p-0 m-0 mb-2">Salary: <?= $row['salary'] ?></p>


                    <?php }
                } ?>

                    <?php
                    $absent = 0;
                    $present = 0;

                    $id = $_GET['id'];
                    $sql = "select * from attendance where empId = '$id' and date > '2022-05-1'";
                    $results = mysqli_query($con, $sql);
                    $rescheck = mysqli_num_rows($results);
                    if ($rescheck > 0) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            if ($row['status'] == 'Present') {
                                $present++;
                            } else {
                                $absent++;
                            }
                        }
                    }
                    ?>

                    <p class="card-text p-0 m-0 mb-2">Absents: <?= $absent ?></p>
                    <p class="card-text p-0 m-0 mb-2">Presents: <?= $present ?></p>
                        </div>

            </div>
        </div>
    </div>
</body>

</html>