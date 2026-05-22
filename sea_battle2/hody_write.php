<?

$des4='../sea_battle2/igrok/hod/'.$nick.'_hod.txt'; 

if ( !file_exists($des4) ) { 

//echo 'no='.$des4; 

$openchatdb=fopen($des4,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);

}






$write_hod='../sea_battle2/igrok/hod/'.$nick.'_hod.txt';

$openchatdb=fopen($write_hod,"a");

if($ataka_nomer[$hod_one]>' ') {
$hod=$text.': <em>'.$ataka_nomer[$hod_one].'</em>';

 if(fwrite($openchatdb,$hod.$dexo."\n")) { }
                                                                                                 }                                                                        
fclose($openchatdb);









if($ataka_nomer[$hod_one]>' ' && !preg_match('/Компьютер/',$hod)) {

$logi='../logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$nick.'</em></strong> играет в Морской бой #2: <strong>'.$hod.$dexo.'</strong>';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

                                                }










include('../sea_battle2/analiz.php');




?>