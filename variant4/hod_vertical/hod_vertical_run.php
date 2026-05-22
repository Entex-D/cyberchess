<?

if($nomer_doski4 || $nomer4) {
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
$exxo[23] = preg_replace("|[\r\n]+|", "", $exxo[23]);
$exxo[24] = preg_replace("|[\r\n]+|", "", $exxo[24]);

//  конец считываем данные регистрации
 
}
// конец про изменение "попытка хода вражескими фигурами"

if($shah!='1' && $shah!='2' && $shah_off[0]!='1' && $shah_off[1]=='1') {
if($exxo[21]>'9' || $exxo[22]>'9') {

if($exxo[11]=='Белые' && $hod_one<'1000') {

 if(!preg_match('/'.$load_white[0].'/',$hod_shto) && 
!preg_match('/'.$load_white[1].'/',$hod_shto) && 
!preg_match('/'.$load_white[2].'/',$hod_shto) && 
!preg_match('/'.$load_white[3].'/',$hod_shto)) { $hod_one='1000'; $hod_two='1000'; 
 echo '<br>Ход отменен,ход по не разрешенной вертикали'; }

                          }

if($exxo[11]=='Черные' && $hod_one<'1000') {

 if(!preg_match('/'.$load_black[0].'/',$hod_shto) && 
!preg_match('/'.$load_black[1].'/',$hod_shto) && 
!preg_match('/'.$load_black[2].'/',$hod_shto) && 
!preg_match('/'.$load_black[3].'/',$hod_shto)) { $hod_one='1000'; $hod_two='1000'; 
 echo '<br>Ход отменен,ход по не разрешенной вертикали'; }

                          }
} //if exxo
} //if shah





?>