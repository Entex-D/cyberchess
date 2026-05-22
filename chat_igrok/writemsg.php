<?
if(isset($_COOKIE['doska_quq'])) { if(!preg_match('/^[^a-zA-Z]+$/',$doska_quq) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska_quq)) { $doska=$doska_quq; echo ''; echo ''; }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; }}
if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $smotrit=$name; }} //для записи внизу кто смотрит
//echo '$name= '.$name;

?>

<?php

include('../hacker.php');

//$doska='Dex';

$file='igrok_message/'.$doska.'.db';
//$file='chat.db';

$t=$_SERVER["REMOTE_ADDR"];

//$chatmsg='123';

$dlina_msg = strlen ($chatmsg); if($dlina_msg>230) { $chatmsg=''; ?><script>alert('Спам,длина сообщения слишком большая');</script><?}

if($chatmsg>'  ')  {


$openchatdb=fopen($file,"a");
$chatmsg=$_POST['chatmsg'];

$chatnick=htmlspecialchars($chatnick);
$chatmsg=htmlspecialchars($chatmsg);


  $chatmsg = preg_replace('/http(s)?:\/\/([^\s]+)/', '<a target=_blank href="$0">$2</a>', $chatmsg); 
                                                                                                                                         
//$chatmsg='123';

if(fwrite($openchatdb,"<a target=_blank href=chats_user.php?namer=".$doska."><em><font size=1>".date("d.m.Y|G:i:s ")."</font></em></a> <em>".$name."</em>: <font size=1></font> "))        {

if(fwrite($openchatdb,'<strong>'.$chatmsg.'</strong>'."\n"))        {
echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";
                                                                       }         else {        echo "Error adding message"; }  


fclose($openchatdb);

           
                                                                         }






$logi='../logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок '.$name.' написал в чате игрока '.$doska;
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

















if($name<>$doska) {



$base_hod='../archive_doski/'.$doska.'/anketa/email.txt';

//echo $name;

// считываем из файла ходы записанные
if ( file_exists($base_hod) )   { 

if($file = fopen($base_hod, "r")) { echo ''; $b6=0;} 

while(!feof($file)) { 
if($zapisi_rxx[]= fgets ($file)){$b6++;} }

fclose ($file); 
}

$zapisi_rxx[0] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[0]);





mail($zapisi_rxx[0], "Сообщение от $name", "На сайте шахмат Cyber посетитель $name написал вам сообщение: '$chatmsg'");
                              }










}  else echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";
                
   
   
  









 echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";
 echo "<meta http-equiv='refresh' content='1;url=addmsg.php'>";




?>