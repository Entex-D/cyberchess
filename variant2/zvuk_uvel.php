
<?
$sxx='../archive_doski/'.$doska.'/tip2/'.$nomer2.'/'.$nomer2.'_zvuk_uvel.txt';

$dstatix[3] = preg_replace("|[\r\n]+|", "", $dstatix[3]);
$dstatix[4] = preg_replace("|[\r\n]+|", "", $dstatix[4]);
$dstatix[11] = preg_replace("|[\r\n]+|", "", $dstatix[11]);


if ( !file_exists($sxx) )   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$dstatix[11]."\n0\n")) { ;  }
fclose($openchatdb);

                                  }








if ( file_exists($sxx) )   {  

if($file = fopen($sxx, "r")) {  echo '' ; $bd4=0;} 
while(!feof($file)) { 
if($dim[]= fgets ($file)){ $bd4=$bd4+1; }
 }
fclose ($file);
}

$dim[0] = preg_replace("|[\r\n]+|", "", $dim[0]);
$dim[1] = preg_replace("|[\r\n]+|", "", $dim[1]);





if($dim[0]!=$dstatix[11]) {
if ( file_exists($sxx) )   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$dstatix[11]."\n0\n")) { ;  }
fclose($openchatdb);

                                  }
                                  }










if($dim[0]=='Черные' && $name==$dstatix[4] && $dim[1]=='0') { $zvuk='Da'; } 
if($dim[0]=='Белые' && $name==$dstatix[3] && $dim[1]=='0') { $zvuk='Da'; } 
if($name!=$dstatix[3] && $name!=$dstatix[4]) { if($dim[1]=='0') { $zvuk='Da'; }}



if($zvuk=='Da') { 

if($dim[0]=='Белые' && !$shah) { ?><audio src="../zvuk/hod_belyh.mp3" autoplay="autoplay"></audio><? }
if($dim[0]=='Черные' && !$shah) { ?><audio src="../zvuk/hod_chernyh.mp3" autoplay="autoplay"></audio><? }

if ( file_exists($sxx) )   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$dim[0]."\n0\n")) { ;  }
fclose($openchatdb);

                                  }

                                 }




?>