<?

$data1='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'_random_figura_white.txt';
 





$ff1=rand(10,20);
$ff2=rand(10,20);
$ff3=rand(10,20);


if($ff1==$ff2) { $ff2=rand(10,20); }
if($ff2==$ff3) { $ff3=rand(10,20); }
if($ff1==$ff4) { $ff4=rand(10,20); }

if($ff1=='10') { $run1='11'; }
if($ff1=='11') { $run1='11'; }
if($ff1=='12') { $run1='12'; }
if($ff1=='13') { $run1='13'; }
if($ff1=='14') { $run1='14'; }
if($ff1=='15') { $run1='15'; }
if($ff1=='16') { $run1='16'; }
if($ff1=='17') { $run1='17'; }
if($ff1=='18') { $run1='11'; }
if($ff1=='19') { $run1='19'; }
if($ff1=='20') { $run1='11'; }


if($ff2=='10') { $run2='11'; }
if($ff2=='11') { $run2='11'; }
if($ff2=='12') { $run2='12'; }
if($ff2=='13') { $run2='13'; }
if($ff2=='14') { $run2='14'; }
if($ff2=='15') { $run2='15'; }
if($ff2=='16') { $run2='16'; }
if($ff2=='17') { $run2='17'; }
if($ff2=='18') { $run2='11'; }
if($ff2=='19') { $run2='19'; }
if($ff2=='20') { $run2='11'; }


if($ff3=='10') { $run3='11'; }
if($ff3=='11') { $run3='11'; }
if($ff3=='12') { $run3='12'; }
if($ff3=='13') { $run3='13'; }
if($ff3=='14') { $run3='14'; }
if($ff3=='15') { $run3='15'; }
if($ff3=='16') { $run3='16'; }
if($ff3=='17') { $run3='17'; }
if($ff3=='18') { $run3='11'; }
if($ff3=='19') { $run3='19'; }
if($ff3=='20') { $run3='11'; }




$openchatdb=fopen($data1,"w");

 if(fwrite($openchatdb,$run1."\n".$run2."\n".$run3."\n")) {   } 

fclose($openchatdb);
  


//echo '| '.$run1.' |';
//echo '| '.$run2.' |';
//echo '| '.$run3.' |';
//echo '| '.$run4.' |';

?>


















<?

$data2='./archive_doski/'.$doska.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'_random_figura_black.txt';
 




$ff1=rand(0,10);
$ff2=rand(0,10);
$ff3=rand(0,10);


if($ff1==$ff2) { $ff2=rand(0,10); }
if($ff2==$ff3) { $ff3=rand(0,10); }
if($ff1==$ff4) { $ff4=rand(0,10); }

if($ff1=='0') { $run1='1'; }
if($ff1=='1') { $run1='1'; }
if($ff1=='2') { $run1='2'; }
if($ff1=='3') { $run1='3'; }
if($ff1=='4') { $run1='4'; }
if($ff1=='5') { $run1='5'; }
if($ff1=='6') { $run1='6'; }
if($ff1=='7') { $run1='7'; }
if($ff1=='8') { $run1='8'; }
if($ff1=='9') { $run1='9'; }
if($ff1=='10') { $run1='1'; }

if($ff2=='0') { $run2='1'; }
if($ff2=='1') { $run2='1'; }
if($ff2=='2') { $run2='2'; }
if($ff2=='3') { $run2='3'; }
if($ff2=='4') { $run2='4'; }
if($ff2=='5') { $run2='5'; }
if($ff2=='6') { $run2='6'; }
if($ff2=='7') { $run2='7'; }
if($ff2=='8') { $run2='8'; }
if($ff2=='9') { $run2='9'; }
if($ff2=='10') { $run2='1'; }

if($ff3=='0') { $run3='1'; }
if($ff3=='1') { $run3='1'; }
if($ff3=='2') { $run3='2'; }
if($ff3=='3') { $run3='3'; }
if($ff3=='4') { $run3='4'; }
if($ff3=='5') { $run3='5'; }
if($ff3=='6') { $run3='6'; }
if($ff3=='7') { $run3='7'; }
if($ff3=='8') { $run3='8'; }
if($ff3=='9') { $run3='9'; }
if($ff3=='10') { $run3='1'; }

$openchatdb=fopen($data2,"w");

 if(fwrite($openchatdb,$run1."\n".$run2."\n".$run3."\n")) {   } 

fclose($openchatdb);
  


//echo '| '.$run1.' |';
//echo '| '.$run2.' |';
//echo '| '.$run3.' |';
//echo '| '.$run4.' |';


?>