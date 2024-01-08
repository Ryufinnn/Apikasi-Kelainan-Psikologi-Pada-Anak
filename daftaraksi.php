<?php
	
	
		include "koneksi.php";	
		$nama=$_REQUEST['nama'];
$jk=$_REQUEST['jk'];
$alamat=$_REQUEST['alamat'];
$pekerjaan=$_REQUEST['pekerjaan'];
		
		
		$query = mysql_query("insert into user (nama, jk, alamat, pekerjaan, tanggal) values ('$nama', '$jk', '$alamat','$pekerjaan', NOW())");

if($query){
		
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=konsultasi'>";
		
	}else{
		echo "Registrasi Gagal";
		echo "<br>Silahkan <a href='index.php'>Registrasi Ulang</a> disini";
	}
	?>