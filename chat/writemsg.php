<? if(isset($_COOKIE['name'])) { } ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<?php

include('../chat/spam.php');

$t=$_SERVER["REMOTE_ADDR"];

include('../hacker.php');

$chatnick=$name;

$chatmsg = preg_replace("|[\r\n]+|", "", $chatmsg);
$chatmsg = preg_replace("|[  ]+|", " ", $chatmsg);

$schet_message[$schet] = preg_replace("|[\r\n]+|", "", $schet_message[$schet]);
$schet_message[$schet] = preg_replace("|[  ]+|", " ", $schet_message[$schet]);

if(' '.$chatmsg==$schet_message[$schet]) { $chatmsg=''; ?><script>alert('Спам,повторяющееся сообщение');</script><?} 
if(preg_match('/'.$chatmsg.'/',$schet_message[$schet])) { $chatmsg=''; ?><script>alert('Спам,повторяющееся сообщение');</script><?} 

$dlina_msg = strlen ($chatmsg); if($dlina_msg>440) { $chatmsg=''; ?><script>alert('Спам,длина сообщения слишком большая');</script><?}


if($chatmsg>' ')  {

$openchatdb=fopen("chat.db","a");
//$chatmsg=$_POST['chatmsg'];

$chatnick=htmlspecialchars($chatnick);
$chatmsg=htmlspecialchars($chatmsg);


  $chatmsg = preg_replace('/http(s)?:\/\/([^\s]+)/', '<a target=_blank href="$0">$2</a>', $chatmsg); 
                                                                                                                                        

if(fwrite($openchatdb,date("d.m.Y|G:i:s ")." / ".$chatnick." / "))        {

if(fwrite($openchatdb,$chatmsg."\n"))        {
echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";
                                                                       }         else {        echo "Error adding message"; }  


fclose($openchatdb);

           
                                                                         }}  else echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";
                
   
   
if($chatmsg>'  ')  {   
     

$logi='../logi.txt';

if(!$name) { $name='Гость'; }

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> написал в общем чате [ <a href=chat/chat_full_screen.php>Посмотреть</a> ]';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

} //if chatmsg>' '                 
?>


<?

if($chatmsg<>'стереть ип') {
if($file = fopen("chat.db", "r")) { echo ''; $b4=0;} 

while(!feof($file)) { 
if($messaged[]= fgets ($file)){$b4++;} }

fclose ($file); 

if($b4>600) {  ?><script>alert('В базе > 600 сообщений,лишние ип удалим');</script><? 
                            $chatmsg='стереть ип';    $chatmsg1='стереть базу'; 


if($file = fopen("chat.db", "r")) { echo ''; $b4=0;} 

while(!feof($file)) { 
if($messageb[]= fgets ($file)){$b4++;} }

fclose ($file); 

 ?><script>alert('Удаляем первые сообщения,оставляем последние 560 ');</script><? 

$file = fopen("chat.db", "w"); 

for($a=$b4-560;$a<$b4+1;$a++) { 
if(!fputs ($file, $messageb[$a])) {echo 'No save>index6';}
}

fclose ($file); 




   }





 echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";


}
 echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";

























?>