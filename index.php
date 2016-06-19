<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<?php
if($_SESSION["yetki"]){?>
<table width="1024" height="604" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1020" height="170">
      <param name="movie" value="a1_yeni.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="a1_yeni.swf" width="1020" height="170">
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
    <td width="219"><table width="200" border="0">
      <tr>
        <td><table width="237" height="113" border="0">
          <tr>
            <td width="46" height="58"><p>&nbsp;  </p></td>
            <td width="181"><p><strong></strong><?php echo "<b>Hoşgeldiniz:</b> ".htmlentities($_SESSION["kullanici"]);?> <?php if (!@$_SESSION["yetki"]) {echo "Girişiniz başarısız oldu, tekrar deneyiniz!"; header("refresh:2; url=Anasayfa.php");}
if (@$_SESSION["yetki"]){?>
	<?php "<br>"?><a href="oturumusonlandir.php"></a><?php 
	}?><strong></strong></p>
              <p><a href="oturumusonlandir.php">Çıkış Yap</a></p></td>
          </tr>
          <tr>
		  
            <td height="21" colspan="5"><label>
              <blockquote>
              <form  method="POST" action="anket.php">
                <p><b> Anket:</b>Sitemizi beğendiniz mi?</p>              
                  <p>
                    <input type="radio" name="anket" value="Evet" />
                    Evet</p>  
                  <p>
                    <input type="radio" name="anket" value="Hayir" />
                    Hayır </p>
                  <p>
                    <input type="submit" name="post" value="Gönder" />
                  </p>
                </form>
                <p><br />
              </p>
              </blockquote>
            </label>
              <label><br />
            </label></td>
            </tr>
          <tr></tr>
        </table></td>
        </tr>
      <tr>
        <td height="320"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="236" height="267">
          <param name="movie" value="clock80.swf" />
          <param name="quality" value="high" />
          <embed src="clock80.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="236" height="267"></embed>
        </object></td>
        </tr>
    </table></td>
    <td width="798" colspan="3">&nbsp;</td>
  </tr>
</table>
<br />
<table width="1037" border="0" align="center">
  <tr>
    <td width="1000"><div align="center"><strong>My Desing: Emre &#304;PEK &amp; Sebahattin &Ccedil;ATAL </strong></div></td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
<?php
}else{
	header("Location:Anasayfa.php");}
	?>

</body>
</html>
