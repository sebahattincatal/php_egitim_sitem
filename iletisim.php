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
<script type="text/javascript">
function FormDogrula()
{
var eposta=document.forms["Form1"]["eposta"].value;
var mesaj=document.forms["Form1"]["mesaj"].value;

if(eposta==null || eposta=="" )
{
alert("Lütfen Epostanizi Giriniz...");
document.forms["Form1"]["eposta"].focus();	
return false;
}
if(mesaj==null || mesaj=="")
{
alert("Lütfen Mesajinizi Giriniz...");
document.forms["Form1"]["mesaj"];
return false;
}
return true;
}
</script>
</head>

<body>
<?php
if($_SESSION["yetki"]){?>
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
<table width="1024" height="604" border="0" align="center" bgcolor="#FFFFFF">
<form name="Form1" method="post" action="iletisim2.php" onsubmit="return FormDogrula()">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1018" height="181">
      <param name="movie" value="a1_yeni.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="a1_yeni.swf" width="1018" height="181">
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
        <td><table width="213" height="145" border="0">
          <tr>
            <td width="58">&nbsp;</td>
            <td width="145">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="21">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="21">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="271">&nbsp;</td>
        </tr>
    </table></td>
    <td width="798" colspan="3"><table width="741" border="0">
      <tr>
        <td colspan="2"><div align="center" class="style5">
          <p>Her t&uuml;rl&uuml; g&ouml;r&uuml;&#351; ve &ouml;nerileriniz i&ccedil;in bize ula&#351;&#305;n... </p>
          <p>&nbsp;</p>
        </div></td>
        </tr>
      <tr>
        <td width="63"><span class="style5">E-Posta:</span></td>
        <td>
          <label><input type="text"  name="eposta" size="50" /></label>
          </td>
      </tr>
      <tr>
        <td height="209"><span class="style5">Mesaj:</span></td>
        <td>
          <label><textarea name="mesaj" cols="65" rows="10"></textarea></label>
          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <label><input type="submit" name="Gönder" value="Gönder" /></label>
  </form>        
        </td>
      </tr>
</table></td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
</script>
<?php
}else{
	header("Location:Anasayfa.php");}
	?>
</body>
</html>
