<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
<title>Dosya Kayıt</title>
</head>
<body>
<?php

$uzantilar = array("gif", "jpeg", "jpg", "png", "JPG", "GIF", "JPEG", "PNG","txt","TEXT","text","doc","pdf");
$uzanti = end(explode(".", $_FILES["dosya"]["name"]));
if ((($_FILES["dosya"]["type"] == "image/gif")
	|| ($_FILES["dosya"]["type"] == "image/jpeg")
	|| ($_FILES["dosya"]["type"] == "image/jpg")
	|| ($_FILES["dosya"]["type"] == "image/pjpeg")
	|| ($_FILES["dosya"]["type"] == "image/x-png")
	|| ($_FILES["dosya"]["type"] == "image/png")
	|| ($_FILES["dosya"]["type"] == "text/plain")
	|| ($_FILES["dosya"]["type"] == "application/msword")
	|| ($_FILES["dosya"]["type"] == "application/pdf"))
	&& ($_FILES["dosya"]["size"] < "2000000")
	&& in_array($uzanti, $uzantilar))
  {
    if ($_FILES["dosya"]["error"] > 0) 
		{
			echo "Hata: " . $_FILES["dosya"]["error"] . "<br>";
		}
	else 
		{ 
			echo "Yüklenen: " . $_FILES["dosya"]["name"] . "<br>";
			echo "Tipi: " . $_FILES["dosya"]["type"] . "<br>";
			echo "Boyutu: " . ($_FILES["dosya"]["size"] / 1024) . " kB<br>";
			echo "Klasör: " . $_FILES["dosya"]["tmp_name"] . "<br>";

				if (file_exists("resimler/" . $_FILES["dosya"]["name"]))
					{
						echo $_FILES["dosya"]["name"] . " isminde bir dosya zaten yüklenmiş. ";
						header("refresh:2;url=dosyayukleform.php");
					}
				else
					{
						move_uploaded_file($_FILES["dosya"]["tmp_name"],"resimler/" . $_FILES["dosya"]["name"]);
						$yol = "resimler/" . $_FILES["dosya"]["name"];
						echo "Saklanan yer : " . "resimler/" . $_FILES["dosya"]["name"];
						
                     $bag = mysql_connect("localhost","root",""); 
                    if (!$bag) { die('Bağlantı hatası: ' . mysql_error()); }
                    mysql_select_db("catalipek", $bag);
                    mysql_query("SET NAMES 'latin5'");
                    mysql_query("SET CHARACTER SET latin5");  
                    mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
						$kadi = $_SESSION["kullanici"];
						$konu=$_REQUEST["konular"];
						$baslik=$_REQUEST["baslik"];
						$sql = "INSERT INTO dosya (yol, yukleyen,konu,baslik) VALUES ('$yol', '$kadi','$konu','$baslik')";
						echo $sql;
						$sonuc = mysql_query($sql, $bag);
						if (!$sonuc)
						{ 
							echo "Bir hata olustu:". mysql_error(); 
						} 
						else
						{ 
							echo "<br>Dosyanız veri tabanına başarıyla kaydedildi!";
							header("refresh:2;url=dosyayukleform.php");
						}
					}
	   }
  }
else 
  {
	echo "<b>Geçersiz dosya türü veya dosya büyüklüğü!</b>";
	header("refresh:2;url=dosyayukleform.php");
  }
?>
</body>
</html>