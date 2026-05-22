<?php
$boardWidth = 24;
$boardHeight = 12;


for($d=53;$d<200;$d++) {

$q1=rand(53,240);


if($q1>53 && $q1<64) { $b1=1; }
if($q1>77 && $q1<88) { $b1=1; }
if($q1>101 && $q1<112) { $b1=1; }
if($q1>125 && $q1<136) { $b1=1; }
if($q1>149 && $q1<160) { $b1=1; }
if($q1>173 && $q1<184) { $b1=1; }
if($q1>197 && $q1<208) { $b1=1; }
if($q1>221 && $q1<232) { $b1=1; }

if($exxo[11]=='Белые' && $exxo[3]=='Comp') {
if($b1==1) { if($sh[$q1]=='16') { $b1=0; $index=$q1; $hod_one=$q1; $hod='16'; $name=$exxo[3]; }  }
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
if($b1==1) { if($sh[$q1]=='6') { $b1=0; $index=$q1; $hod_one=$q1; $hod='6'; $name=$exxo[4];}  }
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

  include('knight_warning.php');  

if($hod=='3' || $hod=='13') {

$knightMoves = array(
    array(-2, -1), array(-2, 1),
    array(-1, -2), array(-1, 2),
    array(1, -2), array(1, 2),
    array(2, -1), array(2, 1)
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

if($hod=='16' || $hod=='6') {

$knightMoves = array(
    array(0, 1), array(0, -1),
    array(-1, 0), array(1, 0),
    array(1, -1), array(1, 1),
    array(-1, 1), array(-1, -1)
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


$x = $index % $boardWidth;
$y = intval($index / $boardWidth);

//echo "Клетка с индексом $index имеет координаты ($x, $y)<br />";

// Генерируем случайный индекс для выбора одного из возможных ходов
$randomMoveIndex = rand(0, count($knightMoves) - 1);

$selectedMove = $knightMoves[$randomMoveIndex];

$dx = $selectedMove[0];
$dy = $selectedMove[1];

$newX = $x + $dx;
$newY = $y + $dy;

if ($newX >= 0 && $newX < $boardWidth && $newY >= 0 && $newY < $boardHeight) {
   // echo "Выбранный ход: ($newX, $newY)<br />";

    // Переводим координаты обратно в индекс
    $cellIndex = $newY * $boardWidth + $newX;
    //echo "Соответствующая клетка в массиве: $cellIndex<br />";
$b1=0;

$q1=$cellIndex;


if($q1>53 && $q1<64) { $b1=1; }
if($q1>77 && $q1<88) { $b1=1; }
if($q1>101 && $q1<112) { $b1=1; }
if($q1>125 && $q1<136) { $b1=1; }
if($q1>149 && $q1<160) { $b1=1; }
if($q1>173 && $q1<184) { $b1=1; }
if($q1>197 && $q1<208) { $b1=1; }
if($q1>221 && $q1<232) { $b1=1; }



if($b1==1) {  $hod_two=$q1; } else $b1=0;

} else {
    echo "Выбранный ход невозможен.<br />";
}
?>

<? //include('cancel_attack.php'); 
?>