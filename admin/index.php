<script language="javascript">
function kondisi(form)
{
if(form.txtuser.value=="")
 {
	alert("Inputkan Username Terlebih Dahulu");
	form.txtuser.focus();
	return(false);
	 }
if(form.txtpassword.value=="")
{
	alert("Inputkan Password Terlebih Dahulu");
	form.txtpassword.focus();
	return(false);
}
return(true);
}
</script>


<form name="frmlogin" method="post" action="aksi_login.php" onSubmit="return kondisi(this)">
<table border=0 align=center cellspacing="0">

<tr>
<td rowspan=4><img src='images/gembok.png' width=80></td>
</tr>
<tr>
<td>Username</td>
<td> : </td>
<td><input type=text name="txtuser" size=20></td>
</tr>

<tr>
<td>Password<sup></sup></td>
<td> : </td>
<td><input type=password name="txtpassword" size=20></td>
</tr>

<tr>
<td><input type="submit" value="LOGIN"></td>
</tr>
</table>
</form>