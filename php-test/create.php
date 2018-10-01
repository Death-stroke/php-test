<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE php";
$conn->query($sql);
$conn = new mysqli("localhost", "root", "","php");
$sql="CREATE TABLE details(id INT(10) PRIMARY KEY AUTO_INCREMENT, name VARCHAR(20), phone INT(15), email VARCHAR(20))";
$conn->query($sql);
$conn->close();
?>