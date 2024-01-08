<style type="text/css">
<!--
.style2 {
	color: #FFFFFF;
	font-size: 18px;
	font-weight: bold;
}
.style3 {
	color: #000000;
	font-size: 18px;
	font-weight: bold;
}
-->
</style> <p class="style2">

<?
	//cek load
	if(ereg("tanya.php", $_SERVER['PHP_SELF']))
	{
		header('Location: index.php');
		exit;
	}
		
				
	$answer		= $_GET['answer'];
	$tblData	= "data";
	
	if(!$answer) $answer = 1;
	
	$result 	= mysql_query("select * from {$tblData} where id='{$answer}'");
	if(mysql_num_rows($result)){
	
		$row 		= mysql_fetch_array($result);
		$pertanyaan = nl2br($row['pertanyaan']);
		
		echo ("<table width='550' border='1'>");
  echo("<tr>");
    echo ("<td bgcolor='#0000FF' align=center><font color='#FFFFFF'><b>KONSULTASI</b></font></td>");
  echo("</tr>");
  echo("<tr>");
     echo ("<td height='58' bgcolor='#0066FF' align=center><font color='#FFFFFF'>$pertanyaan</font></td>");
  echo("</tr>");

		
		
		
		if($row['ifyes'] != "0" && $row['ifno'] != "0"){
		
		
		echo("<tr>");
     echo ("<td bgcolor='#00CCFF' align=center><a href=\"?page=konsultasi&answer={$row['ifyes']}\"><span class='style2'>Ya </span></a>&nbsp;|<a href=\"?page=konsultasi&answer={$row['ifno']}\"><span class='style2'>&nbsp;Tidak</span></a></td>");
  echo("</tr>");

			
					}else{
			echo("<a href=\"". dirname($_SERVER['PHP_SELF']) ."\">Back To Home</a>");
		}
	}
	echo ("</table>");
?>
</p>