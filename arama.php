<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<title>Arama Yapma</title>
	</head>
	<body>
<?php
  
	if($_REQUEST){

		 $bag = mysql_connect("localhost","root",""); 
                    if (!$bag) { die('Ba�lant� hatas�: ' . mysql_error()); }
                    mysql_select_db("catalipek", $bag);
                    mysql_query("SET NAMES 'latin5'");
                    mysql_query("SET CHARACTER SET latin5");  
                    mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");
					
		$ara = mysql_real_escape_string(strip_tags(rtrim($_POST['ara'])));
		if(!$ara){
			echo '<b>Uyar�!!!</b><br>Arama Yapabilmek ��in De�er Girmelisiniz...<br>';
			echo "Arama Sayfas�na Y�nlendiriliyorsunuz...";
		    header("Refresh:3;url=ornek.php");
		}else{
			$find = mysql_query("SELECT baslik,yol FROM dosya WHERE baslik like '%$ara%' OR '$ara%'");
			if(mysql_affected_rows()){
				while($row = mysql_fetch_assoc($find)){
				echo @"<td align='center'><img src='$row[yol]' weight='200' height='187,5'<br> 
		<br> <b>DosyaAd�: </b>$row[yol]</td></tr>";
					echo  "<td align='center'><br><b>Ar�yor Olabilece�iniz Kelime: </b>".$row['baslik']."<br>";
				}
				echo "<a href='index.php'>Profil Sayfan�za D�nmek ��in T�klay�n�z...</a><br>";
			}else{
				echo '<b>Arad���n�z Kelime �le ilgili Kay�t Bulunamad�</b><br>';
				echo "Arama Sayfas�na Y�nlendiriliyorsunuz...";
		        header("Refresh:3;url=ornek.php");
			}
		}
	}

 
?>
</body>
	</html>