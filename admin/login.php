<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/admin-styles.css">

    <title>Login</title>
    <style>
        .login-body {
            min-height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: linear-gradient(rgba(250, 174, 54, 0.3), rgba(250, 174, 54, 0.3)), url('../assets/images/4452961.webp');
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
                    <img src="../assets/images/logo.png" width="150" class="img-fluid mb-1" alt=""><br>
                    <span class="fw-bold" style="font-style: italic;">Engage. Produce. Grow.</span><br><br>
                </div>
            </div>
            <div class="col-11 col-md-7 d-flex align-items-center">
                <form method="POST" action="./assets/includes/admin-login.includes.php" style="width:100%" class="mx-0 px-0 px-md-5 mx-md-5">
                    <?php require "../assets/includes/alert.includes.php" ?>
                    <div class="text-center d-md-none">
                        <img src="../assets/images/logo.png" width="150" class="img-fluid mb-1" alt=""><br>
                        <span class="fw-bold" style="font-style: italic;">Engage. Produce. Grow.</span><br><br>
                    </div>
                    <span class="fw-bold h3 mb-1">Welcome to OHRMS</span><br>
                    <span class="text-muted">Login to access admin panel</span><br><br>
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