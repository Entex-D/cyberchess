<?



$edixia='../sea_battle2/igrok/analiz/'.$nick.'_analiz.txt';  
 
if($file = fopen($edixia, "r")) { echo ''; $d1=0;

while(!feof($file)) { 
if($analiz[]= fgets ($file)){$d1++;} }
fclose ($file); 

 }

$analiz[0] = preg_replace("|[\r\n]+|", "", $analiz[0]);
$analiz[1] = preg_replace("|[\r\n]+|", "", $analiz[1]);

if($analiz[0]<' ') { $analiz[0]='0'; }
if($analiz[1]<' ') { $analiz[1]='0'; }





if($game=='new' || $game=='new2' || $game=='new3') { $analiz[0]=$analiz[0]+'1'; $dd='1'; } 

if($ataka_nomer[$hod_one]>' ') { $analiz[1]=$analiz[1]+'1'; $dd='2'; }



//if($dd=='1') { mail("vila@liozenda.ru", "New Game $nick", "Click <New game> $analiz[0] from user $nick"); } 
//if($dd=='2') { mail("vila@liozenda.ru", "New move $nick", "Moves  $analiz[1] from user $nick"); } 





$des9='../sea_battle2/igrok/analiz/'.$nick.'_analiz.txt'; 

$openchatdb=fopen($des9,"w");

 if(fwrite($openchatdb,$analiz[0]."\n".$analiz[1]."\n")) {   } 

fclose($openchatdb);




?>