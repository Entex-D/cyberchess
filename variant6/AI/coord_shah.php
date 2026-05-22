<? include('../shapka_load_style.php'); ?>

<center><table width=100%><tr>
<td class=td_center><center><font size=2><strong>

<? if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; } ?>


<?php
$boardWidth = 24;
$boardHeight = 12;

$b1=0;

for($d=53;$d<240;$d++) {

$q1=rand(53,240);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($exxo[11]=='Белые' && $exxo[3]=='Comp') {
if($b1==1) { if($sh[$q1]=='16') { $b1=0; $index=$q1; $hod_one=$q1; $hod='16'; $name=$exxo[3]; }  }
                          }


if($exxo[11]=='Черные' && $exxo[4]=='Comp') {
if($b1==1) { if($sh[$q1]=='6') { $b1=0; $index=$q1; $hod_one=$q1; $hod='6'; $name=$exxo[4];}  }
                          }

$b1=0;
}

//$index = 124;

if($hod=='16' || $hod=='6') {

$knightMoves = array(
    array(0, 1), array(0, -1),
    array(-1, 0), array(1, 0),
    array(1, -1), array(1, 1),
    array(-1, 1), array(-1, -1)
);

}



$x = $index % $boardWidth;
$y = intval($index / $boardWidth);

echo "Клетка с индексом $index имеет координаты ($x, $y)<br />";

// Генерируем случайный индекс для выбора одного из возможных ходов
$randomMoveIndex = rand(0, count($knightMoves) - 1);

$selectedMove = $knightMoves[$randomMoveIndex];

$dx = $selectedMove[0];
$dy = $selectedMove[1];

$newX = $x + $dx;
$newY = $y + $dy;

if ($newX >= 0 && $newX < $boardWidth && $newY >= 0 && $newY < $boardHeight) {
    echo "Выбранный ход: ($newX, $newY)<br />";

    // Переводим координаты обратно в индекс
    $cellIndex = $newY * $boardWidth + $newX;
    echo "Соответствующая клетка в массиве: $cellIndex<br />";
$b1=0;

$q1=$cellIndex;

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }



if($b1==1) {  $hod_two=$q1; } else $b1=0;

} else {
    echo "Выбранный ход невозможен.<br />";
}
?>







<?php
for($rer=53;$rer<240;$rer++) {

    $tt=rand(53,240);

    $index=$tt;





    if($sh[$index] == 6 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]>10 && $sh[$index+1]<20) { $index_to=$index+1; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index-1]>10 && $sh[$index-1]<20) { $index_to=$index-1; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index+24]>10 && $sh[$index+24]<20) { $index_to=$index+24; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index-24]>10 && $sh[$index-24]<20) { $index_to=$index-24; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index+23]>10 && $sh[$index+23]<20) { $index_to=$index+23; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index+25]>10 && $sh[$index+25]<20) { $index_to=$index+25; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index-23]>10 && $sh[$index-23]<20) { $index_to=$index-23; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }
    if($sh[$index-25]>10 && $sh[$index-25]<20) { $index_to=$index-25; echo 'Выбрана цель для атаки черного короля: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 16 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

   if($sh[$index+1]>0 && $sh[$index+1]<10) { $index_to=$index+1; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index-1]>0 && $sh[$index-1]<10) { $index_to=$index-1; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index+24]>0 && $sh[$index+24]<10) { $index_to=$index+24; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index-24]>0 && $sh[$index-24]<10) { $index_to=$index-24; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index+23]>0 && $sh[$index+23]<10) { $index_to=$index+23; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index+25]>0 && $sh[$index+25]<10) { $index_to=$index+25; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index-23]>0 && $sh[$index-23]<10) { $index_to=$index-23; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }
    if($sh[$index-25]>0 && $sh[$index-25]<10) { $index_to=$index-25; echo 'Выбрана цель для атаки белого короля: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }


//unset($index_to);
//unset($index);

} //end for
?>











</center></td></tr></table><br></center>