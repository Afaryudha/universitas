<?php 
include 'connection.php'; 
$kode_mk = $_GET['kode_mk']; 
$sqlkuliah = "DELETE FROM Mata_kuliah WHERE kode_mk=$kode_mk"; 
if ($conn->query($sqlkuliah) === TRUE) { 
header('Location: index.php'); 
} else { 
echo "Error: " . $conn->error; 
} 
?> 