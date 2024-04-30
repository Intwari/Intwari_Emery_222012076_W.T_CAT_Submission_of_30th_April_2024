<?php
// names: Intwari Emery, reg no: 222012076

session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "jobconnect";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
