<?

$ip=$_SERVER["REMOTE_ADDR"];

if(!preg_match('/46/',$ip) && $name=='Guest653') {

$name='Cyber'; setcookie ("name", $name, time() + 3600*24*365*10);

}

if(isset($_COOKIE['name'])) { 

$base_x='guest/data_rating/'.$name.'.txt';

if ( file_exists($base_x) && $name!='Cyber')   {  

if($file = fopen($base_x, "r")) { $b4=0;} 
while(!feof($file)) { 
if($login_x[]= fgets ($file)){ $b4=$b4+1; }
}
fclose ($file);

$login_x[1] = preg_replace("|[\r\n]+|", "", $login_x[1]);

 $rest = substr($login_x[1], 0, -6);  

//if(!preg_match('/'.$rest.'/',$ip)) { echo 'Не прокатило'; } else echo 'Прокатило';

if(!preg_match('/'.$rest.'/',$ip)) { $rret_name=$name; $tt=rand(1,10000); $name='Milenia'.$tt; setcookie ("name", $name, time() + 3600*24*365*10); $rret='2'; }

if($rret=='2') { ?><center><table width=90%><tr><td class=td_center><br><center><font size=3><strong><em><a href=#>Нельзя взять чужой логин <? echo $rret_name; ?>, этот логин занят другим ip адресом</a></em></strong></font><br><br></center>
</td></tr></table><center><br><? }
}
}

 if($name>' ') {  $dlina2 = strlen ($name); if($dlina2>16) { $tt=rand(1,1000); $name='Longer'.$tt;  setcookie ("name", $name, time() + 3600*24*365*10); }  }
 if($doska>' ') {  $dlina = strlen ($doska); if($dlina>16) { $doska=$name; }  }

if($name>' ') { if(!preg_match('/^[a-zA-Z0-9]+$/',$name)) { 
                                                                                                     $tt=rand(1,1000); $name='Hacker'.$tt;  setcookie ("name", $name, time() + 3600*24*365*10); }}
?>