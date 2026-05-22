<?

$s9='./ban/ban_name.txt';

 $ChatDB9=file($s9);

while($a=array_pop($ChatDB9))
{
list($times,$ip,$login)=split(":",$a,3);

$login = preg_replace("|[\n\r]+|", "", $login);

if($name==$login) { $bex=$login;  } 


                 }

?>