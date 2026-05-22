
<?
if($tip=='1' || $tip=='2') { $width='800'; } else if($tip=='3') { $width='900'; } else if($tip=='4') { $width='900'; } else if($tip=='12') { $width='900'; } else $width='80%';
?>




<? 


$dfp2='./troxa/ip_index.txt'; 

$ddr='1';
if($ddr=='2') { //start $ddr

if ( !file_exists($dfp2) ) { 

//echo 'no='.$dfp2; 

$openchatdb=fopen($dfp2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 

} //end $ddr







if ( file_exists($dfp2) ) { //start if file 







$bgr4='0';
$s19='./troxa/ip_index.txt';

 $ChatDB19=file($s19);

while($a=array_pop($ChatDB19))
{
list($times,$ip,$login,$variant,$igra)=split(",",$a,5);

$bgr4=$bgr4+'1';

$login_clear=$login;
                 }

$login_clear = preg_replace("|[\n\r]+|", "", $login_clear);

//echo '='.$login_clear;




















$times_n=date("d.m.Y ");
//$times_n='#';
$ip_n=$_SERVER["REMOTE_ADDR"];
$login_n=$name;
if($tip) { $variant_t=$tip; } else if(!$tip) { $variant_t='0'; }
if(!$exxo[19]) { $igra_t='0'; } else if($exxo[19]) { $igra_t=$exxo[19]; }





$xbr2='./troxa/ip_index.txt'; 

if ( file_exists($xbr2) )   { 

$openchatdb=fopen($xbr2,"a");

if($times_n>'' && $ip_n>'' && $login_n>'' && $variant_t>'' && $igra_t>'') {
if(fwrite($openchatdb,"\n".$times_n.','.$ip_n.','.$login_n.','.$variant_t.','.$igra_t."\n")) {   }
                                                                                        } 

fclose($openchatdb);
      
}













































$file_guest54='./troxa/ip_index.txt';  
 
if($file = fopen($file_guest54, "r")) { echo ''; $but4=0;

while(!feof($file)) { 
if($stroki_nt[]= fgets ($file)){$but4++;} }
fclose ($file); 

 }

//echo '<strong><center>Написанных строк: <font size=2>'.$but4.'</font></center></strong>';











$xrte2='./troxa/ip_index.txt'; 

if ( file_exists($xrte2) )   { 

$openchatdb=fopen($xrte2,"w");

$ty='0';
for($a=0;$a<$but4+'1';$a++) { 

$stroki_nt[$a] = preg_replace("|[\n\r]+|", "", $stroki_nt[$a]);
$stroki_nt[$a+1] = preg_replace("|[\n\r]+|", "", $stroki_nt[$a+1]);
$stroki_nt[$a+2] = preg_replace("|[\n\r]+|", "", $stroki_nt[$a+2]);
$stroki_nt[$a+3] = preg_replace("|[\n\r]+|", "", $stroki_nt[$a+3]);
$stroki_nt[$a+4] = preg_replace("|[\n\r]+|", "", $stroki_nt[$a+4]);
$stroki_nt[$a+5] = preg_replace("|[\n\r]+|", "", $stroki_nt[$a+5]);

if($stroki_nt[$a]==$stroki_nt[$a+1]) { $stroki_nt[$a+1]=''; $ty=$ty+'1';  }
if($stroki_nt[$a]==$stroki_nt[$a+2]) { $stroki_nt[$a+2]=''; $ty=$ty+'1';  }
//if($stroki_nt[$a]==$stroki_nt[$a+3]) { $stroki_nt[$a+3]=''; $ty=$ty+'1';  }
//if($stroki_nt[$a]==$stroki_nt[$a+4]) { $stroki_nt[$a+4]=''; $ty=$ty+'1';  }
//if($stroki_nt[$a]==$stroki_nt[$a+5]) { $stroki_nt[$a+5]=''; $ty=$ty+'1';  }

//if(!preg_match('/#/',$stroki_nt[$a])) { $stroki_nt[$a]=''; }

if($stroki_nt[$a]>'  ') { if(fwrite($openchatdb,$stroki_nt[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb);
      
}






} //end if flile







if($delot=='all') {

$file_guest12='../troxa/ip_index.txt';  
 
if($file = fopen($file_guest12, "r")) { echo ''; $but5=0;

while(!feof($file)) { 
if($stroki_v[]= fgets ($file)){$but5++;} }
fclose ($file); 

 }

//echo '<strong><center>Написанных строк: <font size=2>'.$but5.'</font></center></strong>';


$xrte4='../troxa/ip_index.txt'; 

if ( file_exists($xrte4) )   { 

$openchatdb=fopen($xrte4,"w");

$ty='0';
for($a=0;$a<$but5+'1';$a++) { 

$stroki_v[$a] = preg_replace("|[\n\r]+|", "", $stroki_v[$a]);
if($delot=='all') { if(preg_match('/'.$ip_adress.'./',$stroki_v[$a])) { $stroki_v[$a]=''; } }

if($stroki_v[$a]>'  ') { if(fwrite($openchatdb,$stroki_v[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb);
      
}

}

unset($stroki_nt);
unset($stroki_v);








if($delot=='all') { echo "<meta http-equiv='refresh' content='1;url=troxa.php'>"; }

















if($but4>'20000') {

$xrid2='./troxa/ip_index.txt'; 

if ( file_exists($xrid2) )   { 

$openchatdb=fopen($xrid2,"w");

 if(fwrite($openchatdb,'')) { ;  } 

fclose($openchatdb);
      
}

} //end if $b4













//} //end if flile






?>


</table></center>