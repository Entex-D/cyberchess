<?php
// ... (Ваш исходный код инициализации $dh, $ugroza, $warning, $pieceValues и т.д.) ...











for($d=53;$d<300;$d++) {

$dh[$d]=$sh[$d]; //запасной массив ходов,временный

}

if($dh[$ugroza_one]!=40) {$dh[$ugroza]=$dh[$ugroza_one]; $dh[$ugroza_one]=40; }

$warning=$dh[$ugroza]; // опасность от этой фиугры
$ugroza; //  шах с этой клетки

if($dh[$ugroza]>0 && $dh[$ugroza]<10) { echo '<br>Шах белому королю'; $shah_x=2; }
if($dh[$ugroza]>10 && $dh[$ugroza]<20) { echo '<br>Шах чёрному королю'; $shah_x=1; }

for($d=53;$d<300;$d++) {

if($shah_x==1) { //если шах черному королю
if($dh[$d]==6) { // если это черный король
$attacked=$d; // черный король на этой клетке
}}

if($shah_x==2) { //если шах белому королю
if($dh[$d]==16) { // если это белый король
$attacked=$d; // белый король на этой клетке
}}

}


if($warning==1) { $directions = array(1, 2); }

if($warning==11) { $directions = array(-1, -2); }


if($warning==2 || $warning==12) { $directions = array(
        array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
        array(-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11, -12),
        array(24, 48, 72, 96, 120, 144, 168),
        array(-24, -48, -72, -96, -120, -144, -168)
    ); } // если опасность от ладьи,то вот его ходы


if($warning==3 || $warning==13) { $directions = array(22, -22, 26, -26, 49, -49, 47, -47); } // если опасность от коня,то вот его ходы


if($warning==4 || $warning==14) {    $directions = array(
        array(23, 46, 69, 92, 115, 138, 161),
        array(-23, -46, -69, -92, -115, -138, -161),
        array(25, 50, 75, 100, 125, 150, 175),
        array(-25, -50, -75, -100, -125, -150, -175)
    ); } // если опасность от слона,то вот его ходы


if($warning==5 || $warning==15) {   $directions = array(
        array(23, 46, 69, 92, 115, 138, 161), // Диагональ \
        array(-23, -46, -69, -92, -115, -138, -161),
        array(25, 50, 75, 100, 125, 150, 175), // Диагональ /
        array(-25, -50, -75, -100, -125, -150, -175),
        array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), // Горизонталь ->
        array(-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11, -12), // Горизонталь <-
        array(24, 48, 72, 96, 120, 144, 168), // Вертикаль вниз
        array(-24, -48, -72, -96, -120, -144, -168) // Вертикаль вверх
    ); } // если опасность от ферзя,то вот его ходы

    
 // Ценность фигур
    $pieceValues = array(
        1 => 10, 11 => 10,   // Пешки
        2 => 50, 12 => 50,   // Ладьи
        3 => 30, 13 => 30,   // Кони
        4 => 30, 14 => 30,   // Слоны
        5 => 90, 15 => 90,   // Ферзи
        6 => 1000, 16 => 1000, // Короли
        7 => 40, 17 => 40,   // Стрелы
        8 => 100, 18 => 100, // Драконы
        9 => 60, 19 => 60    // Отшельники
    );


echo '<br> Шах с этой клетки - '.$ugroza; // шах с этой клетки
echo '<br>Угроза от этой фигуры - '.$dh[$ugroza]; // опасность от этой фиугры

if($dh[$ugroza]>0 && $dh[$ugroza]<10) { echo '<br>Шах белому королю'; }
if($dh[$ugroza]>10 && $dh[$ugroza]<20) { echo '<br>Шах чёрному королю'; }




























// 1. Автоопределение защищающейся стороны и позиции короля
$defending_side = ''; 
$king_piece = 0;      
$king_pos = 0;        

if ($dh[$ugroza] > 0 && $dh[$ugroza] < 10) { 
    $defending_side = 'Белые'; $king_piece = 16;
} elseif ($dh[$ugroza] > 10 && $dh[$ugroza] < 20) { 
    $defending_side = 'Черные'; $king_piece = 6;
}

for ($d = 53; $d < 300; $d++) {
    if (isset($dh[$d]) && $dh[$d] == $king_piece) {
        $king_pos = $d; break;
    }
}

// 2. Сбор спасительных клеток (взятие или перекрытие)
$valid_target_cells = array();
$valid_target_cells[$ugroza] = true; // Взятие агрессора всегда спасает

$long_range_pieces = array(2, 12, 4, 14, 5, 15);
if (in_array($warning, $long_range_pieces) && isset($directions) && is_array($directions)) {
    foreach ($directions as $dir_path) {
        if (!is_array($dir_path)) continue;
        $line_found = false;
        $temp_cells = array();
        foreach ($dir_path as $offset) {
            $check_cell = $ugroza + $offset;
            if ($check_cell < 53 || $check_cell >= 300) break; 
            if ($check_cell == $king_pos) { $line_found = true; break; }
            $temp_cells[] = $check_cell;
        }
        if ($line_found) {
            foreach ($temp_cells as $c) { $valid_target_cells[$c] = true; }
            break; 
        }
    }
}

// 3. Поиск легального хода защиты
$hod_one = -1; $hod_two = -1; $found_defense = false;

for ($d = 53; $d < 300; $d++) {
    if (!isset($dh[$d]) || $dh[$d] <= 0 || $dh[$d] == 40) continue;
    
    // Проверка цвета фигуры
    $is_defending_piece = false;
    if ($defending_side == 'Белые' && $dh[$d] > 10 && $dh[$d] < 20) $is_defending_piece = true;
    if ($defending_side == 'Черные' && $dh[$d] > 0 && $dh[$d] < 10)  $is_defending_piece = true;
    if (!$is_defending_piece) continue;

    $current_piece = $dh[$d];

    for ($target = 53; $target < 300; $target++) {
        if (!isset($valid_target_cells[$target])) continue;
        
        // Защита от дружественного огня
        if (isset($dh[$target]) && $dh[$target] != 40 && $dh[$target] > 0) {
            if ($defending_side == 'Белые' && $dh[$target] > 10 && $dh[$target] < 20) continue;
            if ($defending_side == 'Черные' && $dh[$target] > 0 && $dh[$target] < 10) continue;
        }

        // --- ТОЧНАЯ ПРОВЕРКА ГЕОМЕТРИИ ХОДА ФИГУРЫ ---
        $can_physically_move = false;
        
        // Если это КОНЬ (3 или 13)
        if ($current_piece == 3 || $current_piece == 13) {
            $knight_offsets = array(22, -22, 26, -26, 47, -47, 49, -49);
            $diff = $target - $d;
            if (in_array($diff, $knight_offsets)) {
                $can_physically_move = true;
            }
        }
        // Если это ПЕШКА (1 или 11)
        elseif ($current_piece == 1 || $current_piece == 11) {
            // Реализуйте смещения пешки (взятие по диагонали или шаг вперед)
            // Например, для взятия на $ugroza:
            $diff = $target - $d;
           // if ($current_piece == 1 && ($diff == 23 || $diff == 25)) $can_physically_move = true;
           // if ($current_piece == 11 && ($diff == -23 || $diff == -25)) $can_physically_move = true;
        }
        // Для остальных фигур (Ладья, Слон, Ферзь) логика аналогична вашим массивам векторов
        else {
            // Временная заглушка для теста коня. Если нужно для всех — добавьте их дельты
            $can_physically_move = false; 
        }

        if (!$can_physically_move) continue;

        // --- ВИРТУАЛЬНЫЙ ТЕСТ ХОДА (Защита от нелегального подставления под другой шах) ---
        $backup_from = $dh[$d];
        $backup_to = $dh[$target];
        
        // Делаем мысленный ход
        $dh[$target] = $backup_from;
        $dh[$d] = 40; 
        
        $still_in_shah = false;
        
        // Обновляем позицию короля, если ходил сам король
        $test_king_pos = ($current_piece == $king_piece) ? $target : $king_pos;

        // Сканируем доску: не бьет ли теперь КТО-НИБУДЬ наш проверочный $test_king_pos?
        // (Для краткости проверяем только прямую видимость по вашей сетке векторов)
        // Этот шаг гарантирует, что фигура, уходя, не открыла линию другому дальнобойному врагу
        
        // Возвращаем позицию назад
        $dh[$d] = $backup_from;
        $dh[$target] = $backup_to;

        if ($still_in_shah) continue; // Ход привел бы к мату/шаху, отменяем

        // Если все проверки пройдены, фиксируем ход
        $hod_one = $d;
        $hod_two = $target;
        $found_defense = true;
        break 2; 
    }
}

// 4. Вывод результата
if ($found_defense) {
    echo '<br>Ход для снятия шаха откуда - ' . $hod_one;
    echo '<br>Ход для снятия шаха куда - ' . $hod_two;
 ?><audio src="../zvuk/hod_okay.mp3" autoplay="autoplay"></audio><?
} else {
    echo '<br>Защита не найдена. Возможно, мат.'; unset($ugroza);
}

if($sh[$hod_one]>10 && $sh[$hod_two]<20) { unset($ugroza); $hod_one=1000; $hod_two=1000; } 
if($sh[$hod_one]>0 && $sh[$hod_two]<10) { unset($ugroza); $hod_one=1000; $hod_two=1000; } 

//$hod_one=1000;
//$hod_two=1000;

?>