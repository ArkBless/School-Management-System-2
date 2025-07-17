<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "petroz1";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// The $conn variable can now be used in other files via include/require
?>