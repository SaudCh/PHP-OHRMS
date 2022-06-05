<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>

    <script src="./assets/js/addEmp.js"></script>

    <title>Add Employee</title>
</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="card col-11 col-md-9 my-4 py-4">

                <form name="registerform" method="POST" action="./assets/includes/add-employee.includes.php" onsubmit="return validateform()" style="z-index: 10;position:relative;" class="mx-0 px-0 px-md-5 mx-md-5">
                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <h3>Add Employee</h3>
                        <div>
                            <a href="employee" class="btn btn-sm btn-primary">View All</a>
                            <a href="add-employee" class="btn btn-sm btn-primary">Add</a>
                        </div>
                    </div>
                    <div class="mt-3">
                        <?php require "../assets/includes/alert.includes.php" ?>
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
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" name="salary" class="form-control" id="salary">
                        <p id="salaryerr" class="text-danger" style="font-size: 11px;"></p>

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
                        <input type="email" name="email" class="form-control" id="email" />
                        <p id="emailerr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="password" />
                        <p id="passerr" class="text-danger" style="font-size: 11px;"></p>

                    </div>
                    <div class="mb-1">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                        <p id=" addresserr" class="text-danger" style="font-size: 11px;"></p>

                    </div>

                    <button type="submit" class="btn text-white" style="background-color: #fe9117;">Add</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>