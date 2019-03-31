
<?php
$ABCPintar=array(
array(
array(
            "হুম..",
          "hm",
        ".",
      "hmm",
    "..",
),
array(
"..",
)),

array(
array(
            "Gd..",
              "hm",
                ":",
                  "hmmm",
                    ":",
),
array("hmm..",
)),

array(
array(
"",
),
array(
"",
)),

array(
array(
         ".)..",
),
array(
" ",
)),

array(
array(
            "hmm..",
        "..",
    "hm",
),
array(
"",
)),

array(
array(
            "",
            "",
            "",
),
array(
"",
)),

array(
array(
              "",
),
array(
"",
)),

array(
array(
"",
"",
"",
),
array(
"",
)),
);

$ABCNormal=array(
"....",
);

$ABCNomer=array(
array(
            "hm..",
),
array(
":",
),
array(
"ji..",
),
array(
"hmm..",
));

$ABCPhoto=array(
" : ) ...",
);

function getJam($name){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'',
 
);




$hr = $hari[gmdate('N',time()+60*60*5)];
$tgl = gmdate('j',time()+60*60*5);
$bln = 
$bulan[gmdate('n',time()+60*60
*5)];
$thn = gmdate('Y',time()+60*60*5);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*5));

return ''.$jam.''.$jam.'

 
'.$hr;
}

function getPower($nm,$tm,$tk){
$gwe=getUrl('/',$tk,array(
'fields' => 'id,name',
));
$by=array(
      '',
);
$punyu=array(
                   '',
               );
$back=array(
'',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
  $d=$t-($m*60);
     if($d<0){
        return false;
           }else{
              if($m==0){
$ups=$text.''.$d.' Seconds ??';
}else{
$ups=$text.''.$m.''.$d.'';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gwe[name];
$like=$back[rand(0,count($back)-1)];
$eps=$like.''.$nm;
$ops=getJam($nm);
$site='';
$true=$ops.'
 '.$site;

return $true;
}

function getStr($mes,$psn,$nam,$me,$in,$exe=null){
$array=array(
                  '<me>',
              '<name>',
          '<mess>',
      '<balik>',
'<juara>',
);
$space=array(
$me,
     $nam,
          $psn,
               strrev($psn),
                    $exe,
);
$couse=str_replace($array,$space,$mes);
if($in=='on'){
return ($couse);
}else{

return $couse;}
}

function getTex($or,$id,$txt,$nm,$me,$tok,$ABCPintar,$ABCNomer,$ABCNormal,$ABCPhoto=null){
$intruksi=array(
'nomer',
'pintar',
'normal',
);
if($txt=='photo'){
$exit=$txt;
}else{
$exe=$intruksi[rand(0,count($intruksi)-1)];
}
if($exit){
$pht=$ABCPhoto[rand(0,count($ABCPhoto)-1)];
return getStr($pht,$txt,$nm,$me,$or);
}else{
if($exe=='pintar'){
foreach($ABCPintar as $jet){
for($u=0;$u<=count($jet);$u++){
$lose=$jet[0][$u];
$wine=$jet[1][$u];;
if(preg_match('/'.$lose.'/',strtolower($txt))){
$ups=$wine;
break;}}
}
if($ups){
return getStr($ups,$txt,$nm,$me,$or);
}else{
$cass=$ABCNormal[rand(0,count($ABCNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}
}else{
if($exe=='nomer'){
$get=getUrl('/'.$id.'/comments',$tok,array(
'fields' => 'id,from,message',
));
if($get[2]){
$no=$ABCNomer[3][rand(0,count($ABCNomer[3])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[2][from][name]);
}else{
if($get[1]){
$no=$ABCNomer[2][rand(0,count($ABCNomer[2])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[1][from][name]);
}else{
if($get[0]){
$no=$ABCNomer[1][rand(0,count($ABCNomer[1])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[0][from][name]);
}else{
$no=$ABCNomer[0][rand(0,count($ABCNomer[0])-1)];
return getStr($no,$txt,$nm,$me,$or);}}}
}else{
$cass=$ABCNormal[rand(0,count($ABCNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}}}
}


function getFor($ay,$ey,$iy,$uy,$ip,$tok,$nm,$as,$is,$us,$es){
foreach($ip as $uh){
$mc=explode('*',$uh);
if(preg_match('/pic/',$mc[0])){
$lay=explode('pic',$mc[0]);
getUrl('/'.$lay[1].'/likes',$tok,array(
'method' => 'post',
));
}else{
getUrl('/'.$mc[0].'/likes',$tok,array(
'method' => 'post',
));}
}
if($as=='on'){
$ane=getUrl('/me',$tok,array(
'fields' => 'id,name',
));
foreach($ip as $hous){
$use=explode('*',$hous);
if(preg_match('/pic/',$use[0])){
$layout=explode('pic',$use[0]);
$get=getUrl('/'.$layout[1].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';
}
}else{
$get=getUrl('/'.$use[0].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';}
}
if($off){
}else{
if($es=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
$text=getTex($is,$lay[1],'photo',$use[2],$nm,$tok,$ay,$ey,$iy,$uy).'

'.$crack;
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
$text=getTex($is,$use[0],$use[1],$use[2],$nm,$tok,$ay,$ey,$iy).'

'.$crack;
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($is=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$text=getEmo($es).'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$umi=$es.'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));}}}}}
}
echo 'sukses';
}

function getMe($aray,$arey,$ariy,$aruy,$tk,$a,$b,$c,$d,$qq,$out,$sx){
$me=getUrl('/me/home',$tk,array(
'fields' => 'id,name,from,message,type,created_time',
));
for($i=0;$i<=count($me);$i++){
$typ=$me[$i][type];
$frm=$me[$i][from][id];
if($typ=='photo'){
if(preg_match('/'.$frm.'/',$out)){}else{
$oh='pic'.$me[$i][id].'*';}
}else{
if(preg_match('/'.$frm.'/',$out)){}else{
$oh=$me[$i][id].'*';}
}
$id[]=$oh.$me[$i][message].'*'.$me[$i][from][name].'*'.$me[$i][created_time];
if(count($id)==7){
break;}
}
if($d=='on'){
return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$d);
}else{

return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$qq);}
}

function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
if($uh=='cek'){
$black=$ar;
}else{
$else=array_merge($ar,$uh);}
}else{
$else=$ar;
}
if($else){
foreach($else as $b => $c){
$s4h[]=$b.'='.$c;
}
$true='?'.implode('&',$s4h);
$true=getGr($mb,$true);
$true=json_decode(one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}else{
foreach($black as $b => $c){
$s4h[]=$b.'='.$c;
}
$true='?'.implode('&',$s4h);
$true=getGr($mb,$true);
$true=one($true);

return $true;}
}

function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION BY ',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

function getEmo($n){
$emo=array(
urldecode('󾀀'),
urldecode('󾀁'),
urldecode('󾀂'),
urldecode('󾀃'),
urldecode('󾀄'),
urldecode('󾀅'),
urldecode('󾀇'),
urldecode('󾀸'),
urldecode('󾀼'),
urldecode('󾀽'),
urldecode('󾀾'),
urldecode('󾀿'),
urldecode('󾁀'),
urldecode('󾁁'),
urldecode('󾁂'),
urldecode('󾁃'),
urldecode('󾁅'),
urldecode('󾁆'),
urldecode('󾁇'),
urldecode('󾁈'),
urldecode('󾁉'),
urldecode('󾁑'),
urldecode('󾁒'),
urldecode('󾁓'),
urldecode('󾆐'),
urldecode('󾆑'),
urldecode('󾆒'),
urldecode('󾆓'),
urldecode('󾆔'),
urldecode('󾆖'),
urldecode('󾆛'),
urldecode('󾆜'),
urldecode('󾆝'),
urldecode('󾆞'),
urldecode('󾆠'),
urldecode('󾆡'),
urldecode('󾆢'),
urldecode('󾆤'),
urldecode('󾆥'),
urldecode('󾆦'),
urldecode('󾆧'),
urldecode('󾆨'),
urldecode('󾆩'),
urldecode('󾆪'),
urldecode('󾆫'),
urldecode('󾆮'),
urldecode('󾆯'),
urldecode('󾆰'),
urldecode('󾆱'),
urldecode('󾆲'),
urldecode('󾆳'),
urldecode('󾆵'),
urldecode('󾆶'),
urldecode('󾆷'),
urldecode('󾆸'),
urldecode('󾆻'),
urldecode('󾆼'),
urldecode('󾆽'),
urldecode('󾆾'),
urldecode('󾆿'),
urldecode('󾇀'),
urldecode('󾇁'),
urldecode('󾇂'),
urldecode('󾇃'),
urldecode('󾇄'),
urldecode('󾇅'),
urldecode('󾇆'),
urldecode('󾇇'),
urldecode('󾇈'),
urldecode('󾇉'),
urldecode('󾇊'),
urldecode('󾇋'),
urldecode('󾇌'),
urldecode('󾇍'),
urldecode('󾇎'),
urldecode('󾇏'),
urldecode('󾇐'),
urldecode('󾇑'),
urldecode('󾇒'),
urldecode('󾇓'),
urldecode('󾇔'),
urldecode('󾇕'),
urldecode('󾇖'),
urldecode('󾇗'),
urldecode('󾇘'),
urldecode('󾇙'),
urldecode('󾇛'),
urldecode('󾌬'),
urldecode('󾌭'),
urldecode('󾌮'),
urldecode('󾌯'),
urldecode('󾌰'),
urldecode('󾌲'),
urldecode('󾌳'),
urldecode('󾌴'),
urldecode('󾌶'),
urldecode('󾌸'),
urldecode('󾌹'),
urldecode('󾌺'),
urldecode('󾌻'),
urldecode('󾌼'),
urldecode('󾌽'),
urldecode('󾌾'),
urldecode('󾌿'),
urldecode('󾌠'),
urldecode('󾌡'),
urldecode('󾌢'),
urldecode('󾌣'),
urldecode('󾌤'),
urldecode('󾌥'),
urldecode('󾌦'),
urldecode('󾌧'),
urldecode('󾌨'),
urldecode('󾌩'),
urldecode('󾌪'),
urldecode('󾌫'),
urldecode('󾍀'),
urldecode('󾍁'),
urldecode('󾍂'),
urldecode('󾍃'),
urldecode('󾍄'),
urldecode('󾍅'),
urldecode('󾍆'),
urldecode('󾍇'),
urldecode('󾍈'),
urldecode('󾍉'),
urldecode('󾍊'),
urldecode('󾍋'),
urldecode('󾍌'),
urldecode('󾍍'),
urldecode('󾍏'),
urldecode('󾍐'),
urldecode('󾍗'),
urldecode('󾍘'),
urldecode('󾍙'),
urldecode('󾍛'),
urldecode('󾍜'),
urldecode('󾍞'),
urldecode('󾓲'),
urldecode('󾓴'),
urldecode('󾓶'),
urldecode('󾔐'),
urldecode('󾔒'),
urldecode('󾔓'),
urldecode('󾔖'),
urldecode('󾔗'),
urldecode('󾔘'),
urldecode('󾔙'),
urldecode('󾔚'),
urldecode('󾔜'),
urldecode('󾔞'),
urldecode('󾔟'),
urldecode('󾔤'),
urldecode('󾔥'),
urldecode('󾔦'),
urldecode('󾔨'),
urldecode('󾔸'),
urldecode('󾔼'),
urldecode('󾔽'),
urldecode('󾟜'),
urldecode('󾠓'),
urldecode('󾠔'),
urldecode('󾠚'),
urldecode('󾠜'),
urldecode('󾠝'),
urldecode('󾠞'),
urldecode('󾠣'),
urldecode('󾠧'),
urldecode('󾠨'),
urldecode('󾠩'),
urldecode('󾥠'),
urldecode('󾦁'),
urldecode('󾦂'),
urldecode('󾦃'),
urldecode('󾬌'),
urldecode('󾬍'),
urldecode('󾬎'),
urldecode('󾬏'),
urldecode('󾬐'),
urldecode('󾬑'),
urldecode('󾬒'),
urldecode('󾬓'),
urldecode('󾬔'),
urldecode('󾬕'),
urldecode('󾬖'),
urldecode('󾬗'),
);
$message = explode(' ',$n);
foreach($message as $y){
$mess.=$emo[rand(0,count($emo)-1)].' '.$y;
}
return($mess);
}


$pen=opendir('s4h');
while($on=readdir($pen)){
if($on != '.' && $on != '..'){
$slout[]=$on;}
}
foreach($slout as $me){
$true=file_get_contents('s4h/'.$me);
$break=explode('*',$true);
$cek=getUrl('/me',$break[0],array(
'fields' => 'id,name',
));
if($cek[id]){
getMe($ABCPintar,$ABCNomer,$ABCNormal,$ABCPhoto,$break[0],$break[1],$break[2],$break[3],$break[4],$break[5],$cek[id],$cek[name]);
}else{
unlink('s4h/'.$me);}
}
?>
