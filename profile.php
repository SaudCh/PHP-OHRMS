<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "./assets/includes/link.includes.php" ?>

    <title>OHRMS</title>
    <style>
        .profile-body {
            min-height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./assets/images/4452961.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid profile-body">
        <div class="row align-items-center justify-content-center" style="min-height: 80vh;">
            <div class="card col-11 col-md-6 cus-card">
                <?php
                $email = $_SESSION['email'];
                $sql = "select * from employee where emailAddress = '$email'";
                $results = mysqli_query($con, $sql);
                $rescheck = mysqli_num_rows($results);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                ?>
                        <div class="card-body">
                            <?php require "./assets/includes/alert.includes.php" ?>
                            <h5 class="card-title" style="font-size: 35px;"><?= $row["name"] ?></h5>
                            <h6 class="card-subtitle mb-3 ">Email: <?= $row['emailAddress'] ?></h6>
                            <h6 class="card-subtitle mb-2">Phone Number: <?= $row['phoneNumber'] ?></h6>
                            <p class="card-text p-0 m-0 mb-2">Gender: <?= $row['gender'] ?></p>
                            <p class="card-text p-0 m-0 mb-2">Department: <?= $row['department'] ?></p>
                            <p class="card-text p-0 m-0 mb-2">Address: <?= $row['address'] ?></p>
                            <a href="update" class="card-link btn btn-sm btn-primary">Update</a>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
    </div>
    <?php require "./assets/Components/footer.php" ?>
</body>

</html>