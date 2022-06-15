<?php
session_start();
$email = '';

include './assets/config/dbconfig.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    header("location: index");
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
    <title>Login</title>
    <style>
        .login-body {
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: linear-gradient(rgba(250, 174, 54, 0.3), rgba(250, 174, 54, 0.3)), url('./assets/images/4452961.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
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
                <form name="registerform" method="POST" action="./assets/includes/register.includes.php" style="width:100%" onsubmit="return validateform()" style="z-index: 10;position:relative;" class="mx-0 mt-2 px-0 px-md-5 mx-md-5">
                    <div class="mt-3">
                        <?php require "./assets/includes/alert.includes.php" ?>
                    </div>
                    <div class="text-center d-md-none">
                        <img src="./assets/images/logo.png" width="150" class="img-fluid mb-1" alt=""><br>
                        <span class="fw-bold" style="font-style: italic;">Engage. Produce. Grow.</span><br><br>
                    </div>
                    <span class="fw-bold h3 mb-1">Welcome to OHRMS</span><br>
                    <span class="text-muted">Register your account</span><br><br>
                    <div class="mb-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control bg-light" id="name">
                        <p id="nameerr" class="text-danger" style="font-size: 11px;"></p>
                    </div>
                    <div class="mb-1">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phoneNum" class="form-control" id="phone">
                        <p id="phonerr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <div class="mb-1">
                        <label for="department" class="form-label">Department</label>
                        <select name="department" class="form-select" id="department">
                            <option value="">Select Department</option>
                            <option value="IT">IT</option>
                            <option value="Finance">Finance</option>
                            <option value="Marketing">Marketing</option>
                        </select>
                        <p id="depterr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <div class="mb-1">
                        <label for="gender" class="form-label me-2">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <p id="gendererr" class="text-danger" style="font-size: 11px;"></p>
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                        <p id="emailerr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        <p id="passworderr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <div class="mb-1">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                        <p id="addresserr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <p class="already-account-text p-0">Already have an account?<a class="link text-success" href="login">Login here</a></p>
                    <button type="submit" class="btn text-white mb-5 px-4" style="background-color: #faae36;border-radius:20px;">Register</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>