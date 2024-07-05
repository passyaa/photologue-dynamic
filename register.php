<?php
// Memeriksa koneksi
include "connection.php";

// Mendapatkan data dari form
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$date_birth = $_POST['date_birth'];
$gender = $_POST['gender'];
$password = $_POST['password'];

// Hash password
$password = md5($password);

// Menyimpan data ke database
$sql = "INSERT INTO register (username, email, address, phone, date_birth, gender, password) VALUES ('$username', '$email', '$address', '$phone', '$date_birth' , '$gender', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New data insert successfully";
} else {
    echo "Error: " + $sql + "<br>" + $conn->error;
}

$conn->close();
?>
