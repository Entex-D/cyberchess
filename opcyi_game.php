<?

if(isset($_COOKIE['igrok'])) { }


$rx=rand(0,3);

$dixa0=date("d.m.Y|G:i:s "); // дата создания доски
if($igrok=='gamer' || $igrok=='Comp' || $sopernik_zapas) { $dixa1=$name; } 
if($igrok=='Computer') { $dixa1='Comp'; } 

if(!$sopernik_zapas && $igrok!='gamer') {  }

if($igrok!='Comp' && $igrok!='Computer') {
if($sopernik_zapas) {     $dixa2=$sopernik_zapas;} else $dixa2='0'; // игрок 2
                                           } 

if($igrok=='Comp' || $igrok=='Computer') { $dixa2='Comp'; } 


if($igrok!='Comp' && $igrok!='Computer') {
if($rx=='1' | $rx=='0') { $dixa3=$name; } else $dixa3='0'; // игрок белыми
if($rx=='2' | $rx=='3') { $dixa4=$name; } else $dixa4='0'; // игрок черными
                                          } 

if($igrok=='Comp') { $uu=rand(0,3); if($uu==0 || $uu==1) { $dixa3=$name; $dixa4='Comp'; } else if($uu==2 || $uu==3) { $dixa4=$name; $dixa3='Comp'; } }
if($igrok=='Computer') { $dixa3='Comp'; $dixa4='Comp';}

if($sopernik_zapas) {    
 if($dixa3=='0') { $dixa3=$sopernik_zapas; } else  if($dixa4=='0') { $dixa4=$sopernik_zapas; } }

$dixa5='0'; // выиграл имя игрок
$dixa6='0'; // выиграли белые
$dixa7='0'; // выиграли черные
$dixa8='0'; // сдался игрок имя
$dixa9='0'; // ничья
$dixa10='0'; // пат
$dixa11='Белые';  // ход - черные\белые
$dixa12='0';  // количество ходов

if($timer=='min0') { $dixa13='Без времени';  $dixa14='Без времени';} // таймер белые в минутах
if($timer=='min10') { $dixa13='10:00';  $dixa14='10:00';} // таймер белые в минутах
if($timer=='min15') { $dixa13='15:00';  $dixa14='15:00';} // таймер белые в минутах
if($timer=='min30') { $dixa13='30:00';  $dixa14='30:00'; } // таймер белые в минутах
if($timer=='min60') { $dixa13='1:00:00';  $dixa14='1:00:00';} // таймер белые в минутах
if($timer=='min120') { $dixa13='2:00:00';  $dixa14='2:00:00'; } // таймер белые в минутах
if($timer=='min360') { $dixa13='6:00:00';  $dixa14='6:00:00'; } // таймер белые в минутах
if($timer=='min86400') { $dixa13='23:59:59';  $dixa14='23:59:59'; } // таймер белые в минутах

if($timer=='min0') { $dixa15='Без времени';  $dixa16='Без времени';} // таймер белые в секундах
if($timer=='min10') { $dixa15='600';  $dixa16='600';} // таймер белые в секундах
if($timer=='min15') { $dixa15='900';  $dixa16='900';} // таймер белые в секундах
if($timer=='min30') { $dixa15='1800';  $dixa16='1800'; } // таймер белые в секундах
if($timer=='min60') { $dixa15='3600';  $dixa16='3600';} // таймер белые в секундах
if($timer=='min120') { $dixa15='7200';  $dixa16='7200'; } // таймер белые в секундах
if($timer=='min360') { $dixa15='21600';  $dixa16='21600'; } // таймер белые в секундах
if($timer=='min86400') { $dixa15='86399';  $dixa16='86399'; } // таймер белые в секундах
$dixa17='0';  // серверное время
$dixa18='0';  // отменена ли игра

if($game=='1') { $dixa19='Extol ( обычная )'; }
if($game=='2') { $dixa19='Trox ( упрощенная 1 )'; }
if($game=='3') { $dixa19='Lixa ( упрощенная 2 )'; }
if($game=='4') { $dixa19='Detra ( упрощенная 3 )'; }
if($game=='4.1') { $dixa19='Классический ( Доска 8х8 )'; }

if($btc=='btc0') { $dixa20='0';  } // ставка на партию в биткоинах
if($btc=='btc0001') { $dixa20='0.001';  } // ставка на партию в биткоинах
if($btc=='btc0002') { $dixa20='0.002';  } // ставка на партию в биткоинах
if($btc=='btc0005') { $dixa20='0.005';  } // ставка на партию в биткоинах
if($btc=='btc001') { $dixa20='0.01';  } // ставка на партию в биткоинах
if($btc=='btc002') { $dixa20='0.02';  } // ставка на партию в биткоинах
if($btc=='btc004') { $dixa20='0.04';  } // ставка на партию в биткоинах
if($btc=='btc006') { $dixa20='0.06';  } // ставка на партию в биткоинах


$dixa21='0';  // баллы белых
$dixa22='0';  // баллы черных




?>