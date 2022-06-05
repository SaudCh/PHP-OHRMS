<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>OHRMS</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="min-height: 80vh;">

            <div class="card col-11 col-md-9">
                <div class="d-flex align-items-center justify-content-between mt-2">

                    <h3>Edit Salary</h3>
                    <div>
                        <input class="border rounded my-3" style="height:40px;padding-left:10px;" value="<?= Date("Y-m") ?>" type="month" name="date" id="attendance-date">

                    </div>

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
                    <div id="attendance-data">
                        <?php
                        $absent = 0;
                        $present = 0;

                        echo date('Y-m');

                        $id = $_GET['id'];
                        $sql = "select * from attendance where empId = '$id' and date like '2022-05%'";
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
    </div>
    <script>
        $(document).ready(function() {
            $("#attendance-date").change(function() {
                var search = $(this).val();
                var id = <?= $id ?>;
                $.ajax({
                    url: 'salary-attendance.php',
                    method: 'post',
                    data: {
                        query: search,
                        id: id
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