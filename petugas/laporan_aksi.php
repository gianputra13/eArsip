<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$tgl_mulai  = $_POST['tgl_mulai'];
$tgl_akhir  = $_POST['tgl_akhir'];
$masalah  = $_POST['masalah'];
$analisa  = $_POST['analisa'];
$penyelesaian  = $_POST['penyelesaian'];
$customer  = $_POST['customer'];
$divisi  = $_POST['divisi'];
$laporan_petugas = $_SESSION['id'];


if ($jenis == "php") {
    header("location:laporan.php?alert=gagal");
} else {
    mysqli_query($koneksi, "insert into laporan values (NULL,'$tgl_mulai','$tgl_akhir','$masalah','$analisa','$penyelesaian','$customer','$divisi','$laporan_petugas')") or die(mysqli_error($koneksi));
    header("location:laporan.php?alert=sukses");
}
