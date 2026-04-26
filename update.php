<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga_jual'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

if ($foto != "") {
    move_uploaded_file($tmp, "upload/" . $foto);

    $query = "UPDATE barang SET 
        nama_barang='$nama',
        jumlah='$jumlah',
        harga_jual='$harga',
        foto='$foto'
        WHERE id_barang=$id";
} else {
    $query = "UPDATE barang SET 
        nama_barang='$nama',
        jumlah='$jumlah',
        harga_jual='$harga'
        WHERE id_barang=$id";
}

mysqli_query($conn, $query);

header("Location: tampil_barang.php");
?>