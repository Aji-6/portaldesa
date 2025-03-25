<?php
include '../../config.php';

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $fasilitas = $_POST['fasilitas'];
    $jumlah = $_POST['jumlah'];

    $query = "UPDATE fasilitas_desa SET fasilitas='$fasilitas', jumlah='$jumlah' WHERE id=$id";
    mysqli_query($conn, $query);
    header('Location: ../fasilitas_desa.php');
}
