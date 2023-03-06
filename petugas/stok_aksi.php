<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$code  = $_POST['code'];
$jenis  = $_POST['jenis'];
$nama_barang  = $_POST['nama_barang'];
$kondisi  = $_POST['kondisi'];
$total  = $_POST['total'];
$updated_at = date("Y-m-d h:i:s");
$created_at = date("Y-m-d h:i:s");


if ($jenis == "php") {
    header("location:stok.php?alert=gagal");
} else {
    mysqli_query($koneksi, "insert into datastok values (NULL,'$jenis','$nama_barang','$kondisi','$total', '$code', '$updated_at', '$created_at' )") or die(mysqli_error($koneksi));
    header("location:stok.php?alert=sukses");
}
