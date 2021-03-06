<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/admin-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <title>OHRMS</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid profile-body">
        <div class="row align-items-center justify-content-center" style="min-height: 80vh;">

            <div class="card col-11 col-md-9 cus-card">
                <div class="d-flex align-items-center justify-content-between mt-2">

                    <h3>Calculate Salary</h3>
                    <div>
                        <input class="border rounded my-3" style="height:40px;padding-left:10px;background-color:transparent;" value="<?= Date("Y-m") ?>" type="month" name="date" id="attendance-date">

                    </div>

                </div>
                <?php
                $salary = 0;
                $id = $_GET['id'];
                $sql = "select * from employee where empId = '$id'";
                $results = mysqli_query($con, $sql);
                $rescheck = mysqli_num_rows($results);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        $salary = $row['salary'];
                ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["name"] ?></h5>
                            <h6 class="card-subtitle mb-3 ">Email: <?= $row['emailAddress'] ?></h6>
                            <h6 class="card-subtitle mb-2 ">Phone Number: <?= $row['phoneNumber'] ?></h6>
                            <p class="card-text p-0 m-0 mb-2">Salary: <?= $row['salary'] ?></p>


                    <?php }
                } ?>
                    <div id="attendance-data">
                        <?php
                        $absent = 0;
                        $present = 0;

                        $date = date('Y-m');

                        $time = strtotime($date);
                        $month = date("n", $time);
                        $year = date("Y", $time);

                        $type = CAL_GREGORIAN;
                        $day_count = cal_days_in_month($type, (int)$month, $year);

                        $workdays = 0;
                        for ($i = 1; $i <= $day_count; $i++) {

                            $date = $year . '/' . $month . '/' . $i;
                            $get_name = date('l', strtotime($date));
                            $day_name = substr($get_name, 0, 3);

                            if ($day_name != 'Sun' && $day_name != 'Sat') {
                                $workdays++;
                            }
                        }

                        $id = $_GET['id'];
                        $sql = "select * from attendance where empId = '$id' and date like '$date%'";
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
                        <p class="card-text p-0 m-0 mb-2">Total Working Days: <?= $workdays ?></p>
                        <p class="card-text p-0 m-0 mb-2">Absents: <?= $absent ?></p>
                        <p class="card-text p-0 m-0 mb-2">Presents: <?= $present ?></p>

                        <?php
                        if ($present < $workdays - 3) {
                            $ratio = (int)$salary / $workdays;
                            echo '<p class="card-text p-0 m-0 mb-2">Salary: <span class="text-danger">' . round($present * $ratio) . '</span></p>';
                        } else {
                            echo '<p class="card-text p-0 m-0 mb-2">Salary: <span class="text-success">' . $salary  . '</span></p>';
                        }
                        ?>


                    </div>

                        </div>

            </div>
        </div>
    </div>
    <?php require "./assets/Components/footer.php" ?>

    <script>
        $(document).ready(function() {
            $("#attendance-date").change(function() {
                var search = $(this).val();
                var id = <?= $id ?>;
                var salary = <?= $salary ?>;
                $.ajax({
                    url: 'salary-attendance.php',
                    method: 'post',
                    data: {
                        query: search,
                        id: id,
                        salary: salary
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