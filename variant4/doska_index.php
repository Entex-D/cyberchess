<?
if(isset($_COOKIE['nomer4'])) { $nomer_doski4=$nomer4;
 }
if(isset($_COOKIE['timer'])) {  } else $timer='min86400';
if(isset($_COOKIE['btc'])) {  } else if(!isset($_COOKIE['btc'])) { $rf=rand(0,2); if($rf==0) { $btc='btc0001'; } else if($rf==1) { $btc='btc0002'; } else if($rf==2) { $btc='btc0005'; } } 

if(!$nomer4 && isset($_COOKIE['nomer_doski4'])) { //echo '<br>считан номер доски='.$nomer_doski4;
 }
  if($game!='5' && $game>'0' && !isset($_COOKIE['nomer_doski4'])) {
  
   include('./ochki/vsego_igr_write.php'); 

$fx=rand(1,10000); $nomer_doski4='a'.$fx.'d'; 
if(setcookie ("nomer_doski4", $nomer_doski4, time() + 3600*24*700)) { //echo '<br>куки не записались'; 
} 
                                                               }

include('./hacker.php');

if(isset($_COOKIE['doska_quq'])) { if(!preg_match('/^[^a-zA-Z]+$/',$doska_quq) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska_quq)) { $doska=$doska_quq;  }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; }}
//if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $smotrit=$name; }} //для записи внизу кто смотрит
//echo '$name= '.$name;
//echo '$game='.$game;
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

<? include('./variant4/title1.php'); ?>

<? if($no!='2') {   include('./script_doska_hod.php'); } ?>


<?

// echo '<br>$hod_shto= '.$hod_shto;
// echo '<br>$hod_kuda= '.$hod_kuda;

if(isset($_COOKIE['doska_kuki_nomer4']))  { $doska=$doska_kuki_nomer4; }
if(isset($_COOKIE['game']))  { // echo '$game считалось';
                                              }
 
// $hod_one='0';
// $hod_two='0';

include('./variant4/config_type4.php');

 // include ('novaya_igra.php'); 

// пешка черная =1 , тура черная =2 ,конь черный =3,  слон черный =4, ферзь черный = 5 ,король черный =6

if ( !file_exists($base) )   {  echo 'файл '.$base.' отсутствует';

$openchatdb=fopen($base,"w");

 if(fwrite($openchatdb,"1"."\n")) { ;  }

fclose($openchatdb);
   
 }      //  exit("файл base не существует");

if($file = fopen($base, "r")) {   $b4=0;} 
while(!feof($file)) { 
if($sh[]= fgets ($file)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
}

 //echo '<br>$b4='.$b4;

fclose ($file);

              if($game<'5' && $game>'0' && !isset($_COOKIE['nomer_doski4'])) { 

//  $sh[144];

for($g=0;$g<300;$g++) {
if(!$sh[$g] | $sh[$g]) { $sh[$g]='40'; }
// echo $sh[$g];
}

if($game=='1') {

$kon_white='0';
$kon_black='0';
$krep_white='0';
$krep_black='0';
$surpris_white='0';
$surpris_black='0';


$sh[57]='3';
$sh[62]='3';

$sh[225]='13';
$sh[230]='13';


$sh[80]='3';
$sh[87]='3';

$sh[200]='13';
$sh[207]='13';


$sh[82]='3';
$sh[85]='3';

$sh[202]='13';
$sh[205]='13';


for($g=0;$g<2000;$g++) {

$q1=rand(53,240);
$q2=rand(53,240);
$q3=rand(53,240);
$q4=rand(53,240);
$q7=rand(53,240);
$q8=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($q2>53 && $q2<66) { $b2=1; }
if($q2>77 && $q2<90) { $b2=1; }
if($q2>101 && $q2<114) { $b2=1; }
if($q2>125 && $q2<138) { $b2=1; }
if($q2>149 && $q2<162) { $b2=1; }
if($q2>173 && $q2<186) { $b2=1; }
if($q2>197 && $q2<210) { $b2=1; }
if($q2>221 && $q2<234) { $b2=1; }

if($q3>53 && $q3<66) { $b3=1; }
if($q3>77 && $q3<90) { $b3=1; }
if($q3>101 && $q3<114) { $b3=1; }
if($q3>125 && $q3<138) { $b3=1; }
if($q3>149 && $q3<162) { $b3=1; }
if($q3>173 && $q3<186) { $b3=1; }
if($q3>197 && $q3<210) { $b3=1; }
if($q3>221 && $q3<234) { $b3=1; }

if($q4>53 && $q4<66) { $b4=1; }
if($q4>77 && $q4<90) { $b4=1; }
if($q4>101 && $q4<114) { $b4=1; }
if($q4>125 && $q4<138) { $b4=1; }
if($q4>149 && $q4<162) { $b4=1; }
if($q4>173 && $q4<186) { $b4=1; }
if($q4>197 && $q4<210) { $b4=1; }
if($q4>221 && $q4<234) { $b4=1; }

if($q7>53 && $q7<66) { $b7=1; }
if($q7>77 && $q7<90) { $b7=1; }
if($q7>101 && $q7<114) { $b7=1; }
if($q7>125 && $q7<138) { $b7=1; }
if($q7>149 && $q7<162) { $b7=1; }
if($q7>173 && $q7<186) { $b7=1; }
if($q7>197 && $q7<210) { $b7=1; }
if($q7>221 && $q7<234) { $b7=1; }

if($q8>53 && $q8<66) { $b8=1; }
if($q8>77 && $q8<90) { $b8=1; }
if($q8>101 && $q8<114) { $b8=1; }
if($q8>125 && $q8<138) { $b8=1; }
if($q8>149 && $q8<162) { $b8=1; }
if($q8>173 && $q8<186) { $b8=1; }
if($q8>197 && $q8<210) { $b8=1; }
if($q8>221 && $q8<234) { $b8=1; }

//if($b1==1) { if($kon_white<4) { if($sh[$q1]=='40') { $sh[$q1]='13'; $kon_white=$kon_white+1; } } }

//if($b2==1) { if($kon_black<4) { if($sh[$q2]=='40') { $sh[$q2]='3'; $kon_black=$kon_black+1; } } }

if($b3==1) { if($krep_white<20) { if($sh[$q3]=='40') { $sh[$q3]='11'; $krep_white=$krep_white+1; } } }
if($b4==1) { if($krep_black<20) { if($sh[$q4]=='40') { $sh[$q4]='1'; $krep_black=$krep_black+1; } } }

if($b7==1) { if($surpris_white<2) { if($sh[$q7]=='40') { $sh[$q7]='19'; $surpris_white=$surpris_white+1; } } }
if($b8==1) { if($surpris_black<2) { if($sh[$q8]=='40') { $sh[$q8]='9'; $surpris_black=$surpris_black+1; } } }

$b1=0;$b2=0;$b3=0;$b4=0;$b5=0;$b6=0;$b7=0;$b8=0;

} //end for
    
                           }

if($game=='2') {


$kon_white='0';
$kon_black='0';
$slon_white='0';
$slon_black='0';
$krep_white='0';
$krep_black='0';
$surpris_white='0';
$surpris_black='0';


$sh[57]='3';
$sh[62]='3';

$sh[225]='13';
$sh[230]='13';


$sh[80]='4';
$sh[87]='4';

$sh[200]='14';
$sh[207]='14';



$sh[82]='4';
$sh[85]='4';

$sh[202]='14';
$sh[205]='14';

for($g=0;$g<2000;$g++) {

$q1=rand(53,240);
$q2=rand(53,240);
$q3=rand(53,240);
$q4=rand(53,240);
$q5=rand(53,240);
$q6=rand(53,240);
$q7=rand(53,240);
$q8=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($q2>53 && $q2<66) { $b2=1; }
if($q2>77 && $q2<90) { $b2=1; }
if($q2>101 && $q2<114) { $b2=1; }
if($q2>125 && $q2<138) { $b2=1; }
if($q2>149 && $q2<162) { $b2=1; }
if($q2>173 && $q2<186) { $b2=1; }
if($q2>197 && $q2<210) { $b2=1; }
if($q2>221 && $q2<234) { $b2=1; }

if($q3>53 && $q3<66) { $b3=1; }
if($q3>77 && $q3<90) { $b3=1; }
if($q3>101 && $q3<114) { $b3=1; }
if($q3>125 && $q3<138) { $b3=1; }
if($q3>149 && $q3<162) { $b3=1; }
if($q3>173 && $q3<186) { $b3=1; }
if($q3>197 && $q3<210) { $b3=1; }
if($q3>221 && $q3<234) { $b3=1; }

if($q4>53 && $q4<66) { $b4=1; }
if($q4>77 && $q4<90) { $b4=1; }
if($q4>101 && $q4<114) { $b4=1; }
if($q4>125 && $q4<138) { $b4=1; }
if($q4>149 && $q4<162) { $b4=1; }
if($q4>173 && $q4<186) { $b4=1; }
if($q4>197 && $q4<210) { $b4=1; }
if($q4>221 && $q4<234) { $b4=1; }

if($q5>53 && $q5<66) { $b5=1; }
if($q5>77 && $q5<90) { $b5=1; }
if($q5>101 && $q5<114) { $b5=1; }
if($q5>125 && $q5<138) { $b5=1; }
if($q5>149 && $q5<162) { $b5=1; }
if($q5>173 && $q5<186) { $b5=1; }
if($q5>197 && $q5<210) { $b5=1; }
if($q5>221 && $q5<234) { $b5=1; }

if($q6>53 && $q6<66) { $b6=1; }
if($q6>77 && $q6<90) { $b6=1; }
if($q6>101 && $q6<114) { $b6=1; }
if($q6>125 && $q6<138) { $b6=1; }
if($q6>149 && $q6<162) { $b6=1; }
if($q6>173 && $q6<186) { $b6=1; }
if($q6>197 && $q6<210) { $b6=1; }
if($q6>221 && $q6<234) { $b6=1; }

if($q7>53 && $q7<66) { $b7=1; }
if($q7>77 && $q7<90) { $b7=1; }
if($q7>101 && $q7<114) { $b7=1; }
if($q7>125 && $q7<138) { $b7=1; }
if($q7>149 && $q7<162) { $b7=1; }
if($q7>173 && $q7<186) { $b7=1; }
if($q7>197 && $q7<210) { $b7=1; }
if($q7>221 && $q7<234) { $b7=1; }

if($q8>53 && $q8<66) { $b8=1; }
if($q8>77 && $q8<90) { $b8=1; }
if($q8>101 && $q8<114) { $b8=1; }
if($q8>125 && $q8<138) { $b8=1; }
if($q8>149 && $q8<162) { $b8=1; }
if($q8>173 && $q8<186) { $b8=1; }
if($q8>197 && $q8<210) { $b8=1; }
if($q8>221 && $q8<234) { $b8=1; }

//if($b1==1) { if($kon_white<2) { if($sh[$q1]=='40') { $sh[$q1]='13'; $kon_white=$kon_white+1; } } }

//if($b2==1) { if($kon_black<2) { if($sh[$q2]=='40') { $sh[$q2]='3'; $kon_black=$kon_black+1; } } }

//if($b5==1) { if($slon_white<2) { if($sh[$q5]=='40') { $sh[$q5]='14'; $slon_white=$slon_white+1; } } }
//if($b6==1) { if($slon_black<2) { if($sh[$q6]=='40') { $sh[$q6]='4'; $slon_black=$slon_black+1; } } }

if($b3==1) { if($krep_white<16) { if($sh[$q3]=='40') { $sh[$q3]='11'; $krep_white=$krep_white+1; } } }
if($b4==1) { if($krep_black<16) { if($sh[$q4]=='40') { $sh[$q4]='1'; $krep_black=$krep_black+1; } } }

if($b7==1) { if($surpris_white<2) { if($sh[$q7]=='40') { $sh[$q7]='19'; $surpris_white=$surpris_white+1; } } }
if($b8==1) { if($surpris_black<2) { if($sh[$q8]=='40') { $sh[$q8]='9'; $surpris_black=$surpris_black+1; } } }

$b1=0;$b2=0;$b3=0;$b4=0;$b5=0;$b6=0;$b7=0;$b8=0;

} //end for
    
                        }


if($game=='3') {


$kon_white='0';
$kon_black='0';
$krep_white='0';
$krep_black='0';


for($g=0;$g<2000;$g++) {

$q1=rand(53,240);
$q2=rand(53,240);
$q3=rand(53,240);
$q4=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($q2>53 && $q2<66) { $b2=1; }
if($q2>77 && $q2<90) { $b2=1; }
if($q2>101 && $q2<114) { $b2=1; }
if($q2>125 && $q2<138) { $b2=1; }
if($q2>149 && $q2<162) { $b2=1; }
if($q2>173 && $q2<186) { $b2=1; }
if($q2>197 && $q2<210) { $b2=1; }
if($q2>221 && $q2<234) { $b2=1; }

if($q3>53 && $q3<66) { $b3=1; }
if($q3>77 && $q3<90) { $b3=1; }
if($q3>101 && $q3<114) { $b3=1; }
if($q3>125 && $q3<138) { $b3=1; }
if($q3>149 && $q3<162) { $b3=1; }
if($q3>173 && $q3<186) { $b3=1; }
if($q3>197 && $q3<210) { $b3=1; }
if($q3>221 && $q3<234) { $b3=1; }

if($q4>53 && $q4<66) { $b4=1; }
if($q4>77 && $q4<90) { $b4=1; }
if($q4>101 && $q4<114) { $b4=1; }
if($q4>125 && $q4<138) { $b4=1; }
if($q4>149 && $q4<162) { $b4=1; }
if($q4>173 && $q4<186) { $b4=1; }
if($q4>197 && $q4<210) { $b4=1; }
if($q4>221 && $q4<234) { $b4=1; }

if($b1==1) { if($kon_white<4) { if($sh[$q1]=='40') { $sh[$q1]='15'; $kon_white=$kon_white+1; } } }

if($b2==1) { if($kon_black<4) { if($sh[$q2]=='40') { $sh[$q2]='5'; $kon_black=$kon_black+1; } } }

if($b3==1) { if($krep_white<12) { if($sh[$q3]=='40') { $sh[$q3]='11'; $krep_white=$krep_white+1; } } }
if($b4==1) { if($krep_black<12) { if($sh[$q4]=='40') { $sh[$q4]='1'; $krep_black=$krep_black+1; } } }

$b1=0;$b2=0;$b3=0;$b4=0;

} //end for

        
                   }


if($game=='4') {

$kon_white='0';
$kon_black='0';
$krep_white='0';
$krep_black='0';


for($g=0;$g<2000;$g++) {

$q1=rand(53,240);
$q2=rand(53,240);
$q3=rand(53,240);
$q4=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($q2>53 && $q2<66) { $b2=1; }
if($q2>77 && $q2<90) { $b2=1; }
if($q2>101 && $q2<114) { $b2=1; }
if($q2>125 && $q2<138) { $b2=1; }
if($q2>149 && $q2<162) { $b2=1; }
if($q2>173 && $q2<186) { $b2=1; }
if($q2>197 && $q2<210) { $b2=1; }
if($q2>221 && $q2<234) { $b2=1; }

if($q3>53 && $q3<66) { $b3=1; }
if($q3>77 && $q3<90) { $b3=1; }
if($q3>101 && $q3<114) { $b3=1; }
if($q3>125 && $q3<138) { $b3=1; }
if($q3>149 && $q3<162) { $b3=1; }
if($q3>173 && $q3<186) { $b3=1; }
if($q3>197 && $q3<210) { $b3=1; }
if($q3>221 && $q3<234) { $b3=1; }

if($q4>53 && $q4<66) { $b4=1; }
if($q4>77 && $q4<90) { $b4=1; }
if($q4>101 && $q4<114) { $b4=1; }
if($q4>125 && $q4<138) { $b4=1; }
if($q4>149 && $q4<162) { $b4=1; }
if($q4>173 && $q4<186) { $b4=1; }
if($q4>197 && $q4<210) { $b4=1; }
if($q4>221 && $q4<234) { $b4=1; }

if($b1==1) { if($kon_white<4) { if($sh[$q1]=='40') { $sh[$q1]='12'; $kon_white=$kon_white+1; } } }

if($b2==1) { if($kon_black<4) { if($sh[$q2]=='40') { $sh[$q2]='2'; $kon_black=$kon_black+1; } } }

if($b3==1) { if($krep_white<12) { if($sh[$q3]=='40') { $sh[$q3]='11'; $krep_white=$krep_white+1; } } }
if($b4==1) { if($krep_black<12) { if($sh[$q4]=='40') { $sh[$q4]='1'; $krep_black=$krep_black+1; } } }

$b1=0;$b2=0;$b3=0;$b4=0;

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



if($name==$doska) { //$fx=rand(1,10000); $nomer_doski4='n'.$fx.'r'; 
//if(!setcookie ("nomer_doski4", $nomer_doski4, time() + 3600*24*700)) { echo '<br>куки не записались'; } 

$adres='./archive_doski/'.$name.'/tip4/'.$nomer_doski4;

if(!mkdir($adres, 0755,true)) { 
//echo '<br>Error';
//if(!mkdir('./archive', 0755)) { echo '<br>2 Error'; } 
 };

//echo '<br>$adres='.$adres;
//echo '<br>$doska='.$doska;
//echo '<br>$name='.$name;
//echo '<br>$nomer_doski4='.$nomer_doski4;

$figury='./archive_doski/'.$name.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'.txt';

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

$dannye_archive='./archive_doski/'.$name.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_statix.txt';

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
if($game<'5' && $game>'0' && !isset($_COOKIE['nomer_doski4'])) {  

$logi='logi.txt';
if($game=='1') { $game_g='Extol'; }
if($game=='2') { $game_g='Trox'; }
if($game=='3') { $game_g='Lixa'; }
if($game=='4') { $game_g='Detra'; }

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> создал  новую игру '.$game_g.' на доске '.$nomer_doski4.' вариант #4 Ставка '.$dixa20.' btc';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

 
}
// если нажата игра 1-4 то записываем лог




// если нажата игра 5 то записываем лог
if($game=='5' && isset($_COOKIE['nomer_doski4'])) { 

$logi='logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> отменил игру на доске '.$nomer_doski4.' вариант #4';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

 
}
// если нажата игра 5 то записываем лог






















unset($sh);

if($nomer_doski4) {

if ( file_exists($base_figury) )   {  //echo 'файл '.$base_figury.' отсутствует';

if($file = fopen($base_figury, "r")) {   $b4=0;} 
while(!feof($file)) { 
if($sh[]= fgets ($file)){ $b4=$b4+1; }
                          }
                                    }
                           }


for($g=0;$g<300;$g++) {
$sh[$g] = preg_replace("|[\r\n]+|", "", $sh[$g]);

} // }
?>

<?
//Считывание btc win
if($name) { $file_guest1='./btc/'.$name.'.txt';  
 
if($file = fopen($file_guest1, "r")) {  $b4=0;

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc win

//echo $v[0];
if($v[0]>=$exxo[20]) { $dopusk='ok'; }

if($dopusk=='ok') { //начало допуска по балансу биткоина
?>




<? if($exxo[5]=='999') { ?>

<table align=center width=<? echo $shirina; ?> border=0 bgcolor=#101010>
<tr><td class=td_center bgcolor=#202020 width=80%>

<? include('./variant4/shah.php'); ?>
<? include('logi_email.php'); ?>

</td></tr></table>

<? } ?>

<?

$proigrysh1=0;
$proigrysh2=0;

for($g=0;$g<300;$g++) {

if($sh[$g]==3 || $sh[$g]==4 || $sh[$g]==7 || $sh[$g]==8) { $proigrysh1=$proigrysh1+1; } 
if($sh[$g]==13 || $sh[$g]==14 || $sh[$g]==17 || $sh[$g]==18) { $proigrysh2=$proigrysh2+1; } 

if($proigrysh1==0) { 

if($name==$exxo[4]) { $slovo_d='Проигрыш. Игрок '.$exxo[3].' победил';  $rrft=1; }
if($name==$exxo[3]) { $slovo_d='Победа. Игрок '.$exxo[4].' проиграл';  $rrft=2; }
 } else

if($proigrysh2==0) { 

if($name==$exxo[3]) { $slovo_d='Проигрыш. Игрок '.$exxo[4].' победил';  $rrft=1;}
if($name==$exxo[4]) { $slovo_d='Победа. Игрок '.$exxo[3].' проиграл';  $rrft=2;}
 }


}
?>

<? if($proigrysh1==0 || $proigrysh2==0) { 
if($sh[1]>0) { ?>

<? 
if($rrft==1) { $bb=rand(0,3); if($bb==1) { ?><audio src="./zvuk/you_lost.mp3" autoplay="autoplay"></audio><? }}
if($rrft==2) { $bb=rand(0,3); if($bb==1) { ?><audio src="./zvuk/you_win.mp3" autoplay="autoplay"></audio><? }}
 
?>

<table align=center width=<? echo $shirina; ?> border=0 bgcolor=#101010>
<tr><td class=td_center bgcolor=#202020 width=80%>

<font size=6><atrong><center><a href=#>[[</a> <? echo $slovo_d; ?> <a href=#>]]</a><br></center></strong></font>

</td></tr></table>

<? }} ?>



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
//echo '$nomer_doski4='.$nomer_doski4;

if($nomer_doski4) {

$sxx='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_statix.txt';

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


// считываем типа $nomer4 и перезаписываем игрока 2 в файл,чтобы показалась доска для 2 игрока

if($exxo[2]=='0' && $exxo[1]!=$name) { $exxo[2]=$name; 
if($exxo[3]=='0') { $exxo[3]=$name; } else if($exxo[4]=='0') { $exxo[4]=$name; } 
}

if($nomer_doski4) {
$sxx='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_statix.txt';

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

// конец считываем типа $nomer4 и перезаписываем игрока 2 в файл,чтобы показалась доска для 2 игрока
?>





<table align=center width=<? echo $shirina; ?> height=360 border=0 bgcolor=#101010>

<? if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; } ?>

<? if($name==$exxo[4] && $nomer_doski4 && $exxo[5]=='0' && $exxo[18]=='0') { echo '';  ?>

<tr><td></td><td class=border_menuse>

<?
// обновление вместо "онлайн людей" от 15.06.2020

include('./punkty_doski.php');

if($exxo[4]==$name && $exxo[11]=='Черные') {
if($exxo[12]>'1' && $exxo[18]=='0') { 
 
if($exxo[1]!='Comp') { echo '<br><a href=index.php?doska='.$doska.'&tip=4&nomer_doski4='.$nomer_doski4.'&ilost=yes>Сдаться</a>'; } 
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


<? if($name==$exxo[3] && $nomer_doski4 && $exxo[5]=='0' && $exxo[18]=='0') {  // если играем белыми - доска в своем положении
?>

<tr><td></td><td class=border_menuse>



<?
// обновление вместо "онлайн людей" от 15.06.2020

include('./punkty_doski.php');

if($exxo[3]==$name && $exxo[11]=='Белые') {
if($exxo[12]>'1' && $exxo[18]=='0') { 
 
echo '<br><a href=index.php?doska='.$doska.'&tip=4&nomer_doski4='.$nomer_doski4.'&ilost=yes>Сдаться</a>'; 
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

  if(!$nomer_doski4) {
 
?>    
<center>
<? include('./balance.php'); ?>
<? include('./rating.php'); ?>
<? include('./win_loss.php'); ?> 
</center><br><br>
<? 
      echo '<center><strong>Меркурий 12x8</strong></center><br><br><font size=2><strong><center>';
?>

<a target=_blank href=model_game/variant4-igra1-style<? echo $style_run; ?>.jpg><img src=model_game/variant4-igra1-style<? echo $style_run; ?>.jpg width=30% /></a>

<? echo '<br><br><br>Создайте новую игру '.$name.'</center></strong></font></td>';
      //include('prosmotr_doski.php');
  } else if($nomer_doski4 && $name!=$exxo[3] && $name!=$exxo[4] && $exxo[18]=='0' && $exxo[1]!='Comp') {
 
      echo '<font size=4><strong><center>Доска '.$nomer_doski4.' занята,создайте свою игру '.$name.'</center></strong></font>';
      echo '<font size=2><strong><em><center>
Посмотреть партию <a target=_blank href=variant4/archive_d_tip4_uvel.php?namer='.$doska.'&tip=4&nomer4='.$nomer_doski4.'>в архиве</a>
</center></em></strong></font></td>';
      //include('prosmotr_doski.php'); 

} else if($exxo[18]=='Отменена') {

     echo '<font size=4><strong><center>Доска '.$nomer_doski4.' отменена,игроком '.$doska.'</center></strong></font>
               <font size=2><strong><em><center>Посмотреть доску '.$nomer_doski4.' <a target=_blank href=variant4/archive_d_tip4_uvel.php?namer='.$doska.'&tip=4&nomer4='.$nomer_doski4.'>в архиве</a></center></em></strong></font>
</td>';
    //  include('prosmotr_doski.php'); 

if($exxo[5]!='0' || $exxo[18]!='0') {  
 $nomer_doski4='';  setcookie ("nomer_doski4", $nomer_doski4, time() + 1);
$nomer4='';  setcookie ("nomer4", $nomer4, time() + 1); 
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

               echo '<font size=2><strong><em><center>Посмотреть доску '.$nomer_doski4.' <a target=_blank href=variant4/archive_d_tip4_uvel.php?namer='.$doska.'&tip=4&nomer4='.$nomer_doski4.'>в архиве</a></center></em></strong></font>';

if($name==$doska && $exxo[18]=='0') {
echo '<font size=2><strong><em><center>Теперь можно завершить игру</center></em></strong></font></td>';
                              } 

if($exxo[5]!='0' || $exxo[18]!='0') {  
 $nomer_doski4='';  setcookie ("nomer_doski4", $nomer_doski4, time() + 1);
$nomer4='';  setcookie ("nomer4", $nomer4, time() + 1); 
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

if($nomer_doski4 || $nomer4) { // 


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

$ttu2=rand(0,240);

if($sh[$ttu2]=='18' || $sh[$ttu2]=='8') { if($figure_dx8!=$ttu2) { $figure_dx8x=$ttu2; }}
if($sh[$ttu2]=='17' || $sh[$ttu2]=='7') { if($figure_dx7!=$ttu2) { $figure_dx7x=$ttu2; }}


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



</table>

</center>
<br>

<? 

$data1='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_hod_vartical_white.txt';
 
if ( !file_exists($data1) ) { 

 include('./variant4/hod_vertical/hod_vertical_create.php'); 

}

include('./variant4/hod_vertical/hod_vertical_off.php'); ?>
<? if($exxo[11] && $shah!='1' && $shah!='2' && $shah_off[0]!='1' && $shah_off[1]=='1') { 


if($exxo[21]>'9' || $exxo[22]>'9') {
 include('./variant4/hod_vertical/hod_vertical.php'); 
                                                    }
}





$data1='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_random_figura_white.txt';
 
if ( !file_exists($data1) ) { 

 include('./variant4/random_figura/hod_vertical_create.php'); 

}

 ?>
<? if($exxo[11] && $shah!='1' && $shah!='2' && $shah_off[0]!='1' && $shah_off[1]=='2') { 


if($exxo[21]>'9' || $exxo[22]>'9') {
 include('./variant4/random_figura/hod_vertical.php'); 
                                                    }
} 








 include('./variant4/hod_vertical/random_table.php'); 

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

 if($exxo[12]<2) { include('./variant4/zvuk_start_game.php'); } 
if($exxo[12]>1 && $exxo[12]!=10) { include('./variant4/zvuk.php'); }
if($exxo[12]==11) { $ssf=rand(0,2); if($ssf=='1') { ?><audio src="./zvuk/smeh_hod_loshad.mp3" autoplay="autoplay"></audio><? } }
                                 }

?>