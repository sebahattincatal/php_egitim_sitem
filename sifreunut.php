<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style3 {color: #FF0000}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>

<?php


$eposta=$_REQUEST["epst"];
$sifre=$_REQUEST["sifretxt"];
$sifretekrar=$_REQUEST["sifretekrartxt"];
$gizli=$_REQUEST["gizlitxt"];

$baglan=mysql_connect("localhost","root","");
if(!$baglan){
die("Baglanti hatasi:".mysql_errno().":".mysql_error());
}
$sifre=sha1($sifre);
$sifretekrar=sha1($sifretekrar);

mysql_select_db("catalipek",$baglan);

$sorgu  = mysql_query("SELECT eposta,gizli FROM uyeler WHERE eposta='$eposta'AND gizli='$gizli'"); 

if(@mysql_num_rows($sorgu)>0){ 
 


mysql_query("SET NAMES 'latin5'");
mysql_query("SET character_set_connection = 'latin5'");
mysql_query("SET character_set_client = 'latin5'");
mysql_query("SET character_set_results = 'latin5'");


$guncelle = mysql_query("UPDATE uyeler SET sifre = '$sifre', sifretekrar='$sifretekrar' WHERE eposta='$eposta'AND gizli='$gizli' ");
if ($guncelle) { 
echo "Sorgunuz basariyla çalistirildi,Bilgileriniz Güncelendi<br>"; 
echo "Anasayfaya Yönlendiriliyorsunuz...";
header("refresh:2;url=Anasayfa.php");
 } else { 
 echo "Veri güncelenirken bir hata olustu. ". mysql_errno() . " : " . mysql_error();
header("refresh:2;url=Anasayfa.php");
  } }
mysql_close($baglan);

?>
</body>
</html>
