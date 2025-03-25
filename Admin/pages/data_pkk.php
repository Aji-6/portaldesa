<h2>Data PKK Desa Porangparing</h2>

<!-- <button onclick="document.getElementById('formModal').style.display='block'">Tambah Data</button> -->

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Dusun</th>
            <th>Kepala Keluarga</th>
            <th>Laki-Laki</th>
            <th>Perempuan</th>
            <th>Anggota PKK</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = $conn->query("SELECT * FROM pkk_data");
        $no = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $row['dusun'] . "</td>
                    <td>" . $row['kepala_keluarga'] . "</td>
                    <td>" . $row['laki_laki'] . "</td>
                    <td>" . $row['perempuan'] . "</td>
                    <td>" . $row['anggota_pkk'] . "</td>
                    <td>
                        <a href='data_pkk/edit.php?id=" . $row['id'] . "'>Edit</a>
                        <a href='data_pkk/delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                    </td>
                </tr>";
        }
        ?>
    </tbody>
</table>

<!-- Form Tambah Data -->
<div id="formModal">
    <form action="data_pkk/add.php" method="post">
        <h3>Tambah Data PKK</h3>
        <label>Dusun:</label>
        <input type="text" name="dusun" required>
        <label>Kepala Keluarga:</label>
        <input type="number" name="kepala_keluarga" required>
        <label>Laki-Laki:</label>
        <input type="number" name="laki_laki" required>
        <label>Perempuan:</label>
        <input type="number" name="perempuan" required>
        <label>Anggota PKK:</label>
        <input type="number" name="anggota_pkk" required>
        <button type="submit">Simpan</button>
        <button type="button" onclick="document.getElementById('formModal')">Batal</button>
    </form>
</div>