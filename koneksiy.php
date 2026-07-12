<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_pegawai";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// (Optional) Set charset agar mendukung UTF-8
mysqli_set_charset($conn, "utf8");
?>