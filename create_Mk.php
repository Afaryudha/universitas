<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_mk = $_POST['nama_mk'];
    $jam = $_POST['jam'];

    $sql = "INSERT INTO Mata_kuliah (nama_mk, jam) VALUES ('$nama_mk', '$jam')";
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
        <label>Nama Mata Kuliah:</label><br>
        <input type="text" name="nama_mk" required><br><br>
        <label>Jam:</label><br>
        <input type="time" name="jam" required><br><br>
        <button type="submit">Create</button>
    </form>
</body>

</html>