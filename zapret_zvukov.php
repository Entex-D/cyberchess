
<?

if($name) {

//ниже запрет повторяющихся звуков 

$file_guest='./archive_doski/'.$name.'/anketa/zapret_zvukov.txt';
 



if($file = fopen($file_guest, "r")) { echo ''; $b49=0;

while(!feof($file)) { 
if($defe[]= fgets ($file)){$b49++;} }
fclose ($file); 

}

$defe[0] = preg_replace("|[\r\n]+|", "", $defe[0]);

if($zapret) {} else $zapret=$defe[0]; 

if($zapret!=2) {
if($defe[1]==1) { $zapret=1; $zapret2=1; } else
if($defe[0]==1) { $zapret2=1; $defe[0]=0; }
                      }

if($defe[0]==2 || $zapret==2) { $zapret=0;  $zapret2=0;  }

if ( !file_exists($file_guest) )   { 

$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) { ;  }

fclose($openchatdb);
   
 } 

 if ( file_exists($file_guest) )   {  

$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,$zapret."\n".$zapret2."\n")) { ;  }

fclose($openchatdb);
   

 }


} //end if $name

?>