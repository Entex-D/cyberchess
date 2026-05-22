<?

$d='1';

$base_hod_ip2='../sea_battle2/igrok/hod/'.$nick.'_hod.txt'; 

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




// include ('../sea_battle2/matrix/include_class_voral.php');                                
                             


if($storona=='2') {
include('../sea_battle2/moves_comp.php');

                        }

if($storona=='1' && $d=='1') { //начало if $storona=='1'
$hod_shto=$hod_shto1;
$hod_kuda=$hod_kuda1;
                          
 $hod_dostup='1';

$kk='1';

if($hod_shto=='A15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1'; 
if($hod_shto=='B15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='L15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P15') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';

if($hod_shto=='A14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1'; 
if($hod_shto=='B14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='L14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P14') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';

if($hod_shto=='A13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1'; 
if($hod_shto=='B13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='L13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P13') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';

if($hod_shto=='A12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1'; 
if($hod_shto=='B12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='L12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P12') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';

if($hod_shto=='A11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1'; 
if($hod_shto=='B11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='C11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='D11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='E11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='F11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='G11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='H11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='I11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='K11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='L11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P11') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';

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
if($hod_shto=='L10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P10') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P9') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P8') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P7') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P6') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P5') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P4') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P3') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P2') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';


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
if($hod_shto=='L1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='M1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='N1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='O1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';
if($hod_shto=='P1') { echo 'Ход - '.$hod_shto; $hod_one=$kk; } $kk=$kk+'1';







if($hod_one) {
echo '<br>Ход с клетки '.$hod_one.'<br>';
//echo '&nbsp;на клетку &nbsp;'.$hod_two;
                                        }






for($t=0;$t<65;$t++) {
$sh[$t]=$fexo[$t]; //echo '='.$sh[2];
}

 include ('../sea_battle2/matrix/raschet.php');                                

// include ('../sea_battle2/matrix/class_voral.php');                                
                             
if($nick=='Igrok14') {
                          }
if($hod_one=='1000') { $hod_one='0'; }
if($hod_two=='1000') { $hod_two='0'; }



























 









if($hod_one>'0') {
//$fexo[$hod_two]=$fexo[$hod_one];

if($fexo[$hod_one]>'0') { $text='Человек: '; }

if($fexo[$hod_two]=='40') {   }  

//$fexo[$hod_two]=$fexo[$hod_one];
if($fexo_comp[$hod_one]=='40') { $fexo_comp[$hod_one]='99'; $text=$text.' "атаковали" '; } else 
if($fexo_comp[$hod_one]!='40') { $fexo_comp[$hod_one]='98'; 
 if($fexo_comp[$hod_one+'1']<'5' || $fexo_comp[$hod_one-'1']<'5' || $fexo_comp[$hod_one-'15']<'5' || $fexo_comp[$hod_one+'15']<'5') { 
                                                                          $text=$text.' "ранили" ';                                                                                              } else $text=$text.' "убили" ';
                                                  }

for($rr=0;$rr<256;$rr++) { if($fexo_comp[$rr]=='98') { $fexo_zapas[$rr]='98'; } }

if($fexo_comp[$hod_one]=='98' || $fexo_comp[$hod_one]<'5') { if($fexo_comp[$hod_one+'16']>'5' && $fexo_comp[$hod_one+'14']>'5' && $fexo_comp[$hod_one-'16']>'5' && $fexo_comp[$hod_one-'14']>'5') { //крестик

                                                                                    $fexo_comp[$hod_one+'16']='99'; 
                                                                                    $fexo_comp[$hod_one+'14']='99';
                                                                                    $fexo_comp[$hod_one-'16']='99';     
                                                                                    $fexo_comp[$hod_one-'14']='99';     
                                                                                   }
                                     }    

                                   






 if($fexo_comp[$hod_one+'1']<'5' || $fexo_comp[$hod_one-'1']<'5' || $fexo_comp[$hod_one-'15']<'5' || $fexo_comp[$hod_one+'15']<'5') { } else $ubili='ok';

if($ubili=='ok') { $t=$hod_one;

if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t+'1']>'5' && $fexo_comp[$t+'15']>'5' && $fexo_comp[$t-'15']>'5') { //вправо

                                                                                    $fexo_comp[$t+'1']='99'; 
                                                                                    $fexo_comp[$t+'15']='99';
                                                                                    $fexo_comp[$t-'15']='99';     
                                                                                   }
                                     } 

if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t-'1']>'5' && $fexo_comp[$t+'15']>'5' && $fexo_comp[$t-'15']>'5') { //влево

                                                                                    $fexo_comp[$t-'1']='99'; 
                                                                                    $fexo_comp[$t+'15']='99';
                                                                                    $fexo_comp[$t-'15']='99';     
                                                                                   }
                                     } 


if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t-'1']>'5' && $fexo_comp[$t+'15']>'5' && $fexo_comp[$t+'1']>'5') { //вниз 

                                                                                    $fexo_comp[$t+'1']='99'; 
                                                                                    $fexo_comp[$t+'15']='99';
                                                                                    $fexo_comp[$t-'1']='99';     
                                                                                   }
                                     } 

if($fexo_comp[$t]=='98' || $fexo_comp[$t]<'5') { if($fexo_comp[$t+'1']>'5' && $fexo_comp[$t-'15']>'5' && $fexo_comp[$t-'1']>'5') { //вверх 

                                                                                    $fexo_comp[$t+'1']='99'; 
                                                                                    $fexo_comp[$t-'15']='99';
                                                                                    $fexo_comp[$t-'1']='99';     
                                                                                   }
                                     
                                     }




}


for($rr=0;$rr<256;$rr++) { if($fexo_zapas[$rr]=='98') { $fexo_comp[$rr]='98'; } }

                         }



$write='../sea_battle2/igrok/'.$nick.'_figure_comp.txt';

$openchatdb=fopen($write,"w");


for($h=0;$h<300;$h++) {
if($fexo_comp[$h]>' ') {
 if(fwrite($openchatdb,$fexo_comp[$h]."\n")) {  }
                        }              
                                    }
fclose($openchatdb);








if($hod_one!='0') { $dostup='2'; $ekex='?storona=2'; 
include('../sea_battle2/hody_write.php');
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

echo "<meta http-equiv='refresh' content='10;url=dosa.php$ekex'>";
                                                    }
?>