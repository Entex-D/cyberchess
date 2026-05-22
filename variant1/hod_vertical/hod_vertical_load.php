<? 
$data1='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_white.txt';
 
if($file = fopen($data1, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($load_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

$load_white[0] = preg_replace("|[\r\n]+|", "", $load_white[0]);
$load_white[1] = preg_replace("|[\r\n]+|", "", $load_white[1]);
$load_white[2] = preg_replace("|[\r\n]+|", "", $load_white[2]);
$load_white[3] = preg_replace("|[\r\n]+|", "", $load_white[3]);



$data2='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_black.txt';
 
if($file = fopen($data2, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($load_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

$load_black[0] = preg_replace("|[\r\n]+|", "", $load_black[0]);
$load_black[1] = preg_replace("|[\r\n]+|", "", $load_black[1]);
$load_black[2] = preg_replace("|[\r\n]+|", "", $load_black[2]);
$load_black[3] = preg_replace("|[\r\n]+|", "", $load_black[3]);



?>