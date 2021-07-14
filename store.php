<?php
// Include koneksi database
include './config.php';

// Menangkap data yang dikirim dari form
$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$probabilitas_diskon = $_POST['probabilitas_diskon'];

// Menginput data ke database
mysqli_query($koneksi, "insert into toko_buku values('', '$nama_buku', '$kategori_buku', '$penerbit', '$harga', '$probabilitas_diskon')");
// Mengembalikan ke halaman awal
header("location:./index.php");
