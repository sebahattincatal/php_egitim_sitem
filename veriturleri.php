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
.style5 {font-size: 18px}
-->
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<?php
if($_SESSION["yetki"]){?>
<table width="200" border="0" align="right">
  <tr>
  <td><blockquote>
    <p><strong>Hosgeldiniz:</strong><?php echo htmlentities($_SESSION["kullanici"]);?></p>
    <p><a href="oturumusonlandir.php">&Ccedil;&#305;k&#305;&#351; Yap</a></p>
  </blockquote>    </td>
    <td><blockquote>
      <p>&nbsp;</p>
      <p><a href="oturumusonlandir.php"></a></p>
    </blockquote>    </td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="1024" height="604" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1038" height="189">
      <param name="movie" value="a1_yeni.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="a1_yeni.swf" width="1038" height="189">
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
    <td width="219"><table width="211" border="0">
      <tr>
        <td width="205" height="185"><table width="1035" border="0">
          <tr>
            <td width="194">&nbsp;</td>
            <td width="56">&nbsp;</td>
            <td width="528">&nbsp;</td>
            <td width="239">&nbsp;</td>
          </tr>
          <tr>
            <td width="194"><div align="center"><a href="dersler.php"><img src="A.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td rowspan="10"><iframe width="600" height="315" src="http://www.youtube.com/embed/y1mBCWv5YgY" frameborder="0" allowfullscreen></iframe></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><a href="sabitler.php"><img src="b.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><a href="veriturleri.php"><img src="c.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><a href="dongu.php"><img src="d.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><a href="dizi.php"><img src="e.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><a href="fonksiyon.php"><img src="f.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="center"><a href="operatorler.php"><img src="g.jpg" width="145" height="29" border="0" /></a></div></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="42">&nbsp;</td>
            <td>&nbsp;</td>
            <td><table width="528" border="0">
              <tr>
			  			  			 <?php

$bag = mysql_connect("localhost","root",""); 
if (!$bag) { die('Baglanti hatasi: ' . mysql_error()); }
mysql_select_db("catalipek", $bag);
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci' ");

$i=0; 
$sql = "SELECT * FROM yorum";
$sonuc = mysql_query($sql, $bag);
while($satir = mysql_fetch_array($sonuc))
	{
		$renk = ($i%2)?'#DFA99D':'white';
		$id = $satir["id"];
		$yukleyen = htmlentities($satir["yukleyen"]);
		$resim = $satir["yorum2"];
		$konu=$satir["konu"];
		if($konu=="veri"){
		echo "<tr bgcolor='$renk'><td align='center'>$resim</td></tr>";
		echo "<tr bgcolor='$renk'><td align='center'> Yükleyen: $yukleyen </td></tr>";
		if (@$_SESSION["yetki"] and (@htmlentities($_SESSION["kullanici"]) == $yukleyen)) 
			{	
				echo "<tr bgcolor='$renk'><td align='center'><a href='yorumsil.php?id=$id' > Yorumu Sil!</a> </td></tr>";
				
			}
		$i++;
		
	} }
	
 ?>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><form id="form1" name="form1" method="post" action="yorumveri.php">
                  <label>
                  <textarea name="cc" cols="70" rows="10" id="aa"></textarea>
                  </label>
                  <br />
                  <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input name="Submit2" type="reset" value="        Temizle        " />
&nbsp;&nbsp;&nbsp;&nbsp;
<input name="gnd" type="submit" id="gnd" value="        G&ouml;nder        " />
&nbsp;&nbsp;&nbsp;</label>
                                </form>
                <label></label>
                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
              </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      
   
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
</script>
  <script type="text/javascript">
swfobject.registerObject("FlashID");
  </script>
    <?php
}else{
	header("Location:Anasayfa.php");}
	?>
</body>
</html>
