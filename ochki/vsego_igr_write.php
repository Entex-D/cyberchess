<?
echo '=';
$data1='ochki/ochki/vsego_igr.txt'; 

if ( !file_exists($data1) ) { 

$openchatdb=fopen($data1,"w");

 if(fwrite($openchatdb,'0'."\n")) {   } 

fclose($openchatdb);
  
} 




if($file = fopen($data1, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($vsego_igr[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

$vsego_igr[0] = preg_replace("|[\r\n]+|", "", $vsego_igr[0]);



$games=$vsego_igr[0]+1;

if ( file_exists($data1) ) { 

$openchatdb=fopen($data1,"w");

 if(fwrite($openchatdb,$games."\n")) {   } 

fclose($openchatdb);
  
} 

?>