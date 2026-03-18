<?php
// ...existing code...
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// สร้างฐานข้อมูล shop หากยังไม่มี
$conn->query("CREATE DATABASE IF NOT EXISTS shop");
$conn->select_db("shop");
?>