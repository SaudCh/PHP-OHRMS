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

	if ($row == 1) {
		$data = mysqli_fetch_assoc($query);
		$hashedPassword = $data['password'];

		if (password_verify($password, $hashedPassword)) {
			$_SESSION['email'] = $email;
			$msg = "Welcome to the Website";
			header("location:../../index?suc=$msg");
		} else {
			$msg = "Password is incorrect";
			header("location:../../login?err=$msg");
		}
	} else {
		$msg = "Email Not Found";
		header("location:../../login?err=$msg");
	}
}
