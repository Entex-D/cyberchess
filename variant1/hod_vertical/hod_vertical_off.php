<?




$sxx1='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_off.txt';


if(!file_exists($sxx1))   {  //echo 'файл '.$sxx.' присутствует';

$ss=rand(1,2);

$openchatdb=fopen($sxx1,"w");

 if(fwrite($openchatdb,'0'."\n".$ss."\n")) {   } 

fclose($openchatdb);



}





if($exxo[2]=='Comp') { $random='no'; } else $random=$random_index;







if($shah=='1' || $shah=='2') {



$data_x='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_off.txt';
 

$openchatdb=fopen($data_x,"w");

 if(fwrite($openchatdb,'1'."\n".'1'."\n")) {   } 

fclose($openchatdb);
  



}












$data1='./archive_doski/'.$doska.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_hod_vartical_off.txt';
 
if($file = fopen($data1, "r")) { $bs4=0;} 
while(!feof($file)) { 
if($shah_off[]= fgets ($file)){ $bs4=$bs4+1; }
 }
fclose ($file);

$shah_off[0] = preg_replace("|[\r\n]+|", "", $shah_off[0]);
$shah_off[1] = preg_replace("|[\r\n]+|", "", $shah_off[1]);


if(!$shah_off[1]) {

$ss=rand(1,2);

$openchatdb=fopen($sxx1,"w");

 if(fwrite($openchatdb,'0'."\n".$ss."\n")) {   } 

fclose($openchatdb);

}


if($random=='no') {

$openchatdb=fopen($sxx1,"w");

 if(fwrite($openchatdb,'1'."\n".$shah_off[1]."\n")) {   } 

fclose($openchatdb);

}


?>