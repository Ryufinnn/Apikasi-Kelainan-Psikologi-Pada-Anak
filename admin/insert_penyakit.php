<?php
include "koneksi.php";
$nama_gejala=$_REQUEST['nama_gejala'];
$definisi=$_REQUEST['definisi'];
$solusi=$_REQUEST['solusi'];

$strsql="INSERT INTO master_penyakit (master_penyakit,definisi,solusi) VALUES ('$nama_gejala','$definisi','$solusi')";

if (empty($nama_gejala))
{
echo "<script>alert('Anda Belum Memasukkan NAMA PENYAKIT'); document.location.href='menu.php?page=penyakit&aksi=add';</script>";
}
else
{
mysql_query($strsql);
header("location:menu.php?page=penyakit");
}
?>