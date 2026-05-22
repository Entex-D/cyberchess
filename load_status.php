<?

// создаём файлы биткоина,побед и рейтинга при первом заходе

if($name) { $file_guest='./btc/'.$name.'.txt';  
 


if ( !file_exists($file_guest) )   {  

$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,'0.2'."\n".'0'."\n".'0'."\n")) { ;  }

fclose($openchatdb);
   
 }



if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }
if($v[0]>' ' && $v[0]<'2') {} else  if(!$file = fopen($file_guest, "a")) {   } else if(!fputs ($file, '0.2'."\n".'0'."\n".'0'."\n")) { ;} fclose ($file);}








if($name) { $file_guest='./rating/'.$name.'.txt';  
 


if ( !file_exists($file_guest) )   {  

$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,'1500'."\n".'0'."\n".'0'."\n")) { ;  }

fclose($openchatdb);
   
 }




if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($rat[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }
if($rat[0]>'0') {} else  if(!$file = fopen($file_guest, "a")) {   } else if(!fputs ($file, '1500'."\n".'0'."\n".'0'."\n")) { ;} fclose ($file);}













if($name) { $file_guest='./wins_losses/'.$name.'.txt';  
 



if ( !file_exists($file_guest) )   {  

$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) { ;  }

fclose($openchatdb);
   
 }



if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($raty[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }
if($raty[0]>'0') {} else  if(!$file = fopen($file_guest, "a")) {   } else if(!fputs ($file, '0'."\n".'0'."\n")) { ;} fclose ($file);}





?>