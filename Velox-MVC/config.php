<?php
$host = "localhost";
$db   = "Velox";
$user = "root";
$pass = "12345";

$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
