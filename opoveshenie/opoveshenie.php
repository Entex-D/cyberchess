<? include('../shapka_load_style.php'); ?>



<center>


<?
$base_hod='../archive_doski/'.$name.'/anketa/opoveshenie.txt';

//echo $name;

// считываем из файла ходы записанные

if ( file_exists($base_hod) )   { 

if($file = fopen($base_hod, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($zapisi[]= fgets ($file)){$b5++;} }

fclose ($file); 
}
?>



<?
$base_hod='../archive_doski/'.$name.'/anketa/email.txt';

//echo $name;

// считываем из файла ходы записанные
if ( file_exists($base_hod) )   { 

if($file = fopen($base_hod, "r")) { echo ''; $b6=0;} 

while(!feof($file)) { 
if($zapisi_rxx[]= fgets ($file)){$b6++;} }

fclose ($file); 
}
?>



<center>

<? include('../shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Оповещения о ходах соперников в ваших играх</a></strong><br><br></font></center></td></tr></table>

<br>

<table width=90%><tr>
<td class=td_center><center><font size=1><br><strong>




<?

//echo $zapisi_rxx[0];

$zapisi_rxx[0] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[0]);
$zapisi_rxx[1] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[1]);
$zapisi_rxx[2] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[2]);
$zapisi_rxx[3] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[3]);
$zapisi_rxx[4] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[4]);
$zapisi_rxx[5] = preg_replace("|[\n\r]+|", "", $zapisi_rxx[5]);


if($zapisi_rxx[0]!='0' && $zapisi_rxx[0]>' ') { ?>
<form  name="formtext" method='post' action=''>
Подтвержден email,в случае хода соперника Вам придет уведомление на почту
    <input type='submit' class="button" name='off' value='              Отключить              '>
</form> <? }

if($zapisi_rxx[0]=='0' && !$pppx) { ?>

<form  name="formtext" method='post' action=''>

<font size=1 color="#e4e4e4">Оповещения на почту о ходах соперника :</font><input type="text"  class="button" maxlength=20 size=40% name='pppx' value='ваш email'> 
  
<input type='submit' class="button" value='              Включить              '>
</form>

<? } ?>


<?

if($pppx>' ' && !$dddx) {

if(preg_match('/@/',$pppx)) {

mail($pppx, "Email на RMX", "На сайте шахмат RMX посетитель $name ввел вашу почту для оповещений ходов соперников.Код подтверждения email: $zapisi_rxx[1]");

echo 'Письмо с кодом подтверждения выслано на email '.$pppx.',введите код,не закрывая эту страницу<br>';

?>

<br>
<form  name="formtext" method='post' action='opoveshenie.php?pppx=<? echo $pppx; ?>'>

<font size=1 color="#e4e4e4">Код подтверждения из email :</font><input type="text"  class="button" maxlength=20 size=40% name='dddx' value='<? echo $zapisi_rxx[1]; ?>'> 
  
<input type='submit' class="button" value='              Готово              '>
</form>
<?
}
}




if($dddx>' ') {

if($dddx==$zapisi_rxx[1]) { 

//echo 'YES';

$xxp1='../archive_doski/'.$name.'/anketa/email.txt';

if ( file_exists($xxp1) )   { 

$pixa0=$pppx;
$pixa1=$zapisi_rxx[1];
$pixa2='Да';
$pixa3='0';
$pixa4=$zapisi_rxx[4];
$pixa5=$zapisi_rxx[5];

$openchatdb=fopen($xxp1,"w");

 if(fwrite($openchatdb,$pixa0."\n")) { ;  }
 if(fwrite($openchatdb,$pixa1."\n")) { ;  }
 if(fwrite($openchatdb,$pixa2."\n")) { ;  }
 if(fwrite($openchatdb,$pixa3."\n")) { ;  }
 if(fwrite($openchatdb,$pixa4."\n")) { ;  }
 if(fwrite($openchatdb,$pixa5."\n")) { ;  }
                                  
fclose($openchatdb);





 echo "<meta http-equiv='refresh' content='1;url=opoveshenie.php'>";



}
}
}
?>


</strong><br></font></center></td></tr></table>


<?
if(!$b5) { $b5='0'; }
if($b5=='1' & $zapisi[0]==' ') { $b5='0'; }

if($b5>60) { $text='&nbsp;&nbsp;<font size=1>( показаны последние 60 )</font>&nbsp;&nbsp;<font size=1><a href=opoveshenie.php?del=Ok>Очистить список</a>&nbsp;&nbsp;( Список очистится при 900 пунктах )</font>'; }

if($b5>900) {  $del='Total'; include('../opoveshenie/rezet_spisok900.php'); }
if($del=='Ok') { include('../opoveshenie/rezet_spisok.php'); }


echo '<table width=90%><tr><td width=5% class=td_center></td>';
echo '<td class=td_center>&nbsp;&nbsp;&nbsp;<br></td><td  class=td_center width=5%></td></tr>';

echo '<tr><td width=5% class=td_center></td>';
echo '<td class=td_center><strong>Оповещений - '.$b5.$text.'</strong><br><br></td><td width=5% class=td_center></td></tr>';

if($b5<'60') { $ssr=$b5+'1'; } else $ssr='60'; // подсчет,чтобы показывались последние 60 оповещений,если оповещений > 60

$f='0';
for($r=$b5;$r>$b5-$ssr-2;$r--) {
//for($r=$b5-1;$r>-1;$r--) {
$zapisi[$r] = preg_replace("|[\n\r]+|", "", $zapisi[$r]);
$d=$r+'1';
if($zapisi[$r]>' ') {

if($f=='0') { $color_r='#606060'; }
if($f=='1') { $color_r='#565656'; }

echo '<tr><td width=5% class=td_center></td><td bgcolor='.$color_r.'>'.$d.'.&nbsp;&nbsp;<strong> '.$zapisi[$r].'</strong><br></td><td width=5% class=td_center></td></tr>';
$f=$f+'1';
if($f=='2') { $f='0'; }
}}


//
?>



<?
if($_POST['off']) {

//echo 'YES';

$xxp1='../archive_doski/'.$name.'/anketa/email.txt';

if ( file_exists($xxp1) )   { 

$pixa0='0';
$pixa1=$zapisi_rxx[1];
$pixa2='Нет';
$pixa3='0';
$pixa4=$zapisi_rxx[4];
$pixa5=$zapisi_rxx[5];

$openchatdb=fopen($xxp1,"w");

 if(fwrite($openchatdb,$pixa0."\n")) { ;  }
 if(fwrite($openchatdb,$pixa1."\n")) { ;  }
 if(fwrite($openchatdb,$pixa2."\n")) { ;  }
 if(fwrite($openchatdb,$pixa3."\n")) { ;  }
 if(fwrite($openchatdb,$pixa4."\n")) { ;  }
 if(fwrite($openchatdb,$pixa5."\n")) { ;  }
                                  
fclose($openchatdb);






 echo "<meta http-equiv='refresh' content='1;url=opoveshenie.php'>";


}
}
?>

<tr><td></td><td><br></td><td></td></tr>

</table><br>

<? include('../podval.php'); ?>

</center>