<?php

$servername = "fdb28.awardspace.net";
$username = "3775916_tsf";
$password = "@#@#@#";
$dbname = "3775916_tsf";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}
