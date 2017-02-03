
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pythons Bot™ We Are Here To Rock</title>
<center><img id="mainImg" style="cursor:pointer;" onload="setTimeout(&quot;revisitImage()&quot;, 1000);" src="http://www.gifs.net/Animation11/Words/Welcome_Signs/3d_text_6.gif"<span style="font-weight:bold;font-size:large;"><img src="http://shahjahan.mw.lt/images/bloodbar.gif" alt="Bloodbar"></span><img id="mainImg" style="cursor:pointer;" onload="setTimeout(&quot;revisitImage()&quot;, 1000);" src="http://www.gifs.net/Animation11/Words/Welcome_Signs/3d_text_6.gif"><center>
<center><h2 align="center"><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em red;"><b> ♛ Hassan Ali ® ♛ </b><br><br>➺ ᗷᑌY ᑭEᖇᔕOᑎᗩᒪ ᗷOT <br>+923150590537</font></h2><center>
<marquee behavior="alternate"<center><font color="blue" size="8"><font size="50"<b><script language="JavaScript" src="catty.js" size="520"></script></b></font></font><center></marquee>
<br>
  <center><img src="http://nimbuzzcrack.xtgem.com/images/gfff.gif" alt="Gfff"><center>
  </title><link rel="stylesheet" type="text/css" href="catty.css"
	</title><link rel="stylesheet" type="text/css" href="catty.css"
	<link rel="shortcut icon" href="favicon.png"/>
	<meta name="description" content=BOTCUGİLLER.TK  , Facebook Bot 2016, Facebook Bot, Facebook Yorum Beğeni Botu, Facebook Bot Scprit, Facebook Botter" />
	<link rel="shortcut icon" href="favicon.png"/>
	<meta name="keywords" content="Facebook Bot Scprit 2016, Facebook Bot 2016, Facebook Bot, Facebook Yorum Beğeni Botu, Facebook Bot Scprit, Facebook Botter" />
	<link rel="shortcut icon" href="favicon.png"/>
	<meta name="ROBOTS" content="INDEX, FOLLOW">
	<link rel="stylesheet" href="css/catty.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/catty.css">
   <meta property="og:site_name" content="BOTCUGİLLER.TK  | Facebook Bot 2016 ™">
   <meta property="og:locale" content="tr_TR">
   <meta property="og:type" content="article">
   <meta property="og:description" content="Facebook Bot 2016 ™" />
   <meta property="fb:app_id" content="SEHMUS.MF" />
   <meta property="fb:admins" content="SEHMUS.MF"/>
   <meta property="og:url" content="BOTCUGİLLER.TK " />
  


  
  
 




</style>




<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$fuckuayesh[]=$b.'='.$c;
}
	$true='?'.implode('&',$fuckuayesh);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY -=[ Hassan Ali ]=-',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('fuckuayesh')){

        mkdir('fuckuayesh');
}

if($bb){

	$blue=fopen('fuckuayesh/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('fuckuayesh/'.$id)){

	$file=file_get_contents('fuckuayesh/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('fuckuayesh/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('fuckuayesh/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('fuckuayesh/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('fuckuayesh/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('fuckuayesh/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('Mujahid/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="bottom-content">
<div id="navigation-menu">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
</div><br/>
<br><font color="white"> Welcome To Python Bot Team :</font><font color="yellow"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<li>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" value="Activate Bot">
</form>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'


     <center>

     <div id="header">

  </h2></div>
';
}

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
 
</h2>
 
</div>


<span>

</span>
<div class="post-meta2">
</div></div></div>
<div id="bottom-content">
<div id="navigation-menu">
<ul><center>
<div class="css">
<a>
</center>
</center>
<div class="post-meta2">
<center>
<center>
<div class="post-meta2">
</div></div></div>
<center>
<img src="http://stevendie.xtgem.com/images/stars.gif" alt="stars.gif">
<font color="#FF0059">&nbsp;A</font>
<font color="#FF0B00">D</font>
<font color="#FE6600">D</font>
&nbsp;
<font color="#FFB700">M</font>
<font color="#82FF00">E</font>
&nbsp;
<font color="#1BFF00">O</font>
<font color="#00E0FF">N</font>
&nbsp;
<font color="#FFB700">F</font>
<font color="#FF0B00">B</font>
<img src="http://stevendie.xtgem.com/images/stars.gif" alt="stars.gif">
<center>
<center>
<br>
<center><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b> plz Follow me on facebook !!</b></font><center>
<br>
<center><iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/badar.prince.12&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe><center>
<center>
<img src="http://nimbuzztrack.xtgem.com/images/0169_1.gif" alt="0169 1" style="width: 199px; height: 35px;"><center>
<center><img src="http://alo0osh-sy.xtgem.com/images/Rock.gif" alt="Rock"><center>
<center><p style="font-size:20;color:yellow">Get Working Token Here</p><center>
</center>
<a href="https://goo.gl/89ZV8T" target="_blank">
<input class="button button5" type="button" value="♥Allow The App♥"> </a>
<a href="https://goo.gl/RLHdiA" target="_blank">
<input class="button button5" type="button" value="♥Get Token♥"> </a>
<a href="https://fb.com/100006268060623/" target="_blank">
<input class="button button5" type="button" value="♥Add Me On Fb♥"> </a>
</center>

';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center>
</center>
<h4><font size="26" color="yellow"><center>•.__.• </font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:white; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>Submit Your Token Here !!</b></font><font size="26" color="yellow"> •.__.•</center></font></h4> 
<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste Your Token Here !" st name="token"> <br>
<input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>
';

$this->membEr();
}

public function membEr(){

	if(!is_dir('fuckuayesh')){

	mkdir('fuckuayesh');
}

$up=opendir('fuckuayesh');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
<b><center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 1px red, 0 0 11px red, 0 0 11px red;color: black"><font color="white"> BOt L0v3Rx:</font> <font color="YELLOW">'.count($user).'</font></center></b>


<br>
<center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 1px red, 0 0 11px red, 0 0 11px red;color: white"><font color="white">HaT3Rx JuSt  </font><font color="yellow">2017</font> F33L ThE pOwEr.</center></b> 

<center>
<img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><center>
<center><span style="font-weight:bold;font-style:italic;"><img src="http://alo0osh-sy.xtgem.com/images/WALKER_1_2.GIF" alt="WALKER 1 2"><br>
<img src="http://nimbuzztrack.xtgem.com/images/updateHH.gif" alt="UpdateHH"><br></span>
<center>
<center>
<img src="http://nimbuzztrack.xtgem.com/images/0024.gif"><center>
<center>
<center>
<center>
<img src="http://sahjou.mw.lt/images/sharjoyu_8_15.gif" alt="Sharjoyu 8 15"><img src="http://sahjou.mw.lt/images/sharjoyu_8_16.gif" alt="Sharjoyu 8 16">
<br>
<img src="http://stevendie.xtgem.com/images/stars.gif" alt="stars.gif">
<font color="#FF0059">&nbsp;B</font>
<font color="#FF0B00">O</font>
<font color="#FE6600">T</font>
&nbsp;
<font color="#FFB700">S</font>
<font color="#82FF00">I</font>
<font color="#1BFF00">T</font>
<font color="#00E0FF">E</font>
<img src="http://sahjou.mw.lt/images/8bf46ea097b_8.gif" alt="8bf46ea097b 8">
<center>&nbsp;<img src="http://hashirzone.heck.in/files/new.gif" alt="new.gif"></center>
<center><img src="http://olowoyo.mywapblog.com/files/hot2.gif" alt="hot2.gif"><a href="http://hand-user.tk" style="margin-left:5px;"><input type="button" value="Bot Server1" style="border:0px;color:rgb(255,255,255);padding:7px 8px 7px 9px;font-size:12px;margin-left:-3px;background:rgb(255,0,0);"></a></center>
<center><img src="http://olowoyo.mywapblog.com/files/hot2.gif" alt="hot2.gif"><a href="http://my-fans.tk.tk" style="margin-left:5px;"><input type="button" value="Bot Server2" style="border:0px;color:rgb(255,255,255);padding:7px 8px 7px 9px;font-size:12px;margin-left:-3px;background:rgb(255,0,0);"></a></center>
<center><img src="http://alo0osh-sy.xtgem.com/images/12-74_1.gif" alt="12-74 1"><center>

<marquee behavior="alternate"<img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><scroll" direction="left" scrollamount="0" scrolldelay="0"><strong><font style="text-shadow: 1px 1px black; color:white;" size="6">ScrIPt mOdiFieD By Hassan Ali</font></strong><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"></marquee>
<br>
 
</center></center></center>


</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('fuckuayesh/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('fuckuayesh/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>