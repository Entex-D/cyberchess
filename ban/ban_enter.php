<?

if($chatmsg>' ' && preg_match('/ban/',$chatmsg))  { 


$logi='../ban/ban_name.txt';

$chatmsg = preg_replace("|[\r\n]+|", "", $chatmsg);
$chatmsg = preg_replace("|[ ]+|", "", $chatmsg);
$chatmsg = preg_replace("|[ban]+|", "", $chatmsg);

$times=date("d.m.Y ");
//$t=$_SERVER["REMOTE_ADDR"];
$t='/-/'; 
$logi_text=$chatmsg;
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,"\n".$times.':'.$t.':'.$logi_text."\n")) { ; }
fclose($openchatdb);

}

?>