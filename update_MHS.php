<?php 
include 'connection.php'; 
 
$nim = $_GET['nim']; 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $nama_mhs = $_POST['nama_mhs']; 
    $prodi = $_POST['prodi']; 
 
    $sql = "UPDATE mahasiswa SET nama_mhs='$nama_mhs', prodi='$prodi' WHERE nim=$nim"; 
    if ($conn->query($sql) === TRUE) { 
        header('Location: index.php'); 
    } else { 
        echo "Error: " . $sql . "<br>" . $conn->error; 
    } 
} 
 
$sqlmhs = "SELECT * FROM mahasiswa WHERE nim=$nim"; 
$resultmhs = $conn->query($sqlmhs); 
$user = $resultmhs->fetch_assoc(); 
?> 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Update User</title> 
</head> 
<body> 
    <h2>Update User</h2> 
    <form method="POST"> 
        <label>Nama Mahasiswa:</label><br> 
        <input type="text" name="nama_mhs" value="<?= $user['nama_mhs'] ?>" 
required><br><br> 
        <label>Prodi:</label><br> 
        <input type="text" name="prodi" value="<?= $user['prodi'] ?>" 
required><br><br> 
        <button type="submit">Update</button> 
    </form> 
</body> 
</html> 