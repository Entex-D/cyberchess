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

if($q1>53 && $q1<62) { $b1=1; }
if($q1>77 && $q1<86) { $b1=1; }
if($q1>101 && $q1<110) { $b1=1; }
if($q1>125 && $q1<134) { $b1=1; }
if($q1>149 && $q1<158) { $b1=1; }
if($q1>173 && $q1<182) { $b1=1; }
if($q1>197 && $q1<206) { $b1=1; }
if($q1>221 && $q1<230) { $b1=1; }

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

if($q1>53 && $q1<62) { $b1=1; }
if($q1>77 && $q1<86) { $b1=1; }
if($q1>101 && $q1<110) { $b1=1; }
if($q1>125 && $q1<134) { $b1=1; }
if($q1>149 && $q1<158) { $b1=1; }
if($q1>173 && $q1<182) { $b1=1; }
if($q1>197 && $q1<206) { $b1=1; }
if($q1>221 && $q1<230) { $b1=1; }



if($b1==1) {  $hod_two=$q1; $hod_korol=$q1; } else $b1=0;

if($sh[$hod_korol]!='40' && $sh[$hod_korol]!='81' && $sh[$hod_korol]!='82') { 

for($ttr=0;$ttr<8;$ttr++) {

if($dobro_x!='da') { $ttrer=rand(0,7); } else $ttrer='8';

if($ttrer='0') { if($sh[$index+1]=='40' || $sh[$index+1]=='81' || $sh[$index+1]=='82') { $hod_two=$index+1; $ked='1'; } }
if($ttrer='1') { if($sh[$index-1]=='40' || $sh[$index-1]=='81' || $sh[$index-1]=='82') { $hod_two=$index-1; $ked='1'; } }
if($ttrer='2') { if($sh[$index+24]=='40' || $sh[$index+24]=='81' || $sh[$index+24]=='82') { $hod_two=$index+24; $ked='1'; } }
if($ttrer='3') { if($sh[$index-24]=='40' || $sh[$index-24]=='81' || $sh[$index-24]=='82') { $hod_two=$index-24; $ked='1'; } }
if($ttrer='4') { if($sh[$index+23]=='40' || $sh[$index+23]=='81' || $sh[$index+23]=='82') { $hod_two=$index+23; $ked='1'; } }
if($ttrer='5') { if($sh[$index-23]=='40' || $sh[$index-23]=='81' || $sh[$index-23]=='82') { $hod_two=$index-23; $ked='1'; } }
if($ttrer='6') { if($sh[$index+25]=='40' || $sh[$index+25]=='81' || $sh[$index+25]=='82') { $hod_two=$index+25; $ked='1'; } }
if($ttrer='7') { if($sh[$index-25]=='40' || $sh[$index-25]=='81' || $sh[$index-25]=='82') { $hod_two=$index-25; $ked='1'; } }

if($ked=='1') {

$q1=$hod_two;

if($q1>53 && $q1<62) { $b2=1; }
if($q1>77 && $q1<86) { $b2=1; }
if($q1>101 && $q1<110) { $b2=1; }
if($q1>125 && $q1<134) { $b2=1; }
if($q1>149 && $q1<158) { $b2=1; }
if($q1>173 && $q1<182) { $b2=1; }
if($q1>197 && $q1<206) { $b2=1; }
if($q1>221 && $q1<230) { $b2=1; }


if($b2==1) { $dobro_x='da'; } else 
if($b2!=1) { $b2=0; $dobro_x='net'; $ked='0'; $hod_two='1000'; }

                    }

                                   } // end for
                                                                                                                    } 



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