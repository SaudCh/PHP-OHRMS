<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/admin-login.css">

    <title>Login</title>
    <style>
        .admin-login-left {
            background-color: #fe9117;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-lady-image {
            height: 200px;
            align-self: center;
        }

        .admin-login-form-container {
            z-index: 10;
            position: relative;
        }


        @media screen and (max-width: 786px) {
            .admin-login-form-container {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-4 d-none d-md-flex admin-login-left">
                <div class="text-center">
                    <img src="../assets/images/login.svg" class="login-lady-image" alt="" />
                    <p class="p-0 text-white">
                        Lorem ipsum dolor sit amet consectetur</br>
                        adipisicing elit.Asperiores sed iure unde </br>
                        et molestiae fugiat soluta deleniti ducimus neque
                        optio.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-7 admin-login-form-container">
                <form method="POST" action="./assets/includes/admin-login.includes.php" class="mx-0 px-0 px-md-5 mx-md-5">
                    <?php require "../assets/includes/alert.includes.php" ?>
                    <div class="text-center d-md-none">
                        <img src="../assets/images/login.svg" class="login-lady-image" alt="" />
                        <p class="p-0">
                            Lorem ipsum dolor sit amet consectetur</br>
                            adipisicing elit.Asperiores sed iure unde </br>
                            et molestiae fugiat soluta deleniti ducimus neque
                            optio.
                        </p>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control bg-light" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <button type="submit" name="submit" class="btn text-white" style="background-color: #fe9117;">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>