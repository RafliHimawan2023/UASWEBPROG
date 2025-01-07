<?php
$host = 'localhost'; // Host database, biasanya localhost
$username = 'root';  // Username MySQL
$password = '';      // Password MySQL (kosong untuk XAMPP)
$dbname = 'tok_travel'; // Nama database

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
