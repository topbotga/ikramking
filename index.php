<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>IKRAM HUSSAIN</title> 
<link <link href="B.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/cssf8d0.css?family=" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
</div>
<center><div style="font-family: Audiowide;
font-size: 24pt">
<div id="header">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=3771hs0nkl"></script>
    <marquee behavior="alternate">
    <script src="header.js"></script></marquee>
<div style="font-family: Audiowide;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<center><?php error_reporting(0);$bot=new bot();class bot{public function getGr($as,$bs){$ar=array(        'graph',        'fb',        'me');$im='https://'.implode('.',$ar);return $im.$as.$bs;}public function getUrl($mb,$tk,$uh=null){$ar=array(        'access_token' => $tk,);if($uh){$else=array_merge($ar,$uh);        }else{        $else=$ar;}foreach($else as $b => $c){        $s4h[]=$b.'='.$c;}$true='?'.implode('&',$s4h);$true=$this->getGr($mb,$true);$true=json_decode($this->one($true),true);if($true[data]){        return $true[data];}else{        return $true;}}private function one($url){$cx=curl_init();curl_setopt_array($cx,array(CURLOPT_URL => $url,CURLOPT_CONNECTTIMEOUT => 5,CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => 'DESCRIPTION by ',));$ch=curl_exec($cx);        curl_close($cx);        return ($ch);}public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){if(!is_dir('s4h')){        mkdir('s4h');}if($bb){$blue=fopen('s4h/'.$id,'w');fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);        fclose($blue);echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';}else{        if($z){if(file_exists('s4h/'.$id)){$file=file_get_contents('s4h/'.$id);$ex=explode('*',$file);$str=str_replace($ex[0],$tk,$file);$xs=fopen('s4h/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}else{$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;$xs=fopen('s4h/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}$_SESSION[key]=$tk.'_'.$id;}else{$file=file_get_contents('s4h/'.$id);$file=explode('*',$file);        if($file[5]){$up=fopen('s4h/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);        fclose($up);        }else{$up=fopen('s4h/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);        fclose($up);        }echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}}public function lOgbot($d){        unlink('s4h/'.$d);        unset($_SESSION[key]);echo'<script type="text/javascript">alert("INFO : Logout success")</script>';        $this->atas();        $this->home();        $this->bwh();}public function cek($tok,$id,$nm){$if=file_get_contents('s4h/'.$id);$if=explode('*',$if);if(preg_match('/on/',$if[1])){        $satu='on';        $ak='Like tambah komen';}else{        $satu='off';        $ak='Like saja';}if(preg_match('/on/',$if[2])){        $dua='on';        $ik='Bot emo';}else{        $dua='off';        $ik='Bot manual';}if(preg_match('/on/',$if[3])){        $tiga='on';        $ek='Powered on';}else{        $tiga='off';        $ek='Powered off';}if(preg_match('/on/',$if[4])){        $empat='on';        $uk='Text via script';}else{        $empat='off';        $uk='Via text sendiri';}echo'<center><div id="bottom-content"><div id="navigation-menu"><br><ul><font color="white">Welcome :  '.$nm.'</font><br><br><a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a><br> <font color="white">Your Bot has been Activated '.$nm.'</font><br><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'"><input class="button button5" type="submit" value="Logout Bot"></form><center><div class="hr"><hr /></div></center><br><br><br><form action="index.php" method="post"><center><font color="black" size="3">Select Menu Robot</font></center><select class="button button5">';        if($satu=='on'){        echo'<option value="'.$satu.'">'.$ak.'</option><option value="off">Like saja</option></select>';        }else{        echo'<option value="'.$satu.'">'.$ak.'</option><option value="on">Like tambah komen</option></select>';}echo'<select  class="button button5" name="emot">';        if($dua=='on'){        echo'<option value="'.$dua.'">'.$ik.'</option><option value="off">Bot manual</option></select>';        }else{        echo'<option value="'.$dua.'">'.$ik.'</option><option value="on">Bot emo</option></select>';}echo'<select  class="button button5" name="target">';        if($tiga=='on'){        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="off">Powered off</option></select>';        }else{        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="on">Powered on</option></select>';}echo'';        if($empat=='on'){        echo'<select class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="off">Via text sendiri</option></select>';}else{        if($if[5]){        echo'<select  class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="text">Ganti Text Anda</option><option value="on">Text via script</option></select>';        }else{        echo'Buat text Anda<input type="text" name="text" style="height:30px;"><input type="hidden" name="opsi" value="'.$empat.'">';}}echo'</ul></div><ul><div id="top-content"><div id="search-form"><input class="button button5" type="submit" value="SAVE"></form></div></div></div></ul></center>';$this->membEr();}public function atas(){$hari=array(1=>        "Monday",        "Tuesday",        "Wednesday",        "Thursday",        "Friday",        "Saturday",        "Sunday");$bulan=array(1=>"January",  "February",    "March",     "April",       "May",         "June",           "July",             "August",               "September",          "October",     "November","Desember");$hr=$hari[gmdate('N',time()+60*60*7)];$tgl=gmdate('j',time()+60*60*7);$bln=$bulan[gmdate('n',time()+60*60*7)];$thn=gmdate('Y',time()+60*60*7);$jam=gmdate('H',time()+60*60*7);echo'<div id="header"><h1 class="heading"></h1><h2 class="description"><h1><center><script src=""></script><h1></h2></div></div>';}public function home(){echo'<br><center><strong><a href="http://www.facebook.com/100005334900145" target="_blank">
<img src="https://graph.facebook.com/100005334900145/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:300px;width:300px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/><br></div>';}public function bwh(){echo'<div id="bottom-content"><div id="navigation-menu"><center></head>    <body>        <div id="main">            <div id="content">                <div class="header"><center><br><br><center><a href="https://ikramking1.herokuapp.com/" target="_blank"><input class="button button5" type="button" value="♥ GET TOKEN ♥"> </a><a href="http://alamin-love.tk" target="_blank"><input class="button button5" type="button" value="♥wow-react♥"> </a></center><center><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="EAAAACZAVC6ygBAOXNxONaZAc9GnN9kcLxZCsba3ED4hjLZBX2BJDPwDUBZBpvyZAb538ABEh3k3zmMgObJbOA32VsZAzndFmBahJVz6C4y0ZBEG0nzJQ7ZCbsdUvlEjEsZB9ciEXqoMILLlKCES6n3jqscohpvPbMXSj8ZD" st name="token"> <br><input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>';$this->membEr();}public function membEr(){        if(!is_dir('s4h')){        mkdir('s4h');}$up=opendir('s4h');while($use=readdir($up)){if($use != '.' && $use != '..'){        $user[]=$use;}        }echo'<center><div style="font-family: Audiowide;
font-size: 60pt">
<center> </script></font></center>
<div style="font-family: Audiowide;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<center>

<font style="text-shadow: 1px 1px black; color:white;"
size="6">&bull; Bot Lovers : <font color="red">'.count($user).'</font> <font style="text-shadow: 1px 1px black; color:white;" size="4">&bull;</font>
<center><strong><font style="text-shadow: 1px 1px black; color:white;" size="5">&bull; OWNER MD IKRAM HUSSAIN &bull;</strong></center>
</br></div><audio autoIceland loop>
<font color="red">

</div>';}public function toXen($h){header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');}}if(isset($_SESSION[key])){        $a=$_SESSION[key];        $ai=explode('_',$a);        $a=$ai[0];if($_POST[logout]){        $ax=$_POST[logout];        $bot->lOgbot($ax);}else{$b=$bot->getUrl('/me',$a,array('fields' => 'id,name',));if($b[id]){if($_POST[likes]){        $as=$_POST[likes];        $bs=$_POST[emot];        $bx=$_POST[target];        $cs=$_POST[opsi];        $tx=$_POST[text];if($cs=='text'){        unlink('Tokenx/'.$b[id]);$bot->savEd($a,$b[id],$as,$bs,$bx,'off');        }else{        if($tx){$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);        }else{$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}}        $bot->atas();        $bot->home();$bot->cek($a,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';        unset($_SESSION[key]);        unlink('s4h/'.$ai[1]);$bot->atas();$bot->home();        $bot->bwh();}}        }else{if($_POST[token]){        $a=$_POST[token];if(preg_match('/token/',$a)){$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));        }else{        $cut=explode('&',$a);$tok=$cut[0];}$b=$bot->getUrl('/me',$tok,array(        'fields' => 'id,name',));if($b[id]){$bot->savEd($tok,$b[id],'on','on','on','on','null');        $bot->atas();        $bot->home();$bot->cek($tok,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';        $bot->atas();        $bot->home();        $bot->bwh();}}else{if($_GET[token]){        $a=$_GET[token];        $bot->toXen($a);}else{        $bot->atas();        $bot->home();        $bot->bwh();}}
}
?>

<br><br><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="6" direction="left" truespeed="truespeed">

<qcenter><font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> <img src="SP.gif"><font color="red"><b>NOTE:-</b></font> prsonal bot side 
<img src="MS.gif"> </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red"></font></center></marquee>
<dev
<dev
<dev
<!-- Start of banner code -->
<a href="https://123link.co/ref/richardanim" target="_blank"><img src="https://123link.co/img/728x90.png" title="Rút gọn link kiếm tiền online uy tín nhất Việt Nam" /></a>
<!-- End of banner code -->
<center><a href="http://wap4dollar.com/ad/serve.php?id=3771hs0nkl"><img src="https://f.top4top.net/p_354powht1.gif" border="0" /></a><center>
