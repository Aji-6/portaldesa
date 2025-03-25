<?php
include '../../config.php';

if (isset($_POST['tambah'])) {
    $fasilitas = $_POST['fasilitas'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO fasilitas_desa (fasilitas, jumlah) VALUES ('$fasilitas', '$jumlah')";
    mysqli_query($conn, $query);
    header('Location: ../fasilitas_desa.php');
}
