<?

if($nomer_doski8) {
$sxx2='./archive_doski/'.$doska.'/tip8/'.$nomer_doski8.'/'.$nomer_doski8.'_pobeda.txt';
                            } else $sxx2='';

if ( !file_exists($sxx2) )   { 

$openchatdb=fopen($sxx2,"w");
 if(fwrite($openchatdb,"0\n0\n")) { ;  }
fclose($openchatdb);

                                  }









if ( file_exists($sxx2) )   {  

if($file = fopen($sxx2, "r")) {  echo '' ; $bd4=0;} 
while(!feof($file)) { 
if($dimx[]= fgets ($file)){ $bd4=$bd4+1; }
 }
fclose ($file);
}

$dimx[0] = preg_replace("|[\r\n]+|", "", $dimx[0]);
$dimx[1] = preg_replace("|[\r\n]+|", "", $dimx[1]);

// Если ИИ играя с человеком 20 раз не находит ход из под шаха, то говорит "Сдаюсь"
if($shah=='1' && $exxo[4]=='Comp') { $dimx[0]=$dimx[0]+1; } else
if($shah=='2' && $exxo[3]=='Comp') { $dimx[1]=$dimx[1]+1; } else { $dimx[0]=0; $dimx[1]=0; }




if ( file_exists($sxx2) )   { 

$openchatdb=fopen($sxx2,"w");
 if(fwrite($openchatdb,$dimx[0]."\n".$dimx[1]."\n")) { ;  }
fclose($openchatdb);

                                  }
                                  




//echo '='.$dimx[0];
//echo '='.$dimx[1];

if($exxo[2]=='Comp' && $exxo[1]!='Comp' && $shah=='1' && $exxo[4]=='Comp') { if($dimx[0]>$zvuk_sdayus) {  ?><audio src="./zvuk/sdayus.mp3" autoplay="autoplay"></audio><? } }

if($exxo[2]=='Comp' && $exxo[1]!='Comp' && $shah=='2' && $exxo[3]=='Comp') { if($dimx[1]>$zvuk_sdayus) {  ?><audio src="./zvuk/sdayus.mp3" autoplay="autoplay"></audio><? } }




if($exxo[2]=='Comp' && $exxo[4]=='Comp' && $exxo[11]=='Черные') { if($dimx[0]>$zvuk_sdayus / 3 && $dimx[0]<$zvuk_sdayus / 3 + 2) {  ?><audio src="./zvuk/run_random_hod.mp3" autoplay="autoplay"></audio><? } }

if($exxo[2]=='Comp' && $exxo[3]=='Comp' && $exxo[11]=='Белые') { if($dimx[1]>$zvuk_sdayus / 3 && $dimx[1]<$zvuk_sdayus / 3 + 2) {  ?><audio src="./zvuk/run_random_hod.mp3" autoplay="autoplay"></audio><? } }







if($dimx[0]>$ball_sdayus || $dimx[1]>$ball_sdayus) { // после шаха и 24 попыток найти ход ИИ сдается и закрывает игру

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);
$exxo[3] = preg_replace("|[\r\n]+|", "", $exxo[3]);
$exxo[4] = preg_replace("|[\r\n]+|", "", $exxo[4]);
$exxo[5] = preg_replace("|[\r\n]+|", "", $exxo[5]);
$exxo[6] = preg_replace("|[\r\n]+|", "", $exxo[6]);
$exxo[7] = preg_replace("|[\r\n]+|", "", $exxo[7]);
$exxo[8] = preg_replace("|[\r\n]+|", "", $exxo[8]);
$exxo[9] = preg_replace("|[\r\n]+|", "", $exxo[9]);
$exxo[10] = preg_replace("|[\r\n]+|", "", $exxo[10]);
$exxo[11] = preg_replace("|[\r\n]+|", "", $exxo[11]);
$exxo[12] = preg_replace("|[\r\n]+|", "", $exxo[12]);
$exxo[13] = preg_replace("|[\r\n]+|", "", $exxo[13]);
$exxo[14] = preg_replace("|[\r\n]+|", "", $exxo[14]);
$exxo[15] = preg_replace("|[\r\n]+|", "", $exxo[15]);
$exxo[16] = preg_replace("|[\r\n]+|", "", $exxo[16]);
$exxo[17] = preg_replace("|[\r\n]+|", "", $exxo[17]);
$exxo[18] = preg_replace("|[\r\n]+|", "", $exxo[18]);
$exxo[19] = preg_replace("|[\r\n]+|", "", $exxo[19]);
$exxo[20] = preg_replace("|[\r\n]+|", "", $exxo[20]);
$exxo[21] = preg_replace("|[\r\n]+|", "", $exxo[21]);
$exxo[22] = preg_replace("|[\r\n]+|", "", $exxo[22]);


$exxo[8]='Comp'; 
$exxo[5]=$exxo[1];

if($exxo[2]=='Comp' && $exxo[3]=='Comp') { $exxo[7]='Черные'; } else
if($exxo[2]=='Comp' && $exxo[4]=='Comp') { $exxo[6]='Белые'; }

$dannye_archive='./archive_doski/'.$doska.'/tip8/'.$nomer_doski8.'/'.$nomer_doski8.'_statix.txt';

$openchatdb=fopen($dannye_archive,"w");

 if(fwrite($openchatdb,$exxo[0]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[1]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[2]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[3]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[4]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[5]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[6]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[7]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[8]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[9]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[10]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[11]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[12]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[13]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[14]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[15]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[16]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[17]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[18]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[19]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[20]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[21]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[22]."\n")) { ;  }
                               
fclose($openchatdb);
 









} //end if $dimx










?>