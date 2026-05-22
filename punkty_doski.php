<?


//Считывание btc
if($exxo[1]) { $file_guest='./rating/'.$exxo[1].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($rat[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc

//Считывание btc
if($exxo[2]) { $file_guest='./rating/'.$exxo[2].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($rat2[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc

//Считывание btc
if($exxo[1]) { $file_guest='./wins_losses/'.$exxo[1].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($xe[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc

//Считывание btc
if($exxo[2]) { $file_guest='./wins_losses/'.$exxo[2].'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($xe2[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc

$ix1 = '<div style="background-color: #606060; font-size: 11px;">';
$ix11='<div style="background-color:#545454; font-size: 11px;">';
$ix2='</div>';
$ix3='';

//$ix1='';
//$ix2='';
//$ix3='<br>';

echo $ix1.'<em><strong>'.$ix3.'&nbsp;Дата:&nbsp;'.$exxo[0].$ix2;
echo $ix11.''.$ix3.'Игрок 1:&nbsp;'.$exxo[1].' <strong>'.$rat[0].' </strong>'; 

                                    echo '<font color=#90EE90>+'.$rat[1].' </font><font color=#F08080>-'.$rat[2].'</font>
                                           <font color=#90EE90>+'.$xe[0].' </font><font color=#F08080>-'.$xe[1].'</font>'.$ix2;

echo $ix1.''.$ix3.'Игрок 2:&nbsp;'.$exxo[2].' <strong>'.$rat2[0].' </strong>';

            if($exxo[2]>'0') {  echo '<font color=#90EE90>+'.$rat2[1].' </font><font color=#F08080>-'.$rat2[2].'</font>
                                                <font color=#90EE90>+'.$xe2[0].' </font><font color=#F08080>-'.$xe2[1].'</font>'.$ix2;
                                    } else echo $ix2;

echo $ix11.''.$ix3.'Игрок белыми:&nbsp;'.$exxo[3].$ix2;
echo $ix1.''.$ix3.'Игрок черными:&nbsp;'.$exxo[4].$ix2;
echo $ix11.''.$ix3.'Выиграл игрок:&nbsp;'.$exxo[5].$ix2;
echo $ix1.''.$ix3.'Выиграли белые:&nbsp;'.$exxo[6].$ix2;
echo $ix11.''.$ix3.'Выиграли черные:&nbsp;'.$exxo[7].$ix2;
echo $ix1.''.$ix3.'Сдался игрок:&nbsp;'.$exxo[8].$ix2;
echo $ix11.''.$ix3.'Ход:&nbsp;'.$exxo[11].$ix2;
echo $ix1.''.$ix3.'Всего ходов:&nbsp;'.$exxo[12].$ix2;
 echo $ix11.''.$ix3.'Отменена:&nbsp;'.$exxo[18].$ix2; 
echo $ix1.''.$ix3.'Вариант игры:&nbsp;'.$exxo[19].$ix2;
 echo $ix11.''.$ix3.'Ставка:&nbsp;'.$exxo[20].' btc</strong>'.$ix2; 
 echo $ix1.''.$ix3.'Баллы белых:&nbsp;'.$exxo[21]; echo '&nbsp;&nbsp;<a target=_blank href=../ball/ball.php>Что это?</a>'.$ix2; 
 echo $ix11.''.$ix3.'Баллы черных:&nbsp;'.$exxo[22]; echo '&nbsp;&nbsp;<a target=_blank href=../ball/ball.php>Что это?</a>'.$ix2; 


echo '</strong></em>';



?>