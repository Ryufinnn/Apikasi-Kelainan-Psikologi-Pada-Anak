<?php
include "header.php"; 
include "koneksi.php";
?>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {
	font-size: 14px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style4 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
	font-family: "Comic Sans MS";
}
body {
	background-image: url(../../dini/pelanggan/images/32.jpg);
}
.style19 {color: #006600}
.style29 {
	font-family: Jokerman;
	color: #000000;
}
.style33 {
	font-family: "Comic Sans MS";
	font-weight: bold;
	font-size: 18px;
	color: #FFFFFF;
}
.style34 {color: #CCCCC}
.style35 {font-size: 24px}
.style36 {font-weight: bold; color: #000000;}
.style37 {
	font-family: "Comic Sans MS";
	font-weight: bold;
	font-size: 16px;
}
.style38 {font-family: Jokerman}
.style40 {color: #000000; font-weight: bold; font-size: 20px; font-family: "Comic Sans MS"; }
.style41 {font-size: 20px}
-->
</style>
<table width="100%" border="0" bordercolor="#ECE9D8" >
 
  <tr>
    <td width="81%" height="400"  valign="top" ><div align="justify">
	
<?
$page=$_GET[page];
if($page=='home'){
	if(empty($_SESSION[id_acount])){
	include"home.php";
	}else{
	include"beranda.php";
	}
}
else if($page=='penyakit'){
include"master_penyakit.php";
}
else if($page=='registrasi'){
include"registrasi.php";
}
else if($page=='gejala'){
include"pertanyaan.php";
}
else if($page=='rule'){
include"seting_rule.php";
}?>
	<table width="100%" border="0" >
  <tr>
    <td><div align="center" >
      
    </div><br /></td>
  </tr>
 
  
</table>

	
  <tr>
    <td bgcolor="#669900"><div align="center" class="style1">
      <p class="style37">Terima kasih</p>
	        </div></td>
  </tr>
</table>
<?php
include"footer.php"; 
?>
