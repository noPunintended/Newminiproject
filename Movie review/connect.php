<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviereview2";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}