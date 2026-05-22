<? include('../shapka_load_style.php'); ?>



<table width=100%><tr><td class=td_center>
<?

//echo $name;

//echo 'dfrw';


$file='chat_igrok/igrok_message/'.$doska.'.db';
//echo $igrok;

if ( !file_exists($file) )   {  //echo 'файл '.$igrok.' отсутствует';

$ni='<a target=_blank href=chats_user.php?namer='.$doska.'><em><font size=1> '.date("d.m.Y|G:i:s ").' </font></em></a> <em>System</em>: <font size=1></font> <strong>Добрый день</strong>
<a target=_blank href=chats_user.php?namer='.$doska.'><em><font size=1> '.date("d.m.Y|G:i:s ").' </font></em></a> <em>System</em>: <font size=1></font> <strong>Ваш персональный чат создан</strong>
<a target=_blank href=chats_user.php?namer='.$doska.'><em><font size=1> '.date("d.m.Y|G:i:s ").' </font></em></a> <em>System</em>: <font size=1></font> <strong>Это чат игрока <a target=_blank href=variant1/archive_doski_tip4.php?namer='.$doska.'&tip=1>'.$doska.'</a></strong>
';

$openchatdb=fopen($file,"w");

 if(fwrite($openchatdb,$ni."\n")) { ;  }

fclose($openchatdb);
   
 }        //exit("файл base не существует");


if($ex = fopen($file, "r")) {  echo '' ; $b4=0;} 
while(!feof($ex)) { 
if($nix[]= fgets ($ex)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
 }
fclose ($ex);



echo '<center><font size=1>Чат игрока <strong>'.$doska.'</strong></font></center><br>';


for($g=$b4-5;$g<$b4;$g++) {
if($nix[$g]>' ') {
    
   // if($nik[$g]<>$nik[$g+1]  & $nik[$g]<>$nik[$g+2] & $nik[$g]<>$nik[$g+3] & $nik[$g]<>$nik[$g+4] & $nik[$g]<>$nik[$g+5] & $nik[$g]<>$nik[$g+6] & $nik[$g]<>$nik[$g+7] & $nik[$g]<>$nik[$g+8] & $nik[$g]<>$nik[$g+9] & $nik[$g]<>$nik[$g+10]) {
   //   if($nik[$g]<>$nik[$g+1]  & $nik[$g]<>$nik[$g+2] & $nik[$g]<>$nik[$g+3] & $nik[$g]<>$nik[$g+4] & $nik[$g]<>$nik[$g+5] & $nik[$g]<>$nik[$g+6] & $nik[$g]<>$nik[$g+7] & $nik[$g]<>$nik[$g+8]) {
     
       echo '<font size=1>'.$nix[$g].'</font><br>'; 
       //  $dix=$dix+1;                    }
    
                } 
// echo $sh[$g];
}


 //echo "<meta http-equiv='refresh' content='4;url=text_chat_body.php'>";
 //echo "<meta http-equiv='refresh' content='4;url=text_chat_body.php'>";


?>

<br>

</td></tr></table>