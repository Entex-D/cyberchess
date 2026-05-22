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


$data_peshka_black[0] = preg_replace("|[\r\n]+|", "", $data_peshka_black[0]);
$data_peshka_black[1] = preg_replace("|[\r\n]+|", "", $data_peshka_black[1]);











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



$data_kon_white[0] = preg_replace("|[\r\n]+|", "", $data_kon_white[0]);
$data_kon_white[1] = preg_replace("|[\r\n]+|", "", $data_kon_white[1]);










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



$data_kon_black[0] = preg_replace("|[\r\n]+|", "", $data_kon_black[0]);
$data_kon_black[1] = preg_replace("|[\r\n]+|", "", $data_kon_black[1]);










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



$data_slon_white[0] = preg_replace("|[\r\n]+|", "", $data_slon_white[0]);
$data_slon_white[1] = preg_replace("|[\r\n]+|", "", $data_slon_white[1]);










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



$data_slon_black[0] = preg_replace("|[\r\n]+|", "", $data_slon_black[0]);
$data_slon_black[1] = preg_replace("|[\r\n]+|", "", $data_slon_black[1]);










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



$data_yastreb_white[0] = preg_replace("|[\r\n]+|", "", $data_yastreb_white[0]);
$data_yastreb_white[1] = preg_replace("|[\r\n]+|", "", $data_yastreb_white[1]);










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



$data_yastreb_black[0] = preg_replace("|[\r\n]+|", "", $data_yastreb_black[0]);
$data_yastreb_black[1] = preg_replace("|[\r\n]+|", "", $data_yastreb_black[1]);










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



$data_medved_white[0] = preg_replace("|[\r\n]+|", "", $data_medved_white[0]);
$data_medved_white[1] = preg_replace("|[\r\n]+|", "", $data_medved_white[1]);










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



$data_medved_black[0] = preg_replace("|[\r\n]+|", "", $data_medved_black[0]);
$data_medved_black[1] = preg_replace("|[\r\n]+|", "", $data_medved_black[1]);










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



$data_prizrak_white[0] = preg_replace("|[\r\n]+|", "", $data_prizrak_white[0]);
$data_prizrak_white[1] = preg_replace("|[\r\n]+|", "", $data_prizrak_white[1]);










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



$data_prizrak_black[0] = preg_replace("|[\r\n]+|", "", $data_prizrak_black[0]);
$data_prizrak_black[1] = preg_replace("|[\r\n]+|", "", $data_prizrak_black[1]);










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



$data_princess_white[0] = preg_replace("|[\r\n]+|", "", $data_princess_white[0]);
$data_princess_white[1] = preg_replace("|[\r\n]+|", "", $data_princess_white[1]);










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


$data_princess_black[0] = preg_replace("|[\r\n]+|", "", $data_princess_black[0]);
$data_princess_black[1] = preg_replace("|[\r\n]+|", "", $data_princess_black[1]);











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


$data_mag_white[0] = preg_replace("|[\r\n]+|", "", $data_mag_white[0]);
$data_mag_white[1] = preg_replace("|[\r\n]+|", "", $data_mag_white[1]);











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


$data_mag_black[0] = preg_replace("|[\r\n]+|", "", $data_mag_black[0]);
$data_mag_black[1] = preg_replace("|[\r\n]+|", "", $data_mag_black[1]);











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


$data_capitan_white[0] = preg_replace("|[\r\n]+|", "", $data_capitan_white[0]);
$data_capitan_white[1] = preg_replace("|[\r\n]+|", "", $data_capitan_white[1]);











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



$data_capitan_black[0] = preg_replace("|[\r\n]+|", "", $data_capitan_black[0]);
$data_capitan_black[1] = preg_replace("|[\r\n]+|", "", $data_capitan_black[1]);










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



$data_ladya_white[0] = preg_replace("|[\r\n]+|", "", $data_ladya_white[0]);
$data_ladya_white[1] = preg_replace("|[\r\n]+|", "", $data_ladya_white[1]);










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


$data_ladya_black[0] = preg_replace("|[\r\n]+|", "", $data_ladya_black[0]);
$data_ladya_black[1] = preg_replace("|[\r\n]+|", "", $data_ladya_black[1]);











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


$data_ferz_white[0] = preg_replace("|[\r\n]+|", "", $data_ferz_white[0]);
$data_ferz_white[1] = preg_replace("|[\r\n]+|", "", $data_ferz_white[1]);











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


$data_ferz_black[0] = preg_replace("|[\r\n]+|", "", $data_ferz_black[0]);
$data_ferz_black[1] = preg_replace("|[\r\n]+|", "", $data_ferz_black[1]);












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


$data_delf_white[0] = preg_replace("|[\r\n]+|", "", $data_delf_white[0]);
$data_delf_white[1] = preg_replace("|[\r\n]+|", "", $data_delf_white[1]);











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


$data_delf_black[0] = preg_replace("|[\r\n]+|", "", $data_delf_black[0]);
$data_delf_black[1] = preg_replace("|[\r\n]+|", "", $data_delf_black[1]);














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


$data_dracon_white[0] = preg_replace("|[\r\n]+|", "", $data_dracon_white[0]);
$data_dracon_white[1] = preg_replace("|[\r\n]+|", "", $data_dracon_white[1]);











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


$data_dracon_black[0] = preg_replace("|[\r\n]+|", "", $data_dracon_black[0]);
$data_dracon_black[1] = preg_replace("|[\r\n]+|", "", $data_dracon_black[1]);


















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


$data_rozetta_white[0] = preg_replace("|[\r\n]+|", "", $data_rozetta_white[0]);
$data_rozetta_white[1] = preg_replace("|[\r\n]+|", "", $data_rozetta_white[1]);











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


$data_rozetta_black[0] = preg_replace("|[\r\n]+|", "", $data_rozetta_black[0]);
$data_rozetta_black[1] = preg_replace("|[\r\n]+|", "", $data_rozetta_black[1]);












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


$data_strela_white[0] = preg_replace("|[\r\n]+|", "", $data_strela_white[0]);
$data_strela_white[1] = preg_replace("|[\r\n]+|", "", $data_strela_white[1]);











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


$data_strela_black[0] = preg_replace("|[\r\n]+|", "", $data_strela_black[0]);
$data_strela_black[1] = preg_replace("|[\r\n]+|", "", $data_strela_black[1]);






















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


$data_pauk_white[0] = preg_replace("|[\r\n]+|", "", $data_pauk_white[0]);
$data_pauk_white[1] = preg_replace("|[\r\n]+|", "", $data_pauk_white[1]);











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


$data_pauk_black[0] = preg_replace("|[\r\n]+|", "", $data_pauk_black[0]);
$data_pauk_black[1] = preg_replace("|[\r\n]+|", "", $data_pauk_black[1]);






















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


$data_legenda_white[0] = preg_replace("|[\r\n]+|", "", $data_legenda_white[0]);
$data_legenda_white[1] = preg_replace("|[\r\n]+|", "", $data_legenda_white[1]);











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


$data_legenda_black[0] = preg_replace("|[\r\n]+|", "", $data_legenda_black[0]);
$data_legenda_black[1] = preg_replace("|[\r\n]+|", "", $data_legenda_black[1]);













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


$data_otshelnik_white[0] = preg_replace("|[\r\n]+|", "", $data_otshelnik_white[0]);
$data_otshelnik_white[1] = preg_replace("|[\r\n]+|", "", $data_otshelnik_white[1]);











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


$data_otshelnik_black[0] = preg_replace("|[\r\n]+|", "", $data_otshelnik_black[0]);
$data_otshelnik_black[1] = preg_replace("|[\r\n]+|", "", $data_otshelnik_black[1]);











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


$data_egik_white[0] = preg_replace("|[\r\n]+|", "", $data_egik_white[0]);
$data_egik_white[1] = preg_replace("|[\r\n]+|", "", $data_egik_white[1]);











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


$data_egik_black[0] = preg_replace("|[\r\n]+|", "", $data_egik_black[0]);
$data_egik_black[1] = preg_replace("|[\r\n]+|", "", $data_egik_black[1]);















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


$data_krepost_white[0] = preg_replace("|[\r\n]+|", "", $data_krepost_white[0]);
$data_krepost_white[1] = preg_replace("|[\r\n]+|", "", $data_krepost_white[1]);











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


$data_krepost_black[0] = preg_replace("|[\r\n]+|", "", $data_krepost_black[0]);
$data_krepost_black[1] = preg_replace("|[\r\n]+|", "", $data_krepost_black[1]);















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


$data_surpris_white[0] = preg_replace("|[\r\n]+|", "", $data_surpris_white[0]);
$data_surpris_white[1] = preg_replace("|[\r\n]+|", "", $data_surpris_white[1]);











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


$data_surpris_black[0] = preg_replace("|[\r\n]+|", "", $data_surpris_black[0]);
$data_surpris_black[1] = preg_replace("|[\r\n]+|", "", $data_surpris_black[1]);















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


$data_serdce_white[0] = preg_replace("|[\r\n]+|", "", $data_serdce_white[0]);
$data_serdce_white[1] = preg_replace("|[\r\n]+|", "", $data_serdce_white[1]);











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


$data_serdce_black[0] = preg_replace("|[\r\n]+|", "", $data_serdce_black[0]);
$data_serdce_black[1] = preg_replace("|[\r\n]+|", "", $data_serdce_black[1]);















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


$data_zvezda_white[0] = preg_replace("|[\r\n]+|", "", $data_zvezda_white[0]);
$data_zvezda_white[1] = preg_replace("|[\r\n]+|", "", $data_zvezda_white[1]);











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


$data_zvezda_black[0] = preg_replace("|[\r\n]+|", "", $data_zvezda_black[0]);
$data_zvezda_black[1] = preg_replace("|[\r\n]+|", "", $data_zvezda_black[1]);














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


$data_geniy_white[0] = preg_replace("|[\r\n]+|", "", $data_geniy_white[0]);
$data_geniy_white[1] = preg_replace("|[\r\n]+|", "", $data_geniy_white[1]);











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


$data_geniy_black[0] = preg_replace("|[\r\n]+|", "", $data_geniy_black[0]);
$data_geniy_black[1] = preg_replace("|[\r\n]+|", "", $data_geniy_black[1]);















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


$data_insider_white[0] = preg_replace("|[\r\n]+|", "", $data_insider_white[0]);
$data_insider_white[1] = preg_replace("|[\r\n]+|", "", $data_insider_white[1]);











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


$data_insider_black[0] = preg_replace("|[\r\n]+|", "", $data_insider_black[0]);
$data_insider_black[1] = preg_replace("|[\r\n]+|", "", $data_insider_black[1]);





$itog1=$data_peshka_white[0]+$data_peshka_black[0]+
           $data_kon_white[0]+$data_kon_black[0]+
           $data_slon_white[0]+$data_slon_black[0]+
           $data_yastreb_white[0]+$data_yastreb_black[0]+
           $data_medved_white[0]+$data_medved_black[0]+
           $data_prizrak_white[0]+$data_prizrak_black[0]+
           $data_princess_white[0]+$data_princess_black[0]+
           $data_mag_white[0]+$data_mag_black[0]+
           $data_capitan_white[0]+$data_capitan_black[0]+
           $data_ladya_white[0]+$data_ledya_black[0]+
           $data_ferz_white[0]+$data_ferz_black[0]+
           $data_delf_white[0]+$data_delf_black[0]+
           $data_dracon_white[0]+$data_dracon_black[0]+
           $data_rozetta_white[0]+$data_rozetta_black[0]+
           $data_strela_white[0]+$data_strela_black[0]+
           $data_pauk_white[0]+$data_pauk_black[0]+
           $data_legenda_white[0]+$data_legenda_black[0]+
           $data_otshelnik_white[0]+$data_otshelnik_black[0]+
           $data_egik_white[0]+$data_egik_black[0] +
         $data_krepost_white[0]+$data_krepost_black[0] +
         $data_surpris_white[0]+$data_surpris_black[0] +
         $data_serdce_white[0]+$data_serdce_black[0] +
         $data_zvezda_white[0]+$data_zvezda_black[0] +
         $data_geniy_white[0]+$data_geniy_black[0] +
         $data_insider_white[0]+$data_insider_black[0];



$itog2=$data_peshka_white[1]+$data_peshka_black[1]+
           $data_kon_white[1]+$data_kon_black[1]+
           $data_slon_white[1]+$data_slon_black[1]+
           $data_yastreb_white[1]+$data_yastreb_black[1]+
           $data_medved_white[1]+$data_medved_black[1]+
           $data_prizrak_white[1]+$data_prizrak_black[1]+
           $data_princess_white[1]+$data_princess_black[1]+
           $data_mag_white[1]+$data_mag_black[1]+
           $data_capitan_white[1]+$data_capitan_black[1]+
           $data_ladya_white[1]+$data_ledya_black[1]+
           $data_ferz_white[1]+$data_ferz_black[1]+
           $data_delf_white[1]+$data_delf_black[1]+
           $data_dracon_white[1]+$data_dracon_black[1]+
          $data_rozetta_white[1]+$data_rozetta_black[1]+
          $data_strela_white[1]+$data_strela_black[1]+
          $data_pauk_white[1]+$data_pauk_black[1]+
          $data_legenda_white[1]+$data_legenda_black[1]+
          $data_otshelnik_white[1]+$data_otshelnik_black[1]+
          $data_egik_white[1]+$data_egik_black[1] +
          $data_krepost_white[1]+$data_krepost_black[1] +
          $data_surpris_white[1]+$data_surpris_black[1] +
          $data_serdce_white[1]+$data_serdce_black[1] +
          $data_zvezda_white[1]+$data_zvezda_black[1] +
          $data_geniy_white[1]+$data_geniy_black[1] +
          $data_insider_white[1]+$data_insider_black[1];






?>