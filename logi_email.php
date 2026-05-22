

<?
$width=$shirina;
?>

<?
$base_hod11='logi.txt';

// считываем из файла ходы записанные

if($file = fopen($base_hod11, "r")) { echo ''; $bx5=0;} 

while(!feof($file)) { 
if($zapisi[]= fgets ($file)){$bx5++;} }

fclose ($file); 

?><center>








<?
$des2='logi_email.txt';

if ( file_exists($des2) )   { 
// считываем из файла ходы записанные

if($file = fopen($des2, "r")) { echo ''; $bx6=0;} 

while(!feof($file)) { 
if($email[]= fgets ($file)){$bx6++;} }

fclose ($file); 

$ds=$zapisi[$bx5-1];
$b_x=$email[0];

 $ip=$_SERVER['REMOTE_ADDR'];

if($b_x!=$bx5 && !preg_match('/'.$ip_adress.'/',$ip)) { mail($pochta, "Логи CyberChess", "$ds","Content-Type:text/html");

$message='<table width='.$width.' bgcolor=#101010><tr><td width=5%></td><td>Новость: <strong>'.$ds.'</strong></td><td width=5%></td></tr></table>'; 

echo $message;

//setcookie ("message", $message, time() + 120, '/' );

 }                      //end if $email[0]

//echo '-'.$b5.'='.$b_x.'='.$d;

} //end file exits

if($b_x!=$bx5) {

$openchatdb=fopen($des2,"w");

 if(fwrite($openchatdb,$bx5)) { ;  }

fclose($openchatdb);


}

?>