<?

$dstatix[1] = preg_replace("|[\r\n]+|", "", $dstatix[1]);
$dstatix[2] = preg_replace("|[\r\n]+|", "", $dstatix[2]);

unset($rat);
unset($rat2);
unset($xe);
unset($xe2);

//Считывание btc
if($dstatix[1]) { $file_guest='../rating/'.$dstatix[1].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $bs4=0;

while(!feof($file)) { 
if($rat[]= fgets ($file)){$bs4++;} }
fclose ($file); 

 }}
//Считывание btc

//Считывание btc
if($dstatix[2]) { $file_guest='../rating/'.$dstatix[2].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $bs4=0;

while(!feof($file)) { 
if($rat2[]= fgets ($file)){$bs4++;} }
fclose ($file); 

 }}
//Считывание btc

//Считывание btc
if($dstatix[1]) { $file_guest='../wins_losses/'.$dstatix[1].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $bs4=0;

while(!feof($file)) { 
if($xe[]= fgets ($file)){$bs4++;} }
fclose ($file); 

 }}
//Считывание btc

//Считывание btc
if($dstatix[2]) { $file_guest='../wins_losses/'.$dstatix[2].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $bs4=0;

while(!feof($file)) { 
if($xe2[]= fgets ($file)){$bs4++;} }
fclose ($file); 

 }}
//Считывание btc






$ix1='<div style="background-color:#606060">';
$ix11='<div style="background-color:#565656">';
$ix2='</div>';
$ix3='';

//$ix1='';
//$ix2='';
//$ix3='<br>';

echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>Дата: '.$dstatix[0].$ix2;

echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Игрок 1:&nbsp;'.$dstatix[1].' <strong>'.$rat[0].' </strong>'; 

                                    echo '<font color=#90EE90>+'.$rat[1].' </font><font color=#F08080>-'.$rat[2].'</font>
                                           <font color=#90EE90>+'.$xe[0].' </font><font color=#F08080>-'.$xe[1].'</font>'.$ix2;

echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Игрок 2:&nbsp;'.$dstatix[2].' <strong>'.$rat2[0].' </strong>';

            if($dstatix[2]>'0') {  echo '<font color=#90EE90>+'.$rat2[1].' </font><font color=#F08080>-'.$rat2[2].'</font>
                                                <font color=#90EE90>+'.$xe2[0].' </font><font color=#F08080>-'.$xe2[1].'</font>'.$ix2;
                                    } else echo $ix2;

echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Игрок белыми: '.$dstatix[3].$ix2;
echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Игрок черными: '.$dstatix[4].$ix2;
echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Выиграл игрок: '.$dstatix[5].$ix2;
echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Выиграли белые: '.$dstatix[6].$ix2;
echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Выиграли черные: '.$dstatix[7].$ix2;
echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Сдался игрок: '.$dstatix[8].$ix2;
echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Ход: '.$dstatix[11].$ix2;
echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Всего ходов: '.$dstatix[12].$ix2;
//echo $ix11.''.$ix3.'Таймер белых:&nbsp;'.$dstatix[13].$ix2; 
// echo $ix1.''.$ix3.'Таймер черных:&nbsp;'.$dstatix[14].$ix2; 
echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Отменена: '.$dstatix[18].$ix2;
echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Вариант игры: '.$dstatix[19].$ix2;
 echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Ставка: '.$dstatix[20].' btc'.$ix2;  
 echo $ix1.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Баллы белых:&nbsp;'.$dstatix[21];  echo '&nbsp;&nbsp;<a target=_blank href=../ball/ball.php>Что это?</a>'.$ix2; 
 echo $ix11.'&nbsp;&nbsp;&nbsp;&nbsp;'.$ix3.'Баллы черных:&nbsp;'.$dstatix[22]; echo '&nbsp;&nbsp;<a target=_blank href=../ball/ball.php>Что это?</a>'.$ix2;  

echo '</strong></em>';


echo '</em></strong>';
//echo '<br><br>';

?>