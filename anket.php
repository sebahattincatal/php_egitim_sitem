<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$deger=$_POST["anket"];
$post=$_POST["post"];
$baglan=mysql_connect("localhost","root","");
mysql_select_db("catalipek",$baglan);
//------------------------------------------------
$sql=mysql_query("SELECT * FROM anket WHERE deger='$deger'");
$sonuc=mysql_fetch_assoc($sql);
$toplam=$sonuc["toplam"];
$yeni_toplam=$toplam+1;
//------------------------------
if($post&&$deger){
			$sorgu=mysql_query("UPDATE anket SET toplam='$yeni_toplam' WHERE deger='$deger'");
	}
	$sonuclar=mysql_query("SELECT * FROM anket ORDER BY toplam DESC");
	while($satir=mysql_fetch_assoc($sonuclar)){
		$deger=$satir['deger'];
		$toplam=$satir['toplam'];
		echo "Sonuclar: <b>".$deger.":".$toplam."<br></b>";
		}
		header("refresh:2;url=index.php");
 ?>
</body>
</html>