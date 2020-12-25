<?php

$hostname = "localhost";
$username = "root";
$password = "dbrf23";
$database = "loginform";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    echo "Connection failed!";
}