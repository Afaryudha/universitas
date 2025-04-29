<?php
$host = 'localhost';
$dbName = 'Universitas';
$user = 'root';
$password = '';
// Create connection 
$conn = new mysqli($host, $user, $password, $dbName);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}