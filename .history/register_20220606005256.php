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
    <link rel="stylesheet" href="./assets/css/register.css" type="text/css">

    <title>Register</title>
</head>

<body style="overflow-x: hidden;">
    <div class="container-fluid">

        <div class="row align-items-center justify-content-center flex-wrap register-container">
            <div class="register-irregular-shape1 d-md-none">
            </div>
            <div class="register-irregular-shape2 d-md-none">
            </div>
            <div class="register-irregular-shape3">
            </div>

            <div class="col-8 col-md-7 register-left-container">
                <div class="text-center d-md-none">
                    <img src="./assets/images/register.svg" class="register-lady-image" alt="" />
                    <p class="p-0" style="font-style: italic;font-weight:500">
                        Personnel really matter!
                    </p>
                </div>
                <form name="registerform" method="POST" action="./assets/includes/register.includes.php" onsubmit="return validateform()" style="z-index: 10;position:relative;" class="mx-0 px-0 px-md-5 mx-md-5">
                    <div class="mt-3">
                        <?php require "./assets/includes/alert.includes.php" ?>
                    </div>

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
                    <p class="already-account-text p-0">Already have an account?<a class="link" href="login">Login here</a></p>
                    <button type="submit" class="btn text-white" style="background-color: #fe9117;">Register</button>
                </form>
            </div>
            <script src="./assets/Js/register.js"></script>
            <div class="col-12 col-md-5 register-right d-none d-md-flex">
                <div class="register-irregular-shape1">
                </div>
                <div class="register-irregular-shape2">
                </div>

                <div class="text-center">
                    <img src="./assets/images/register.svg" class="register-lady-image" alt="" />
                    <p class="p-0" style="font-style: italic;font-weight:500">
                        Personnel really matter!
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>