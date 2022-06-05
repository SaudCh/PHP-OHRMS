<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <title>OHRMS</title>
    <style>
        .index-body {
            height: 92vh;
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('../assets/images/4452961.webp');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .card {
            width: 300px;
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="index-body">
        <div class="card">
            <a class="btn my-2 text-white" style="background-color: #fe9117;" href="attendance">View Attendance</a>
            <a class="btn my-2" href="add-attendance">Add Attendance</a>
            <a class="btn my-2" href="employee">View Employees</a>
        </div>
    </div>
</body>

</html>