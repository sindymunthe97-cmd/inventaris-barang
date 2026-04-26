<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id");
$d = mysqli_fetch_assoc($data);
?>

<h2>Edit Barang</h2>

<form action="update.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $d['id_barang'] ?>">

Nama:
<input type="text" name="nama_barang" value="<?= $d['nama_barang'] ?>"><br><br>

Jumlah:
<input type="number" name="jumlah" value="<?= $d['jumlah'] ?>"><br><br>

Harga:
<input type="number" name="harga_jual" value="<?= $d['harga_jual'] ?>"><br><br>

Gambar Lama:<br>
<?php if (!empty($d['foto'])): ?>
    <img src="upload/<?= $d['foto'] ?>" width="100"><br><br>
<?php else: ?>
    Tidak ada gambar<br><br>
<?php endif; ?>

Ganti Gambar:
<input type="file" name="foto"><br><br>

<button type="submit">Update</button>

</form>