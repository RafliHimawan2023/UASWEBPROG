<?php
// Set koneksi ke database
$servername = "127.0.0.1";  // Server database
$username = "root";         // Username default XAMPP
$password = "";             // Password default XAMPP (kosong)
$dbname = "tok_travel";     // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form ketika form disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $pesan = $_POST['pesan'];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO kontak (nama, email, telepon, pesan) VALUES ('$nama', '$email', '$telepon', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan Anda telah terkirim. Terima kasih!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi setelah operasi selesai
$conn->close();
?>
