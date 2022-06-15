<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "../assets/includes/link.includes.php" ?>
    <link rel="stylesheet" href="./assets/css/admin-styles.css">
    <title>OHRMS</title>

</head>

<body>
    <?php require "./assets/Components/header.php" ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://free4kwallpapers.com/uploads/originals/2015/09/11/office-room-interior-design.jpg" class="d-block w-100" style="height: 70vh;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>OHRMS</h5>
                    <span class="fw-bold" style="font-style: italic;">Engage.</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3712597/pexels-photo-3712597.jpeg?cs=srgb&dl=pexels-david-3712597.jpg&fm=jpg" style="height: 70vh;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>OHRMS</h5>
                    <span class="fw-bold" style="font-style: italic;">Produce.</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/luxury-working-room-executive-office_105762-1725.jpg?w=2000" class="d-block w-100" style="height: 70vh;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>OHRMS</h5>
                    <span class="fw-bold" style="font-style: italic;">Grow.</span>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="container-fluid my-5">
        <div class="row align-items-center justify-content-center">
            <div class="col-6 col-md-3">
                <div class="card">
                    <img src="../assets/images/manageEmp.png" class="card-img-top align-self-center mt-2" style="height: 100px;width:auto;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manage Employees</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a style="background-color: #faae36;" href="#" class="btn text-white">View</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <img src="../assets/images/addEmp.svg" class="card-img-top align-self-center mt-2" style="height: 100px;width:auto;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Add Employees</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a style="background-color: #faae36;" href="#" class="btn text-white">Add</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card">
                    <img src="../assets/images/manatten.svg" class="card-img-top align-self-center mt-2" style="height: 100px;width:auto;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manage Attendance</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a style="background-color: #faae36;" href="#" class="btn  text-white">View</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <?php require "./assets/Components/footer.php" ?>

</body>

</html>