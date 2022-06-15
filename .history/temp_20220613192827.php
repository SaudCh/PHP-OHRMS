<?php

$token = random_bytes(15);

// echo $token;

$token = bin2hex($token);

// echo $token;

$password = 123456;
echo $password;

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo $hashedPassword;