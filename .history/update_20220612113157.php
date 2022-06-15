<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "./assets/includes/link.includes.php" ?>


    <title>OHRMS</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid profile-body">
        <div class="row align-items-center justify-content-center " style="min-height: 80vh;">
            <div class="card col-11 col-md-9 my-4 py-4 cus-card">
                <?php
                $email = $_SESSION['email'];
                $sql = "select * from employee where emailAddress = '$email'";
                $results = mysqli_query($con, $sql);
                $rescheck = mysqli_num_rows($results);
                if ($rescheck > 0) {
                    while ($row = mysqli_fetch_assoc($results)) {

                ?>
                        <form name="updateform" method="POST" action="./assets/includes/update.includes.php" onsubmit="return validateupdateform()" style="z-index: 10;position:relative;" class="mx-0 px-0 px-md-5 mx-md-5">
                            <div class="mt-3">
                                <?php require "./assets/includes/alert.includes.php" ?>
                            </div>

                            <div class="mb-1">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control bg-light" id="name" value="<?= $row['name'] ?>">
                                <p id="nameue" class="text-danger" style="font-size: 11px;"></p>
                            </div>
                            <div class="mb-1">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" name="phoneNum" class="form-control" id="phone" value="<?= $row['phoneNumber'] ?>">
                                <p id="phoneue" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="department" class="form-label">Department</label>
                                <select name="department" class="form-select" id="department">
                                    <option value="">Select Department</option>
                                    <option value="IT" <?= $row["department"] == 'IT' ? "selected" : "" ?>>IT</option>
                                    <option value="Finance" <?= $row["department"] == 'Finance' ? "selected" : "" ?>>Finance</option>
                                    <option value="Marketing" <?= $row["department"] == 'Marketing' ? "selected" : "" ?>>Marketing</option>
                                </select>
                                <p id="deptue" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="gender" class="form-label me-2">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?= $row['gender'] == 'male' ? "checked" : "" ?>>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?= $row['gender'] == 'female' ? "checked" : "" ?>>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <p id="gendererr" class="text-danger" style="font-size: 11px;"></p>
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" value="<?= $email ?>" />
                                <p id="emailerr" class="text-danger" style="font-size: 11px;"></p>

                            </div>
                            <div class="mb-1">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3"><?= $row['address'] ?></textarea>
                                <p id=" adderr" class="text-danger" style="font-size: 11px;"></p>

                            </div>

                            <button type="submit" class="btn text-white" style="background-color: #fe9117;">Update</button>
                        </form>
                <?php }
                } ?>
            </div>
        </div>
    </div>

    <script src="./assets/Js/updateprofile.js"></script>
    <?php require "./assets/Components/footer.php" ?>
</body>

</html>