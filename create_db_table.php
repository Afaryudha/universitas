<?php
// Database connection credentials 
$host = 'localhost';
$user = 'root'; // Default XAMPP username 


$password = ''; // Default XAMPP password 

// Connect to MySQL 
$conn = new mysqli($host, $user, $password);

// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Database 
$dbName = 'Universitas';
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbName";
if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Database created successfully!<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database 
$conn->select_db($dbName);

// Create Table 
$tableName = 'Mata_kuliah';
$sqlCreateTable = " 
CREATE TABLE IF NOT EXISTS $tableName ( 
    kode_mk INT AUTO_INCREMENT PRIMARY KEY, 
    nama_mk VARCHAR(100) NOT NULL, 
    jam TIME UNIQUE NOT NULL 
)";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table '$tableName' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Create Table 
$tableName = 'mahasiswa';
$sqlCreateTable = " 
CREATE TABLE IF NOT EXISTS $tableName ( 
    nim INT AUTO_INCREMENT PRIMARY KEY, 
    nama_mhs VARCHAR(100) NOT NULL, 
    prodi VARCHAR(100) UNIQUE NOT NULL 
)";
if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table '$tableName' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection 
$conn->close();