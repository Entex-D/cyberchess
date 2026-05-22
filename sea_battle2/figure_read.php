<?


if($nick) {


$des2='../sea_battle2/igrok/'.$nick.'_figure.txt'; 

if ( !file_exists($des2) ) { 

//echo 'no='.$des2; 

$openchatdb=fopen($des2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  


$des3='../sea_battle2/igrok/'.$nick.'_figure_comp.txt'; 
$openchatdb=fopen($des3,"w");
 if(fwrite($openchatdb,' ')) {   } 
fclose($openchatdb);




$edix='../sea_battle2/figure_start.txt';  
 
if($file = fopen($edix, "r")) { echo ''; $d1=0;

while(!feof($file)) { 
if($start[]= fgets ($file)){$d1++;} }
fclose ($file); 

 }

//echo 'Считалось фигур из архива '.$d1;
//echo '=+'.$fexo[9];

for($t=0;$t<$d1;$t++) {
$start[$t] = preg_replace("|[\r\n]+|", "", $start[$t]);
}



$edix1='../sea_battle2/figure_start_komp.txt';  
 
if($file = fopen($edix1, "r")) { echo ''; $d1=0;

while(!feof($file)) { 
if($start_comp[]= fgets ($file)){$d1++;} }
fclose ($file); 

 }


//echo 'Считалось фигур из архива '.$d1;
//echo '=+'.$fexo[9];

for($t=0;$t<$d1;$t++) {
$start_comp[$t] = preg_replace("|[\r\n]+|", "", $start_comp[$t]);
}







$lide='../sea_battle2/igrok/'.$nick.'_figure.txt'; 


$openchatdb=fopen($lide,"w");


for($h=0;$h<300;$h++) {
if($start[$h]>' ') {
 if(fwrite($openchatdb,$start[$h]."\n")) {  
 }
                    }              }
fclose($openchatdb);
                       



$lide11='../sea_battle2/igrok/'.$nick.'_figure_comp.txt'; 
$openchatdb=fopen($lide11,"w");

for($h=0;$h<300;$h++) {
//echo '<br>='.$start_comp[$h];
if($start_comp[$h]>' ') {
 if(fwrite($openchatdb,$start_comp[$h]."\n")) {  //echo '<br>Записалось = '.$h;
 }
                    }              }
fclose($openchatdb);
                       











} // конец if ( !file_exists($des2) ) { 






$edix='../sea_battle2/igrok/'.$nick.'_figure.txt';  
 
if($file = fopen($edix, "r")) { echo ''; $v1=0;

while(!feof($file)) { 
if($fexo[]= fgets ($file)){$v1++;} }
fclose ($file); 

 }

//echo '='.$v1;
//echo '=+'.$fexo[9];

for($t=0;$t<$v1;$t++) {
$fexo[$t] = preg_replace("|[\r\n]+|", "", $fexo[$t]);
}





$edix1='../sea_battle2/igrok/'.$nick.'_figure_comp.txt';  
 
if($file = fopen($edix1, "r")) { echo ''; $v1=0;

while(!feof($file)) { 
if($fexo_comp[]= fgets ($file)){$v1++;} }
fclose ($file); 

 }

//echo '='.$v1;
//echo '=+'.$fexo_comp[145];

for($t=0;$t<$v1;$t++) {
$fexo_comp[$t] = preg_replace("|[\r\n]+|", "", $fexo_comp[$t]);
}








$des4='../sea_battle2/igrok/hod_bgcolor/'.$nick.'_hod_bgcolor.txt'; 

if ( !file_exists($des4) ) { 

$openchatdb=fopen($des4,"w");

 if(fwrite($openchatdb,'')) {   } 

fclose($openchatdb);

}









$des4='../sea_battle2/igrok/analiz/'.$nick.'_analiz.txt'; 

if ( !file_exists($des4) ) { 

$openchatdb=fopen($des4,"w");

 if(fwrite($openchatdb,'')) {   } 

fclose($openchatdb);

}














} // конец if($nick) {










?>