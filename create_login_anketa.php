<?
if($name) {
$des='ip/'.$name.'.txt';

if ( !file_exists($des) )   { 
// считываем из файла ходы записанные

$openchatdb=fopen($des,"w");
 if(fwrite($openchatdb,'1')) { ;  }
fclose($openchatdb);


} //end if file exists










} //end if $name



?>