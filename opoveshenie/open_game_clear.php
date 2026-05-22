<?


$file_guest5='./archive_doski/'.$name.'/anketa/list_game.txt';  
 
if($file = fopen($file_guest5, "r")) { echo ''; $bg4=0;

while(!feof($file)) { 
if($stroki_n[]= fgets ($file)){$bg4++;} }
fclose ($file); 

 }








if($rezet=='yes') {


$xri2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xri2) )   { 

$openchatdb=fopen($xri2,"w");

 if(fwrite($openchatdb,' ')) { ;  } 

fclose($openchatdb);
      
}

echo "<meta http-equiv='refresh' content='1;url=anketa.php'>";

}




?>