<?php

$token = random_bytes(15);

echo $token;

$token = bin2hex($token);
