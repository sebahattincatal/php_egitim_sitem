<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
</head>

<body>
<?php
$kullaniciadi=mysql_real_escape_string(($_REQUEST["kadi"]));
$sifre=$_REQUEST["sifre"];
$baglan = mysql_connect("localhost","root",""); 
if (!$baglan) { 
     die("Baglanti hatasi: ". mysql_errno() . " : " . mysql_error()); 
}
mysql_select_db("catalipek", $baglan);
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");  
 mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
 
$ekle="SELECT sifre FROM uyeler WHERE kullaniciadi='$kullaniciadi'";
$sonuc = mysql_query($ekle, $baglan);
$sonucdizisi=mysql_fetch_array($sonuc);
	if($sonucdizisi["sifre"]==sha1($sifre)){
		$_SESSION["yetki"]= true;
        $_SESSION["kullanici"] = ucfirst($kullaniciadi);
	    echo "Profilinize  Yönlendiriliyorsunuz...";
        header("refresh:2;url=index.php");
	}
	if (!@$_SESSION["yetki"]) {
	echo "Girisiniz basarisiz oldu, tekrar deneyiniz!";
	header("refresh:2; url=Anasayfa.php");
	}
if (@$_SESSION["yetki"]) {
	echo "<br><a href=\"index.php\">Oturumu sona erdirmek için buraya tiklayiniz!</a>";
	}
mysql_close($baglan); 
?>
</body>
</html>
