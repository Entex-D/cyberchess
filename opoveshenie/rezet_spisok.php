<?





if($del=='Ok') {





$dfr2='../archive_doski/'.$name.'/anketa/opoveshenie.txt'; 

if ( file_exists($dfr2) ) { 

$openchatdb=fopen($dfr2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 






echo "<meta http-equiv='refresh' content='1;url=opoveshenie.php'>";


}







?>