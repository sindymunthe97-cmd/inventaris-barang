<?php
$conn = new mysqli("localhost", "root", "", "inventaris");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>