<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "ohrms";

// $dbHost     = "sql102.epizy.com";
// $dbUsername = "epiz_31455211";
// $dbPassword = "Kr3NNcrNvT9Mx4";
// $dbName     = "epiz_31455211_ohrms";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$con=mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
