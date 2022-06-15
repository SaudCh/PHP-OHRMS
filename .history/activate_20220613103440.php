<?php
session_start();
include './assets/config/dbconfig.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    header("Location: ./assets/includes/activate.includes.php?token=$token");
}
