<?

$t=$_SERVER["REMOTE_ADDR"];

if($doska>' ') {  if(!preg_match('/^[a-zA-Z0-9]+$/',$doska)) { $doska=$name; } }  

if(!$doska | !preg_match('/^[a-zA-Z0-9]+$/',$doska)) {
$base='ip3/'.$doska.'.txt';                 //$base='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'.txt';
$base_zapas=$doska.'.txt';                // $base_hody='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'_hody.txt';
 $base_zapas_a=$doska.'.txt';
                }  else if($doska>' ') {
  $doska_konvert = preg_replace("|[_]+|", "", $doska);
$base='ip3/'.$doska_konvert.'.txt';
$base_zapas=$doska_konvert.'.txt';
$base_zapas_a=$doska_konvert.'.txt';

                                             }


$di = preg_replace("|[_]+|", "", $doska);
$koror = preg_replace("|[_]+|", "", $name);
 $base_hod_ip3='ip3/hod/'.$di.'.txt';
$y='ip3/'.$koror.'.txt';
$base_hod_ip3='ip3/hod/'.$doska_konvert.'.txt';
$base_hod_ip32='ip3/hod/'.$doska_konvert.'.txt';
$base_hod_ip3='ip3/hod/'.$doska_konvert.'.txt';


                 $base_figury='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'.txt';
                 $base_hody='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'_hody.txt';
                           

?>