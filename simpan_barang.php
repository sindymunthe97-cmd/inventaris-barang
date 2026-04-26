<?php
include 'koneksi.php';

// ambil data
$kode   = $_POST['kode_barang'];
$nama   = $_POST['nama_barang'];
$satuan = $_POST['satuan'];
$beli   = $_POST['harga_beli'];
$jual   = $_POST['harga_jual'];
$jumlah = $_POST['jumlah'];
$tgl    = $_POST['tanggal_masuk'];
$ket    = $_POST['keterangan'];

// upload foto
$namaFile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp, "upload/" . $namaFile);

// simpan ke database
$query = "INSERT INTO barang 
(kode_barang, nama_barang, satuan, harga_beli, harga_jual, jumlah, tanggal_masuk, keterangan, foto)
VALUES 
('$kode','$nama','$satuan','$beli','$jual','$jumlah','$tgl','$ket','$namaFile')";

mysqli_query($conn, $query);

// balik ke halaman utama
header("Location: tampil_barang.php");
?>