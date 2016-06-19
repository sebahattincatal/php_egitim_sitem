<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/JavaScript">
function FormDogrula()
{

var sifre=document.forms["Form1"]["sifretxt"].value;
var sifre2=document.forms["Form1"]["sifretekrartxt"].value;
var cevap=document.forms["Form1"]["gizlitxt"].value;
var eposta=document.forms["Form1"]["epst"].value;
var atpozisyon=eposta.indexOf("@");
var noktapozisyon=eposta.lastIndexOf(".");

if (eposta==null || eposta=="")
{
alert("Onaylamadan önce epostanızı mutlaka girmelisiniz!");
document.forms["Form1"]["epst"].focus();
return false;
}
if (cevap==null || cevap=="")
{
alert("Onaylamadan önce gizli cevabınızı mutlaka girmelisiniz!");
document.forms["Form1"]["gizlitxt"].focus();
return false;
}
if (sifre==null || sifre=="")
{
alert("Onaylamadan önce sifreyi girmelisiniz!");
document.forms["Form1"]["sifretxt"].focus();
return false;
}
if (sifre.length<6)
{
alert("Sifre Karakter Sayisi Uyusmuyor!!!");
document.forms["Form1"]["sifre"].focus();
return false;
}
if (sifre2==null || sifre2=="")
{
alert("Onaylamadan önce sifreyi tekrar girmelisiniz!");
document.forms["Form1"]["sifretekrartxt"].focus();
return false;
}
if (sifre2.length<6)
{
alert("Sifre Tekrarinin Karakter Sayisi Uyusmuyor!!!");
document.forms["Form1"]["sifretekrar"].focus();
return false;
}
if (sifre!=sifre2)
{
alert("Şifreler UYUŞMUYORRR...");
document.forms["Form1"]["sifretxt"].focus();
return false;
}

if (atpozisyon<1 || noktapozisyon<atpozisyon+2 || noktapozisyon+2>=eposta.length)
{
alert("Geçerli bir email adresi degil!");
document.forms["Form1"]["eposta"].focus();
return false;
}
return true;
}
</script>
</head>

<body>
<table width="1024" height="604" border="0" align="center" bgcolor="#FFFFFF">
<form id="form1" name="Form1" method="post" action="sifreunut.php" onsubmit="return FormDogrula()">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1020" height="176">
      <param name="movie" value="sahte.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="6.0.65.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="sahte.swf" width="1020" height="176">
        <!--<![endif]-->
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="6.0.65.0" />
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
    <td width="219"><table width="200" border="0">
      <tr>
        <td><table width="213" height="145" border="0">
          <tr>
            <td width="22">&nbsp;</td>
            <td width="181"><a href="Anasayfa.php">Anasayfa D&ouml;n</a></td>
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
    <td width="798" colspan="3">
      <table width="686" border="0">
        <tr>
          <td height="59" colspan="2"><div align="center"><strong>&#350;ifrenizi Unuttuysan&#305;z A&#351;a&#287;&#305;daki Bilgileri Doldurunuz!!! </strong></div></td>
        </tr>
        <tr>
          <td width="242">E-Posta</td>
          <td width="288"><label>
            <input name="epst" type="text" size="50" maxlength="50" />
            </label>
          </td>
        </tr>
        <tr>
          <td>Gizli Cevap </td>
          <td><label></label>
              <input type="text" name="gizlitxt" />
          </td>
        </tr>
        <tr>
          <td>Yeni &#350;ifre </td>
          <td><input type="password" name="sifretxt" />
            En az 6 Karekter Giriniz 
            !!! </td>
        </tr>
        <tr>
          <td>Yeni &#350;ifre Tekrar </td>
          <td><label></label>
              <input type="password" name="sifretekrartxt" />
            En az 6 Karekter Giriniz 
            !!! </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="onay" type="submit" id="onay" value="Onayla" /></td>
        </tr>
      </table>
       
    </td>
  </tr>
   </form>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>
