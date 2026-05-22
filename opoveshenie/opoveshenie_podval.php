<?

if($name!=$doska) { 
       $exxo[1] = preg_replace("|[\n\r]+|", "", $exxo[1]);  $name_opoveshenie=$exxo[1]; 
                                         } else if($name==$doska && $exxo[2]!='0') { 
                                                                                  $exxo[2] = preg_replace("|[\n\r]+|", "", $exxo[2]); $name_opoveshenie=$exxo[2]; } 

if($tip=='1') { $nnn=$nomer_doski; $n=''; }
if($tip=='2') { $nnn=$nomer_doski2;  $n='2'; }
if($tip=='3') { $nnn=$nomer_doski3;  $n='3'; }
if($tip=='4') { $nnn=$nomer_doski4;  $n='4'; }
if($tip=='5') { $nnn=$nomer_doski5;  $n='5'; }
if($tip=='6') { $nnn=$nomer_doski6;  $n='6'; }
if($tip=='7') { $nnn=$nomer_doski7;  $n='7'; }
if($tip=='8') { $nnn=$nomer_doski8;  $n='8'; }
if($tip=='9') { $nnn=$nomer_doski9;  $n='9'; }
if($tip=='10') { $nnn=$nomer_doski10;  $n='10'; }

// записываем оповещения на емайл сопернику
$xxp='./archive_doski/'.$name_opoveshenie.'/anketa/opoveshenie.txt';
$ddx='Игрок <strong><em>'.$name.'</em></strong> сделал ход на вашей <a href=../index.php?doska='.$doska.'&tip='.$tip.'&nomer'.$n.'='.$nnn.'>доске</a> '.$nnn.'  вариант #'.$tip.',&nbsp;&nbsp;'.$hod_zapis.'&nbsp;&nbsp;( <font size=1>'.date("d.m.Y|G:i:s").'</font> )';

if ( file_exists($xxp) )   { 

$openchatdb=fopen($xxp,"a");

//if($exxo[1]=='Comp' && $exxo[2]=='Comp') { ppe='1'; }

if($ppe!='1') {
if(fwrite($openchatdb,$ddx."\n")) { ;  }
                   }
fclose($openchatdb);
      
// 

}


?>







<?
$base_hod_d='./archive_doski/'.$name_opoveshenie.'/anketa/email.txt';

//echo $name;

// считываем из файла ходы записанные
if ( file_exists($base_hod_d) )   { 

unset($zapisi_d);

if($file = fopen($base_hod_d, "r")) { echo ''; $b6=0;} 

while(!feof($file)) { 
if($zapisi_d[]= fgets ($file)){$b6++;} }

fclose ($file); 
//}
?>



<?  

$zapisi_d[0] = preg_replace("|[\n\r]+|", "", $zapisi_d[0]);

if($zapisi_d[0]!='0') { //mail("unlater2@mail.ru", $b6, $zapisi_d[0]);
 

mail($zapisi_d[0], "$name сделал ход", "На сайте шахмат Cyber игрок $name сделал ход в вашей игре на доске $nnn тип - $tip, $hod_zapis");

 }  
}  // конец file_exists
 ?>