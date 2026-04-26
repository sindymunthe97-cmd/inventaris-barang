<?php include __DIR__ . '/koneksi.php'; ?>

<h2>Tambah Barang</h2>

<form action="simpan_barang.php" method="POST" enctype="multipart/form-data">

    Kode Barang:
    <input type="text" name="kode_barang"><br><br>

    Nama Barang:
    <input type="text" name="nama_barang"><br><br>

    Satuan:
    <input type="text" name="satuan"><br><br>

    Harga Beli:
    <input type="number" name="harga_beli"><br><br>

    Harga Jual:
    <input type="number" name="harga_jual"><br><br>

    Jumlah:
    <input type="number" name="jumlah"><br><br>

    Tanggal Masuk:
    <input type="date" name="tanggal_masuk"><br><br>

    Keterangan:
    <textarea name="keterangan"></textarea><br><br>

    Foto:
    <input type="file" name="foto"><br><br>

    <button type="submit">Simpan</button>

</form>