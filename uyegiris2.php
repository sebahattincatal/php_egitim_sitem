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
$kullaniciadi=$_REQUEST['kullaniciadi'];
$kullaniciadi=mysql_real_escape_string($kullaniciadi);
$sifre=$_REQUEST['sifre'];
$sifretekrar=$_REQUEST['sifretekrar'];
$eposta=$_REQUEST['eposta'];
$ad=$_REQUEST['ad'];
$soyad=$_REQUEST['soyad'];
$gizli=$_REQUEST['gizli'];
$ulke=$_REQUEST['ulke'];
$sehir=$_REQUEST['sehir'];

$baglan=mysql_connect("localhost","root","");
if(!$baglan){
die("Baglanti hatasi:".mysql_errno().":".mysql_error());
}
$sifretekrar=sha1($sifretekrar);
$sifre=sha1($sifre);
mysql_select_db("catalipek",$baglan);
mysql_query("SET NAMES 'latin5'");
mysql_query("SET character_set_connection = 'latin5'");
mysql_query("SET character_set_client = 'latin5'");
mysql_query("SET character_set_results = 'latin5'");
$ekle="INSERT INTO uyeler(kullaniciadi,sifre,sifretekrar,eposta,ad,soyad,gizli,ulke,sehir) VALUES('$kullaniciadi','$sifre','$sifretekrar','$eposta','$ad','$soyad','$gizli','$ulke','$sehir')";
$sonuc = mysql_query($ekle,$baglan);
if ($sonuc) { 
echo "Sorgunuz basariyla çalistirildi, veri eklendi...<br>"; 
echo "Anasayfaya Yönlendiriliyorsunuz...";
header("refresh:2;url=Anasayfa.php");
 } else { 
 echo "Veri eklenirken bir hata olustu. ". mysql_errno() . " : " . mysql_error();
  } 
mysql_close($baglan);

?>
</body>
</html>