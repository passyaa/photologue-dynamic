<?php
// Memeriksa koneksi
include "connection.php";

// Mendapatkan data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Hash password
$password = md5($password);

// Menyimpan data ke database
$sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New data insert successfully";
} else {
    echo "Error: " + $sql + "<br>" + $conn->error;
}

$conn->close();
?>

