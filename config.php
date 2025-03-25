<?php
$host = "localhost";
$user = "root"; // Ganti dengan user database Anda
$pass = ""; // Ganti dengan password database Anda
$db = "desa_porangparing";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
