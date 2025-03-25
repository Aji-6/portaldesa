<?php
include '../../config.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM fasilitas_desa WHERE id=$id");
    header('Location: ../fasilitas_desa.php');
}
