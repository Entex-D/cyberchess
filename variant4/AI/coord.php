
<center><table width=100%><tr>
<td class=td_center><center><font size=2><strong>

<? if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; } ?>

<?php
$boardWidth = 24;
$boardHeight = 12;


for($d=53;$d<200;$d++) {

$q1=rand(53,260);

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($exxo[11]=='Белые' && $exxo[3]=='Comp') {
if($b1==1) { if($sh[$q1]=='13') { $b1=0; $index=$q1; $hod_one=$q1; $hod='13'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='14') { $b1=0; $index=$q1; $hod_one=$q1; $hod='14'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='17') { $b1=0; $index=$q1; $hod_one=$q1; $hod='17'; $name=$exxo[3]; }  }
if($b1==1) { if($sh[$q1]=='18') { $b1=0; $index=$q1; $hod_one=$q1; $hod='18'; $name=$exxo[3]; }  }
                          }


if($exxo[11]=='Черные' && $exxo[4]=='Comp') {
if($b1==1) { if($sh[$q1]=='3') { $b1=0; $index=$q1; $hod_one=$q1; $hod='3'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='4') { $b1=0; $index=$q1; $hod_one=$q1; $hod='4'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='7') { $b1=0; $index=$q1; $hod_one=$q1; $hod='7'; $name=$exxo[4];}  }
if($b1==1) { if($sh[$q1]=='8') { $b1=0; $index=$q1; $hod_one=$q1; $hod='8'; $name=$exxo[4];}  }
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
    array(-4, 4), array(-4, -4)
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
    array(2, -1), array(2, 1)
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
    //echo "Выбранный ход коня: ($newX, $newY)<br />";

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




<?  include('cancel_attack.php');  ?>







<?php
for($rer=53;$rer<200;$rer++) {

    $tt=rand(53,240);

    $index=$tt;

   



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















unset($index_to);
unset($index);

} //end for
?>


<?  include('cancel_attack.php');  ?>





<? if($hod_one=='1000' || $hod_two=='1000') { $hod_one='1000'; $hod_two='1000'; } ?>



</center></td></tr></table></center>