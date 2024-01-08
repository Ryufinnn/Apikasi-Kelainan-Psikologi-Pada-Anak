<style type="text/css">
<!--
.style2 {
	color: #0066FF;
	font-size: 18px;
}
-->
</style>

<text3D>
  <marquee>
    <p class="style2">Sistem Pakar Diagnosa Penyakit Antrhax   </p>
    
    
  </marquee>
</text3D>

<p><img src='images/4.png' width='200' height='150'></img>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
if (isset($id_gejala))
{
	$pjg_array=count($id_gejala);
	for($k=0;$k<$pjg_array;$k++)
	{
		$ok=$ok+$id_gejala[$k];
	}
	$strsql_temuan="select * from master_penyakit where nilai_temuan='$ok'";
	$hasil_temuan=mysql_query($strsql_temuan);

	echo "</br>";
	if(mysql_num_rows($hasil_temuan)<1){
	echo"Maaf Data Yang Anda Masukkan Kurang Lengkap ,Silahkan di Ulangi Kembali <a href='index.php?page=konsultasi'>Klik disini </a> ";
	}else{
	
	while($row_temuan=mysql_fetch_array($hasil_temuan))
	{
	echo "HASIL DIAGNOSIS SISTEM PAKAR MENGATAKAN, BAHWA ANDA TERSERANG PENYAKIT:";
	echo "<table width='600' border='0'>
				<tr><b>$row_temuan[master_penyakit]</b><td>   </br><i> Definisi Penyakit: $row_temuan[definisi]</i> </br>  </br> Pengobatan: $row_temuan[solusi]</br> <a href='cetak.php'> </br> </br> <b>Cetak Hasil Konsultasi</a></b> </td></tr>
				</table>";
	}
	
	}
	
	
}
?>

