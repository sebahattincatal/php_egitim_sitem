<?php
require_once 'mail/MAIL.php'; 
$m = new MAIL; 
$eposta=$_REQUEST["eposta"];
$mesaj=$_REQUEST["mesaj"];
 $m->From($eposta,$eposta); 
 $m->AddTo('bote123bote@gmail.com', 'Php Egitim Sitesi'); 
 $m->Subject('PHP egitim sitesi hakkinda'); 
 $m->HTML($mesaj);

 $c = $m->Connect('smtp.gmail.com', 465,'bote123bote@gmail.com' , 'botebote',
 'tls', 10, 'localhost', null, 'plain') or die(print_r($m->Result));
 

 echo $m->Send($c) ? 'ePosta basari ile gönderildi!' : 'HATA!!!';
 

 $m->Disconnect();
 header("Refresh:2;url=index.php");
 ?>
