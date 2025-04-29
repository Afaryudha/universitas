<?php 
include 'connection.php'; 
$nim = $_GET['nim']; 
$sqlmhs = "DELETE FROM mahasiswa WHERE nim=$nim"; 
if ($conn->query($sqlmhs) === TRUE) { 
header('Location: index.php'); 
} else { 
echo "Error: " . $conn->error; 
} 
?> 