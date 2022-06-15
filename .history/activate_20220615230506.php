<?php
session_start();
include './assets/config/dbconfig.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    header("Location: ./assets/includes/activate.includes.php?token=$token");
}
if (isset($_GET['etoken'])) {
    $token = $_GET['etoken'];
    header("Location: ./assets/includes/changemail.includes.php?token=$token");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "./assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/login.css" type="text/css">
    <title>Activate</title>
</head>

<body>
    <div class="container-fluid login-body p-5" style="min-height: 100vh;">
        <div class="row  login-card" style="width: 100%;min-height:80vh;">
            <div class="col-5 d-none d-md-flex justify-content-center align-items-center" style="background-color: rgba(250, 174, 54, 0.6);border-top-left-radius:20px;border-bottom-left-radius:20px;">
                <div class="text-center">
                    <img src="./assets/images/logo.png" width="150" class="img-fluid mb-1" alt=""><br>
                    <span class="fw-bold" style="font-style: italic;">Engage. Produce. Grow.</span><br><br>
                </div>
            </div>
            <div class="col-11 col-md-7 d-flex align-items-center">
                <form method="POST" action="./assets/includes/sendverification.includes.php" style="width:100%" class="mx-0 px-0 px-md-5 mx-md-5">
                    <?php require "./assets/includes/alert.includes.php" ?>
                    <div class="text-center d-md-none">
                        <img src="./assets/images/logo.png" width="150" class="img-fluid mb-1" alt=""><br>
                        <span class="fw-bold" style="font-style: italic;">Engage. Produce. Grow.</span><br><br>
                    </div>
                    <span class="fw-bold h3 mb-1">Activate</span><br>
                    <span class="text-muted">Your account is not active. We will send you an email to activate your account</span><br><br>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control bg-light" id="email">
                    </div>
                    <p class="already-account-text">New to OHRMS?<a class="link text-success" href="register">Register here</a></p>
                    <button type="submit" name="submit" class="btn text-white px-5 mb-4" style="background-color: #faae36;border-radius:20px;">Reset</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>