<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "./assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/employee.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>View Attendance</title>

</head>

<body>
    <?php require "./assets/Components/header.php" ?>

    <div class="container-fluid profile-body">
        <div class="row align-items-center justify-content-center" style="min-height: 92vh;">

            <div class="card col-11 col-md-9 cus-card" style="min-height: 80vh;">
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <h3>View Attendance</h3>
                    <input class="border rounded col-2 my-3" style="height:40px;padding-left:10px;background-color:transparent;" type="date" name="date" id="attendance-date">

                </div>

                <?php require "./assets/includes/alert.includes.php" ?>

                <div id="cus-scroll" style="height:60vh;overflow-y:scroll;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="attendance-data">

                            <?php
                            $email = $_SESSION['email'];
                            $sql = "select * from attendance INNER JOIN employee on attendance.empId = employee.empId where employee.emailAddress = '$email'";
                            $results = mysqli_query($con, $sql);
                            $rescheck = mysqli_num_rows($results);
                            if ($rescheck > 0) {
                                while ($row = mysqli_fetch_assoc($results)) {
                            ?>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><?= $row["date"] ?></td>
                                        <td>
                                            <p class="<?= $row['status'] == 'Present' ? 'text-success' : 'text-danger' ?>">
                                                <?= $row['status'] ?> </p>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <?php require "./assets/Components/footer.php" ?>

    <script>
        $(document).ready(function() {
            $("#attendance-date").change(function() {
                var search = $(this).val();
                $.ajax({
                    url: 'search-attendance.php',
                    method: 'post',
                    data: {
                        query: search
                    },
                    success: function(response) {
                        $("#attendance-data").html(response);
                    }
                });
            });
        });
    </script>

</body>

</html>