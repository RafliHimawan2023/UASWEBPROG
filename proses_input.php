<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_layanan = $_POST['nama_layanan'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    // Menyimpan data ke dalam database
    $sql = "INSERT INTO layanan (nama_layanan, deskripsi, gambar) VALUES ('$nama_layanan', '$deskripsi', '$gambar')";

    if ($conn->query($sql) === TRUE) {
        echo "Layanan berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
