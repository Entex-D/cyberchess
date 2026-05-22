<?

//if($nomer_doski2) {

$sxx='../sea_battle/igrok/hod_bgcolor/'.$nick.'_hod_bgcolor.txt';


if(file_exists($sxx))   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($hod_color[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

                                }
$hod_color[0] = preg_replace("|[\r\n]+|", "", $hod_color[0]);
$hod_color[1] = preg_replace("|[\r\n]+|", "", $hod_color[1]);

//echo '='.$hod_color[0];
//echo '<br>='.$hod_color[1];

$hod_color[0]=$hod_color[0]-'1';
$hod_color[1]=$hod_color[1]-'1';

$color_b[$hod_color[0]]='#404040';
$color_b[$hod_color[1]]='#404040';

//echo '<br>='.$color_b[$hod_color[0]];
//echo '<br>='.$color_b[$hod_color[1]];

//}

?>