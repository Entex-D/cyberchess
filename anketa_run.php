<?

if($name) {

$adres='./archive_doski/'.$name.'/anketa/email.txt';


if ( !file_exists($adres) )   { 
// считываем из файла ходы записанные





$adres='./archive_doski/'.$name.'/anketa';


if(!mkdir($adres, 0755,true)) { 
//echo '<br>Error';
//if(!mkdir('./archive', 0755)) { echo '<br>2 Error'; } 
 };


$figury='./archive_doski/'.$name.'/anketa/email.txt';

$openchatdb=fopen($figury,"w");

$cifr=rand(0,999);
 if(fwrite($openchatdb,'0'."\n".$cifr."\n".'Нет'."\n".'0'."\n".'0'."\n")) { ;  }
                                  
fclose($openchatdb);
          








$figury='./archive_doski/'.$name.'/anketa/opoveshenie.txt';

$openchatdb=fopen($figury,"w");

//$cifr=rand(0,999);
$b='Анкета создана <font size=1>'.date("d.m.Y|G:i:s ").'</font>';
 if(fwrite($openchatdb,$b."\n")) { ;  }
                                  
fclose($openchatdb);
 









} // end file exits

} //end if name
?>