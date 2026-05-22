<?

$t=$_SERVER["REMOTE_ADDR"];

if($doska>' ') {  if(!preg_match('/^[a-zA-Z0-9]+$/',$doska)) { $doska=$name; } }  

if(!$doska | !preg_match('/^[a-zA-Z0-9]+$/',$doska)) {
$base='ip6/'.$doska.'.txt';                 //$base='./archive_doski/'.$doska.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'.txt';
$base_zapas=$doska.'.txt';                // $base_hody='./archive_doski/'.$doska.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'_hody.txt';
 $base_zapas_a=$doska.'.txt';
                }  else if($doska>' ') {
  $doska_konvert = preg_replace("|[_]+|", "", $doska);
$base='ip6/'.$doska_konvert.'.txt';
$base_zapas=$doska_konvert.'.txt';
$base_zapas_a=$doska_konvert.'.txt';

                                             }


$di = preg_replace("|[_]+|", "", $doska);
$koror = preg_replace("|[_]+|", "", $name);
 $base_hod_ip6='ip6/hod/'.$di.'.txt';
$y='ip6/'.$koror.'.txt';
$base_hod_ip6='ip6/hod/'.$doska_konvert.'.txt';
$base_hod_ip62='ip6/hod/'.$doska_konvert.'.txt';
$base_hod_ip6='ip6/hod/'.$doska_konvert.'.txt';


                 $base_figury='./archive_doski/'.$doska.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'.txt';
                 $base_hody='./archive_doski/'.$doska.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'_hody.txt';
                           

?>