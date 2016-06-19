<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html>
<head>
<title>Dosya Göster</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
</head>
<body>
<table>
 <?php
			  $bag = mysql_connect("localhost","root",""); 
                    if (!$bag) { die('Bağlantı hatası: ' . mysql_error()); }
                    mysql_select_db("catalipek", $bag);
                    mysql_query("SET NAMES 'latin5'");
                    mysql_query("SET CHARACTER SET latin5");  
                    mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
						$kadi = $_SESSION["kullanici"];
						$yorum1=mysql_real_escape_string($_REQUEST["ee"]);
						$x=htmlentities($yorum1);
						$a="diziler";
						$sql = "INSERT INTO yorum (yorum2, yukleyen,konu) VALUES ('$x', '$kadi','$a')";
						$sonuc = mysql_query($sql, $bag);
					
						if (!$sonuc)
						{ 
							echo "Bir hata olustu:". mysql_error(); 
						} 
						header("location:dizi.php");
						?>
 </body>
 </html>