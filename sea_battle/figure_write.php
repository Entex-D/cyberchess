<?

$d='1';

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

if(preg_match('/Человек/',$hody_r[$b5-1])) { echo '<br><font size=1>Сейчас ход компьютера</font>';
                                                                    $d='2';  $storona='2'; $hod_dostup='2'; }




// include ('../sea_battle/matrix/include_class_voral.php');                                
                             


if($storona=='2') {
include('../sea_battle/moves_comp.php');

                        }

if($storona=='1' && $d=='1') { //начало if $storona=='1'
$hod_shto=$hod_shto1;
$hod_kuda=$hod_kuda1;
                          
 $hod_dostup='1';

$kk='1';

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







if($hod_one) {
echo '<br>Ход с клетки '.$hod_one.'<br>';
//echo '&nbsp;на клетку &nbsp;'.$hod_two;
                                        }






for($t=0;$t<65;$t++) {
$sh[$t]=$fexo[$t]; //echo '='.$sh[2];
}

 include ('../sea_battle/matrix/raschet.php');                                

// include ('../sea_battle/matrix/class_voral.php');                                
                             
if($nick=='Igrok14') {
                          }
if($hod_one=='1000') { $hod_one='0'; }
if($hod_two=='1000') { $hod_two='0'; }



























 









if($hod_one>'0') {

if($fexo[$hod_one]>'0') { $text='Человек: '; }

if($fexo_comp[$hod_one]=='40') { $fexo_comp[$hod_one]='99'; $text=$text.' "атаковали" '; } else 
if($fexo_comp[$hod_one]!='40') { $fexo_comp[$hod_one]='98'; 
 if($fexo_comp[$hod_one+'1']<'5' || $fexo_comp[$hod_one-'1']<'5' || $fexo_comp[$hod_one-'10']<'5' || $fexo_comp[$hod_one+'10']<'5') { 
                                                                          $text=$text.' "ранили" ';                                                                                              } else $text=$text.' "убили" '; 
                                                  }

for($rr=0;$rr<101;$rr++) { if($fexo_comp[$rr]=='98') { $fexo_zapas[$rr]='98'; } }

if($fexo_comp[$hod_one]=='98' || $fexo_comp[$hod_one]<'5') { if($fexo_comp[$hod_one+'11']>'5' && $fexo_comp[$hod_one+'9']>'5' && $fexo_comp[$hod_one-'11']>'5' && $fexo_comp[$hod_one-'9']>'5') { //крестик

                                                                                    $fexo_comp[$hod_one+'11']='99'; 
                                                                                    $fexo_comp[$hod_one+'9']='99';
                                                                                    $fexo_comp[$hod_one-'11']='99';     
                                                                                    $fexo_comp[$hod_one-'9']='99';     
                                                                                   }
                                     }    

                                   






 if($fexo_comp[$hod_one+'1']<'5' || $fexo_comp[$hod_one-'1']<'5' || $fexo_comp[$hod_one-'10']<'5' || $fexo_comp[$hod_one+'10']<'5') { } else $ubili='ok';

if($ubili=='ok') { $t=$hod_one;

if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t+'1']>'5' && $fexo_comp[$t+'10']>'5' && $fexo_comp[$t-'10']>'5') { //вправо

                                                                                    $fexo_comp[$t+'1']='99'; 
                                                                                    $fexo_comp[$t+'10']='99';
                                                                                    $fexo_comp[$t-'10']='99';     
                                                                                   }
                                     } 

if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t-'1']>'5' && $fexo_comp[$t+'10']>'5' && $fexo_comp[$t-'10']>'5') { //влево

                                                                                    $fexo_comp[$t-'1']='99'; 
                                                                                    $fexo_comp[$t+'10']='99';
                                                                                    $fexo_comp[$t-'10']='99';     
                                                                                   }
                                     } 


if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t-'1']>'5' && $fexo_comp[$t+'10']>'5' && $fexo_comp[$t+'1']>'5') { //вниз 

                                                                                    $fexo_comp[$t+'1']='99'; 
                                                                                    $fexo_comp[$t+'10']='99';
                                                                                    $fexo_comp[$t-'1']='99';     
                                                                                   }
                                     } 

if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t+'1']>'5' && $fexo_comp[$t-'10']>'5' && $fexo_comp[$t-'1']>'5') { //вверх 

                                                                                    $fexo_comp[$t+'1']='99'; 
                                                                                    $fexo_comp[$t-'10']='99';
                                                                                    $fexo_comp[$t-'1']='99';     
                                                                                   }
                                     }

for($rr=0;$rr<101;$rr++) { if($fexo_zapas[$rr]=='98') { $fexo_comp[$rr]='98'; } }


}







                         } //end if $hod_one



$write='../sea_battle/igrok/'.$nick.'_figure_comp.txt';

$openchatdb=fopen($write,"w");


for($h=0;$h<200;$h++) {
if($fexo_comp[$h]>' ') {
 if(fwrite($openchatdb,$fexo_comp[$h]."\n")) {  }
                        }              
                                    }
fclose($openchatdb);








if($hod_one!='0') { $dostup='2'; $ekex='?storona=2'; 
include('../sea_battle/hody_write.php');
                                                     } else $ekex='?storona=1';

//$fexo[$hod_one]='40';

$komp='ok';

if($hod_one=='0') { echo '<br>Ход не одобрила матрица'; }

//echo '<br>='.$hod_one;
//echo '<br>='.$hod_two;
//echo '<br>='.$komp;

} // end if $storona=='1'

//echo '<br>='.$komp;

if($komp!='ok' && $fix=='2') { $ekex='?storona=2'; }
?>
 


<?

if($hod_one>'0' || $hod_two>'0' || $zapis=='no' || $storona=='2') {
?>

<script>
document.cookie = "hod_shto1=" + 0;
document.cookie = "hod_kuda1=" + 0;
 </script>

<?

echo "<meta http-equiv='refresh' content='1;url=dosa.php$ekex'>";
                                                    }
?>