<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {font-size: 18px}
#Layer1 {
	position:absolute;
	left:261px;
	top:897px;
	width:0px;
	height:1px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:269px;
	top:844px;
	width:691px;
	height:596px;
	z-index:2;
}
-->
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<?php





if($_SESSION["yetki"]){?>
<div id="Layer1"></div>
<p>&nbsp;</p>
<table width="200" border="0" align="right">
  <tr>
  <td><blockquote>
    <blockquote>
      <p><strong>Hosgeldiniz:</strong><?php echo $_SESSION["kullanici"];?></p>
      <p><a href="oturumusonlandir.php">&Ccedil;&#305;k&#305;&#351; Yap</a></p>
      </blockquote>
    </blockquote>
    <td><blockquote>
      <blockquote>
        <p>&nbsp;</p>
      </blockquote>
    </blockquote>      <a href="oturumusonlandir.php"></a></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1059" height="779" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1052" height="186">
      <param name="movie" value="a1_yeni.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="a1_yeni.swf" width="1052" height="186">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td>
  </tr>
  <tr>
    <td width="218" height="585"><table width="211" border="0">
      <tr>
        <td width="205" height="185"><table width="200" border="0" align="center">
          <tr>
            <td><div align="center"><a href="ornek.php"><img src="A.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="sabitlerorn.php"><img src="b.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="veriturleriorn.php"><img src="c.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="donguorn.php"><img src="d.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="diziorn.php"><img src="e.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="fonksiyonorn.php"><img src="f.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="operatorlerorn.php"><img src="g.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
          <tr>
            <td><div align="center"><a href="dosyayukleform.php" target="_self"><img src="dosyayukle.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="36"><form id="form1" name="form1" method="post" action="arama.php">
          <table width="200" border="0" align="right">
            <tr>
              <td width="120"><label>
                <input name="ara" type="text" size="20" />
                </label>
              </td>
              <td width="64"><p>
                  <input type="submit" name="ara2" value="Ara" />
              </p></td>
            </tr>
          </table>
                </form>
        </td>
      </tr>
      <tr>
        <td height="271">
          <p><a href="Anasayfa.php"></a></p>
        </td>
        </tr>
    </table></td>
    <td width="831" colspan="1"><table width="540" height="571" border="0" align="center">
      <tr>
        <td height="567" colspan="2"><p><img src="degiskenorn.jpg" alt="z" width="510" height="415" /></p>
          </td>
        </tr>
    </table>
    <br />
    <table width="532" border="0" align="center">
      <tr>
        <td><p>  <?php
$bag = mysql_connect("localhost","root",""); 
if (!$bag) { die('Ba?lantı hatası: ' . mysql_error()); }
mysql_select_db("catalipek", $bag);
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");

$i=0; 
$sql = "SELECT * FROM dosya";
$sonuc = mysql_query($sql, $bag);
while($satir = mysql_fetch_array($sonuc))
	{
		$renk = ($i%2)?'#DFA99D':'white';
		$id = $satir["id"];
		$yukleyen = $satir["yukleyen"];
		$resim = $satir["yol"];
		$baslik=$satir["baslik"];
		$konu=$satir["konu"];
		if($konu=="degiskenler"){
		echo "<tr bgcolor='$renk'><td align='center'><img src='$resim' weight='200' height='187,5'<br> 
		<br> <b>DosyaAdı:</b>$resim</td></tr>";
		echo "<tr bgcolor='$renk'><td align='center'><b>Yükleyen:</b> $yukleyen </td></tr>";
		if (@$_SESSION["yetki"] and (@$_SESSION["kullanici"] == $yukleyen)) 
			{	
				echo "<tr bgcolor='$renk'><td align='center'><a href='resimsil.php?id=$id'>Sil!</a></td></tr>";
			}
		$i++;
	} }
	?></p></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
}else{
	header("Location:Anasayfa.php");}
	?>
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
</script>



</body>
</html>
