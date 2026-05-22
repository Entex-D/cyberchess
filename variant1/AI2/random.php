
<center><table width=100%><tr>
<td class=td_center><center><font size=2><strong>

<? if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; } ?>


<?php
$boardWidth = 24;
$boardHeight = 12;


for($d=53;$d<200;$d++) {

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
//if($b1==1) { if($sh[$q1]=='16') { $b1=0; $index=$q1; $hod_one=$q1; $hod='16'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='11') { $b1=0; $index=$q1; $hod_one=$q1; $hod='11'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='13') { $b1=0; $index=$q1; $hod_one=$q1; $hod='13'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='14') { $b1=0; $index=$q1; $hod_one=$q1; $hod='14'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='17') { $b1=0; $index=$q1; $hod_one=$q1; $hod='17'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='18') { $b1=0; $index=$q1; $hod_one=$q1; $hod='18'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='12') { $b1=0; $index=$q1; $hod_one=$q1; $hod='12'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='15') { $b1=0; $index=$q1; $hod_one=$q1; $hod='15'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='19') { $b1=0; $index=$q1; $hod_one=$q1; $hod='19'; $name=$exxo[3]; }  }
                          }


if($exxo[11]=='Черные' && $exxo[4]=='Comp') {
//if($b1==1) { if($sh[$q1]=='6') { $b1=0; $index=$q1; $hod_one=$q1; $hod='6'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='1') { $b1=0; $index=$q1; $hod_one=$q1; $hod='1'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='3') { $b1=0; $index=$q1; $hod_one=$q1; $hod='3'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='4') { $b1=0; $index=$q1; $hod_one=$q1; $hod='4'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='7') { $b1=0; $index=$q1; $hod_one=$q1; $hod='7'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='8') { $b1=0; $index=$q1; $hod_one=$q1; $hod='8'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='2') { $b1=0; $index=$q1; $hod_one=$q1; $hod='2'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='5') { $b1=0; $index=$q1; $hod_one=$q1; $hod='5'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='9') { $b1=0; $index=$q1; $hod_one=$q1; $hod='9'; $name=$exxo[4];}  }
                          }

$b1=0;
}

if($hod=='3' || $hod=='13') {

$knightMoves = array(
    array(-2, -1), array(-2, 1),
    array(-1, -2), array(-1, 2),
    array(1, -2), array(1, 2),
    array(2, -1), array(2, 1)
);

}

if($hod=='1') {

$knightMoves = array(
    array(0, 2), array(0, 1)
);

}


if($hod=='11') {

$knightMoves = array(
    array(0, -2), array(0, -1)
);

}



if($hod=='7' || $hod=='17') {

$knightMoves = array(
    array(0, 2), array(0, -2),
    array(2, 0), array(-2, -0),
    array(0, 3), array(0, -3),
    array(3, 0), array(-3, -0),
    array(2, -2), array(2, 2),
    array(-2, 2), array(-2, -2),
    array(3, -3), array(3, 3),
    array(-3, 3), array(-3, -3)
);

}


if($hod=='8' || $hod=='18') {

$knightMoves = array(
    array(0, 2), array(0, -2),
    array(2, 0), array(-2, -0),
    array(-2, -1), array(-2, 1),
    array(-1, -2), array(-1, 2),
    array(1, -2), array(1, 2),
    array(2, -1), array(2, 1),
    array(-2, 2), array(2, 2),
    array(2, -2), array(-2, -2)
);

}


if($hod=='9' || $hod=='19') {

$knightMoves = array(
    array(0, 1), array(0, -1),
    array(1, 0), array(-1, -0),
    array(0, 2), array(0, -2),
    array(2, 0), array(-2, -0),
    array(0, 3), array(0, -3),
    array(3, 0), array(-3, -0),
    array(1, -1), array(1, 1),
    array(-1, 1), array(-1, -1),
    array(2, -2), array(2, 2),
    array(-2, 2), array(-2, -2),
    array(-2, -1), array(-2, 1),
    array(-1, -2), array(-1, 2),
    array(1, -2), array(1, 2),
    array(2, -1), array(2, 1),
    array(-1, 3), array(1, 3),
    array(1, -3), array(1, -3)
);

}


if($hod=='4' || $hod=='14') {

$knightMoves = array(
    array(1, -1), array(1, 1),
    array(-1, 1), array(-1, -1),
    array(2, -2), array(2, 2),
    array(-2, 2), array(-2, -2),
    array(3, -3), array(3, 3),
    array(-3, 3), array(-3, -3),
    array(4, -4), array(4, 4),
    array(-4, 4), array(-4, -4),
    array(5, -5), array(5, 5),
    array(-5, 5), array(-5, -5),
    array(6, -6), array(6, 6),
    array(-6, 6), array(-6, -6),
    array(7, -7), array(7, 7),
    array(-7, 7), array(-7, -7)
);

}


if($hod=='2' || $hod=='12') {

$knightMoves = array(
    array(0, 1), array(0, -1),
    array(1, 0), array(-1, -0),
    array(0, 2), array(0, -2),
    array(2, 0), array(-2, -0),
    array(0, 3), array(0, -3),
    array(3, 0), array(-3, -0),
    array(0, 4), array(0, -4),
    array(4, 0), array(-4, -0),
    array(0, 5), array(0, -5),
    array(5, 0), array(-5, -0),
    array(0, 6), array(0, -6),
    array(6, 0), array(-6, -0),
    array(0, 7), array(0, -7),
    array(7, 0), array(-7, -0)
);

}


if($hod=='5' || $hod=='15') {

$knightMoves = array(
    array(0, 1), array(0, -1),
    array(1, 0), array(-1, -0),
    array(0, 2), array(0, -2),
    array(2, 0), array(-2, -0),
    array(0, 3), array(0, -3),
    array(3, 0), array(-3, -0),
    array(0, 4), array(0, -4),
    array(4, 0), array(-4, -0),
    array(0, 5), array(0, -5),
    array(5, 0), array(-5, -0),
    array(0, 6), array(0, -6),
    array(6, 0), array(-6, -0),
    array(0, 7), array(0, -7),
    array(7, 0), array(-7, -0),
    array(1, -1), array(1, 1),
    array(-1, 1), array(-1, -1),
    array(2, -2), array(2, 2),
    array(-2, 2), array(-2, -2),
    array(3, -3), array(3, 3),
    array(-3, 3), array(-3, -3),
    array(4, -4), array(4, 4),
    array(-4, 4), array(-4, -4),
    array(5, -5), array(5, 5),
    array(-5, 5), array(-5, -5),
    array(6, -6), array(6, 6),
    array(-6, 6), array(-6, -6),
    array(7, -7), array(7, 7),
    array(-7, 7), array(-7, -7)
);

}



if($hod=='1' || $hod=='11') { $slovo='пешки'; }
if($hod=='2' || $hod=='12') { $slovo='ладьи'; }
if($hod=='3' || $hod=='13') { $slovo='коня'; }
if($hod=='4' || $hod=='14') { $slovo='слона'; }
if($hod=='5' || $hod=='15') { $slovo='ферзя'; }
if($hod=='6' || $hod=='16') { $slovo='короля'; }
if($hod=='7' || $hod=='17') { $slovo='ястреба'; }
if($hod=='8' || $hod=='18') { $slovo='медведя'; }
if($hod=='9' || $hod=='19') { $slovo='призрака'; }










// Преобразуем индекс в координаты x и y
$x = $index % $boardWidth;
$y = intval($index / $boardWidth);

// Вывод координат текущей клетки
//echo "Текущие координаты $slovo: ($x, $y)<br>";

// Массив для хранения допустимых ходов
$validMoves = array();

foreach ($knightMoves as $move) {
    $dx = $move[0]; // Смещение по оси X
    $dy = $move[1]; // Смещение по оси Y

    $newX = $x + $dx;
    $newY = $y + $dy;

    if ($newX >= 0 && $newX < $boardWidth && $newY >= 0 && $newY < $boardHeight) {
        // Координаты нового хода
        //echo "Допустимый ход: ($newX, $newY)&nbsp;";
        
    $cellIndex = $newY * $boardWidth + $newX;
    //echo "Клетка: $cellIndex<br />";


$b11=0;

$q1=$cellIndex;

if($q1>53 && $q1<66) { $b11=1; }
if($q1>77 && $q1<90) { $b11=1; }
if($q1>101 && $q1<114) { $b11=1; }
if($q1>125 && $q1<138) { $b11=1; }
if($q1>149 && $q1<162) { $b11=1; }
if($q1>173 && $q1<186) { $b11=1; }
if($q1>197 && $q1<210) { $b11=1; }
if($q1>221 && $q1<234) { $b11=1; }



if($b11==1 && $dobro_x!='Da') {  $hod_attack=$q1; $position=$position+1;
//echo "Допустимый ход $slovo: ($newX, $newY)&nbsp;";   echo "Ход с $index на $hod_attack<br />"; 
include('attack.php'); 
} else $b11=0;



        // Сохраняем новый ход
        $validMoves[] = array($newX, $newY);
    }
}

// Если нет допустимых ходов
if (empty($validMoves)) {
    //echo "Нет допустимых ходов.";
}












?>



</center></td></tr></table></center>