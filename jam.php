<html>
<head>
<title>Jam Digital</title>
<script type="text/javascript">
window.setTimeout("renderDate()",1);
days = new Array(
"Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"
);
months = new Array(
"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"
);

function renderDate(){
var mydate = new Date();
var year = mydate.getYear();
if (year < 2000) {
if (document.all)
year = "19" + year;
else
year += 1900;
}
var day = mydate.getDay();
var month = mydate.getMonth();
var daym = mydate.getDate();
if (daym < 10)
daym = "0" + daym;
var hours = mydate.getHours();
var minutes = mydate.getMinutes();
var seconds = mydate.getSeconds();
var dn = "AM";
if (hours >= 12) {
dn = "PM";
hours = hours - 12;
}
if (hours == 0)
hours = 12;
if (minutes <= 9)
minutes = "0" + minutes;
if (seconds <= 9)
seconds = "0" + seconds;
document.getElementById("jam").innerHTML = "<font face=old english text mt>"+days[day]+" "+daym+" "+months[month]+" "+year+"<br><font face=DigifaceWide size=4>"+hours+" : "+minutes+" : "+seconds+" "+dn;
setTimeout("renderDate()",1000)
}
</script>
</head>
<body onLoad="renderDate()">
<div id="jam" style="border-radius:50px;padding:10px;width:160px;" align="center">
</div>
</body>
</html>
