<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<title>Arama Yapma</title>
	</head>
	<body>
<?php
  
	if($_REQUEST){

		 $bag = mysql_connect("localhost","root",""); 
                    if (!$bag) { die('Bağlantı hatası: ' . mysql_error()); }
                    mysql_select_db("catalipek", $bag);
                    mysql_query("SET NAMES 'latin5'");
                    mysql_query("SET CHARACTER SET latin5");  
                    mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
					
		$ara = mysql_real_escape_string(strip_tags(rtrim($_POST['ara'])));
		if(!$ara){
			echo '<b>Uyarı!!!</b><br>Arama Yapabilmek İçin Değer Girmelisiniz...<br>';
			echo "Arama Sayfasına Yönlendiriliyorsunuz...";
		    header("Refresh:3;url=ornek.php");
		}else{
			$find = mysql_query("SELECT baslik,yol FROM dosya WHERE baslik like '%$ara%' OR '$ara%'");
			if(mysql_affected_rows()){
				while($row = mysql_fetch_assoc($find)){
				echo @"<td align='center'><img src='$row[yol]' weight='200' height='187,5'<br> 
		<br> <b>DosyaAdı: </b>$row[yol]</td></tr>";
					echo  "<td align='center'><br><b>Arıyor Olabileceğiniz Kelime: </b>".$row['baslik']."<br>";
				}
				echo "<a href='index.php'>Profil Sayfanıza Dönmek İçin Tıklayınız...</a><br>";
			}else{
				echo '<b>Aradığınız Kelime İle ilgili Kayıt Bulunamadı</b><br>';
				echo "Arama Sayfasına Yönlendiriliyorsunuz...";
		        header("Refresh:3;url=ornek.php");
			}
		}
	}

 
?>
</body>
	</html>