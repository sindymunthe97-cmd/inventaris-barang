<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM barang");
?>

<style>
body {
    font-family: Arial;
    background-color: #f5f5f5;
}

h2 {
    text-align: center;
}

table {
    border-collapse: collapse;
    margin: auto;
    background: white;
}

th {
    background-color: #4CAF50;
    color: white;
}

th, td {
    padding: 10px;
    text-align: center;
}

a {
    text-decoration: none;
    color: blue;
}

a:hover {
    color: red;
}

img {
    border-radius: 5px;
}
</style>
<h2>Sistem Inventaris Barang</h2>
<hr>

<a href="tambah_barang.php" style="display:block; width:200px; margin:10px auto; padding:10px; background:green; color:white; text-align:center; border-radius:5px;">
    + Tambah Barang
</a>

<table border="1" cellpadding="10">
    <tr>
    <th>No</th>
    <th>Kode</th>
    <th>Nama</th>
    <th>Harga Jual</th>
    <th>Jumlah</th>
    <th>Keterangan</th>
    <th>Foto</th>
    <th>Aksi</th>
</tr>

<?php 
$no = 1;
while ($row = mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['kode_barang'] ?></td>
        <td><?= $row['nama_barang'] ?></td>
        <td>Rp <?= number_format($row['harga_jual'],0,',','.') ?>
        <td><?= $row['jumlah'] ?></td>
        <td><?= $row['keterangan'] ?></td>
        <td>
            <?php if (!empty($row['foto'])): ?>
                <img src="upload/<?= $row['foto'] ?>" width="80">
            <?php else: ?>
                Tidak ada gambar
            <?php endif; ?>
        </td>
        <td>
    <a href="edit_barang.php?id=<?= $row['id_barang'] ?>">Edit</a> |
    <a href="hapus.php?id=<?= $row['id_barang'] ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
        </td>
    </tr>
<?php } ?>

</table>