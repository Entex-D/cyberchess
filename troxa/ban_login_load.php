<?

$s9='../ban/ban_name.txt';

 $ChatDB9=file($s9);

$ttret='1';

while($a=array_pop($ChatDB9))
{
list($times,$ip,$login_p)=split(":",$a,3);

$login_p = preg_replace("|[\n\r]+|", "", $login_p);

$login_x[$ttret]=$login_p;

if($name==$login_p) { $bex=$login_p;  } 

$ttret=$ttret+'1';
                 }

?>