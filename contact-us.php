<?php
// Memeriksa koneksi
include "connection.php";

// Mendapatkan data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Menyimpan data ke database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New data insert successfully";
} else {
    echo "Error: " + $sql + "<br>" + $conn->error;
}

$conn->close();
?>