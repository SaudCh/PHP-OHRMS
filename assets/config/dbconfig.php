<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "ohrms";

// $dbHost     = "sql309.epizy.com";
// $dbUsername = "epiz_31832295";
// $dbPassword = "tUeUxf7Ppv8";
// $dbName     = "epiz_31832295_ohrms";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
