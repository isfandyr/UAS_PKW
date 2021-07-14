<?php
require_once './config.php';

$nama_buku = $_POST['nama_buku'];
$kategori_buku = $_POST['kategori_buku'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$probabilitas_diskon = $_POST['probabilitas_diskon'];


$result = $koneksi->
    query("INSERT INTO toko_buku VALUES(0,'$nama_buku', '$kategori_buku', '$penerbit', '$harga', '$probabilitas_diskon')");
    if($result){
        header("location:./index.php");
    }else {
        echo $koneksi->error; 
    }
?>