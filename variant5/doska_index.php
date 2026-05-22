<?
if(isset($_COOKIE['nomer5'])) { $nomer_doski5=$nomer5;
 }
if(isset($_COOKIE['timer'])) {  } else $timer='min86400';
if(isset($_COOKIE['btc'])) {  } else if(!isset($_COOKIE['btc'])) { $rf=rand(0,2); if($rf==0) { $btc='btc0001'; } else if($rf==1) { $btc='btc0002'; } else if($rf==2) { $btc='btc0005'; } } 

if(!$nomer5 && isset($_COOKIE['nomer_doski5'])) { //echo '<br>считан номер доски='.$nomer_doski5;
 }
  if($game!='5' && $game>'0' && !isset($_COOKIE['nomer_doski5'])) {
  
   include('./ochki/vsego_igr_write.php'); 

$fx=rand(1,10000); $nomer_doski5='a'.$fx.'e'; 
if(setcookie ("nomer_doski5", $nomer_doski5, time() + 3600*24*700)) { //echo '<br>куки не записались'; 
} 
                                                               }

include('./hacker.php');

if(isset($_COOKIE['doska_quq'])) { if(!preg_match('/^[^a-zA-Z]+$/',$doska_quq) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska_quq)) { $doska=$doska_quq; echo ''; echo ''; }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; }}
//if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $smotrit=$name; }} //для записи внизу кто смотрит
//echo '$name= '.$name;
//echo $doska;
?>


<? include('./shapka_load_style.php'); ?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=UTF-8" >
        <style>
            #table{
                width:595px;
                height:380px;
            background:#707070;
           border-radius:10px;
            }
            .cell{
                width:36px;
                height:45px;
            }

               .bomb{
                width:36px;
                height:45px;
      background:#202020;
          }
               .cell1{
                width:36px;
                height:0px;
      }
               .cell2{
                width:20px;
                height:45px;
             }
.selected{
                border:4px solid #000;
				border-radius:10px;
            }
        </style>
        <lscript src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<? include('./variant5/title1.php'); ?>

<? if($no!='2') {   include('./script_doska_hod.php'); } ?>


<?

// echo '<br>$hod_shto= '.$hod_shto;
// echo '<br>$hod_kuda= '.$hod_kuda;

if(isset($_COOKIE['doska_kuki_nomer5']))  { $doska=$doska_kuki_nomer5; }
if(isset($_COOKIE['game']))  { // echo '$game считалось';
                                              }
 
// $hod_one='0';
// $hod_two='0';

include('./variant5/config_type4.php');

 // include ('novaya_igra.php'); 

// пешка черная =1 , тура черная =2 ,конь черный =3,  слон черный =4, ферзь черный = 5 ,король черный =6

if ( !file_exists($base) )   {  echo 'файл '.$base.' отсутствует';

$openchatdb=fopen($base,"w");

 if(fwrite($openchatdb,"1"."\n")) { ;  }

fclose($openchatdb);
   
 }      //  exit("файл base не существует");

if($file = fopen($base, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($sh[]= fgets ($file)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
}

 //echo '<br>$b4='.$b4;

fclose ($file);

              if($game<'5' && $game>'0' && !isset($_COOKIE['nomer_doski5'])) { echo ''; 

//  $sh[144];

for($g=0;$g<300;$g++) {
if(!$sh[$g] | $sh[$g]) { $sh[$g]='40'; }
// echo $sh[$g];
}

if($game=='1') {

$sh[126]='81';
$sh[150]='81';

$sh[137]='81';
$sh[161]='81';


$sh[54]='8';
$sh[55]='7';
$sh[56]='2'; 
$sh[57]='3';
$sh[58]='4';
$sh[59]='5';
$sh[60]='6';
$sh[61]='4';
$sh[62]='3';
$sh[63]='2';  
$sh[64]='7';
$sh[65]='8';


$sh[78]='9';
$sh[79]='9';
$sh[80]='1';
$sh[81]='1';
$sh[82]='1';
$sh[83]='1';
$sh[84]='1';
$sh[85]='1';
$sh[86]='1';
$sh[87]='1';
$sh[88]='9';
$sh[89]='9';


$sh[222]='18';
$sh[223]='17';
$sh[224]='12';
$sh[225]='13';
$sh[226]='14';
$sh[227]='15';
$sh[228]='16';
$sh[229]='14';
$sh[230]='13';
$sh[231]='12';
$sh[232]='17';
$sh[233]='18';


$sh[198]='19';
$sh[199]='19';
$sh[200]='11';
$sh[201]='11';
$sh[202]='11';
$sh[203]='11';
$sh[204]='11';
$sh[205]='11';
$sh[206]='11';
$sh[207]='11';
$sh[208]='19';
$sh[209]='19';

$uu=rand(4,10);

for($g=0;$g<2000;$g++) {

$q1=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<$uu) { if($sh[$q1]=='40') { $sh[$q1]='82'; $kon_white=$kon_white+1; } } }

$b1=0;

} //end for
    
    


                           }

if($game=='2') {

$sh[126]='81';
$sh[150]='81';

$sh[137]='81';
$sh[161]='81';


$sh[128]='82';
$sh[159]='82';


$sh[54]='8';
$sh[55]='7';
$sh[56]='2'; 
//$sh[57]='3';
//$sh[58]='4';
$sh[59]='5';
$sh[60]='6';
//$sh[61]='4';
//$sh[62]='3';
$sh[63]='2';  
$sh[64]='7';
$sh[65]='8';


$sh[78]='9';
$sh[79]='9';
$sh[80]='1';
$sh[81]='1';
$sh[82]='3';$sh[82+24]='1';
$sh[83]='4';$sh[83+24]='1';
$sh[84]='4';$sh[84+24]='1';
$sh[85]='3';$sh[85+24]='1';
$sh[86]='1';
$sh[87]='1';
$sh[88]='9';
$sh[89]='9';


$sh[222]='18';
$sh[223]='17';
$sh[224]='12';
//$sh[225]='13';
//$sh[226]='14';
$sh[227]='15';
$sh[228]='16';
//$sh[229]='14';
//$sh[230]='13';
$sh[231]='12';
$sh[232]='17';
$sh[233]='18';


$sh[198]='19';
$sh[199]='19';
$sh[200]='11';
$sh[201]='11';
$sh[202]='13';$sh[202-24]='11';
$sh[203]='14';$sh[203-24]='11';
$sh[204]='14';$sh[204-24]='11';
$sh[205]='13';$sh[205-24]='11';
$sh[206]='11';
$sh[207]='11';
$sh[208]='19';
$sh[209]='19';
    



$uu=rand(4,10);

for($g=0;$g<2000;$g++) {

$q1=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<$uu) { if($sh[$q1]=='40') { $sh[$q1]='82'; $kon_white=$kon_white+1; } } }

$b1=0;

} //end for
    
    

                        }


if($game=='3') {

$sh[126]='81';
$sh[150]='81';

$sh[137]='81';
$sh[161]='81';


$sh[128]='82';
$sh[159]='82';


$sh[54]='8';
//$sh[55]='7';
$sh[56]='2'; 
//$sh[57]='3';
//$sh[58]='4';
$sh[59]='5';
$sh[60]='6';
//$sh[61]='4';
//$sh[62]='3';
$sh[63]='2';  
//$sh[64]='7';
$sh[65]='8';


$sh[78]='9';
$sh[79]='9';
$sh[80]='1';
$sh[81]='7';$sh[81+24]='1';
$sh[82]='3';$sh[82+24]='1';
$sh[83]='4';$sh[83+24]='1';
$sh[84]='4';$sh[84+24]='1';
$sh[85]='3';$sh[85+24]='1';
$sh[86]='7';$sh[86+24]='1';
$sh[87]='1';
$sh[88]='9';
$sh[89]='9';


$sh[222]='18';
//$sh[223]='17';
$sh[224]='12';
//$sh[225]='13';
//$sh[226]='14';
$sh[227]='15';
$sh[228]='16';
//$sh[229]='14';
//$sh[230]='13';
$sh[231]='12';
//$sh[232]='17';
$sh[233]='18';


$sh[198]='19';
$sh[199]='19';
$sh[200]='11';
$sh[201]='17';$sh[201-24]='11';
$sh[202]='13';$sh[202-24]='11';
$sh[203]='14';$sh[203-24]='11';
$sh[204]='14';$sh[204-24]='11';
$sh[205]='13';$sh[205-24]='11';
$sh[206]='17';$sh[206-24]='11';
$sh[207]='11';
$sh[208]='19';
$sh[209]='19';
    


$uu=rand(4,10);

for($g=0;$g<2000;$g++) {

$q1=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<$uu) { if($sh[$q1]=='40') { $sh[$q1]='82'; $kon_white=$kon_white+1; } } }

$b1=0;

} //end for
    
    

                   }


if($game=='4') {

$sh[126]='81';
$sh[150]='81';

$sh[137]='81';
$sh[161]='81';


$sh[128]='82';
$sh[159]='82';


//$sh[54]='8';
//$sh[55]='7';
$sh[56]='2'; 
//$sh[57]='3';
//$sh[58]='4';
$sh[59]='5';
$sh[60]='6';
//$sh[61]='4';
//$sh[62]='3';
$sh[63]='2';  
//$sh[64]='7';
//$sh[65]='8';


$sh[78]='8';$sh[78+24]='9';
$sh[79]='9';
$sh[80]='1';
$sh[81]='4';$sh[81+24]='1';
$sh[83]='3';$sh[82+24]='7';$sh[82+24+24]='1';
$sh[83+24]='1';
$sh[84+24]='1';
$sh[84]='3';$sh[85+24]='7';$sh[85+24+24]='1';
$sh[86]='4';$sh[86+24]='1';
$sh[87]='1';
$sh[88]='9';
$sh[89]='8';$sh[89+24]='9';


//$sh[222]='18';
//$sh[223]='17';
$sh[224]='12';
//$sh[225]='13';
//$sh[226]='14';
$sh[227]='15';
$sh[228]='16';
//$sh[229]='14';
//$sh[230]='13';
$sh[231]='12';
//$sh[232]='17';
//$sh[233]='18';


$sh[198]='18';$sh[198-24]='19';
$sh[199]='19';
$sh[200]='11';
$sh[201]='14';$sh[201-24]='11';
$sh[203]='13';$sh[202-24]='17';$sh[202-24-24]='11';
$sh[203-24]='11';
$sh[204-24]='11';
$sh[204]='13';$sh[205-24]='17';$sh[205-24-24]='11';
$sh[206]='14';$sh[206-24]='11';
$sh[207]='11';
$sh[208]='19';
$sh[209]='18';$sh[209-24]='19';
    



$uu=rand(4,10);

for($g=0;$g<2000;$g++) {

$q1=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<$uu) { if($sh[$q1]=='40') { $sh[$q1]='82'; $kon_white=$kon_white+1; } } }

$b1=0;

} //end for
    
    

                   }



$openchatdb=fopen($base,"w");


for($h=0;$h<300;$h++) {
if($sh[$h]>' ') {
//if($sh[$h]=='80') { $sh[$h]='k'; }
 if(fwrite($openchatdb,$sh[$h]."\n")) { //echo '$sh['.$h.']='.$sh[$h].'<br>'; 
 }
                    }              }
fclose($openchatdb);
                       
 // echo '<br>фигуры записаны в файл <b>'.$base.'</b> со скрипта';



if($name==$doska) { //$fx=rand(1,10000); $nomer_doski5='n'.$fx.'r'; 
//if(!setcookie ("nomer_doski5", $nomer_doski5, time() + 3600*24*700)) { echo '<br>куки не записались'; } 

$adres='./archive_doski/'.$name.'/tip5/'.$nomer_doski5;

if(!mkdir($adres, 0755,true)) { 
//echo '<br>Error';
//if(!mkdir('./archive', 0755)) { echo '<br>2 Error'; } 
 };

//echo '<br>$adres='.$adres;
//echo '<br>$doska='.$doska;
//echo '<br>$name='.$name;
//echo '<br>$nomer_doski5='.$nomer_doski5;

$figury='./archive_doski/'.$name.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'.txt';

$openchatdb=fopen($figury,"w");

for($h=0;$h<300;$h++) {
//$sh[$h] = preg_replace("|[\n\r]+|", "", $sh[$h]);
if($sh[$h]>' ') {
 if(fwrite($openchatdb,$sh[$h]."\n")) { ;  }
                    }              }
fclose($openchatdb);
                         
 // echo '<br>фигуры записаны в файл <b>'.$figury.'</b> со скрипта';






// создаем файл регистрации с данными доски

include('./opcyi_game.php');

$dannye_archive='./archive_doski/'.$name.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'_statix.txt';

$openchatdb=fopen($dannye_archive,"w");

 if(fwrite($openchatdb,$dixa0."\n")) { ;  }
 if(fwrite($openchatdb,$dixa1."\n")) { ;  }
 if(fwrite($openchatdb,$dixa2."\n")) { ;  }
 if(fwrite($openchatdb,$dixa3."\n")) { ;  }
 if(fwrite($openchatdb,$dixa4."\n")) { ;  }
 if(fwrite($openchatdb,$dixa5."\n")) { ;  }
 if(fwrite($openchatdb,$dixa6."\n")) { ;  }
 if(fwrite($openchatdb,$dixa7."\n")) { ;  }
 if(fwrite($openchatdb,$dixa8."\n")) { ;  }
 if(fwrite($openchatdb,$dixa9."\n")) { ;  }
 if(fwrite($openchatdb,$dixa10."\n")) { ;  }
 if(fwrite($openchatdb,$dixa11."\n")) { ;  }
 if(fwrite($openchatdb,$dixa12."\n")) { ;  }
  if(fwrite($openchatdb,$dixa13."\n")) { ;  }
 if(fwrite($openchatdb,$dixa14."\n")) { ;  }
 if(fwrite($openchatdb,$dixa15."\n")) { ;  }
 if(fwrite($openchatdb,$dixa16."\n")) { ;  }
 if(fwrite($openchatdb,$dixa17."\n")) { ;  }
 if(fwrite($openchatdb,$dixa18."\n")) { ;  }
 if(fwrite($openchatdb,$dixa19."\n")) { ;  }
  if(fwrite($openchatdb,$dixa20."\n")) { ;  }
 if(fwrite($openchatdb,$dixa21."\n")) { ;  }
  if(fwrite($openchatdb,$dixa22."\n")) { ;  }
                                 
fclose($openchatdb);
             




// конец файл регистрации с данными доски





include('opoveshenie/opoveshenie_doska.php');








}
}









// если нажата игра 1-4 то записываем лог
if($game<'5' && $game>'0' && !isset($_COOKIE['nomer_doski5'])) { echo ''; 

$logi='logi.txt';
if($game=='1') { $game_g='Extol'; }
if($game=='2') { $game_g='Trox'; }
if($game=='3') { $game_g='Lixa'; }
if($game=='4') { $game_g='Detra'; }

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> создал  новую игру '.$game_g.' на доске '.$nomer_doski5.' вариант #5 Ставка '.$dixa20.' btc';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

 
}
// если нажата игра 1-4 то записываем лог




// если нажата игра 5 то записываем лог
if($game=='5' && isset($_COOKIE['nomer_doski5'])) { echo ''; 

$logi='logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> отменил игру на доске '.$nomer_doski5.' вариант #5';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

 
}
// если нажата игра 5 то записываем лог






















unset($sh);

if($nomer_doski5) {

if ( file_exists($base_figury) )   {  //echo 'файл '.$base_figury.' отсутствует';

if($file = fopen($base_figury, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($sh[]= fgets ($file)){ $b4=$b4+1; }
                          }
                                    }
                           }

echo '';
for($g=0;$g<300;$g++) {
$sh[$g] = preg_replace("|[\r\n]+|", "", $sh[$g]);

} // }
?>

<?
//Считывание btc win
if($name) { $file_guest1='./btc/'.$name.'.txt';  
 
if($file = fopen($file_guest1, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc win

//echo $v[0];
if($v[0]>=$exxo[20]) { $dopusk='ok'; }

if($dopusk=='ok') { //начало допуска по балансу биткоина
?>




<? if($exxo[5]=='0') { ?>

<table align=center width=<? echo $shirina; ?> border=0 bgcolor=#101010>
<tr><td class=td_center bgcolor=#202020 width=80%>

<? include('./variant5/shah.php'); ?>
<? include('logi_email.php'); ?>

</td></tr></table>

<? } ?>




<? if($exxo[11]=='Белые' | $exxo[11]=='Черные') { if($name==$exxo[1] || $name==$exxo[2]) { if($exxo[5]=='0' && $exxo[8]=='0') { include('./timer.php'); }}} ?>




<table align=center width=<? echo $shirina; ?> border=0 bgcolor=#101010>

<tr><td class=td_center bgcolor=#202020 width=80%>
<? 


include ('type_niz.php');



echo '<font size=2><em>

</em></font>';

?> </td><td width=20% class=td_center width=20%><?  include('igrok4.php'); ?> </td></tr></table>


<?
//  считываем данные регистрации
//echo '$nomer_doski5='.$nomer_doski5;

if($nomer_doski5) {

$sxx='./archive_doski/'.$doska.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'_statix.txt';

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
$exxo[12] = preg_replace("|[\r\n]+|", "", $exxo[12]);
$exxo[13] = preg_replace("|[\r\n]+|", "", $exxo[13]);
$exxo[14] = preg_replace("|[\r\n]+|", "", $exxo[14]);
$exxo[15] = preg_replace("|[\r\n]+|", "", $exxo[15]);
$exxo[16] = preg_replace("|[\r\n]+|", "", $exxo[16]);
$exxo[17] = preg_replace("|[\r\n]+|", "", $exxo[17]);
$exxo[18] = preg_replace("|[\r\n]+|", "", $exxo[18]);
$exxo[19] = preg_replace("|[\r\n]+|", "", $exxo[19]);
$exxo[20] = preg_replace("|[\r\n]+|", "", $exxo[20]);
$exxo[21] = preg_replace("|[\r\n]+|", "", $exxo[21]);
$exxo[22] = preg_replace("|[\r\n]+|", "", $exxo[22]);

//  конец считываем данные регистрации
 }


// считываем типа $nomer5 и перезаписываем игрока 2 в файл,чтобы показалась доска для 2 игрока

if($exxo[2]=='0' && $exxo[1]!=$name) { $exxo[2]=$name; 
if($exxo[3]=='0') { $exxo[3]=$name; } else if($exxo[4]=='0') { $exxo[4]=$name; } 
}

if($nomer_doski5) {
$sxx='./archive_doski/'.$doska.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'_statix.txt';

$openchatdb=fopen($sxx,"w");

 if(fwrite($openchatdb,$exxo[0]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[1]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[2]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[3]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[4]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[5]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[6]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[7]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[8]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[9]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[10]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[11]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[12]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[13]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[14]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[15]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[16]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[17]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[18]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[19]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[20]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[21]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[22]."\n")) { ;  }

fclose($openchatdb);
}

// конец считываем типа $nomer5 и перезаписываем игрока 2 в файл,чтобы показалась доска для 2 игрока
?>





<table align=center width=<? echo $shirina; ?> height=360 border=0 bgcolor=#101010>

<? if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; } ?>

<? if($name==$exxo[4] && $nomer_doski5 && $exxo[5]=='0' && $exxo[18]=='0') { echo '';  ?>

<tr><td></td><td class=border_menuse>

<?
// обновление вместо "онлайн людей" от 15.06.2020

include('./punkty_doski.php');

if($exxo[4]==$name && $exxo[11]=='Черные') {
if($exxo[12]>'1' && $exxo[18]=='0') { 
 
if($exxo[1]!='Comp') { echo '<br><a href=index.php?doska='.$doska.'&tip=5&nomer_doski5='.$nomer_doski5.'&ilost=yes>Сдаться</a>'; } 
 }}
// конец обновление вместо "онлайн людей" от 15.06.2020
?>


<? include ('text_online_body.php'); 
?> </td>

<?
$b='0';
for($g=0;$g<300;$g++) {
if(!$sh[$g]) { $sh[$g]='40'; }
}

if($b<'300') {
if($exxo[18]=='0') {
 include('doska_tip4_chernye.php');
 }} } 
 
 ?>    



<? if($exxo[1]=='Comp') { $name=$name_zapas; } ?>


<? if($name==$exxo[3] && $nomer_doski5 && $exxo[5]=='0' && $exxo[18]=='0') {  // если играем белыми - доска в своем положении
?>

<tr><td></td><td class=border_menuse>



<?
// обновление вместо "онлайн людей" от 15.06.2020

include('./punkty_doski.php');

if($exxo[3]==$name && $exxo[11]=='Белые') {
if($exxo[12]>'1' && $exxo[18]=='0') { 
 
echo '<br><a href=index.php?doska='.$doska.'&tip=5&nomer_doski5='.$nomer_doski5.'&ilost=yes>Сдаться</a>'; 
 }}
// конец обновление вместо "онлайн людей" от 15.06.2020
?>



<? include ('text_online_body.php'); 
?> </td>

<?
$b='0';
for($g=0;$g<300;$g++) {
if(!$sh[$g]) { $sh[$g]='40'; }
}


if($b<'300') {
if($exxo[18]=='0') {
 include('doska_tip4_belye.php');
 }} } 
 // 
  
echo '<td class=td_center>';

  if(!$nomer_doski5) {
 
?>    
<center>
<? include('./balance.php'); ?>
<? include('./rating.php'); ?>
<? include('./win_loss.php'); ?> 
</center><br><br>
<? 
      echo '<center><strong>Меркурий 12x8</strong></center><br><br><font size=2><strong><center>';
?>

<a target=_blank href=model_game/variant5-igra1-style<? echo $style_run; ?>.jpg><img src=model_game/variant5-igra1-style<? echo $style_run; ?>.jpg width=30% /></a>

<? echo '<br><br><br>Создайте новую игру '.$name.'</center></strong></font></td>';
      //include('prosmotr_doski.php');
  } else if($nomer_doski5 && $name!=$exxo[3] && $name!=$exxo[4] && $exxo[18]=='0' && $exxo[1]!='Comp') {
 
      echo '<font size=4><strong><center>Доска '.$nomer_doski5.' занята,создайте свою игру '.$name.'</center></strong></font>';
      echo '<font size=2><strong><em><center>
Посмотреть партию <a target=_blank href=variant5/archive_d_tip4_uvel.php?namer='.$doska.'&tip=5&nomer5='.$nomer_doski5.'>в архиве</a>
</center></em></strong></font></td>';
      //include('prosmotr_doski.php'); 

} else if($exxo[18]=='Отменена') {

     echo '<font size=4><strong><center>Доска '.$nomer_doski5.' отменена,игроком '.$doska.'</center></strong></font>
               <font size=2><strong><em><center>Посмотреть доску '.$nomer_doski5.' <a target=_blank href=variant5/archive_d_tip4_uvel.php?namer='.$doska.'&tip=5&nomer5='.$nomer_doski5.'>в архиве</a></center></em></strong></font>
</td>';
    //  include('prosmotr_doski.php'); 

if($exxo[5]!='0' || $exxo[18]!='0') {  
 $nomer_doski5='';  setcookie ("nomer_doski5", $nomer_doski5, time() + 1);
$nomer5='';  setcookie ("nomer5", $nomer5, time() + 1); 
}

} else if($exxo[5]>'0') {

if($exxo[15]=='0') { echo '<font size=4><strong><center>Время белых закончилось '.$exxo[13].'</center></strong></font>'; 
} else 
if($exxo[16]=='0') { echo '<font size=4><strong><center>Время черных закончилось '.$exxo[14].'</center></strong></font>'; 
} else if($exxo[8]!='0') { echo '<font size=4><strong><center>Игрок '.$exxo[8].' сдался</center></strong></font>'; }

if($exxo[6]>'0') { $d='белыми'; } else if($exxo[7]>'0') { $d='черными'; }
if($exxo[5]!=$exxo[1]) { $bex=$exxo[1]; } else if($exxo[5]!=$exxo[2]) { $bex=$exxo[2]; }

if($exxo[5]!=$name) {
     echo '<font size=4><strong><center>Игрок '.$exxo[5].' выиграл,играя '.$d.'</center></strong></font>';
                               } else 
if($exxo[5]==$name) {
     echo '<font size=4><strong><center>Вы выиграли играя '.$d.', '.$bex.' проиграл</center></strong></font>';
                               }

               echo '<font size=2><strong><em><center>Посмотреть доску '.$nomer_doski5.' <a target=_blank href=variant5/archive_d_tip4_uvel.php?namer='.$doska.'&tip=5&nomer5='.$nomer_doski5.'>в архиве</a></center></em></strong></font>';

if($name==$doska && $exxo[18]=='0') {
echo '<font size=2><strong><em><center>Теперь можно завершить игру</center></em></strong></font></td>';
                              } 

if($exxo[5]!='0' || $exxo[18]!='0') {  
 $nomer_doski5='';  setcookie ("nomer_doski5", $nomer_doski5, time() + 1);
$nomer5='';  setcookie ("nomer5", $nomer5, time() + 1); 
}
?></td><?
    
  // include('prosmotr_doski.php'); 

}

 } else if($v[0]<$exxo[20]) { // конец допуска по балансу биткоина

echo '<table align=center width='.$shirina.' border=0><tr><td class=td_center>
<font size=5><strong><center>
<br><br><br>
Вашего баланса не достаточно,<br>ставка в этой партии <font size=8>'.$exxo[20].'</font> BTC,<br>Ваш баланс <font size=8>'.$v[0].'</font> BTC</center><br><br>
<center>Начните новую игру, '.$name.'</center>
<br><br><br></strong></font>
</td></tr></table>';

}

 //echo '<br>$name='.$name; echo '<br>$doska='.$doska;  
  
  ?>
</tr>
 <?  // конец условия показа нормальной доски 
?> 
</table><table align=center width=<? echo $shirina; ?> border=0>

<tr><td class=td_center bgcolor=#202020><? // конец ряд клеток 1 
?>
<?
$href=$doska;

if($nomer_doski5 || $nomer5) { // 


if($name==$doska | $name==$exxo[2]) { echo ''; 




if($name==$exxo[3] && $exxo[11]=='Белые') { $hod_dostup='1';
}

if($name==$exxo[4] && $exxo[11]=='Черные') { $hod_dostup='2';
}

if($name==$exxo[4] && $exxo[11]=='Белые') { 
}

if($name==$exxo[3] && $exxo[11]=='Черные') { 
}

?>

<br>
<center>

<? $color_x='#606060'; ?>
<? $color_x1='#404040'; ?>

<?

for($rr=0;$rr<300;$rr++) {

$ttu=rand(0,240);

if($sh[$ttu]=='18' || $sh[$ttu]=='8') { $figure_dx8=$ttu; }
if($sh[$ttu]=='17' || $sh[$ttu]=='7') { $figure_dx7=$ttu; }
if($sh[$ttu]=='19' || $sh[$ttu]=='9') { $figure_dx9=$ttu; }

$ttu2=rand(0,240);

if($sh[$ttu2]=='18' || $sh[$ttu2]=='8') { if($figure_dx8!=$ttu2) { $figure_dx8x=$ttu2; }}
if($sh[$ttu2]=='17' || $sh[$ttu2]=='7') { if($figure_dx7!=$ttu2) { $figure_dx7x=$ttu2; }}
if($sh[$ttu2]=='19' || $sh[$ttu2]=='9') { if($figure_dx9!=$ttu2) { $figure_dx9x=$ttu2; }}

                                       }

include('coord_figure_dx.php');

?>

<? if($exxo[5]=='0') { ?>

<? $fixxa='figure_style'.$style_run.'/'; ?>

<table width=80%>

<tr>
<td bgcolor=<? echo $color_x1; ?>><center><strong>Название</strong></center></td>
<td bgcolor=<? echo $color_x1; ?>><center><strong>Координаты</strong></center></td>
<td bgcolor=<? echo $color_x1; ?>><center><strong>Правила</strong></center></td>
</tr>

<tr>
<td bgcolor=<? echo $color_x; ?>><center>Ястреб</center></td>
<td bgcolor=<? echo $color_x; ?>><center><? echo $figure_dx7_coord; ?> <? echo $figure_dx7x_coord; ?></center></td>
<td bgcolor=<? echo $color_x; ?>><center><a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_yastreb_tip6.jpg>Правила ходов у Ястреба</a></center></td>
</tr>

<tr>
<td bgcolor=<? echo $color_x; ?>><center>Медведь</center></td>
<td bgcolor=<? echo $color_x; ?>><center><? echo $figure_dx8_coord; ?> <? echo $figure_dx8x_coord; ?></center></td>
<td bgcolor=<? echo $color_x; ?>><center><a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_medved_tip6.jpg>Правила ходов у Медведя</a></center></td>
</tr>

<tr>
<td bgcolor=<? echo $color_x; ?>><center>Призрак</center></td>
<td bgcolor=<? echo $color_x; ?>><center><? echo $figure_dx9_coord; ?> <? echo $figure_dx9x_coord; ?></center></td>
<td bgcolor=<? echo $color_x; ?>><center><a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_prizrak_tip6.jpg>Правила ходов у Призрака</a></center></td>
</tr>


</table>

</center>
<br>

<? 

$data1='./archive_doski/'.$doska.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'_hod_vartical_white.txt';
 
if ( !file_exists($data1) ) { 

 include('./variant5/hod_vertical/hod_vertical_create.php'); 

}

include('./variant5/hod_vertical/hod_vertical_off.php'); ?>
<? if($exxo[11] && $shah!='1' && $shah!='2' && $shah_off[0]!='1' && $shah_off[1]=='1') { 


if($exxo[21]>'9' || $exxo[22]>'9') {
 include('./variant5/hod_vertical/hod_vertical.php'); 
                                                    }
}





$data1='./archive_doski/'.$doska.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'_random_figura_white.txt';
 
if ( !file_exists($data1) ) { 

 include('./variant5/random_figura/hod_vertical_create.php'); 

}

 ?>
<? if($exxo[11] && $shah!='1' && $shah!='2' && $shah_off[0]!='1' && $shah_off[1]=='2') { 


if($exxo[21]>'9' || $exxo[22]>'9') {
 include('./variant5/random_figura/hod_vertical.php'); 
                                                    }
} 








 include('./variant5/hod_vertical/random_table.php'); 

} //end if $exxo[5]=='0'

 ?>
<? include('./load_hody_total.php'); ?>

<br>


<?
} //конец  если не нажато отмена-то  показываем "Ваш ход (Белыми)" 

 } else if($doska && $name<>$doska) {
          
  }
  
  ?>
  
</em></font></strong></font></td><tr></table>


<? include('./calls_game.php'); ?>

<?
if($zvuki_hody=='11') { 

 if($exxo[12]<2) { include('./variant5/zvuk_start_game.php'); } 
if($exxo[12]>1 && $exxo[12]!=11) { include('./variant5/zvuk.php'); }
if($exxo[12]==11) { $ssf=rand(0,2); if($ssf=='1') { ?><audio src="./zvuk/smeh_hod_loshad.mp3" autoplay="autoplay"></audio><? } }
                                 }

?>