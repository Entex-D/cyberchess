<center><table width=500 bgcolor=#202020><tr><td><center><font size=0>

<?



$fix='1';

$base_hod_ip2='../sea_battle/igrok/hod/'.$nick.'_hod.txt'; 

if ( !file_exists($base_hod_ip2) )   { 

$openchatdb=fopen($base_hod_ip2,"w");

 if(fwrite($openchatdb,'')) { ;  }

fclose($openchatdb);
 } 


// считываем ходы из отдельного файла на каждую доску

if($file = fopen($base_hod_ip2, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($hody_r[]= fgets ($file)) { $b5++; } }

fclose ($file); 

if(preg_match('/Человек/',$hody_r[$b5-1])) { //echo '<br><font size=1>Сейчас ход компьютера</font>';
                                                                    $fix='2'; } else $ekex='?storona=1';





if($fix=='2') { // strart if $fix




function perebor()
{

$a=rand(1,10);
$b=rand(1,10);

if($a=='1') { $kox='A'; }
if($a=='2') { $kox='B'; }
if($a=='3') { $kox='C'; }
if($a=='4') { $kox='D'; }
if($a=='5') { $kox='E'; }
if($a=='6') { $kox='F'; }
if($a=='7') { $kox='G'; }
if($a=='8') { $kox='H'; }
if($a=='9') { $kox='I'; }
if($a=='10') { $kox='K'; }

$hod_start=$kox.$b;


$a2=rand(1,8);
$b2=rand(1,8);

if($a2=='1') { $kox2='A'; }
if($a2=='2') { $kox2='B'; }
if($a2=='3') { $kox2='C'; }
if($a2=='4') { $kox2='D'; }
if($a2=='5') { $kox2='E'; }
if($a2=='6') { $kox2='F'; }
if($a2=='7') { $kox2='G'; }
if($a2=='8') { $kox2='H'; }

$hod_finish=$kox2.$b2;




$hod_shto=$hod_start; // это тест - компьютер не убивает,а перебирает пустые клетки
$hod_kuda=$hod_finish;
//echo '<br>Рандом пошел'; 

}





?>

<?
$zapis='no';
$p='0';
$udar='0';
$emdex='0';

for($r=0;$r<400;$r++) { // начало for

if($zapis=='no') { //start if $zapis

































$a=rand(1,10);
$b=rand(1,10);

if($a=='1') { $kox='A'; }
if($a=='2') { $kox='B'; }
if($a=='3') { $kox='C'; }
if($a=='4') { $kox='D'; }
if($a=='5') { $kox='E'; }
if($a=='6') { $kox='F'; }
if($a=='7') { $kox='G'; }
if($a=='8') { $kox='H'; }
if($a=='9') { $kox='I'; }
if($a=='10') { $kox='K'; }

$hod_start=$kox.$b;


$a2=rand(1,8);
$b2=rand(1,8);

if($a2=='1') { $kox2='A'; }
if($a2=='2') { $kox2='B'; }
if($a2=='3') { $kox2='C'; }
if($a2=='4') { $kox2='D'; }
if($a2=='5') { $kox2='E'; }
if($a2=='6') { $kox2='F'; }
if($a2=='7') { $kox2='G'; }
if($a2=='8') { $kox2='H'; }

$hod_finish=$kox2.$b2;




$hod_shto=$hod_start; // это тест - компьютер не убивает,а перебирает пустые клетки
$hod_kuda=$hod_finish;



















if($emdex<'66') { $emdex=$emdex+'1'; }
if($emdex>'64') { $emdex='0'; }

} //end if zapis







$kk='1';

if($zapis=='no') {

if($hod_shto=='A10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1'; 
if($hod_shto=='B10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


if($hod_shto=='A1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='B1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';

}

//echo '<br>';

if($fexo[$hod_one]>'40' && $zapis=='no') { perebor();  }
if($fexo[$hod_one]>'40') { $hod_one='0';   } 

$zet='1';
for($dd=0;$dd<100;$dd++) {

if($zet=='1') {
$rr=rand(1,100);

if($fexo[$rr]=='98') { if($fexo[$rr-1]<'5') {  $hod_one=$rr-'1'; $zet='2'; }  }
if($fexo[$rr]=='98') { if($fexo[$rr+1]<'5') {  $hod_one=$rr+'1'; $zet='2'; }  }
if($fexo[$rr]=='98') { if($fexo[$rr-10]<'5') {  $hod_one=$rr-'10'; $zet='2'; }  }
if($fexo[$rr]=='98') { if($fexo[$rr+10]<'5') {  $hod_one=$rr+'10'; $zet='2'; }  }

if($fexo[$rr]=='98') { 

$tt=rand(1,4);
//if($tt=='1') {  if($fexo[$rr-1]!='98' && $fexo[$rr-1]!='99') {  $hod_one=$rr-'1'; $zet='2'; }  }
//if($tt=='2') {  if($fexo[$rr+1]!='98' && $fexo[$rr+1]!='99') { $hod_one=$rr+'1'; $zet='2'; }  }
//if($tt=='3') {  if($fexo[$rr-10]!='98' && $fexo[$rr-10]!='99') {  $hod_one=$rr-'10'; $zet='2'; }  }
//if($tt=='4') {  if($fexo[$rr+10]!='98' && $fexo[$rr+10]!='99') { $hod_one=$rr+'10'; $zet='2'; }  }
                            }
                    
                      }
                                           }


































 











if($hod_one>'0' && $zapis=='no') {
echo '<br><br>1. Ход с клетки '.$hod_one;
//echo '&nbsp;на клетку &nbsp;'.$hod_two;

echo '<br>2. Ход с клетки '.$ataka_nomer[$hod_one].'<br>';
//echo '&nbsp;на клетку &nbsp;'.$ataka_nomer[$hod_two];
                                        
$hod_shto=$ataka_nomer[$hod_one];
$hod_kuda=$ataka_nomer[$hod_two];

}

if($hod_one>'0' && $zapis=='no') { // начало if запись

if($fexo[$hod_one]>'0') { $text='Компьютер: '; }
//if($fexo[$hod_one]>'10' && $fexo[$hod_one]<'20') { $text='Белые'; }

if($fexo[$hod_two]=='40') {   } 

//$fexo[$hod_two]=$fexo[$hod_one];
if($fexo[$hod_one]=='40') { $fexo[$hod_one]='99'; $text=$text.' "атаковал" '; } else 
if($fexo[$hod_one]!='40') { $fexo[$hod_one]='98'; 
 if($fexo[$hod_one+'1']<'5' || $fexo[$hod_one-'1']<'5' || $fexo[$hod_one-'10']<'5' || $fexo[$hod_one+'10']<'5') { 
                                                                          $text=$text.' "ранил" ';                                                                                              } else $text=$text.' "убил" ';
                                                  }

                         
        

if($text>' ') { // ошибка бывает 1 раз в 40 ходов - клетка белых ходит с H1 и изчезает

$write='../sea_battle/igrok/'.$nick.'_figure.txt';

$openchatdb=fopen($write,"w");


for($h=0;$h<200;$h++) {
if($fexo[$h]>' ') {
 if(fwrite($openchatdb,$fexo[$h]."\n")) {  }
                        }              
                                    }
fclose($openchatdb);



 $zapis='yes'; $komp='ok';
include('../sea_battle/hody_write.php');
                                                     
} // end if $text

                                                 } // конец if запись

//include('processing.php');

















//if($emdex>'64') { $emdex='0'; }
$p=$p+'1';


} //end for

} //end if $fix
?>


</font></center></td></tr></table></center>