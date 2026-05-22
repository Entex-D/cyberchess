<?

if($game=='new') { //start if $game==new

$edix='../sea_battle/figure_start.txt';  
 
if($file = fopen($edix, "r")) { echo ''; $d1=0;

while(!feof($file)) { 
if($start_x[]= fgets ($file)){$d1++;} 
}
fclose ($file); 

 }


//function razdacha() {
include('../sea_battle/GPT_man_start.php');
 //                            }

//if($schet_func!='22') { razdacha(); }

//echo 'Считалось фигур из архива '.$d1;
//echo '=+'.$fexo[9];

for($t=0;$t<$d1;$t++) {
//echo '='.$start[$t];
$start[$t] = preg_replace("|[\r\n]+|", "", $start[$t]);
}




$edix1='../sea_battle/figure_start_komp.txt';  
 
if($file = fopen($edix1, "r")) { echo ''; $d1=0;

while(!feof($file)) { 
if($start_comp_x[]= fgets ($file)){$d1++;} }
fclose ($file); 

 }

include('../sea_battle/GPT_comp_start.php');

//echo 'Считалось фигур из архива '.$d1;
//echo '=+'.$fexo[9];

for($t=0;$t<$d1;$t++) {
$start_comp[$t] = preg_replace("|[\r\n]+|", "", $start_comp[$t]);
}

if($schet_func!='22' && $schet_func!='21' && $schet_func!='20') { $ret='2'; } else $ret='1';
if($schet_func2!='22' && $schet_func2!='21' && $schet_func2!='20') { $ret2='2'; } else $ret2='1';


if($ret=='2' || $ret2=='2') {
//echo "<meta http-equiv='refresh' content='0;url=dosa.php?game=new'>";
                               }










} else if($game=='new2') { //start if $game==new

$edix='../sea_battle/figure_start2.txt';  
 
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


} else if($game=='new3') { //start if $game==new

$edix='../sea_battle/figure_start3.txt';  
 
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


} 






$lide='../sea_battle/igrok/'.$nick.'_figure.txt'; 


$openchatdb=fopen($lide,"w");


for($h=0;$h<200;$h++) {
if($start[$h]>' ') {
 if(fwrite($openchatdb,$start[$h]."\n")) {  
 }
                    }              }
fclose($openchatdb);
                       



$lide='../sea_battle/igrok/'.$nick.'_figure_comp.txt'; 


$openchatdb=fopen($lide,"w");


for($h=0;$h<200;$h++) {
if($start_comp[$h]>' ') {
 if(fwrite($openchatdb,$start_comp[$h]."\n")) {  
 }
                    }              }
fclose($openchatdb);
                       
















$edix='../sea_battle/igrok/'.$nick.'_figure.txt';  
 
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



$edix1='../sea_battle/igrok/'.$nick.'_figure_comp.txt';  
 
if($file = fopen($edix1, "r")) { echo ''; $v1=0;

while(!feof($file)) { 
if($fexo_comp[]= fgets ($file)){$v1++;} }
fclose ($file); 

 }

//echo '='.$v1;
//echo '=+'.$fexo_comp[9];

for($t=0;$t<$v1;$t++) {
$fexo_comp[$t] = preg_replace("|[\r\n]+|", "", $fexo_comp[$t]);
}









$des4='../sea_battle/igrok/hod/'.$nick.'_hod.txt'; 

$openchatdb=fopen($des4,"w");

 if(fwrite($openchatdb,'')) {   } 

fclose($openchatdb);










$des4='../sea_battle/igrok/hod_bgcolor/'.$nick.'_hod_bgcolor.txt'; 

$openchatdb=fopen($des4,"w");

 if(fwrite($openchatdb,'')) {   } 

fclose($openchatdb);













include('../sea_battle/analiz.php');




?>

<script>
document.cookie = "hod_shto1=" + 0;
document.cookie = "hod_kuda1=" + 0;
 </script>

<?

echo "<meta http-equiv='refresh' content='2;url=dosa.php'>";

?>