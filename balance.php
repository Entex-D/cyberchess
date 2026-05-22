<?
 if(isset($_COOKIE['name'])) {  } 


// проверка - если в первый раз зашли и страница не открылась
 $btc_x1='./btc/'.$name.'.txt';
 $btc_x2='../btc/'.$name.'.txt';  
if ( !file_exists($btc_x1) &&  !file_exists($btc_x2) )   {  

                                                                         $par='G';       setcookie ("par", $par, time() + 1);
                                             echo "<meta http-equiv='refresh' content='1;url=index.php>";
                                             echo "<meta http-equiv='refresh' content='1;url=index.php>";

                                                                             } 
// проверка - если в первый раз зашли и страница не открылась


//Считывание btc
if($name) { $file_guest='./btc/'.$name.'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($vr[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc

if(!$vr[0]) { //$vr[0]='0'; 

//Считывание btc на страницу оповещений
if($name) { $file_guest='../btc/'.$name.'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($vrrx[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}}
//Считывание btc на страницу оповещений




?>




<? if($vr[0]>'0') { ?>
<font size=1><strong><? echo 'Баланс <font size=4><em>'.$vr[0].'</em></font> <font color=#90EE90>+'.$vr[1].'</font> <font color=#F08080>-'.$vr[2].'</font> btc'; ?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></font>
<? } ?>
<? if($vrrx[0]>'0') { ?>
<font size=1><strong><? echo 'Баланс <font size=4><em>'.$vrrx[0].'</em></font> <font color=#90EE90>+'.$vrrx[1].'</font> <font color=#F08080>-'.$vrrx[2].'</font> btc'; ?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></font>
<? } ?>