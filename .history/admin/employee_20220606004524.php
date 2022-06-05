<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/employee.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Employee</title>

</head>

<body>
    <?php require "./assets/Components/header.php" ?>

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="min-height: 92vh;">

            <div class="card col-11 col-md-9" style="min-height: 80vh;">
                <div class="d-flex align-items-center justify-content-between mt-2">
                    <h3>Employees</h3>
                    <div>
                        <a href="employee" class="btn btn-sm btn-primary">View All</a>
                        <a href="add-employee" class="btn btn-sm btn-primary">Add</a>
                    </div>
                </div>
                <div class="my-3">
                    <input type="text" class="form-control" id="search-employee" placeholder="Search">
                </div>
                <?php require "../assets/includes/alert.includes.php" ?>

                <div style="height:60vh;overflow-y:scroll;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Actions</th>
                                <th scope="col">Salary</th>

                            </tr>
                        </thead>
                        <tbody id="employee-data">

                            <?php
                            $sql = "select * from employee";
                            $results = mysqli_query($con, $sql);
                            $rescheck = mysqli_num_rows($results);
                            if ($rescheck > 0) {
                                while ($row = mysqli_fetch_assoc($results)) {
                            ?>
                                    <tr>
                                        <th scope="row"></th>
                                        <td><?= $row["name"] ?></td>
                                        <td><?= $row['emailAddress'] ?></td>
                                        <td><?= $row['department'] ?></td>
                                        <td>
                                            <a href="edit-employee?id=<?= $row['empId'] ?>" class="btn btn-sm btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="assets/includes/delete-employee.includes.php?id=<?= $row['empId'] ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                            <a href="view-employee?id=<?= $row['empId'] ?>" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i></a>

                                        </td>

                                        <td>
                                            <a href="edit-salary?id=<?= $row['empId'] ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>

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
    <script>
        $(document).ready(function() {
            $("#search-employee").keyup(function() {
                var search = $(this).val();
                $.ajax({
                    url: 'search-employee.php',
                    method: 'post',
                    data: {
                        query: search
                    },
                    success: function(response) {
                        $("#employee-data").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>