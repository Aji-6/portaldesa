<?php
include '../../config.php';

$id = $_GET["id"];
$result = $conn->query("SELECT * FROM pkk_data WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dusun = $_POST["dusun"];
    $kk = $_POST["kepala_keluarga"];
    $laki = $_POST["laki_laki"];
    $perempuan = $_POST["perempuan"];
    $pkk = $_POST["anggota_pkk"];

    $sql = "UPDATE pkk_data SET dusun='$dusun', kepala_keluarga='$kk', laki_laki='$laki', 
            perempuan='$perempuan', anggota_pkk='$pkk' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <label>Dusun:</label>
    <input type="text" name="dusun" value="<?= $row['dusun'] ?>" required>
    <label>Kepala Keluarga:</label>
    <input type="number" name="kepala_keluarga" value="<?= $row['kepala_keluarga'] ?>" required>
    <label>Laki-Laki:</label>
    <input type="number" name="laki_laki" value="<?= $row['laki_laki'] ?>" required>
    <label>Perempuan:</label>
    <input type="number" name="perempuan" value="<?= $row['perempuan'] ?>" required>
    <label>Anggota PKK:</label>
    <input type="number" name="anggota_pkk" value="<?= $row['anggota_pkk'] ?>" required>
    <button type="submit">Update</button>
</form>