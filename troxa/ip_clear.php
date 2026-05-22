<?





if($rezet=='yes') {





$dfr2='../troxa/ip_index.txt'; 

if ( file_exists($dfr2) ) { 

$openchatdb=fopen($dfr2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 






echo "<meta http-equiv='refresh' content='1;url=troxa.php'>";


}







?>