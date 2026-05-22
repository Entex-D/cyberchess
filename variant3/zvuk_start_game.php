
<?

if($nomer_doski3) {
$sxx='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'_zvuk_start_game.txt';
                            } else $sxx='';

if ( !file_exists($sxx) )   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$exxo[11]."\n0\n")) { ;  }
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





if($dim[0]!=$exxo[11]) {
if ( file_exists($sxx) )   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$exxo[11]."\n0\n")) { ;  }
fclose($openchatdb);

                                  }
                                  }




 




if($dim[0]=='Черные' && $dim[1]=='0') { $zvuk='Da'; } 
if($dim[0]=='Белые' && $dim[1]=='0') { $zvuk='Da'; } 
if($name!=$exxo[3] && $name!=$exxo[4]) { if($dim[1]=='0') { $zvuk='Da'; }}



 
if($zvuk=='Da') { 

if($dim[0]=='Белые' && !$shah) { ?><audio src="./zvuk/start_game1.mp3" autoplay="autoplay"></audio><? }
if($dim[0]=='Черные' && !$shah) { ?><audio src="./zvuk/start_game1.mp3" autoplay="autoplay"></audio><? }

if ( file_exists($sxx) )   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$dim[0]."\n1\n")) { ;  }
fclose($openchatdb);

                                  }

                                 }


if($exxo[1]=='Comp' && $exxo[2]=='Comp') { $zetro='Net'; }

if($zetro!='Net') {
if($dim[0]=='Черные' && $dim[1]=='1') { ?><audio src="./zvuk/start_game2.mp3" autoplay="autoplay"></audio><? $tix='2'; } 
if($dim[0]=='Белые' && $dim[1]=='1') { ?><audio src="./zvuk/start_game2.mp3" autoplay="autoplay"></audio><?  $tix='2'; } 
                        }



if ( file_exists($sxx) && $tix=='2')   { 

$openchatdb=fopen($sxx,"w");
 if(fwrite($openchatdb,$dim[0]."\n2\n")) { ;  }
fclose($openchatdb);

                                  }

                                 




?>