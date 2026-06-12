
<center><table width=100%><tr>
<td class=td_center><center><font size=2><strong>

<? if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; } ?>


<?php
$boardWidth = 24;
$boardHeight = 12;

function start() {

global $exxo;
global $index;
global $hod_one;
global $hod;
global $name;
global $sh;
global $shah;
global $ugroza;
global $korol;

for($d=53;$d<200;$d++) {

if(!$ugroza) { $q1=rand(53,240); }

if($ugroza) { 

if($sh[$ugroza]!='40') { $q1=$ugroza;  }

if($sh[$ugroza]=='40' && $exxo[12]>'13') { 
for($df=53;$df<240;$df++) { 

if($korol=='1') { if($sh[$df]=='16') { $q1=$df; $seq='<br>Ходим белым королем с клетки '.$df; } }
if($korol=='2') { if($sh[$df]=='6') { $q1=$df; $seq='<br>Ходим черным королем с клетки '.$df; } }

                                        }

if(!$qew) { echo $seq; $qew='1'; }
                                  } 



                }


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

 if(!$shah) { include('knight_warning.php'); }  

} //end function

if(!$index) { start(); }


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




<? if(!$shah || $shah) { ?>

<?php
for($rer=53;$rer<200;$rer++) {

    $tt=rand(53,240);

    $index=$tt;

    if($sh[$index] == 1 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]>10 && $sh[$index+23]<20) { $index_to=$index+23; echo 'Выбрана цель для атаки черной пешкой: '.$index_to.'<br>'; }
    if($sh[$index+25]>10 && $sh[$index+25]<20) { $index_to=$index+25; echo 'Выбрана цель для атаки черной пешкой: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 11 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки
    if($sh[$index-23]>0 && $sh[$index-23]<10) { $index_to=$index-23; echo 'Выбрана цель для атаки белой пешкой: '.$index_to.'<br>'; }
    if($sh[$index-25]>0 && $sh[$index-25]<10) { $index_to=$index-25; echo 'Выбрана цель для атаки белой пешкой: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }




    if($sh[$index] == 3 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+22]>10 && $sh[$index+22]<20) { $index_to=$index+22; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index+26]>10 && $sh[$index+26]<20) { $index_to=$index+26; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index-22]>10 && $sh[$index-22]<20) { $index_to=$index-22; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index-26]>10 && $sh[$index-26]<20) { $index_to=$index-26; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index+47]>10 && $sh[$index+47]<20) { $index_to=$index+47; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index+49]>10 && $sh[$index+49]<20) { $index_to=$index+49; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index-47]>10 && $sh[$index-47]<20) { $index_to=$index-47; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }
    if($sh[$index-49]>10 && $sh[$index-49]<20) { $index_to=$index-49; echo 'Выбрана цель для атаки черного коня: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 13 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+22]>0 && $sh[$index+22]<10) { $index_to=$index+22; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index+26]>0 && $sh[$index+26]<10) { $index_to=$index+26; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index-22]>0 && $sh[$index-22]<10) { $index_to=$index-22; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index-26]>0 && $sh[$index-26]<10) { $index_to=$index-26; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index+47]>0 && $sh[$index+47]<10) { $index_to=$index+47; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index+49]>0 && $sh[$index+49]<10) { $index_to=$index+49; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index-47]>0 && $sh[$index-47]<10) { $index_to=$index-47; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }
    if($sh[$index-49]>0 && $sh[$index-49]<10) { $index_to=$index-49; echo 'Выбрана цель для атаки белого коня: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }




    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]>10 && $sh[$index+23]<20) { $index_to=$index+23; echo 'Выбрана цель для атаки черного слона: '.$index_to.'<br>'; }
    if($sh[$index-23]>10 && $sh[$index-23]<20) { $index_to=$index-23; echo 'Выбрана цель для атаки черного слона: '.$index_to.'<br>'; }
    if($sh[$index+25]>10 && $sh[$index+25]<20) { $index_to=$index+25; echo 'Выбрана цель для атаки черного слона: '.$index_to.'<br>'; }
    if($sh[$index-25]>10 && $sh[$index-25]<20) { $index_to=$index-25; echo 'Выбрана цель для атаки черного слона: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+23]>0 && $sh[$index+23]<10) { $index_to=$index+23; echo 'Выбрана цель для атаки белого слона: '.$index_to.'<br>'; }
    if($sh[$index-23]>0 && $sh[$index-23]<10) { $index_to=$index-23; echo 'Выбрана цель для атаки белого слона: '.$index_to.'<br>'; }
    if($sh[$index+25]>0 && $sh[$index+25]<10) { $index_to=$index+25; echo 'Выбрана цель для атаки белого слона: '.$index_to.'<br>'; }
    if($sh[$index-25]>0 && $sh[$index-25]<10) { $index_to=$index-25; echo 'Выбрана цель для атаки белого слона: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }







    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]>10 && $sh[$index+1]<20) { $index_to=$index+1; echo 'Выбрана цель для атаки черной ладьи: '.$index_to.'<br>'; }
    if($sh[$index-24]>10 && $sh[$index-24]<20) { $index_to=$index-24; echo 'Выбрана цель для атаки черной ладьи: '.$index_to.'<br>'; }
    if($sh[$index+24]>10 && $sh[$index+24]<20) { $index_to=$index+24; echo 'Выбрана цель для атаки черной ладьи: '.$index_to.'<br>'; }
    if($sh[$index-1]>10 && $sh[$index-1]<20) { $index_to=$index-1; echo 'Выбрана цель для атаки черной ладьи: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+1]>0 && $sh[$index+1]<10) { $index_to=$index+1; echo 'Выбрана цель для атаки белой ладьи: '.$index_to.'<br>'; }
    if($sh[$index-24]>0 && $sh[$index-24]<10) { $index_to=$index-24; echo 'Выбрана цель для атаки белой ладьи: '.$index_to.'<br>'; }
    if($sh[$index+24]>0 && $sh[$index+24]<10) { $index_to=$index+24; echo 'Выбрана цель для атаки белой ладьи: '.$index_to.'<br>'; }
    if($sh[$index-1]>0 && $sh[$index-1]<10) { $index_to=$index-1; echo 'Выбрана цель для атаки белой ладьи: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }










    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]>10 && $sh[$index+1]<20) { $index_to=$index+1; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index-24]>10 && $sh[$index-24]<20) { $index_to=$index-24; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index+24]>10 && $sh[$index+24]<20) { $index_to=$index+24; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index-1]>10 && $sh[$index-1]<20) { $index_to=$index-24; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index+23]>10 && $sh[$index+23]<20) { $index_to=$index+23; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index-23]>10 && $sh[$index-23]<20) { $index_to=$index-23; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index+25]>10 && $sh[$index+25]<20) { $index_to=$index+25; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }
    if($sh[$index-25]>10 && $sh[$index-25]<20) { $index_to=$index-25; echo 'Выбрана цель для атаки черного ферзя: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+1]>0 && $sh[$index+1]<10) { $index_to=$index+1; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index-24]>0 && $sh[$index-24]<10) { $index_to=$index-24; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index+24]>0 && $sh[$index+24]<10) { $index_to=$index+24; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index-1]>0 && $sh[$index-1]<10) { $index_to=$index-1; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index+23]>0 && $sh[$index+23]<10) { $index_to=$index+23; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index-23]>0 && $sh[$index-23]<10) { $index_to=$index-23; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index+25]>0 && $sh[$index+25]<10) { $index_to=$index+25; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }
    if($sh[$index-25]>0 && $sh[$index-25]<10) { $index_to=$index-25; echo 'Выбрана цель для атаки белого ферзя: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }











    if($sh[$index] == 8 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+2]>10 && $sh[$index+2]<20) { $index_to=$index+2; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index-48]>10 && $sh[$index-48]<20) { $index_to=$index-48; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index+48]>10 && $sh[$index+48]<20) { $index_to=$index+48; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index-2]>10 && $sh[$index-2]<20) { $index_to=$index-2; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index+22]>10 && $sh[$index+22]<20) { $index_to=$index+22; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index+26]>10 && $sh[$index+26]<20) { $index_to=$index+26; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index-22]>10 && $sh[$index-22]<20) { $index_to=$index-22; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index-26]>10 && $sh[$index-26]<20) { $index_to=$index-26; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index+47]>10 && $sh[$index+47]<20) { $index_to=$index+47; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index+49]>10 && $sh[$index+49]<20) { $index_to=$index+49; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index-47]>10 && $sh[$index-47]<20) { $index_to=$index-47; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }
    if($sh[$index-49]>10 && $sh[$index-49]<20) { $index_to=$index-49; echo 'Выбрана цель для атаки черного медведя: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 18 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+2]>0 && $sh[$index+2]<10) { $index_to=$index+2; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index-48]>0 && $sh[$index-48]<10) { $index_to=$index-48; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index+48]>0 && $sh[$index+48]<10) { $index_to=$index+48; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index-2]>0 && $sh[$index-2]<10) { $index_to=$index-2; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index+22]>0 && $sh[$index+22]<10) { $index_to=$index+22; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index+26]>0 && $sh[$index+26]<10) { $index_to=$index+26; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index-22]>0 && $sh[$index-22]<10) { $index_to=$index-22; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index-26]>0 && $sh[$index-26]<10) { $index_to=$index-26; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index+47]>0 && $sh[$index+47]<10) { $index_to=$index+47; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index+49]>0 && $sh[$index+49]<10) { $index_to=$index+49; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index-47]>0 && $sh[$index-47]<10) { $index_to=$index-47; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }
    if($sh[$index-49]>0 && $sh[$index-49]<10) { $index_to=$index-49; echo 'Выбрана цель для атаки белого медведя: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }










    if($sh[$index] == 7 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+2]>10 && $sh[$index+2]<20) { $index_to=$index+2; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-48]>10 && $sh[$index-48]<20) { $index_to=$index-48; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+48]>10 && $sh[$index+48]<20) { $index_to=$index+48; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-2]>10 && $sh[$index-2]<20) { $index_to=$index-2; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+3]>10 && $sh[$index+3]<20) { $index_to=$index+3; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+72]>10 && $sh[$index+72]<20) { $index_to=$index+72; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-3]>10 && $sh[$index-3]<20) { $index_to=$index-3; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-72]>10 && $sh[$index-72]<20) { $index_to=$index-72; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+46]>10 && $sh[$index+46]<20) { $index_to=$index+46; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+50]>10 && $sh[$index+50]<20) { $index_to=$index+50; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-46]>10 && $sh[$index-46]<20) { $index_to=$index-46; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-50]>10 && $sh[$index-50]<20) { $index_to=$index-50; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+69]>10 && $sh[$index+69]<20) { $index_to=$index+69; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index+75]>10 && $sh[$index+75]<20) { $index_to=$index+75; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-69]>10 && $sh[$index-69]<20) { $index_to=$index-69; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }
    if($sh[$index-75]>10 && $sh[$index-75]<20) { $index_to=$index-75; echo 'Выбрана цель для атаки черного ястреба: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 17 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+2]>0 && $sh[$index+2]<10) { $index_to=$index+2; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-48]>0 && $sh[$index-48]<10) { $index_to=$index-48; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+48]>0 && $sh[$index+48]<10) { $index_to=$index+48; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-2]>0 && $sh[$index-2]<10) { $index_to=$index-2; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+3]>0 && $sh[$index+3]<10) { $index_to=$index+3; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+72]>0 && $sh[$index+72]<10) { $index_to=$index+72; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-3]>0 && $sh[$index-3]<10) { $index_to=$index-3; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-72]>0 && $sh[$index-72]<10) { $index_to=$index-72; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+46]>0 && $sh[$index+46]<10) { $index_to=$index+46; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+50]>0 && $sh[$index+50]<10) { $index_to=$index+50; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-46]>0 && $sh[$index-46]<10) { $index_to=$index-46; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-50]>0 && $sh[$index-50]<10) { $index_to=$index-50; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+69]>0 && $sh[$index+69]<10) { $index_to=$index+69; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index+75]>0 && $sh[$index+75]<10) { $index_to=$index+75; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-69]>0 && $sh[$index-69]<10) { $index_to=$index-69; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }
    if($sh[$index-75]>0 && $sh[$index-75]<10) { $index_to=$index-75; echo 'Выбрана цель для атаки белого ястреба: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }











    if($sh[$index] == 9 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]>10 && $sh[$index+1]<20) { $index_to=$index+1; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index-1]>10 && $sh[$index-1]<20) { $index_to=$index-1; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index+24]>10 && $sh[$index+24]<20) { $index_to=$index+24; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index-24]>10 && $sh[$index-24]<20) { $index_to=$index-24; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index+23]>10 && $sh[$index+23]<20) { $index_to=$index+23; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index+25]>10 && $sh[$index+25]<20) { $index_to=$index+25; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index-23]>10 && $sh[$index-23]<20) { $index_to=$index-23; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }
    if($sh[$index-25]>10 && $sh[$index-25]<20) { $index_to=$index-25; echo 'Выбрана цель для атаки черного призрака: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 19 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

   if($sh[$index+1]>0 && $sh[$index+1]<10) { $index_to=$index+1; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index-1]>0 && $sh[$index-1]<10) { $index_to=$index-1; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index+24]>0 && $sh[$index+24]<10) { $index_to=$index+24; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index-24]>0 && $sh[$index-24]<10) { $index_to=$index-24; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index+23]>0 && $sh[$index+23]<10) { $index_to=$index+23; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index+25]>0 && $sh[$index+25]<10) { $index_to=$index+25; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index-23]>0 && $sh[$index-23]<10) { $index_to=$index-23; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }
    if($sh[$index-25]>0 && $sh[$index-25]<10) { $index_to=$index-25; echo 'Выбрана цель для атаки белого призрака: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }











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


//ниже атака через 1 клетку

    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]>10 && $sh[$index+46]<20) { $index_to=$index+46; echo 'Выбрана цель для атаки черного слона[2]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]>10 && $sh[$index-46]<20) { $index_to=$index-46; echo 'Выбрана цель для атаки черного слона[2]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]>10 && $sh[$index+50]<20) { $index_to=$index+50; echo 'Выбрана цель для атаки черного слона[2]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]>10 && $sh[$index-50]<20) { $index_to=$index-50; echo 'Выбрана цель для атаки черного слона[2]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+23]=='40' && $sh[$index+46]>0 && $sh[$index+46]<10) { $index_to=$index+46; echo 'Выбрана цель для атаки белого слона[2]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]>0 && $sh[$index-46]<10) { $index_to=$index-46; echo 'Выбрана цель для атаки белого слона[2]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]>0 && $sh[$index+50]<10) { $index_to=$index+50; echo 'Выбрана цель для атаки белого слона[2]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]>0 && $sh[$index-50]<10) { $index_to=$index-50; echo 'Выбрана цель для атаки белого слона[2]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }







    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]>10 && $sh[$index+2]<20) { $index_to=$index+2; echo 'Выбрана цель для атаки черной ладьи[2]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]>10 && $sh[$index-2]<20) { $index_to=$index-2; echo 'Выбрана цель для атаки черной ладьи[2]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]>10 && $sh[$index+48]<20) { $index_to=$index+48; echo 'Выбрана цель для атаки черной ладьи[2]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]>10 && $sh[$index-48]<20) { $index_to=$index-48; echo 'Выбрана цель для атаки черной ладьи[2]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+1]=='40' && $sh[$index+2]>0 && $sh[$index+2]<10) { $index_to=$index+2; echo 'Выбрана цель для атаки белой ладьи[2]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]>0 && $sh[$index-2]<10) { $index_to=$index-2; echo 'Выбрана цель для атаки белой ладьи[2]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]>0 && $sh[$index+48]<10) { $index_to=$index+48; echo 'Выбрана цель для атаки белой ладьи[2]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]>0 && $sh[$index-48]<10) { $index_to=$index-48; echo 'Выбрана цель для атаки белой ладьи[2]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }









    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]>10 && $sh[$index+2]<20) { $index_to=$index+2; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]>10 && $sh[$index-2]<20) { $index_to=$index-2; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]>10 && $sh[$index+48]<20) { $index_to=$index+48; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]>10 && $sh[$index-48]<20) { $index_to=$index-48; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }

    if($sh[$index+23]=='40' && $sh[$index+46]>10 && $sh[$index+46]<20) { $index_to=$index+46; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]>10 && $sh[$index-46]<20) { $index_to=$index-46; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]>10 && $sh[$index+50]<20) { $index_to=$index+50; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]>10 && $sh[$index-50]<20) { $index_to=$index-50; echo 'Выбрана цель для атаки черного ферзя[2]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки


    if($sh[$index+1]=='40' && $sh[$index+2]>0 && $sh[$index+2]<10) { $index_to=$index+2; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]>0 && $sh[$index-2]<10) { $index_to=$index-2; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]>0 && $sh[$index+48]<10) { $index_to=$index+48; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]>0 && $sh[$index-48]<10) { $index_to=$index-48; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }

    if($sh[$index+23]=='40' && $sh[$index+46]>0 && $sh[$index+46]<10) { $index_to=$index+46; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]>0 && $sh[$index-46]<10) { $index_to=$index-46; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]>0 && $sh[$index+50]<10) { $index_to=$index+50; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]>0 && $sh[$index-50]<10) { $index_to=$index-50; echo 'Выбрана цель для атаки белого ферзя[2]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }





//ниже атака через 2 клетки

    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]>10 && $sh[$index+69]<20) { $index_to=$index+69; echo 'Выбрана цель для атаки черного слона[3]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]>10 && $sh[$index-69]<20) { $index_to=$index-69; echo 'Выбрана цель для атаки черного слона[3]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]>10 && $sh[$index+75]<20) { $index_to=$index+75; echo 'Выбрана цель для атаки черного слона[3]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]>10 && $sh[$index-75]<20) { $index_to=$index-75; echo 'Выбрана цель для атаки черного слона[3]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]>0 && $sh[$index+69]<10) { $index_to=$index+69; echo 'Выбрана цель для атаки белого слона[3]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]>0 && $sh[$index-69]<10) { $index_to=$index-69; echo 'Выбрана цель для атаки белого слона[3]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]>0 && $sh[$index+75]<10) { $index_to=$index+75; echo 'Выбрана цель для атаки белого слона[3]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]>0 && $sh[$index-75]<10) { $index_to=$index-75; echo 'Выбрана цель для атаки белого слона[3]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }





    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]>10 && $sh[$index+3]<20) { $index_to=$index+3; echo 'Выбрана цель для атаки черной ладьи[3]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]>10 && $sh[$index-3]<20) { $index_to=$index-3; echo 'Выбрана цель для атаки черной ладьи[3]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]>10 && $sh[$index+72]<20) { $index_to=$index+72; echo 'Выбрана цель для атаки черной ладьи[3]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]>10 && $sh[$index-72]<20) { $index_to=$index-72; echo 'Выбрана цель для атаки черной ладьи[3]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]>0 && $sh[$index+3]<10) { $index_to=$index+3; echo 'Выбрана цель для атаки белой ладьи[3]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]>0 && $sh[$index-3]<10) { $index_to=$index-3; echo 'Выбрана цель для атаки белой ладьи[3]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]>0 && $sh[$index+72]<10) { $index_to=$index+72; echo 'Выбрана цель для атаки белой ладьи[3]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]>0 && $sh[$index-72]<10) { $index_to=$index-72; echo 'Выбрана цель для атаки белой ладьи[3]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }






    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]>10 && $sh[$index+69]<20) { $index_to=$index+69; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]>10 && $sh[$index-69]<20) { $index_to=$index-69; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]>10 && $sh[$index+75]<20) { $index_to=$index+75; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]>10 && $sh[$index-75]<20) { $index_to=$index-75; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]>10 && $sh[$index+3]<20) { $index_to=$index+3; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]>10 && $sh[$index-3]<20) { $index_to=$index-3; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]>10 && $sh[$index+72]<20) { $index_to=$index+72; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]>10 && $sh[$index-72]<20) { $index_to=$index-72; echo 'Выбрана цель для атаки черного ферзя[3]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]>0 && $sh[$index+69]<10) { $index_to=$index+69; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]>0 && $sh[$index-69]<10) { $index_to=$index-69; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]>0 && $sh[$index+75]<10) { $index_to=$index+75; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]>0 && $sh[$index-75]<10) { $index_to=$index-75; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]>0 && $sh[$index+3]<10) { $index_to=$index+3; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]>0 && $sh[$index-3]<10) { $index_to=$index-3; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]>0 && $sh[$index+72]<10) { $index_to=$index+72; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]>0 && $sh[$index-72]<10) { $index_to=$index-72; echo 'Выбрана цель для атаки белого ферзя[3]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }










//ниже атака через 3 клетки

    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]>10 && $sh[$index+92]<20) { $index_to=$index+92; echo 'Выбрана цель для атаки черного слона[4]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]>10 && $sh[$index-92]<20) { $index_to=$index-92; echo 'Выбрана цель для атаки черного слона[4]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]>10 && $sh[$index+100]<20) { $index_to=$index+100; echo 'Выбрана цель для атаки черного слона[4]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]>10 && $sh[$index-100]<20) { $index_to=$index-100; echo 'Выбрана цель для атаки черного слона[4]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]>0 && $sh[$index+92]<10) { $index_to=$index+92; echo 'Выбрана цель для атаки белого слона[4]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]>0 && $sh[$index-92]<10) { $index_to=$index-92; echo 'Выбрана цель для атаки белого слона[4]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]>0 && $sh[$index+100]<10) { $index_to=$index+100; echo 'Выбрана цель для атаки белого слона[4]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]>0 && $sh[$index-100]<10) { $index_to=$index-100; echo 'Выбрана цель для атаки белого слона[4]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }





    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]>10 && $sh[$index+4]<20) { $index_to=$index+4; echo 'Выбрана цель для атаки черной ладьи[4]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]>10 && $sh[$index-4]<20) { $index_to=$index-4; echo 'Выбрана цель для атаки черной ладьи[4]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]>10 && $sh[$index+96]<20) { $index_to=$index+96; echo 'Выбрана цель для атаки черной ладьи[4]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]>10 && $sh[$index-96]<20) { $index_to=$index-96; echo 'Выбрана цель для атаки черной ладьи[4]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]>0 && $sh[$index+4]<10) { $index_to=$index+4; echo 'Выбрана цель для атаки белой ладьи[4]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]>0 && $sh[$index-4]<10) { $index_to=$index-4; echo 'Выбрана цель для атаки белой ладьи[4]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]>0 && $sh[$index+96]<10) { $index_to=$index+96; echo 'Выбрана цель для атаки белой ладьи[4]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]>0 && $sh[$index-96]<10) { $index_to=$index-96; echo 'Выбрана цель для атаки белой ладьи[4]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }






    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]>10 && $sh[$index+92]<20) { $index_to=$index+92; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]>10 && $sh[$index-92]<20) { $index_to=$index-92; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]>10 && $sh[$index+100]<20) { $index_to=$index+100; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]>10 && $sh[$index-100]<20) { $index_to=$index-100; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]>10 && $sh[$index+4]<20) { $index_to=$index+4; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]>10 && $sh[$index-4]<20) { $index_to=$index-4; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]>10 && $sh[$index+96]<20) { $index_to=$index+96; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]>10 && $sh[$index-96]<20) { $index_to=$index-96; echo 'Выбрана цель для атаки черного ферзя[4]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]>0 && $sh[$index+92]<10) { $index_to=$index+92; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]>0 && $sh[$index-92]<10) { $index_to=$index-92; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]>0 && $sh[$index+100]<10) { $index_to=$index+100; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]>0 && $sh[$index-100]<10) { $index_to=$index-100; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]>0 && $sh[$index+4]<10) { $index_to=$index+4; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]>0 && $sh[$index-4]<10) { $index_to=$index-4; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]>0 && $sh[$index+96]<10) { $index_to=$index+96; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]>0 && $sh[$index-96]<10) { $index_to=$index-96; echo 'Выбрана цель для атаки белого ферзя[4]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }










//ниже атака через 4 клетки

    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]>10 && $sh[$index+115]<20) { $index_to=$index+115; echo 'Выбрана цель для атаки черного слона[5]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]>10 && $sh[$index-115]<20) { $index_to=$index-115; echo 'Выбрана цель для атаки черного слона[5]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]>10 && $sh[$index+125]<20) { $index_to=$index+125; echo 'Выбрана цель для атаки черного слона[5]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]>10 && $sh[$index-125]<20) { $index_to=$index-125; echo 'Выбрана цель для атаки черного слона[5]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]>0 && $sh[$index+115]<10) { $index_to=$index+115; echo 'Выбрана цель для атаки белого слона[5]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]>0 && $sh[$index-115]<10) { $index_to=$index-115; echo 'Выбрана цель для атаки белого слона[5]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]>0 && $sh[$index+125]<10) { $index_to=$index+125; echo 'Выбрана цель для атаки белого слона[5]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index+100]=='40' && $sh[$index-125]>0 && $sh[$index-125]<10) { $index_to=$index-125; echo 'Выбрана цель для атаки белого слона[5]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }





    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]>10 && $sh[$index+5]<20) { $index_to=$index+5; echo 'Выбрана цель для атаки черной ладьи[5]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]>10 && $sh[$index-5]<20) { $index_to=$index-5; echo 'Выбрана цель для атаки черной ладьи[5]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]>10 && $sh[$index+120]<20) { $index_to=$index+120; echo 'Выбрана цель для атаки черной ладьи[5]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]>10 && $sh[$index-120]<20) { $index_to=$index-120; echo 'Выбрана цель для атаки черной ладьи[5]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]>0 && $sh[$index+5]<10) { $index_to=$index+5; echo 'Выбрана цель для атаки белой ладьи[5]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]>0 && $sh[$index-5]<10) { $index_to=$index-5; echo 'Выбрана цель для атаки белой ладьи[5]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]>0 && $sh[$index+120]<10) { $index_to=$index+120; echo 'Выбрана цель для атаки белой ладьи[5]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]>0 && $sh[$index-120]<10) { $index_to=$index-120; echo 'Выбрана цель для атаки белой ладьи[5]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }






    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]>10 && $sh[$index+115]<20) { $index_to=$index+115; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]>10 && $sh[$index-115]<20) { $index_to=$index-115; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]>10 && $sh[$index+125]<20) { $index_to=$index+125; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]>10 && $sh[$index-125]<20) { $index_to=$index-125; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]>10 && $sh[$index+5]<20) { $index_to=$index+5; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]>10 && $sh[$index-5]<20) { $index_to=$index-5; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]>10 && $sh[$index+120]<20) { $index_to=$index+120; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]>10 && $sh[$index-120]<20) { $index_to=$index-120; echo 'Выбрана цель для атаки черного ферзя[5]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]>0 && $sh[$index+115]<10) { $index_to=$index+115; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]>0 && $sh[$index-115]<10) { $index_to=$index-115; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]>0 && $sh[$index+125]<10) { $index_to=$index+125; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]>0 && $sh[$index-125]<10) { $index_to=$index-125; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]>0 && $sh[$index+5]<10) { $index_to=$index+5; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]>0 && $sh[$index-5]<10) { $index_to=$index-5; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]>0 && $sh[$index+120]<10) { $index_to=$index+120; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]>0 && $sh[$index-120]<10) { $index_to=$index-120; echo 'Выбрана цель для атаки белого ферзя[5]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }









//ниже атака через 5 клеток

    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]>10 && $sh[$index+138]<20) { $index_to=$index+138; echo 'Выбрана цель для атаки черного слона[6]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]>10 && $sh[$index-138]<20) { $index_to=$index-138; echo 'Выбрана цель для атаки черного слона[6]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]>10 && $sh[$index+150]<20) { $index_to=$index+150; echo 'Выбрана цель для атаки черного слона[6]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]>10 && $sh[$index-150]<20) { $index_to=$index-150; echo 'Выбрана цель для атаки черного слона[6]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]>0 && $sh[$index+138]<10) { $index_to=$index+138; echo 'Выбрана цель для атаки белого слона[6]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]>0 && $sh[$index-138]<10) { $index_to=$index-138; echo 'Выбрана цель для атаки белого слона[6]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]>0 && $sh[$index+150]<10) { $index_to=$index+150; echo 'Выбрана цель для атаки белого слона[6]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index+100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]>0 && $sh[$index-150]<10) { $index_to=$index-150; echo 'Выбрана цель для атаки белого слона[6]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }





    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]>10 && $sh[$index+6]<20) { $index_to=$index+6; echo 'Выбрана цель для атаки черной ладьи[6]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]>10 && $sh[$index-6]<20) { $index_to=$index-6; echo 'Выбрана цель для атаки черной ладьи[6]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]>10 && $sh[$index+144]<20) { $index_to=$index+144; echo 'Выбрана цель для атаки черной ладьи[6]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]>10 && $sh[$index-144]<20) { $index_to=$index-144; echo 'Выбрана цель для атаки черной ладьи[6]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]>0 && $sh[$index+6]<10) { $index_to=$index+6; echo 'Выбрана цель для атаки белой ладьи[6]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]>0 && $sh[$index-6]<10) { $index_to=$index-6; echo 'Выбрана цель для атаки белой ладьи[6]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]>0 && $sh[$index+144]<10) { $index_to=$index+144; echo 'Выбрана цель для атаки белой ладьи[6]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]>0 && $sh[$index-144]<10) { $index_to=$index-144; echo 'Выбрана цель для атаки белой ладьи[6]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }






    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]>10 && $sh[$index+138]<20) { $index_to=$index+138; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]>10 && $sh[$index-138]<20) { $index_to=$index-138; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]>10 && $sh[$index+150]<20) { $index_to=$index+150; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]>10 && $sh[$index-150]<20) { $index_to=$index-150; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]>10 && $sh[$index+6]<20) { $index_to=$index+6; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]>10 && $sh[$index-6]<20) { $index_to=$index-6; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]>10 && $sh[$index+144]<20) { $index_to=$index+144; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]>10 && $sh[$index-144]<20) { $index_to=$index-144; echo 'Выбрана цель для атаки черного ферзя[6]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]>0 && $sh[$index+138]<10) { $index_to=$index+138; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]>0 && $sh[$index-138]<10) { $index_to=$index-138; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]>0 && $sh[$index+150]<10) { $index_to=$index+150; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]>0 && $sh[$index-150]<10) { $index_to=$index-150; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]>0 && $sh[$index+6]<10) { $index_to=$index+6; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]>0 && $sh[$index-6]<10) { $index_to=$index-6; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]>0 && $sh[$index+144]<10) { $index_to=$index+144; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]>0 && $sh[$index-144]<10) { $index_to=$index-144; echo 'Выбрана цель для атаки белого ферзя[6]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }














//ниже атака через 6 клеток

    if($sh[$index] == 4 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]=='40' && $sh[$index+161]>10 && $sh[$index+161]<20) { $index_to=$index+161; echo 'Выбрана цель для атаки черного слона[7]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]=='40' && $sh[$index-161]>10 && $sh[$index-161]<20) { $index_to=$index-161; echo 'Выбрана цель для атаки черного слона[7]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]=='40' && $sh[$index+175]>10 && $sh[$index+175]<20) { $index_to=$index+175; echo 'Выбрана цель для атаки черного слона[7]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]=='40' && $sh[$index-175]>10 && $sh[$index-175]<20) { $index_to=$index-175; echo 'Выбрана цель для атаки черного слона[7]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 14 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]=='40' && $sh[$index+161]>0 && $sh[$index+161]<10) { $index_to=$index+161; echo 'Выбрана цель для атаки белого слона[7]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]=='40' && $sh[$index-161]>0 && $sh[$index-161]<10) { $index_to=$index-161; echo 'Выбрана цель для атаки белого слона[7]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]=='40' && $sh[$index+175]>0 && $sh[$index+175]<10) { $index_to=$index+175; echo 'Выбрана цель для атаки белого слона[7]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index+100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]=='40' && $sh[$index-175]>0 && $sh[$index-175]<10) { $index_to=$index-175; echo 'Выбрана цель для атаки белого слона[7]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }





    if($sh[$index] == 2 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]>10 && $sh[$index+7]<20) { $index_to=$index+7; echo 'Выбрана цель для атаки черной ладьи[7]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]>10 && $sh[$index-7]<20) { $index_to=$index-7; echo 'Выбрана цель для атаки черной ладьи[7]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]=='40' && $sh[$index+168]>10 && $sh[$index+168]<20) { $index_to=$index+168; echo 'Выбрана цель для атаки черной ладьи[7]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]=='40' && $sh[$index-168]>10 && $sh[$index-168]<20) { $index_to=$index-168; echo 'Выбрана цель для атаки черной ладьи[7]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 12 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]>0 && $sh[$index+7]<10) { $index_to=$index+7; echo 'Выбрана цель для атаки белой ладьи[7]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]>0 && $sh[$index-7]<10) { $index_to=$index-7; echo 'Выбрана цель для атаки белой ладьи[7]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]=='40' && $sh[$index+168]>0 && $sh[$index+168]<10) { $index_to=$index+168; echo 'Выбрана цель для атаки белой ладьи[7]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]=='40' && $sh[$index-168]>0 && $sh[$index-168]<10) { $index_to=$index-168; echo 'Выбрана цель для атаки белой ладьи[7]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }






    if($sh[$index] == 5 && $exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]=='40' && $sh[$index+161]>10 && $sh[$index+161]<20) { $index_to=$index+161; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]=='40' && $sh[$index-161]>10 && $sh[$index-161]<20) { $index_to=$index-161; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]=='40' && $sh[$index+175]>10 && $sh[$index+175]<20) { $index_to=$index+175; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]=='40' && $sh[$index-150]=='40' && $sh[$index-175]>10 && $sh[$index-175]<20) { $index_to=$index-175; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]>10 && $sh[$index+7]<20) { $index_to=$index+7; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]>10 && $sh[$index-7]<20) { $index_to=$index-7; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]=='40' && $sh[$index+168]>10 && $sh[$index+168]<20) { $index_to=$index+168; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]=='40' && $sh[$index-168]>10 && $sh[$index-168]<20) { $index_to=$index-168; echo 'Выбрана цель для атаки черного ферзя[7]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }  

    if($sh[$index] == 15 && $exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+23]=='40' && $sh[$index+46]=='40' && $sh[$index+69]=='40' && $sh[$index+92]=='40' && $sh[$index+115]=='40' && $sh[$index+138]=='40' && $sh[$index+161]>0 && $sh[$index+161]<10) { $index_to=$index+161; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-23]=='40' && $sh[$index-46]=='40' && $sh[$index-69]=='40' && $sh[$index-92]=='40' && $sh[$index-115]=='40' && $sh[$index-138]=='40' && $sh[$index-161]>0 && $sh[$index-161]<10) { $index_to=$index-161; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index+25]=='40' && $sh[$index+50]=='40' && $sh[$index+75]=='40' && $sh[$index+100]=='40' && $sh[$index+125]=='40' && $sh[$index+150]=='40' && $sh[$index+175]>0 && $sh[$index+175]<10) { $index_to=$index+175; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-25]=='40' && $sh[$index-50]=='40' && $sh[$index-75]=='40' && $sh[$index-100]=='40' && $sh[$index-125]=='40' && $sh[$index+150]=='40' && $sh[$index-175]>0 && $sh[$index-175]<10) { $index_to=$index-175; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]>0 && $sh[$index+7]<10) { $index_to=$index+7; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]>0 && $sh[$index-7]<10) { $index_to=$index-7; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index+24]=='40' && $sh[$index+48]=='40' && $sh[$index+72]=='40' && $sh[$index+96]=='40' && $sh[$index+120]=='40' && $sh[$index+144]=='40' && $sh[$index+168]>0 && $sh[$index+168]<10) { $index_to=$index+168; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }
    if($sh[$index-24]=='40' && $sh[$index-48]=='40' && $sh[$index-72]=='40' && $sh[$index-96]=='40' && $sh[$index-120]=='40' && $sh[$index-144]=='40' && $sh[$index-168]>0 && $sh[$index-168]<10) { $index_to=$index-168; echo 'Выбрана цель для атаки белого ферзя[7]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }










    if($sh[$index] == 2 || $sh[$index] == 5) { 
if($exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]>10 && $sh[$index+8]<20) { $index_to=$index+8; echo 'Выбрана цель для атаки черного ферзя или ладьи[8]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]>10 && $sh[$index-8]<20) { $index_to=$index-8; echo 'Выбрана цель для атаки черного ферзя или ладьи[8]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }}  

    if($sh[$index] == 12 || $sh[$index] == 15) {
 if($exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]>0 && $sh[$index+8]<10) { $index_to=$index+8; echo 'Выбрана цель для атаки белого ферзя или ладьи[8]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]>0 && $sh[$index-8]<10) { $index_to=$index-8; echo 'Выбрана цель для атаки белого ферзя или ладьи[8]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }}










    if($sh[$index] == 2 || $sh[$index] == 5) { 
if($exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]=='40' && $sh[$index+9]>10 && $sh[$index+9]<20) { $index_to=$index+9; echo 'Выбрана цель для атаки черного ферзя или ладьи[9]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]=='40' && $sh[$index-9]>10 && $sh[$index-9]<20) { $index_to=$index-9; echo 'Выбрана цель для атаки черного ферзя или ладьи[9]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }}  

    if($sh[$index] == 12 || $sh[$index] == 15) {
 if($exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]=='40' && $sh[$index+9]>0 && $sh[$index+9]<10) { $index_to=$index+9; echo 'Выбрана цель для атаки белого ферзя или ладьи[9]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]=='40' && $sh[$index-9]>0 && $sh[$index-9]<10) { $index_to=$index-9; echo 'Выбрана цель для атаки белого ферзя или ладьи[9]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }}











    if($sh[$index] == 2 || $sh[$index] == 5) { 
if($exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]=='40' && $sh[$index+9]=='40' && $sh[$index+10]>10 && $sh[$index+10]<20) { $index_to=$index+10; echo 'Выбрана цель для атаки черного ферзя или ладьи[10]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]=='40' && $sh[$index-9]=='40' && $sh[$index-10]>10 && $sh[$index-10]<20) { $index_to=$index-10; echo 'Выбрана цель для атаки черного ферзя или ладьи[10]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }}  

    if($sh[$index] == 12 || $sh[$index] == 15) {
 if($exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]=='40' && $sh[$index+9]=='40' && $sh[$index+10]>0 && $sh[$index+10]<10) { $index_to=$index+10; echo 'Выбрана цель для атаки белого ферзя или ладьи[10]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]=='40' && $sh[$index-9]=='40' && $sh[$index-10]>0 && $sh[$index-10]<10) { $index_to=$index-10; echo 'Выбрана цель для атаки белого ферзя или ладьи[10]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }}












    if($sh[$index] == 2 || $sh[$index] == 5) { 
if($exxo[4]=='Comp' && $exxo[11]=='Черные') { // Белая пешка
        // Проверяем возможность атаки
     
    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]=='40' && $sh[$index+9]=='40' && $sh[$index+10]=='40' && $sh[$index+11]>10 && $sh[$index+11]<20) { $index_to=$index+11; echo 'Выбрана цель для атаки черного ферзя или ладьи[11]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]=='40' && $sh[$index-9]=='40' && $sh[$index-10]=='40' && $sh[$index-11]>10 && $sh[$index-11]<20) { $index_to=$index-11; echo 'Выбрана цель для атаки черного ферзя или ладьи[11]: '.$index_to.'<br>'; }

if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
  
    }}  

    if($sh[$index] == 12 || $sh[$index] == 15) {
 if($exxo[3]=='Comp' && $exxo[11]=='Белые') { // Черная пешка
        // Проверяем возможность атаки

    if($sh[$index+1]=='40' && $sh[$index+2]=='40' && $sh[$index+3]=='40' && $sh[$index+4]=='40' && $sh[$index+5]=='40' && $sh[$index+6]=='40' && $sh[$index+7]=='40' && $sh[$index+8]=='40' && $sh[$index+9]=='40' && $sh[$index+10]=='40' && $sh[$index+11]>0 && $sh[$index+11]<10) { $index_to=$index+11; echo 'Выбрана цель для атаки белого ферзя или ладьи[11]: '.$index_to.'<br>'; }
    if($sh[$index-1]=='40' && $sh[$index-2]=='40' && $sh[$index-3]=='40' && $sh[$index-4]=='40' && $sh[$index-5]=='40' && $sh[$index-6]=='40' && $sh[$index-7]=='40' && $sh[$index-8]=='40' && $sh[$index-9]=='40' && $sh[$index-10]=='40' && $sh[$index-11]>0 && $sh[$index-11]<10) { $index_to=$index-11; echo 'Выбрана цель для атаки белого ферзя или ладьи[11]: '.$index_to.'<br>'; }

  if($index_to) {  $hod_one=$index; $hod_two=$index_to; }
        
    }}





$position=$position+1;

unset($index_to);
unset($index);

} //end for
} //end if(!$index_k) {}
?>




<?

  include('hod_pod_zashitu.php');  
 if($dona_sew>'0' && $dona_sew<'10') { $xvv='da'; }
if($xvv!='da') { include('cancel_attack.php'); } 

?>

<? if($shah) {

$yy=rand(0,1);
if($yy=='0') { include('coord_shah.php'); } 
if($yy=='1') { include('coord_shah_zapas.php'); } 

} ?>

<? 

if($exxo[1]=='Comp' || $exxo[2]=='Comp') {
if($exxo[11]=='Черные') { $hod_dostup='2'; }
if($exxo[11]=='Белые') { $hod_dostup='1'; }
                                 }
 ?>


<? if($hod_one=='1000' || $hod_two=='1000') { $hod_one='1000'; $hod_two='1000'; } ?>


</center></td></tr></table></center>