<?

$igrok='ip3/igrok/'.$doska.'.txt';
//echo $igrok;

if ( !file_exists($igrok) )   {  //echo 'файл '.$igrok.' отсутствует';

$openchatdb=fopen($igrok,"w");

 if(fwrite($openchatdb,""."")) { ;  }

fclose($openchatdb);
   
 }        //exit("файл base не существует");



if($file = fopen($igrok, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($nik[]= fgets ($file)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
 }
fclose ($file);
 
 echo '&nbsp;&nbsp;<font size=1><strong>На доске онлайн:</strong></font><br><br>';

if(!$name) { $name='Гость'; }

$dix='0';
$esu='0';
$ixu='0';


 


for($g=0;$g<$b4+2;$g++) {
if($nik[$g]>' ') {
 
 $nik[$g] = preg_replace("|[ ]+|", "", $nik[$g]);
 $nik[$g] = preg_replace("|[\n\r]+|", "", $nik[$g]);
 $nik[$g+1] = preg_replace("|[ ]+|", "", $nik[$g+1]);
 $nik[$g+1] = preg_replace("|[\n\r]+|", "", $nik[$g+1]);
 $nik[$g+2] = preg_replace("|[ ]+|", "", $nik[$g+2]);
 $nik[$g+2] = preg_replace("|[\n\r]+|", "", $nik[$g+2]);
     
   // if($nik[$g]<>$nik[$g+1]  & $nik[$g]<>$nik[$g+2] & $nik[$g]<>$nik[$g+3] & $nik[$g]<>$nik[$g+4] & $nik[$g]<>$nik[$g+5] & $nik[$g]<>$nik[$g+6] & $nik[$g]<>$nik[$g+7] & $nik[$g]<>$nik[$g+8] & $nik[$g]<>$nik[$g+9] & $nik[$g]<>$nik[$g+10]) {
      if($nik[$g]<>$nik[$g+1]  & $nik[$g]<>$nik[$g+2] & $nik[$g]<>$nik[$g+3] & $nik[$g]<>$nik[$g+4] & $nik[$g]<>$nik[$g+5]) {
     // if($nik[$g]<>$nik[$g+6]  & $nik[$g]<>$nik[$g+7] & $nik[$g]<>$nik[$g+8] & $nik[$g]<>$nik[$g+9] & $nik[$g]<>$nik[$g+10]) {
     // if($nik[$g]<>$nik[$g+11]  & $nik[$g]<>$nik[$g+12] & $nik[$g]<>$nik[$g+13] & $nik[$g]<>$nik[$g+14] & $nik[$g]<>$nik[$g+15]) {
     
     
      // echo '&nbsp;&nbsp;"'.$nik[$g].'"<br>'; 
         
      //$ixu=$ixu+1;
         $dix=$dix+1; if($ixu<'2') { $nuxe[$ixu]=$nik[$g]; }
     
     if($nuxe[1]==$nuxe[2] | $nuxe[2]=='') {  $nuxe[2]==$nuxe[$ixu]; } //echo '$nuxe[2]=$nuxe[$ixu - '.$nuxe[2].'='.$nuxe[$ixu];
        $ixu=$ixu+1;
                               //                                                                         }
      //echo '<br>'.$nuxe[$ixu].'-$ixu= '.$ixu;//  $sin[$dix]=$nik[$g]; 
//if($nik[1]==$nik[$g]) { $esu=$esu+1; }
      
//  if($name==$nik[0] | $name==$nik[1]) {  }
  //if($nik[1]==$nik[$g]) { $esu=$esu+1; }  
       } }
 
}

         
         
if($dix>'2') { $dix='2'; }
         
             
//if($si>' ') {
$openchatdb=fopen($igrok,"a");

if(fwrite($openchatdb,$name."\n")) { ;  }

fclose($openchatdb);
   
  //           }                                 //       } 
        


for($g=0;$g<$ixu+1;$g++) {

 $nuxe[$g] = preg_replace("|[ ]+|", "", $nuxe[$g]);
 $nuxe[$g] = preg_replace("|[\n\r]+|", "", $nuxe[$g]);
 
 if($nuxe[$g]==$doska & $name==$doska) { $nuxe[0]=$doska; //$nuxe[$g]=''; //echo '<br>-ok= '.$nuxe[0];
 }


}

if($b4>'12') {
    if($nuxe[1]>' ') { 
if($nuxe[1]<>$nik[11] & $nuxe[1]<>$nik[12] & $nuxe[1]<>$nik[13] & $nuxe[1]<>$nik[14] & $nuxe[1]<>$nik[15]) { echo '<br><img src=picture/igrok_status/offline.jpg width=12/>&nbsp;<a target=_blank href=variant'.$tip.'/archive_doski_tip4.php?namer='.$nuxe[1].'&tip='.$tip.'>'.$nuxe[1].'</a><br>'; $nuxe[1]=''; }
}
     if($nuxe[0]>' ') { 
if($nuxe[0]<>$nik[11] & $nuxe[0]<>$nik[12] & $nuxe[0]<>$nik[13] & $nuxe[0]<>$nik[14] & $nuxe[0]<>$nik[15]) { echo '<br><img src=picture/igrok_status/offline.jpg width=12/>&nbsp;<a target=_blank href=variant'.$tip.'/archive_doski_tip4.php?namer='.$nuxe[0].'&tip='.$tip.'>'.$nuxe[0].'</a><br>'; $nuxe[0]=''; }
}
   
}

$ir='0';
for($g=0;$g<$ixu+1;$g++) {
   if($nuxe[$g]>' ' & $nuxe[$g]<>$nuxe[$g+1] & $nuxe[$g]<>$nuxe[$g+2]  & $nuxe[$g]<>$nuxe[$g+3]) {
$ir=$ir+1;
echo '<img src=picture/igrok_status/online.jpg width=12/>&nbsp;<a target=_blank href=variant'.$tip.'/archive_doski_tip4.php?namer='.$nuxe[$g].'&tip='.$tip.'>'.$nuxe[$g].'</a><br>';
   }}

       
        if($b4>'16' && $name==$doska) {

$openchatdb=fopen($igrok,"w");
        
for($g=0;$g<$ir+1;$g++) {

   if($nuxe[$g]>' ') {
 if(fwrite($openchatdb,$nuxe[$g]."\n")) { ;  }
} //}
}       
        
   
fclose($openchatdb);

//echo '<br>$ixu='.$ixu;
        
        } else if($b4>'25' && $name<>$doska) {

//$nuxe[1]=$doska.' - offline';

$openchatdb=fopen($igrok,"w");
        
for($g=0;$g<1;$g++) {

   if($nuxe[$g]>' ') {

 if(fwrite($openchatdb,$nuxe[$g]."\n")) { ;  }
} //}
}       
        
   
fclose($openchatdb);

//echo '<br>$ixu='.$ixu;
        
        } 
        
        
        
        
                                                     
?>

<br>