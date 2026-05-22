<?

$data1='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_white.txt';
 




$ff1=rand(0,12);
$ff2=rand(0,12);
$ff3=rand(0,12);
$ff4=rand(0,12);  



if($ff1==$ff2) { $ff2=rand(0,12); }
if($ff2==$ff3) { $ff3=rand(0,12); }
if($ff3==$ff4) { $ff4=rand(0,12); }
if($ff1==$ff3) { $ff3=rand(0,12); }
if($ff2==$ff4) { $ff4=rand(0,12); }
if($ff1==$ff4) { $ff4=rand(0,12); }

if($ff1=='0') { $run1='A'; }
if($ff1=='1') { $run1='A'; }
if($ff1=='2') { $run1='B'; }
if($ff1=='3') { $run1='C'; }
if($ff1=='4') { $run1='D'; }
if($ff1=='5') { $run1='E'; }
if($ff1=='6') { $run1='F'; }
if($ff1=='7') { $run1='G'; }
if($ff1=='8') { $run1='H'; }
if($ff1=='9') { $run1='I'; }
if($ff1=='10') { $run1='K'; }
if($ff1=='11') { $run1='L'; }
if($ff1=='12') { $run1='M'; }


if($ff2=='0') { $run2='A'; }
if($ff2=='1') { $run2='A'; }
if($ff2=='2') { $run2='B'; }
if($ff2=='3') { $run2='C'; }
if($ff2=='4') { $run2='D'; }
if($ff2=='5') { $run2='E'; }
if($ff2=='6') { $run2='F'; }
if($ff2=='7') { $run2='G'; }
if($ff2=='8') { $run2='H'; }
if($ff2=='9') { $run2='I'; }
if($ff2=='10') { $run2='K'; }
if($ff2=='11') { $run2='L'; }
if($ff2=='12') { $run2='M'; }


if($ff3=='0') { $run3='A'; }
if($ff3=='1') { $run3='A'; }
if($ff3=='2') { $run3='B'; }
if($ff3=='3') { $run3='C'; }
if($ff3=='4') { $run3='D'; }
if($ff3=='5') { $run3='E'; }
if($ff3=='6') { $run3='F'; }
if($ff3=='7') { $run3='G'; }
if($ff3=='8') { $run3='H'; }
if($ff3=='9') { $run3='I'; }
if($ff3=='10') { $run3='K'; }
if($ff3=='11') { $run3='L'; }
if($ff3=='12') { $run3='M'; }


if($ff4=='0') { $run4='A'; }
if($ff4=='1') { $run4='A'; }
if($ff4=='2') { $run4='B'; }
if($ff4=='3') { $run4='C'; }
if($ff4=='4') { $run4='D'; }
if($ff4=='5') { $run4='E'; }
if($ff4=='6') { $run4='F'; }
if($ff4=='7') { $run4='G'; }
if($ff4=='8') { $run4='H'; }
if($ff4=='9') { $run4='I'; }
if($ff4=='10') { $run4='K'; }
if($ff4=='11') { $run4='L'; }
if($ff4=='12') { $run4='M'; }



$openchatdb=fopen($data1,"w");

 if(fwrite($openchatdb,$run1."\n".$run2."\n".$run3."\n".$run4."\n")) {   } 

fclose($openchatdb);
  


//echo '| '.$run1.' |';
//echo '| '.$run2.' |';
//echo '| '.$run3.' |';
//echo '| '.$run4.' |';

?>


















<?

$data2='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_black.txt';
 




$ff1=rand(0,12);
$ff2=rand(0,12);
$ff3=rand(0,12);
$ff4=rand(0,12);  



if($ff1==$ff2) { $ff2=rand(0,12); }
if($ff2==$ff3) { $ff3=rand(0,12); }
if($ff3==$ff4) { $ff4=rand(0,12); }
if($ff1==$ff3) { $ff3=rand(0,12); }
if($ff2==$ff4) { $ff4=rand(0,12); }
if($ff1==$ff4) { $ff4=rand(0,12); }

if($ff1=='0') { $run1='A'; }
if($ff1=='1') { $run1='A'; }
if($ff1=='2') { $run1='B'; }
if($ff1=='3') { $run1='C'; }
if($ff1=='4') { $run1='D'; }
if($ff1=='5') { $run1='E'; }
if($ff1=='6') { $run1='F'; }
if($ff1=='7') { $run1='G'; }
if($ff1=='8') { $run1='H'; }
if($ff1=='9') { $run1='I'; }
if($ff1=='10') { $run1='K'; }
if($ff1=='11') { $run1='L'; }
if($ff1=='12') { $run1='M'; }


if($ff2=='0') { $run2='A'; }
if($ff2=='1') { $run2='A'; }
if($ff2=='2') { $run2='B'; }
if($ff2=='3') { $run2='C'; }
if($ff2=='4') { $run2='D'; }
if($ff2=='5') { $run2='E'; }
if($ff2=='6') { $run2='F'; }
if($ff2=='7') { $run2='G'; }
if($ff2=='8') { $run2='H'; }
if($ff2=='9') { $run2='I'; }
if($ff2=='10') { $run2='K'; }
if($ff2=='11') { $run2='L'; }
if($ff2=='12') { $run2='M'; }


if($ff3=='0') { $run3='A'; }
if($ff3=='1') { $run3='A'; }
if($ff3=='2') { $run3='B'; }
if($ff3=='3') { $run3='C'; }
if($ff3=='4') { $run3='D'; }
if($ff3=='5') { $run3='E'; }
if($ff3=='6') { $run3='F'; }
if($ff3=='7') { $run3='G'; }
if($ff3=='8') { $run3='H'; }
if($ff3=='9') { $run3='I'; }
if($ff3=='10') { $run3='K'; }
if($ff3=='11') { $run3='L'; }
if($ff3=='12') { $run3='M'; }


if($ff4=='0') { $run4='A'; }
if($ff4=='1') { $run4='A'; }
if($ff4=='2') { $run4='B'; }
if($ff4=='3') { $run4='C'; }
if($ff4=='4') { $run4='D'; }
if($ff4=='5') { $run4='E'; }
if($ff4=='6') { $run4='F'; }
if($ff4=='7') { $run4='G'; }
if($ff4=='8') { $run4='H'; }
if($ff4=='9') { $run4='I'; }
if($ff4=='10') { $run4='K'; }
if($ff4=='11') { $run4='L'; }
if($ff4=='12') { $run4='M'; }


$openchatdb=fopen($data2,"w");

 if(fwrite($openchatdb,$run1."\n".$run2."\n".$run3."\n".$run4."\n")) {   } 

fclose($openchatdb);
  


//echo '| '.$run1.' |';
//echo '| '.$run2.' |';
//echo '| '.$run3.' |';
//echo '| '.$run4.' |';


?>