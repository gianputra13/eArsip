<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$petugas = $_SESSION['id'];
$kode  = $_POST['kode'];
$nama_pc  = $_POST['nama_pc'];
$nama  = $_POST['nama'];

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$prosessor = $_POST['prosessor'];
$ram = $_POST['ram'];
$penyimpanan = $_POST['penyimpanan'];
$os = $_POST['os'];
$ip = $_POST['ip'];
$keterangan = $_POST['keterangan'];

if ($jenis == "php") {
    header("location:arsip.php?alert=gagal");
} else {
    move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/' . $rand . '_' . $filename);
    $nama_file = $rand . '_' . $filename;
    mysqli_query($koneksi, "insert into datapc values (NULL,'$waktu','$kode', '$nama_pc', '$nama','$jenis','$nama_file','$prosessor','$ram', '$penyimpanan', '$os', '$ip', '$keterangan')") or die(mysqli_error($koneksi));
    header("location:datapc.php?alert=sukses");
}
