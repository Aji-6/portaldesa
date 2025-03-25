<h2>Data Fasilitas Desa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Fasilitas</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1;
    while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['fasilitas'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td>
                <form action="fasilitas_desa/edit.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="text" name="fasilitas" value="<?= $row['fasilitas'] ?>" required>
                    <input type="number" name="jumlah" value="<?= $row['jumlah'] ?>" required>
                    <button type="submit" name="edit">Edit</button>
                    <a href="fasilitas_desa/delete.php?delete=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </form>

            </td>
        </tr>
    <?php endwhile; ?>
</table>
<section class="tambah-fasilitas">
    <form method="post" action="fasilitas_desa/add.php">
        <label>Fasilitas:</label>
        <input type="text" name="fasilitas" required>
        <label>Jumlah:</label>
        <input type="number" name="jumlah" required>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</section>