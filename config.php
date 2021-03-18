<?php

$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "cs_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}
