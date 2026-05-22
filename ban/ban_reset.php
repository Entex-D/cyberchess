<?

if($chatmsg>' ')  { 

$ban_file='../ban/ban_name.txt';

if($file = fopen($ban_file, "r")) { $b4=0; echo '-------'; } 
while(!feof($file)) { 
if($bixa[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

for($ret=0;$ret<$b4+1;$ret++) { 

$bixa[$ret] = preg_replace("|[\r\n]+|", "", $bixa[$ret]);
$chatmsg = preg_replace("|[\r\n]+|", "", $chatmsg);
$chatmsg = preg_replace("|[ ]+|", "", $chatmsg);
//$chatmsg = preg_replace("|[dax]+|", "", $chatmsg);

 if(preg_match('/'.$chatmsg.'/',$bixa[$ret])) { $bixa[$ret]=''; } 

//if($chatmsg==$bixa[$ret]) { $bixa[$ret]=''; echo '+++'; }

//echo '<br>'.$ret.'$bixa['.$ret.']='.$bixa[$ret].'___'.$ret.'.$chatmsg='.$chatmsg;
 }












$logi='../ban/ban_name.txt';

$openchatdb=fopen($logi,"w");

for($ret=0;$ret<$b4+1;$ret++) { 

if($bixa[$ret]>' ') {
 if(fwrite($openchatdb,$bixa[$ret]."\n")) {  }
                                       }
}

fclose($openchatdb);






}
?>