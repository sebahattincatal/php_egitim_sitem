<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if ($_SESSION["yetki"]) 
{
?>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<title>Yorum Silme</title>
	</head>
	<body>
<?php
	$id = $_GET["id"];
	if (!is_numeric($id))
		{	
			echo "Bir hata oluştu!";
			header("refresh:2; url=dersler.php");
		}
		else
		{
			$bag = mysql_connect("localhost","root",""); 
if (!$bag) { die('Bağlantı hatası: ' . mysql_error()); }
mysql_select_db("catalipek", $bag);
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
			$sql = "SELECT yukleyen, yorum2 FROM yorum WHERE id = $id";
			$sonuc = mysql_query($sql, $bag);
			$satir = mysql_fetch_array($sonuc);
			$resim = $satir["yorum2"];
			if ($_SESSION["kullanici"] == $satir["yukleyen"]) 
			{
				$sql = "DELETE FROM yorum WHERE id = $id"; 
				$sonuc = mysql_query($sql, $bag);
				if (!$sonuc)  
				{
					echo "Yorumu silerken bir hata oluştu!"; 
				} 
				else 
				{
					unlink ($resim);
					echo "Yorum başarıyla silindi";
					header("location:dersler.php");
				}
			}
			else 
			{
				echo "Bu yorumu silmeye yetkiniz yoktur!";
				header("refresh:2; url=dersler.php");
			}
		}
?>
	</body>
	</html>
<?php
} else 
{
?>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<title>Resim Silme</title>
	</head>
	<body>
		<?php
		echo "Yorumu silmek için giriş yapmış olmalısınız!";
		header("refresh:2; url=Anasayfa.php");
		?>
	</body>
	</html>
<?php
}
?>