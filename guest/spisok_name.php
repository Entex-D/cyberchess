
<? include('../shapka_load_style.php'); ?>
<center>
<? include('../shapka.php'); ?>
</center>

<?


//  считывание файлов .тхт в папке ip

$chet_dosok=0;
$chet_dosok_vsego=0;

  echo '<center><table width=90% ><tr><td class=td_center bgcolor=#202020><font size=2><strong><br><center>Список посетителей сайта "КИБЕРШАХМАТЫ.РФ"<br><br></center><strong></font></td></tr></table>


<table width=90%><tr><td class=td_center bgcolor=#202020><center>';
?>

<form  name="formtext" method='post' action=''>
 <input type="text" class="button"  size=40% maxlength=20 name="login" value="" style:bgcolor=black>
<input type='submit' class="button" value='        Поиск логина         '> 
</form>


<?

if($_POST['login']) { 

if($login>' ') {
 echo "<meta http-equiv='refresh' content='1;url=spisok_name.php?login=$login'>";
                   }
}
?>


<?
$color1='#646464';

echo '<table width=80%><tr>

<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>#</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Имя</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Дата посещения</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>IP адрес</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>/-/</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Бан</font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4>Разбан</font></strong></em></center></td>

</tr>';


echo '<tr>

<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>
<td class=td_center bgcolor='.$color1.'><center><em><strong><font size=4></font></strong></em></center></td>

</tr>';

$dir = 'data_rating';
 
$f = scandir($dir);
 
$x='1';

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

$data1='data_rating/'.$file.'.txt';
if($fer = fopen($data1, "r")) {  } 
while(!feof($fer)) { 
if($sh[]= fgets ($fer)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
 }
fclose ($fer);

 $ip=$_SERVER['REMOTE_ADDR'];
$sh[0] = preg_replace("|[\r\n]+|", "", $sh[0]);

if($sh[0]=='/-/' && preg_match('/46/',$ip)) { 

unlink('data_rating/'.$file.'.txt'); 
unlink('../btc/'.$file.'.txt'); 
unlink('../rating/'.$file.'.txt'); 
unlink('../winlosses/'.$file.'.txt'); 

$adres='../archive_doski/'.$file.'';

function my_delete_dir($mypath){
   $dir = opendir($mypath);
   while (($filer = readdir($dir))){
     if (is_file($mypath."/".$filer))
       unlink ($mypath."/".$filerr);
     elseif (is_dir($mypath."/".$filer) && ($filer != ".") && ($filer != ".."))
       my_delete_dir ($mypath."/".$filer);
    }
    closedir ($dir);
    rmdir ($mypath);
}
echo "<meta http-equiv='refresh' content='1;url=spisok_name.php'>";
} 

if($name==$file) { $text='Вы'; } else $text='/-/';
if($name!='Guest653' && !preg_match('/46/',$ip) && $text!='Вы') { $sh[1]='* * * * *'; }

if($name=='Guest653' && preg_match('/46/',$ip)) { 

                                                                             $dede1='<a href=spisok_name.php?ban='.$file.'&v='.$x.'>Забанить</a> '; 
                                                                             $dede2='<a href=spisok_name.php?offban='.$file.'>Разбанить</a>'; } else $dede1=$dede2='* * *';

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
<td bgcolor='.$cel.'><center><strong>'.$dede2.'</strong></em><br></center></td>

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
<td bgcolor='.$cel.'><center><strong>'.$dede2.'</strong></em><br></center></td>

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

if($ban>' ' && preg_match('/46/',$ip)) { 

$logi='../ban/ban_name.txt';

$ban = preg_replace("|[\r\n]+|", "", $ban);
$ses[$v] = preg_replace("|[\r\n]+|", "", $ses[$v]);

$times=date("d.m.Y ");

if(!$ses[$v] || $ses[$v]<' ') { $t='/-/'; } else $t=$ses[$v];

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$times.':'.$t.':'.$ban."\n")) { ; }
fclose($openchatdb);

 }



unset($ses);




if($offban>' ' && preg_match('/46/',$ip)) { 

$chatmsg='dax '.$offban;

include ('../ban/ban_reset.php');

}


?>





<br>
<center>

<? include('../podval.php'); ?>

</center><br>