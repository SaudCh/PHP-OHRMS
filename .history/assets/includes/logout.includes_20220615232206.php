<?php
session_start();
// session_destroy();
unset($_SESSION["products"])

header('location:../../login');
