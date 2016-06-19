<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
<title>Form Kontrol</title>
<style type="text/css">
<!--
.style1 {font-size: 18px}
.style3 {color: #FF0000}
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
function FormDogrula()
{
var kadi=document.forms["Form1"]["kullaniciadi"].value;
var sifre=document.forms["Form1"]["sifre"].value;
var sifre2=document.forms["Form1"]["sifretekrar"].value;
var ad=document.forms["Form1"]["ad"].value;
var soyad=document.forms["Form1"]["soyad"].value;
var eposta=document.forms["Form1"]["eposta"].value;
var atpozisyon=eposta.indexOf("@");
var noktapozisyon=eposta.lastIndexOf(".");

if (kadi==null || kadi=="")
{
alert("Onaylamadan önce kullanici adini mutlaka girmelisiniz!");
document.forms["Form1"]["kullaniciadi"].focus();
return false;
}
if (sifre==null || sifre=="")
{
alert("Onaylamadan önce sifreyi mutlaka girmelisiniz!");
document.forms["Form1"]["sifre"].focus();
return false;
}
if (sifre2==null || sifre2=="")
{
alert("Onaylamadan önce sifreyi tekrar girmelisiniz!");
document.forms["Form1"]["sifretekrar"].focus();
return false;
}
if (sifre.length<6)
{
alert("Sifre Karakter Sayisi Uyusmuyor!!!");
document.forms["Form1"]["sifre"].focus();
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
document.forms["Form1"]["sifretekrar"].focus();
return false;
}
if (eposta==null || eposta=="")
{
alert("Onaylamadan önce epostanizi mutlaka girmelisiniz!");
document.forms["Form1"]["eposta"].focus();
return false;
}
if (ad==null || ad=="")
{
alert("Onaylamadan önce isminizi mutlaka girmelisiniz!");
document.forms["Form1"]["ad"].focus();
return false;
}
if (soyad==null || soyad=="")
{
alert("Onaylamadan önce soyadnizi mutlaka girmelisiniz!");
document.forms["Form1"]["soyad"].focus();
return false;
}
if (gizli==null || gizli=="")
{
alert("Onaylamadan önce kullanici gizlicevbı mutlaka girmelisiniz!");
document.forms["Form1"]["gizli"].focus();
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
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
</head>

<body>
<table width="1024" height="604" border="0" align="center" bgcolor="#FFFFFF">
<form method="post" action="uyegiris2.php" name="Form1" onsubmit="return FormDogrula()">
  <tr>
    <td height="174" colspan="4"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1020" height="169">
      <param name="movie" value="sahte.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="6.0.65.0" />
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="sahte.swf" width="1020" height="169">
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
            <td width="77">&nbsp;</td>
            <td width="113">&nbsp;</td>
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
    <td width="798" colspan="3"><table width="563" border="0">
      <tr>
        <td width="154" height="39"><span class="style1"><span class="style3">*</span>Kullan&#305;c&#305; Ad&#305;:  </span></td>
        <td width="399">
          <label><input type="text" name="kullaniciadi" /></label>        </td>
      </tr>
      <tr>
        <td height="44"><span class="style1"><span class="style3">*</span>&#350;ifre</span></td>
        <td>
          <label><input name="sifre" type="password" /></label>
        En az 6 Karekter Giriniz 
        !!!        </td>
      </tr>
      <tr>
        <td height="39"><span class="style1"><span class="style3">*</span>&#350;ifre Tekrar: </span></td>
        <td>
          <label><input type="password" name="sifretekrar" /></label>
        En az 6 Karekter Giriniz 
        !!!        </td>
      </tr>
      <tr>
        <td height="44"><span class="style1"><span class="style3">*</span>E-Posta:</span></td>
        <td>
          <label><input type="text" name="eposta" /></label>        </td>
      </tr>
      <tr>
        <td height="38"><span class="style1"><span class="style3">*</span>Ad:</span></td>
        <td>
          <label><input type="text" name="ad" /></label>        </td>
      </tr>
      <tr>
        <td height="41"><span class="style1"><span class="style3">*</span>Soyad:</span></td>
        <td><input name="soyad" type="text" id="soyad" /></td>
      </tr>
      <tr>
        <td height="41"><span class="style1"><span class="style3">*</span>Gizli Cevap:</span></td>
        <td>
          <label></label>        <input name="gizli" type="text" id="gizli" /></td>
      </tr>
      <tr>
      <td height="39"><span class="style1">Ülke</span></td>
        <td>
            <select name="ulke">
            <option value="NULL" selected="selected">Ülke Seç</option>
            <option value="türkiye">TÜRKIYE</option>
            </select>
            <tr>
            <td height="39"><span class="style1">Sehir</span></td>
            <td>
            <select name="sehir">
             <option value="NULL">Seçim Yapin</option>
            <option value="istanbul">ISTANBUL</option>
            <option value="ankara">ANKARA</option>
            <option value="izmir">IZMIR</option>
            <option value="adana">ADANA</option>
            <option value="bursa">BURSA</option>
            <option value="antalya">ANTALYA</option>
            <option value="edirne">EDIRNE</option>
            <option value="tekirdag">TEKIRDAG</option>
            <option value="mersin">MERSIN</option>
            <option value="trabzon">TRABZON</option>
            <option value="sivas">SIVAS</option>
            <option value="erzurum">ERZURUM</option>
            <option value="konya">KONYA</option>
            <option value="samsun">SAMSUN</option>
            <option value="bolu">BOLU</option>
            <option value="kocaeli">KOCAELI</option>
            <option value="adapazari">ADAPAZARI</option>
            <option value="yalova">YALOVA</option>
            <option value="gaziantep">GAZIANTEP</option>
            <option value="diyarbakir">DIYARBAKIR</option>
            <option value="sanliurfa">SANLIURFA</option>
            <option value="mugla">MUGLA</option>
            <option value="eskisehir">ESKISEHIR</option>
            <option value="sinop">SINOP</option>
            <option value="karabük">KARABÜK</option>
            <option value="kirikkale">KIRIKKALE</option>
            <option value="yozgat">YOZGAT</option>
            <option value="tokat">TOKAT</option>
            <option value="rize">RIZE</option>
            <option value="kars">KARS</option>
            <option value="erzincan">ERZINCAN</option>
            <option value="mus">MUS</option>
            <option value="malatya">MALATYA</option>
            <option value="manisa">MANISA</option>
            <option value="hatay">HATAY</option>
            <option value="afyon">AFYON</option>
            <option value="aydin">AYDIN</option>
            <option value="kahramanmaras">KAHRAMANMARAS</option>
            <option value="giresun">GIRESUN</option>
            <option value="gümüshane">GÜMÜSHANE</option>
            <option value="kayseri">KAYSERI</option>
            <option value="nigde">NIGDE</option>
            <option value="siirt">SIIRT</option>
            <option value="kirklareli">KIRKLARELI</option>
            <option value="çanakkale">ÇANAKKALE</option>
            <option value="bilecik">BILECIK</option>
            <option value="balikesir">BALIKESIR</option>
            <option value="düzce">DÜZCE</option>
            <option value="denizli">DENIZLI</option>
            <option value="bitlis">BITLIS</option>
            <option value="van">VAN</option>
            <option value="artvin">ARTVIN</option>
            <option value="ordu">ORDU</option>
            <option value="osmaniye">OSMANIYE</option>
            <option value="hakkari">HAKKARI</option>
            <option value="kastamonu">KASTAMONU</option>
            <option value="zonguldak">ZONGULDAK</option>
            <option value="elazig">ELAZIG</option>
            <option value="nehsehir">NEHSEHIR</option>
            <option value="mardin">MARDIN</option>
            </select>            </td>
            </tr>
            
            
               </td>
      </tr>
      <tr>      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
          <label><input type="submit" name="submit" value="Kaydet" /></label>
  </form>
        </td>
      </tr>
    </table>
</td>
  </tr>
</table>
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID");
</script>
</body>
</html>
