<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_mhs = $_POST['nama_mhs'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa (nama_mhs, prodi) VALUES ('$nama_mhs', '$prodi')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Create User</title>
</head>

<body>
    <h2>Create User</h2>
    <form method="POST">
        <label>Nama Mahasiswa:</label><br>
        <input type="text" name="nama_mhs" required><br><br>
        <label>Prodi:</label><br>
        <input type="text" name="prodi" required><br><br>
        <button type="submit">Create</button>
    </form>
</body>

</html>