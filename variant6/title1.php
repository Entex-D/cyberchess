
<?
//  считываем данные регистрации

$sxx='./archive_doski/'.$doska.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);
$exxo[3] = preg_replace("|[\r\n]+|", "", $exxo[3]);
$exxo[4] = preg_replace("|[\r\n]+|", "", $exxo[4]);
$exxo[5] = preg_replace("|[\r\n]+|", "", $exxo[5]);
$exxo[6] = preg_replace("|[\r\n]+|", "", $exxo[6]);
$exxo[7] = preg_replace("|[\r\n]+|", "", $exxo[7]);
$exxo[8] = preg_replace("|[\r\n]+|", "", $exxo[8]);
$exxo[9] = preg_replace("|[\r\n]+|", "", $exxo[9]);
$exxo[10] = preg_replace("|[\r\n]+|", "", $exxo[10]);
$exxo[11] = preg_replace("|[\r\n]+|", "", $exxo[11]);

//  конец считываем данные регистрации



if($name==$exxo[3] && $exxo[11]=='Белые') { $hod_dostup='1';
}

if($name==$exxo[4] && $exxo[11]=='Черные') { $hod_dostup='2';
}

if($name==$exxo[4] && $exxo[11]=='Белые') { 
}

if($name==$exxo[3] && $exxo[11]=='Черные') { 
}

}

 //if(!file_exists($sxx))   {  setcookie ("nomer_doski6", $nomer_doski6, time() ); setcookie ("nomer6", $nomer6, time() );   } 


?>
 <?

if($hod_dostup=='1') {  $title='Ваш ход'; } else 
if($hod_dostup=='2') {  $title='Ваш ход'; }  else $no='2';
 
  if($no=='2') { $title='Ход не ваш'; } ?>
 <? 
// echo '<br>$dostup = '.$dostup;
// echo '<br>$hod_dostup = '.$hod_dostup;
   ?>

<?

$sxx='./archive_doski/'.$doska.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($fifa[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$ok='0'; $win1='0'; $win2='0';
for($r=20;$r<120;$r++) {

if($fifa[$r]=='6') { $ok=$ok+'1'; $win2='1'; }
if($fifa[$r]=='16') { $ok=$ok+'1'; $win1='1'; }

                                      }


}


if($ok=='1') { $no=='2'; 

if($win2=='1' && $win1=='0') { $hod_dostup='5'; } else 
if($win2=='0' && $win1=='1') { $hod_dostup='4'; } 

                  }

?>