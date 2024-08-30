<?php
// Ambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Buat koneksi ke database
$servername = "localhost";
$username = "root"; // Username database
$password = ""; // Password database
$database = "company"; // Nama database

$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Insert data ke tabel contacts
$sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dikirim.";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}



// Tutup koneksi
$conn->close();
?>
