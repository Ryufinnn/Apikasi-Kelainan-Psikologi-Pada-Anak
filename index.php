<?php
if(!isset($_SESSION))
{
	session_start();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="CSS3 Menuok_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Pakar Diagnosa Penyakit </title>
<link href="images/global.png" rel="shorcut icon">
<meta name="keywords" content="mighty template, free css template" />
<meta name="description" content="Mighty is a free CSS template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="content_slider_style.css" />
<script type="text/javascript" src="js/jquery.1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 4000, true);
	});
</script>

<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 16px;
}
.style4 {color: #000000; font-size: 16px; font-style: italic; }
.style5 {color: #666666}
-->
</style>
</head>
<body> 

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    
    	<div id="header_left">
    	
            <div id="site_title">
            
                <a href="index.php" target="_parent"><span></span></a>            </div>

	  </div>
        
        <div id="header_right">
        
        	<ul id="social_box">
            	<li><a href="http://www.facebook.com" target="_parent"><img src="images/facebook.png" alt="facebook" /></a></li>
                <li><a href="http://www.twitter.com"><img src="images/twitter.png" alt="twitter" /></a></li>
                <li><a href="http://www.linkedin.com"><img src="images/linkedin.png" alt="linkin" /></a></li>
                <li><a href="http://www.flickr.com"><img src="images/flickr.png" alt="flickr" /></a></li>
                <li><a href="http://www.myspace.com"><img src="images/myspace.png" alt="myspace" /></a></li>                
            </ul>
            
                
            <div id="templatemo_menu">
            
                <ul>
                <li><a href="index.php">START HERE<span>Home</span></a></li>
               
               
                <li><a href="?page=profil" <?php if($_GET[page]=="profil") { echo "class='selected'"; } ?>>Profil<span>Penyakit</span></a></li>
				<?
			  if(empty($_SESSION[id_acount])){
			  ?>
			  
			 <li><a href="?page=login" <?php if($_GET[page]=="login") { echo "class='selected'"; } ?>>Melakukan<span>Konsultasi</span></a></li>
			  <li><a href="?page=petunjuk" <?php if($_GET[page]=="petunjuk") { echo "class='selected'"; } ?>>Petunjuk<span>Penggunaan</span></a></li>
			  <?
			  }else{
			  ?>
			 <li><a href="?page=konsultasi" <?php if($_GET[page]=="konsultasi") { echo "class='selected'"; } ?>>Melakukan<span>Konsultasi</span></a></li>
			   
			
			<?
			}
			?>
				
              
				  <li><a href="?page=pencegahan" <?php if($_GET[page]=="pencegahan") { echo "class='selected'"; } ?>>Solusi dan<span> Pengobatan</span></a></li>
              
				 
                
                </ul>    	
            
            </div>
            
		</div>
                
    </div> <!-- end of templatemo_header -->
    
  <div id="featured">
		  <ul class="ui-tabs-nav">
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1"><img src="images/1.jpg" alt="thumbnail 01" width="79" height="48" /><span>Jagalah Kesehatan Sebelum Kesehatan Itu Hilang</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-2"><a href="#fragment-2"><img src="images/2.png" alt="thumbnail 01" width="79" height="48" /><span>Kesehatan Sangatlah Mahal </span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-3"><a href="#fragment-3"><img src="images/3.jpg" alt="thumbnail 01" width="79" height="48" /><span>Menuju tahun 2015 Indonesia Sehat</span></a></li>
	        <li class="ui-tabs-nav-item" id="nav-fragment-4"><a href="#fragment-4"><img src="images/4.jpg" alt="thumbnail 01" width="79" height="48" /><span>Lebih Baik Mencegah Dari Pada Mengobati </span></a></li>
	      </ul>

	    <!-- First Content -->
      <div id="fragment-1" class="ui-tabs-panel">
        <img src="images/1.jpg" alt="01" width="652" height="253" />
        <div class="info">
		  <h2><a href="http://www.templatemo.com/page/1" target="_parent">Jagalah Kesehatan Sebelum Kesehatan Itu Hilang</a></h2>
		  <p>Jangan Pernah Menyinyiakan Kesehatan Karena Sungguh Merugilah Orang yang Menyiyiakan Kesehatan. <a href="#" >read more...</a></p>
	    </div>
    </div>

	    <!-- Second Content -->
	    <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
				<img src="images/2.png" alt="01" width="652" height="253" />
			 <div class="info">
				<h2><a href="http://www.templatemo.com/page/2" target="_parent">Kesehatan Sangatlah Mahal</a></h2>
				<p>Jangan Pernah Menyinyiakan Kesehatan Karena Sungguh Merugilah Orang yang Menyiyiakan Kesehatan. <a href="#" >read more...</a></p>
			 </div>
	    </div>

	    <!-- Third Content -->
	    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
				<img src="images/3.jpg" alt="01" width="652" height="253" />
			 <div class="info">
				<h2><a href="http://www.templatemo.com/page/3" target="_parent">Menuju Indonesia Sehat Tahun 2016 </a></h2>
				<p><p>Jangan Pernah Menyinyiakan Kesehatan Karena Sungguh Merugilah Orang yang Menyiyiakan Kesehatan. <a href="#" >read more...</a></p> <a href="#">read more...</a></p>
	         </div>
	    </div>

	    <!-- Fourth Content -->
    <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">
				<img src="images/4.jpg" alt="01" width="652" height="253" />
			 <div class="info">
				<h2><a href="http://www.templatemo.com/page/4" target="_parent">Lebih Baik Mencegah Dari Pada Mengobati</a></h2>
				<p>Jangan Pernah Menyinyiakan Kesehatan Karena Sungguh Merugilah Orang yang Menyiyiakan Kesehatan. <a href="#" >read more...</a></p>
	         </div>
    </div>
<?php
  include ("koneksi.php");
  ?>
  
 
 

  </div>
    
    
    
    <div id="content_wrapper">
    	
        <div id="content">
        
          <?php 
if(!empty($_GET[page])) 
{
	if(file_exists("$_GET[page]")) 
	{
	include("$_GET[page]");
	} else 
	{
	
	}
} else 
{
include('Start.php');
include('photo1.php');

//include('photo2.php');
}
?>
          <?php 
		  
	  
	   if($_GET[page]=="petunjuk") { include "petunjuk.php"; }
	  // if($_GET[page]=="Login") { include "login.php"; } 
	   if($_GET[page]=="profil") { include "profil.php"; } 
	   if($_GET[page]=="konsultasi") { include "tanya.php"; }
	  // if($_GET[page]=="Home") { include "home.php"; }
	   if($_GET[page]=="daftar") { include "daftar.php"; }
	   if($_GET[page]=="pencegahan") { include "pencegahan.php"; }
	   if($_GET[page]=="cekkonsul") { include "cekkonsul.php"; }
	   if($_GET[page]=="login") { include "login.php"; }
	    if($_GET[page]=="registrasi") { include "registrasi.php"; }
		if($_GET[page]=="logout") { include "logout.php"; }
	   
    ?>
          <div class="horizon_divider"></div>
            <?php
			if($_GET[page]=="Login") { include "login.php"; } 
			if($_GET[page]=="list") { include "list_materi.php"; }
			?>
          
        </div>
        
<div id="sidebar">
       
       			     <?php
		if(isset($_SESSION[id_acount]))
		{
		include("logout.php");
		
		}else{
		
		}
		?>
       <h3 align="center">&nbsp;</h3>
				<h2>Jam</h2>
                
      <div class="sb_news_box">
        <div class="cleaner"></div>
                    <embed src="images/jam-akun.swf?TimeZone=ICT&"  width="250" height="100" wmode="transparent" type="application/x-shockwave-flash">
      </div>
                
          
        
      </div>
    
    </div>
    
    <div class="horizon_divider"></div>
    
    <div id="templatemo_footer">

        <p class="copyright">Rully &copy;.2015 All rights reserved.</p>
	    <p class="design">Designed By: <a href="http://www.Rully.com/" target="_blank" class="link">Rully</a></p>
    
    </div>

</div> <!-- end of template wrapper -->

</body>
</html>