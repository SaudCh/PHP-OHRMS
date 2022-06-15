<?php
session_start();
$email = '';

include './assets/config/dbconfig.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header("location: login");
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index">
            <img src="assets/images/logo.png" alt="logo" style="height: 50px;">
            <span class="fw-bold">TechTitans</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendance">Attendance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
            </ul>
            <?php
            $email = '';

            include './assets/config/dbconfig.php';

            if (isset($_SESSION['email'])) {
                echo '<a href="./assets/includes/logout.includes.php" class="btn btn-sm btn-danger">Logout</a>';
            } else {
                echo '<a href="login" class="btn btn-sm btn-success">Login/Register</a>';
            }
            ?>

        </div>
    </div>
</nav>