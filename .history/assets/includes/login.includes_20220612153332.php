<?php
session_start();
include '../config/dbconfig.php';
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hashedPassword;

	$sql = "select * from employee where emailAddress = '$email'";
	$query = mysqli_query($con, $sql);
	$row = mysqli_num_rows($query);
	$hashedPassword = $row['password'];
	if ($row == 1) {

		if (password_verify($password, $row['password'])) {
			$_SESSION['email'] = $email;
			$msg = "Welcome to the Website";
			header("location:../../index?suc=$msg");
		} else {
			$msg = "Password is incorrect";
			echo $password;
			echo $row['password'];
			// header("location:../../login?err=$msg");
		}
	} else {
		$msg = "Email Not Found";
		header("location:../../login?err=$msg");
	}
}
