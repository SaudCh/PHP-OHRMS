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
</head>

<body style="overflow: hidden;">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center login-container">
            <div class="login-irregular-shape1 d-block d-md-none">
            </div>
            <div class="login-irregular-shape2 d-block d-md-none">
            </div>
            <div class="login-irregular-shape3">
            </div>

            <div class="col-10 col-md-7 login-left">
                <form method="POST" action="./assets/includes/login.includes.php" style="z-index: 10;position:relative;" class="mx-0 px-0 px-md-5 mx-md-5">
                    <?php require "./assets/includes/alert.includes.php" ?>
                    <div class="text-center d-md-none">
                        <img src="./assets/images/login.svg" class="login-lady-image" alt="" />
                        <p class="p-0" style="font-style: italic;">
                            Personnel really matter!
                        </p>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control bg-light" id="email">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <p class="already-account-text">New to OHRMS?<a class="link" href="register">Register here</a></p>
                    <button type="submit" name="submit" class="btn text-white" style="background-color: #fe9117;">Login</button>
                </form>
            </div>
            <div class="col-12 col-md-5 login-right d-none d-md-flex">
                <div class="login-irregular-shape1">
                </div>
                <div class="login-irregular-shape2">
                </div>

                <div class="text-center">
                    <img src="./assets/images/login.svg" class="login-lady-image" alt="" />
                    <p class="p-0">
                        Lorem ipsum dolor sit amet consectetur</br>
                        adipisicing elit.Asperiores sed iure unde </br>
                        et molestiae fugiat soluta deleniti ducimus neque
                        optio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>