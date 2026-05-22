<?

if($desa!=$desa_parol) { exit(); }

//  считывание файлов .тхт в папке ip

$chet_dosok=0;
$chet_dosok_vsego=0;

  echo '<center><table width=100%><tr><td class=td_center bgcolor=#202020><center>';
?>

<form  name="formtext" method='post' action=''>
 <input type="text" class="button"  size=40% maxlength=20 name="login" value="" style:bgcolor=black>
<input type='submit' class="button" value='        Поиск логина         '> 
</form>


<?

if($_POST['login']) { 

if($login>' ') {
 echo "<meta http-equiv='refresh' content='1;url=troxa.php?ban=ok2&login=$login'>";
                   }
}

if($ban_n>' ' || $offban_n>' ' || $del>' ') {
 echo "<meta http-equiv='refresh' content='1;url=troxa.php?ban=ok2'>";
                   }


?>


<?
$color1='#646464';

echo '<table width=100%><tr>

<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>#</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Имя</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Дата посещения</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>IP адрес</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>/-/</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Бан</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Разбан</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Удалить</font></strong></em></center></td>

</tr>';


echo '<tr>

<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>

</tr>';


include('../troxa/ban_login_load.php');


$dir = '../guest/data_rating';
 
$f = scandir($dir);
 
$x='1';
$tt='0';

foreach ($f as $file){
    if(preg_match('/\.(txt)/', $file)){
    //$file_konvert = preg_replace("|[.]+|", "_", $file);
    $file = preg_replace("/.txt/", "", $file);
$chet_dosok=$chet_dosok+1;
//$chet_dosok_vsego=$chet_dosok_vsego+1;
if($chet_dosok>0 && $file>' ') {   
 //echo $chet_dosok.' - выбрать доску <a href=index.php?doska='.$file_konvert.'&tip=1>'.$file.'</a><br/>';

if(!$cel) { $cel='#565656'; }
if($cel=='#565656') { $cel='#606060'; } else if($cel=='#606060') { $cel='#565656'; }

$data1='../guest/data_rating/'.$file.'.txt';
if($fer = fopen($data1, "r")) {  } 
while(!feof($fer)) { 
if($sh[]= fgets ($fer)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
 }
fclose ($fer);

$data4='../btc/'.$file.'.txt';
if ( !file_exists($data4) )   { $udalenie='Da8'; $ss='/-/';  } else $ss=' <em>Есть анкета</em>';

 $ip=$_SERVER['REMOTE_ADDR'];
$sh[0] = preg_replace("|[\r\n]+|", "", $sh[0]);
$sh[1] = preg_replace("|[\r\n]+|", "", $sh[1]);

$ban_login=false;

for($a=1;$a<$ttret+1;$a++) {  if($login_x[$a]==$file) {  $banned=$file; $ban_login=true; } }

//if($sh[1]=='1.54.35.57') { $tt=$tt+'1'; echo '<br>'.$tt.'.'.$file.' / '.$sh[1]; }
//if($sh[0]=='/-/') { $tt=$tt+'1'; echo '<br>'.$file; }

if(preg_match('/80.80./',$sh[1]) || preg_match('/66./',$sh[1])) { $ddf=$ddf+1; echo ' '.$ddf.'. '.$sh[1].'<br>'; $udalenie='Da9'; }

if($sh[0]=='/-/') { $udalenie='Da'; }

if($udalenie=='Da9' && preg_match('/'.$ip_adress.'/',$ip)) { 

unlink('../guest/data_rating/'.$file.'.txt'); 
unlink('../btc/'.$file.'.txt'); 
unlink('../rating/'.$file.'.txt'); 
unlink('../wins_losses/'.$file.'.txt'); 
unlink('../chat_igrok/igrok_message/'.$file.'.db'); 

$adres='../archive_doski/'.$file;
 
function removeDirectory($dir) {
    if ($objs = glob($dir."/*")) {
       foreach($objs as $obj) {
         is_dir($obj) ? removeDirectory($obj) : unlink($obj);
       }
    }
    rmdir($dir);
  }

 if(removeDirectory($adres)) {  }

echo "<meta http-equiv='refresh' content='1;url=troxa.php?ban=ok2'>";
} 

if($name==$file) { $text='Вы'; } else $text=''.$ss;
if($name!=$name_admin && !preg_match('/'.$ip_adress.'/',$ip) && $text!='Вы') { $sh[1]='* * * * *'; }

if($name==$name_admin && preg_match('/'.$ip_adress.'/',$ip) && $desa==$desa_parol) { 
                                                                    if($ban_login==false) {
                                                                             $dede1='<a href=troxa.php?ban=ok2&ban_n='.$file.'&v='.$x.'>Забанить</a>'; 
                                                                             $dede2='* * *';
                                                                             $dede3='<a href=troxa.php?ban=ok2&del='.$file.'>Удалить</a>';
 } 
                                                                                                      }
if($name==$name_admin && preg_match('/'.$ip_adress.'/',$ip) && $desa==$desa_parol) { 
                                                             if($ban_login==true) {
                                                                             $dede1='Забанен '; 
                                                                             $dede2='<a href=troxa.php?ban=ok2&offban_n='.$file.'>Разбанить</a>'; 
                                                                             $dede3='<a href=troxa.php?ban=ok2&del='.$file.'>Удалить</a>'; }
                } else $dede1=$dede2=$dede3='* * *';

if(!$sh[1] || $sh[1]<' ') { $sh[1]='/-/'; }


if($login>' ') { 

$imya=$file;
$imya = preg_replace("|[\r\n]+|", "", $imya);

if($login==$imya) {
echo '<tr>

<td bgcolor='.$cel.'><center><strong> '.$chet_dosok.'</strong></center></td>
<td bgcolor='.$cel.'><center><em><strong> '.$file.' </td>
<td bgcolor='.$cel.'><center><strong> '.$sh[0].' </td>
<td bgcolor='.$cel.'><center><strong> '.$sh[1].' </td>
<td bgcolor='.$cel.'><center><strong> '.$text.' </td>
<td bgcolor='.$cel.'><center><strong>'.$dede1.'</strong></em></center></td>
<td bgcolor='.$cel.'><center><strong>'.$dede2.'</strong></em></center></td>
<td bgcolor='.$cel.'><center><strong>'.$dede3.'</strong></em><br></center></td>

</tr>';
                       }


                   }

if(!$login || $login<' ') {

echo '<tr>

<td bgcolor='.$cel.'><center><strong> '.$chet_dosok.'</strong></center></td>
<td bgcolor='.$cel.'><center><em><strong> '.$file.' </td>
<td bgcolor='.$cel.'><center><strong> '.$sh[0].' </td>
<td bgcolor='.$cel.'><center><strong> '.$sh[1].' </td>
<td bgcolor='.$cel.'><center><strong> '.$text.' </td>
<td bgcolor='.$cel.'><center><strong>'.$dede1.'</strong></em></center></td>
<td bgcolor='.$cel.'><center><strong>'.$dede2.'</strong></em></center></td>
<td bgcolor='.$cel.'><center><strong>'.$dede3.'</strong></em><br></center></td>

</tr>';
                               }
$ses[$x]=$sh[1]; $x=$x+1;
 unset($sh); }                      }
 }    


?> </table><br> <?

// конец считывание файлов .тхт в папке ip


  echo '</center></table></center>';

?>



<?
if(!$name) { $name='Гость'; }

if($ban_n>' ' && preg_match('/'.$ip_adress.'/',$ip) && $name==$name_admin && $desa==$desa_parol && $ban_n!='Guest653' && $name!='Гость') { 

$logi='../ban/ban_name.txt';

$ban_n = preg_replace("|[\r\n]+|", "", $ban_n);
$ses[$v] = preg_replace("|[\r\n]+|", "", $ses[$v]);

$times=date("d.m.Y ");

if(!$ses[$v] || $ses[$v]<' ') { $t='/-/'; } else $t=$ses[$v];

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,"\n".$times.':'.$t.':'.$ban_n."\n")) { ; }
fclose($openchatdb);

$logi='../logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Посетитель <strong><em>'.$name.'</em></strong> забанил ник <strong>[ '.$ban_n.' ]</strong>';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

 }




 




if($del>' ' && preg_match('/'.$ip_adress.'/',$ip) && $name==$name_admin && $desa==$desa_parol) { 

$logi='../guest/data_rating/'.$del.'.txt';

$text='/-/';

$openchatdb=fopen($logi,"w");
 if(fwrite($openchatdb,$text."\n")) { ; }
fclose($openchatdb);

} //end if del














unset($ses);




if($offban_n>' ' && preg_match('/'.$ip_adress.'/',$ip) && $name==$name_admin && $desa==$desa_parol) { 

$chatmsg=$offban_n;

include ('../ban/ban_reset.php');

}


?>