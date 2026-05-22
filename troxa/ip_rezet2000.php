<?





if($del=='Ok') {





$dfr2='../troxa/ip_index.txt'; 

if ( file_exists($dfr2) ) { 

$openchatdb=fopen($dfr2,"w");




//if($b5<'100') { $ssr=$b5+'1'; } else $ssr='100'; // подсчет,чтобы показывались последние 100 логов,если логов > 100

$ssr='1000';

$t='0';
for($r=$b5-$ssr;$r<$b5;$r++) {
$zapisi[$r] = preg_replace("|[\n\r]+|", "", $zapisi[$r]);
$d=$r+'1';

if($t=='0') { $color_n='#424242'; } else if($t=='1') { $color_n='#363636'; } else $color_n='#565656';

//echo '<table width=80%><tr><td></td><td bgcolor='.$color_n.'>'.$d.'.&nbsp;&nbsp;&nbsp;&nbsp;'.$zapisi[$r].'<br></td><td></td></tr></table>';

 if(fwrite($openchatdb,$zapisi[$r]."\n")) {   } 


$t=$t+'1';
if($t>'1') { $t='0'; }
}



?>

<?

echo '=';

fclose($openchatdb);
  
} 






echo "<meta http-equiv='refresh' content='1;url=troxa.php'>";


}







?>