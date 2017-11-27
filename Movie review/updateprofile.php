<?php
require_once('connect.php');

// PoST comes from Editprofile.php
$name = $_POST['name'];
$password = $_POST['password'];

$usernameid = $_GET['id'];


$connect->query("UPDATE user SET name = '$name' , password = '$password' WHERE username ='$usernameid'");
header('Location: mainpage.php');