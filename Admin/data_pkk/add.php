<?php
include '../../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dusun = $_POST["dusun"];
    $kk = $_POST["kepala_keluarga"];
    $laki = $_POST["laki_laki"];
    $perempuan = $_POST["perempuan"];
    $pkk = $_POST["anggota_pkk"];

    $sql = "INSERT INTO pkk_data (dusun, kepala_keluarga, laki_laki, perempuan, anggota_pkk) 
            VALUES ('$dusun', '$kk', '$laki', '$perempuan', '$pkk')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
