<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if ($_SESSION["yetki"]) 
{
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {font-size: 18px}
-->
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="dosyayukle.php" enctype="multipart/form-data">
<table width="1024" height="604" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1015" height="184">
      <param name="movie" value="a1_yeni.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="a1_yeni.swf" width="1015" height="184">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <param name="expressinstall" value="Scripts/expressInstall.swf" />
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td>
  </tr>
  <tr>
    <td width="219"><table width="211" border="0">
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
            <td><div align="center"><a href="dosyayukleform.php"><img src="dosyayukle.jpg" width="145" height="29" border="0" /></a></div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="52"><table width="200" border="0">
          <tr>
            <td><table width="200" border="0" align="right">
              <tr>
                <td width="120">&nbsp;</td>
                <td width="64">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="271">&nbsp;</td>
        </tr>
    </table></td>
    <td width="798" colspan="3"><table width="799" height="558" border="0">
      <tr>
        <td colspan="2"><table width="436" height="198" border="0" align="left">
          <tr>
            <td width="126"><span class="style7">Konu:</span></td>
            <td width="300">
                <select name="konular">
                  <option selected="selected">Konu Seçiniz</option>
                  <option value="degiskenler">Degiskenler</option>
                  <option value="sabitler">Sabitler</option>
                  <option value="veritürleri">Veri Türleri</option>
                  <option value="döngüler">Döngüler</option>
                  <option value="diziler">Diziler</option>
                  <option value="fonksiyonlar">Fonksiyonlar</option>
                  <option value="operatörler">Operatörler</option>
                </select>            </td>
          </tr>
          <tr>
            <td><strong>Ba&#351;l&#305;k          </strong>
            <td><label>
              <input name="baslik" type="text" id="baslik" />
            </label></td>
          </tr>
          <tr>
            <td><label for="file"><strong>Dosya Adi:</strong></label>
            <td><input type="file" name="dosya" /></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
                <label>
                <div align="left"></div>
                <input type="submit" value="Yükle" />            </td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td width="311">&nbsp;</td>
        <td width="350">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</form>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
<?php
} else 
{
?>
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
	<title>Dosya Yükleme</title>
	</head>
	<body>
		<?php
		echo "Dosya yükleyebilmek için öncelikle giris yapmalisiniz!";
		header("refresh:2; url=Anasayfa.php");
		?>
	</body>
	</html>
<?php
}
?>