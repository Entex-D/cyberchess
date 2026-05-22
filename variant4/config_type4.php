<?

$t=$_SERVER["REMOTE_ADDR"];

if($doska>' ') {  if(!preg_match('/^[a-zA-Z0-9]+$/',$doska)) { $doska=$name; } }  

if(!$doska | !preg_match('/^[a-zA-Z0-9]+$/',$doska)) {
$base='ip4/'.$doska.'.txt';                 //$base='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'.txt';
$base_zapas=$doska.'.txt';                // $base_hody='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_hody.txt';
 $base_zapas_a=$doska.'.txt';
                }  else if($doska>' ') {
  $doska_konvert = preg_replace("|[_]+|", "", $doska);
$base='ip4/'.$doska_konvert.'.txt';
$base_zapas=$doska_konvert.'.txt';
$base_zapas_a=$doska_konvert.'.txt';

                                             }


$di = preg_replace("|[_]+|", "", $doska);
$koror = preg_replace("|[_]+|", "", $name);
 $base_hod_ip='ip4/hod/'.$di.'.txt';
$y='ip4/'.$koror.'.txt';
$base_hod_ip='ip4/hod/'.$doska_konvert.'.txt';
$base_hod_ip2='ip4/hod/'.$doska_konvert.'.txt';
$base_hod_ip='ip4/hod/'.$doska_konvert.'.txt';


                 $base_figury='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'.txt';
                 $base_hody='./archive_doski/'.$doska.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_hody.txt';
                           

?>