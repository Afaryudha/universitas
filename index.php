<?php 
include 'connection.php'; 
$sqlkuliah = "SELECT * FROM Mata_kuliah"; 
$resultkuliah = $conn->query($sqlkuliah); 

$sqlmhs = "SELECT * FROM mahasiswa"; 
$resultmhs = $conn->query($sqlmhs); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>All Users</title> 
</head> 
 
 
<body> 
    <h2>Afar Yudha Dzukracudu</h2> 
    <a href="createmk.php">Add New Matkul</a><br><br> 
    <a href="createmhs.php">Add New Mahasiswa</a><br><br> 
    <table border="1"> 
        <tr> 
            <th>Kode Mata Kuliah</th> 
            <th>Nama Mata Kuliah</th> 
            <th>Jam</th> 
            <th>Actions</th> 
        </tr> 
        <?php while ($row = $resultkuliah->fetch_assoc()) { ?> 
        <tr> 
            <td><?= $row['kode_mk'] ?></td> 
            <td><?= $row['nama_mk'] ?></td> 
            <td><?= $row['jam'] ?></td> 
            <td> 
                <a href="update.php?kode_mk=<?= $row['kode_mk'] ?>">Edit</a> 
                <a href="delete.php?kode_mk=<?= $row['kode_mk'] ?>" onclick="return 
confirm('Are you sure?')">Delete</a> 
            </td> 
        </tr> 
        <?php } ?> 

        <tr> 
            <th>NIM</th> 
            <th>Nama Mahasiswa</th> 
            <th>Prodi </th> 
            <th>Actions</th> 
        </tr> 
        
        <?php while ($row = $resultmhs->fetch_assoc()) { ?> 
        <tr> 
            <td><?= $row['nim'] ?></td> 
            <td><?= $row['nama_mhs'] ?></td> 
            <td><?= $row['prodi'] ?></td> 
            <td> 
                <a href="updatemhs.php?nim=<?= $row['nim'] ?>">Edit</a> 
                <a href="deletemhs.php?nim=<?= $row['nim'] ?>" onclick="return 
confirm('Are you sure?')">Delete</a> 
            </td> 
        </tr> 
        <?php } ?> 
    </table> 
</body> 
</html> 