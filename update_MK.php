<?php 
include 'connection.php'; 
 
$kode_mk = $_GET['kode_mk']; 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $nama_mk = $_POST['nama_mk']; 
    $jam = $_POST['jam']; 
 
    $sql = "UPDATE Mata_kuliah SET nama_mk='$nama_mk', jam='$jam' WHERE kode_mk=$kode_mk"; 
    if ($conn->query($sql) === TRUE) { 
        header('Location: index.php'); 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
} 
 
$sqlkuliah = "SELECT * FROM Mata_kuliah WHERE kode_mk=$kode_mk"; 
$resultkuliah = $conn->query($sqlkuliah); 
$user = $resultkuliah->fetch_assoc(); 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Update User</title> 
</head> 
<body> 
    <h2>Update User</h2> 
    <form method="POST"> 
        <label>Nama Matkul:</label><br> 
        <input type="text" name="nama_mk" value="<?= $user['nama_mk'] ?>" 
required><br><br> 
        <label>jam:</label><br> 
        <input type="time" name="jam" value="<?= $user['jam'] ?>" 
required><br><br> 
        <button type="submit">Update</button> 
    </form> 
</body> 
</html> 