<?php
include ("koneksi.php");
	$nama = $_POST['txtnama'];
	$email = $_POST['txtemail'];
	$telp = $_POST['txttelp'];
	$coment = $_POST['txtcoment'];
	
	
$sql="insert into pesan values('$nama','$email','$telp','$coment')";
							 
$hasil=mysql_query($sql);
$file_name = $_FILES['NamaFile']['name'];
		$file_name = stripslashes($file_name);
		$file_name = str_replace("'","",$file_name);
		copy($_FILES['NamaFile']['tmp_name'],"./images/".$file_name);

?>