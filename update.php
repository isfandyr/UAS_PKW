<?php

include 'config.php';

$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$probabilitas_diskon = $_POST['probabilitas_diskon'];

mysqli_query($koneksi, "update toko_buku set nama_buku='$nama_buku', kategori_buku='$kategori_buku', penerbit='$penerbit', harga='$harga', probabilitas_diskon='$probabilitas_diskon' where id='$id'");

header("location:index.php");