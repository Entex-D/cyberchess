<?

$t=$_SERVER["REMOTE_ADDR"];

if($doska>' ') {  if(!preg_match('/^[a-zA-Z0-9]+$/',$doska)) { $doska=$name; } }  

if(!$doska | !preg_match('/^[a-zA-Z0-9]+$/',$doska)) {
$base='ip/'.$doska.'.txt';                 //$base='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'.txt';
$base_zapas=$doska.'.txt';                // $base_hody='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hody.txt';
 $base_zapas_a=$doska.'.txt';
                }  else if($doska>' ') {
  $doska_konvert = preg_replace("|[_]+|", "", $doska);
$base='ip/'.$doska_konvert.'.txt';
$base_zapas=$doska_konvert.'.txt';
$base_zapas_a=$doska_konvert.'.txt';

                                             }


$di = preg_replace("|[_]+|", "", $doska);
$koror = preg_replace("|[_]+|", "", $name);
 $base_hod_ip='ip/hod/'.$di.'.txt';
$y='ip/'.$koror.'.txt';
$base_hod_ip='ip/hod/'.$doska_konvert.'.txt';
$base_hod_ip2='ip/hod/'.$doska_konvert.'.txt';
$base_hod_ip='ip/hod/'.$doska_konvert.'.txt';


                 $base_figury='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'.txt';
                 $base_hody='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hody.txt';
                           

?>