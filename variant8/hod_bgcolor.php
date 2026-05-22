<?

if($style_run=='4') { $color_d='#CD853F'; }
if($style_run=='6') { $color_d='#DDA0DD'; }
if($style_run=='11') { $color_d='#5F9EA0'; }
if($style_run=='16') { $color_d='#DEB887'; }

if($nomer_doski8) {

$sxx='./archive_doski/'.$doska.'/tip8/'.$nomer_doski8.'/'.$nomer_doski8.'_hod_bgcolor.txt';


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

$color_b[$hod_color[0]]=$color_d;
$color_b[$hod_color[1]]=$color_d;

//echo '<br>='.$color_b[$hod_color[0]];
//echo '<br>='.$color_b[$hod_color[1]];

unset($hod_color);

}

?>

<?

if($nomer8 && $namer) {

$sxx='../archive_doski/'.$namer.'/tip8/'.$nomer8.'/'.$nomer8.'_hod_bgcolor.txt';

unset($hod_color);

if(file_exists($sxx))   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $bb4=0;} 
while(!feof($file)) { 
if($hod_color[]= fgets ($file)){ $bb4=$bb4+1; }
 }
fclose ($file);

                                }
$hod_color[0] = preg_replace("|[\r\n]+|", "", $hod_color[0]);
$hod_color[1] = preg_replace("|[\r\n]+|", "", $hod_color[1]);

//echo '='.$hod_color[0];
//echo '<br>='.$hod_color[1];

$color_b[$hod_color[0]]=$color_d;
$color_b[$hod_color[1]]=$color_d;

//echo '<br>='.$color_b[$hod_color[0]];
//echo '<br>='.$color_b[$hod_color[1]];

}

?>