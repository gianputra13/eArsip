<?php
include '../koneksi.php';
$id = $_GET['id'];

$lama = mysqli_query($koneksi, "select * from datapc where arsip_id='$id'");
$l = mysqli_fetch_assoc($lama);
$nama_file_lama = $l['arsip_file'];
unlink("../arsip/" . $nama_file_lama);
mysqli_query($koneksi, "delete from datapc where arsip_id='$id'");
header("location:datapc.php");
