<?


$data1='../ochki/ochki/peshka_white.txt'; 

if ( !file_exists($data1) ) { 

$openchatdb=fopen($data1,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data1, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_peshka_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

$data_peshka_white[0] = preg_replace("|[\r\n]+|", "", $data_peshka_white[0]);
$data_peshka_white[1] = preg_replace("|[\r\n]+|", "", $data_peshka_white[1]);













$data2='../ochki/ochki/peshka_black.txt'; 

if ( !file_exists($data2) ) { 

$openchatdb=fopen($data2,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data2, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_peshka_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data3='../ochki/ochki/kon_white.txt'; 

if ( !file_exists($data3) ) { 

$openchatdb=fopen($data3,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data3, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_kon_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data4='../ochki/ochki/kon_black.txt'; 

if ( !file_exists($data4) ) { 

$openchatdb=fopen($data4,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data4, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_kon_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data5='../ochki/ochki/slon_white.txt'; 

if ( !file_exists($data5) ) { 

$openchatdb=fopen($data5,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data5, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_slon_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data6='../ochki/ochki/slon_black.txt'; 

if ( !file_exists($data6) ) { 

$openchatdb=fopen($data6,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data6, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_slon_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data7='../ochki/ochki/yastreb_white.txt'; 

if ( !file_exists($data7) ) { 

$openchatdb=fopen($data7,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data7, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_yastreb_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data8='../ochki/ochki/yastreb_black.txt'; 

if ( !file_exists($data8) ) { 

$openchatdb=fopen($data8,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data8, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_yastreb_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data9='../ochki/ochki/medved_white.txt'; 

if ( !file_exists($data9) ) { 

$openchatdb=fopen($data9,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data9, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_medved_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data10='../ochki/ochki/medved_black.txt'; 

if ( !file_exists($data10) ) { 

$openchatdb=fopen($data10,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data10, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_medved_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data11='../ochki/ochki/prizrak_white.txt'; 

if ( !file_exists($data11) ) { 

$openchatdb=fopen($data11,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data11, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_prizrak_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data12='../ochki/ochki/prizrak_black.txt'; 

if ( !file_exists($data12) ) { 

$openchatdb=fopen($data12,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data12, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_prizrak_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data13='../ochki/ochki/princess_white.txt'; 

if ( !file_exists($data13) ) { 

$openchatdb=fopen($data13,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data13, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_princess_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data14='../ochki/ochki/princess_black.txt'; 

if ( !file_exists($data14) ) { 

$openchatdb=fopen($data14,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data14, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_princess_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data15='../ochki/ochki/mag_white.txt'; 

if ( !file_exists($data15) ) { 

$openchatdb=fopen($data15,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data15, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_mag_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data16='../ochki/ochki/mag_black.txt'; 

if ( !file_exists($data16) ) { 

$openchatdb=fopen($data16,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data16, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_mag_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data17='../ochki/ochki/capitan_white.txt'; 

if ( !file_exists($data17) ) { 

$openchatdb=fopen($data17,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data17, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_capitan_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data18='../ochki/ochki/capitan_black.txt'; 

if ( !file_exists($data18) ) { 

$openchatdb=fopen($data18,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data18, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_capitan_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data19='../ochki/ochki/ladya_white.txt'; 

if ( !file_exists($data19) ) { 

$openchatdb=fopen($data19,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data19, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_ladya_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data20='../ochki/ochki/ladya_black.txt'; 

if ( !file_exists($data20) ) { 

$openchatdb=fopen($data20,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data20, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_ladya_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data21='../ochki/ochki/ferz_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_ferz_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/ferz_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_ferz_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);






















$data21='../ochki/ochki/delf_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_delf_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/delf_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_delf_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);






















$data21='../ochki/ochki/dracon_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_dracon_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/dracon_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_dracon_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

































$data21='../ochki/ochki/rozetta_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_rozetta_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/rozetta_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_rozetta_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

































$data21='../ochki/ochki/strela_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_strela_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/strela_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_strela_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);


















$data21='../ochki/ochki/pauk_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_pauk_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/pauk_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_pauk_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);





















$data21='../ochki/ochki/legenda_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_legenda_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/legenda_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_legenda_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);


















$data21='../ochki/ochki/otshelnik_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_otshelnik_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/otshelnik_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_otshelnik_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);












$data21='../ochki/ochki/egik_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_egik_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/egik_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_egik_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data21='../ochki/ochki/krepost_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_krepost_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/krepost_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_krepost_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data21='../ochki/ochki/surpris_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_surpris_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/surpris_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_surpris_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data21='../ochki/ochki/serdce_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_serdce_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/serdce_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_serdce_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data21='../ochki/ochki/zvezda_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_zvezda_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/zvezda_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_zvezda_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data21='../ochki/ochki/geniy_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_geniy_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/geniy_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_geniy_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);












$data21='../ochki/ochki/insider_white.txt'; 

if ( !file_exists($data21) ) { 

$openchatdb=fopen($data21,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data21, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_insider_white[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);











$data22='../ochki/ochki/insider_black.txt'; 

if ( !file_exists($data22) ) { 

$openchatdb=fopen($data22,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) {   } 

fclose($openchatdb);
  
} 

if($file = fopen($data22, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($data_insider_black[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);













?>