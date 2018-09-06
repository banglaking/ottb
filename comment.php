<?php
include_once 'tokek.php';
    
if(file_exists('cmy2_log')){
$log=json_encode(file('cmy2_log'));
}else{
$log='';
}
$jam=array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array('',);
$ucapan = gmdate('H',time()+7*3600);
$ucapan = str_replace($jam,$sapa,$ucapan);
$aiueo = array('A','I','E','O','a','i','e','o',);
$uuu = array('u','u','u','u','u','u','u','u',);
$abc = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',);
$kotak = array('д','в','Ç','δ','з','f','б','н','i','j','к','l','м','и','ø','р','q','я','s','т','ц','v','щ','x','ч','z','д','в','Ç','δ','з','f','б','н','i','j','к','l','м','и','ø','р','q','я','s','т','ц','v','щ','x','ч','z',);
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$stat=json_decode(auto('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$access_token.'&offset=0&limit=15'),true);

$jonz = array('👈😻👉','👈😽👉','👈😺👉','👈👀👉','👈😜👉','👈�👉',);
$sumekar = $jonz[rand(0,count ($jonz)-1)];

$qwerty = array('0','1','2','3','4','5','6','7','8','9','10',);
$font = array(' 📡 ',' 🌸 ',' 🌷 ',' � ',' 🌹 ',' 🌻 ',' 🌺 ',' � ',' 🎇 ',' � ',);

$inc=array('emoji.php',);
include $inc[rand(0,count($inc)-1)];
$ujj = $ujn[rand(0,count($ujn)-1)];
$emo = str_replace($qwerty,$font,$ujj);

for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
if($stat[data][$i-1][from][id] != $me[id]){
$x=$stat[data][$i-1][id].'  ';
$y = fopen('cmy_log','a');
fwrite($y,$x);
fclose($y);
$bot=array('nomer','latah','biasa',);
$robot=$bot[rand(0,count($bot)-1)];
$s=$stat[data][$i-1][message];

$inc=array('motivasi.php','bijak.php','lucu.php',);
include $inc[rand(0,count($inc)-1)];
$motiv = $text[rand(0,count($text)-1)];


$gen=json_decode(auto('http://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=gender'),true);
if($gen[gender] == 'male'){
$arr_gen = array(' ','   ','   ','  ',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}else{
$arr_gen = array('  ','   ','   ','  ',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$exp_nam = str_replace($abc,$kotak,$exp_nam);
$nama = $gender.'_'.$exp_nam[0].'';
if($stat[data][$i-1][type] == 'photo' ){
$salah= array(
' 
', 
'
', 
' 
', 
' 
',
 ' 
',
 ' 
',
);
}else{
$salah = array(
' 
', 
'
', 
' 
', 
' 
',
 ' 
',
 ' 
',
); }

$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));
if ($_time > 01) $_sambutan = "Met dini hari .";
else if ($_time > 24) $_sambutan = "Good merem . ";
else $_sambutan = "Selamat Pagi  ";

$gentime = microtime();
$gentime = explode(' ',$gentime);
$gentime = $gentime[0];
$pg_end = $gentime;
$totaltime = ($pg_end - $pg_start);
$showtime = number_format($totaltime, 1, '.', '');

$hari=gmdate("D", time()+60*60*7);
if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Sunday"; }
if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Monday"; }
if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Tuesday"; }
if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Wednesday"; }
if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Thursday"; }
if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Friday"; }
if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Saturday"; }
$jame=" ".gmdate("g:i:s a", time()+60*60*7);
$tgl=" ".gmdate("j - m - Y", time()+60*60*7);


$su=array(
'  

',
'

',
);

$ujon=$su[rand(0,count($su)-1)];

$kamu = ' @['.$stat[data][$i-1][from][id].':'.$exp_nam[0].'] ';
$komentar = $salah[rand(0,count($salah)-1)];

$message = ' 

 '.$sumekar.' Aᴅᴅ Mᴄ1�7 Cʟ�sᴄ1�7 '.$kamu.'
 	
�1�7  Site > LitonBot,CF �1�7

°-=- CRACKERX BOT TEAM -=-°

'.$ujon.' ';
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/likes?access_token='.$access_token.'&method=post');
echo $stat[data][$i-1][from][name].'=> '.htmlspecialchars($stat[data][$i-1][message]).'
Komeng => '.$message.'';
}
}
}

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}

?>