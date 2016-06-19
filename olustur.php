<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
</head>

<body>
<?php
$baglan=mysql_connect("localhost","root","");
$sorgu1="CREATE DATABASE catalipek";
mysql_query($sorgu1);
mysql_select_db("catalipek");
$sorgu2 = "CREATE TABLE dosya (
    id int(11) NOT NULL auto_increment,
    yol varchar(255) NOT NULL,
    yukleyen varchar(255) NOT NULL,
    konu  varchar(20) NOT NULL,
	baslik  varchar(255) NOT NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB  DEFAULT CHARSET=latin5";
$sorgu3="CREATE TABLE anket(
id int(11) auto_increment NOT NULL,
toplam float(11) NOT NULL,
deger VARCHAR (255) NOT NULL,
PRIMARY KEY(id)
)ENGINE=InnoDB  DEFAULT CHARSET=latin5";
$sorgu4= "CREATE TABLE uyeler (
kullaniciadi varchar(45) NOT NULL,
sifre varchar(45) NOT NULL,
sifretekrar varchar(45) NOT NULL,
eposta varchar(45) NOT NULL,
ad varchar(45) NOT NULL,
soyad varchar(45) NOT NULL,
gizli varchar(45) NOT NULL,
ulke varchar(45),
sehir varchar(45),
PRIMARY KEY(kullaniciadi)
)ENGINE=InnoDB  DEFAULT CHARSET=latin5";

$sorgu5= "CREATE TABLE yorum(
id int(11) auto_increment NOT NULL,
yorum2 varchar(255) NOT NULL,
yukleyen varchar(255) NOT NULL,
konu varchar(255) NOT NULL,
PRIMARY KEY(id)
)ENGINE=InnoDB  DEFAULT CHARSET=latin5";
mysql_query($sorgu1);
mysql_query($sorgu2);
mysql_query($sorgu3);
mysql_query($sorgu4);
mysql_query($sorgu5);
$sifre=sha1("parola");
$sifretekrar=sha1("parola");
$ekle="INSERT INTO uyeler(kullaniciadi,sifre,sifretekrar,eposta,ad,soyad,gizli,ulke,sehir) VALUES ('internet','$sifre',
'$sifretekrar','parola@hotmail.com','internet','parola','parola','türkiye','istanbul')";
mysql_query($ekle);
$anket_evet="INSERT INTO anket(toplam,deger) VALUES (0,'Evet')";
$anket_hayir="INSERT INTO anket(toplam,deger) VALUES (0,'Hayir')";
mysql_query($anket_evet);
mysql_query($anket_hayir);
mysql_close($baglan);
?>



</body>
</html>