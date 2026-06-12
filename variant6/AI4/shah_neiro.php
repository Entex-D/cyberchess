<?php

// Исходные данные: ценность фигур
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

// ИСПРАВЛЕНО СТРОГО ПО ВАШЕМУ УСЛОВИЮ:
if($exxo[11] == 'Черные') {
    // Ходят Черные (1-9), ищут шах для БЕЛОГО короля ($sh[$g] == 16, его атакуют черные)
    $my_min = 1;
    $my_max = 9;
    $enemy_king = 16;
}

if($exxo[11] == 'Белые') {
    // Ходят Белые (11-19), ищут шах для ЧЕРНОГО короля ($sh[$g] == 6, его атакуют белые)
    $my_min = 11;
    $my_max = 19;
    $enemy_king = 6;
}

// 1. Находим, на какой клетке стоит вражеский король
$enemy_king_pos = false;
for ($g = 53; $g < 300; $g++) {
    if (isset($sh[$g]) && $sh[$g] == $enemy_king) {
        $enemy_king_pos = $g;
        break;
    }
}

if ($enemy_king_pos === false) {
    die('Вражеский король не найден на доске.');
}


// 2. Функция проверки: бьет ли фигура из новой позиции вражеского короля
function check_if_cell_attacked($attacker_pos, $attacker_piece, $target_king_pos, $board) {
    // Получаем чистый тип фигуры (1-5), убирая цвет для удобства расчетов векторов
    $type = ($attacker_piece > 10) ? ($attacker_piece - 10) : $attacker_piece;
    
    // Направления для ладьи (2 или 12)
    if ($type == 2) {
        $vectors = array(1, -1, 24, -24);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break; // Препятствие
                $curr += $v;
            }
        }
    }
    
    // Направления для коня (3 или 13) - прыгает через фигуры
    if ($type == 3) {
        $knight_offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
        foreach ($knight_offsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    }
    
    // Направления для слона (4 или 14)
    if ($type == 4) {
        $vectors = array(23, -23, 25, -25);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break; // Препятствие
                $curr += $v;
            }
        }
    }
    
    // Направления для ферзя (5 или 15)
    if ($type == 5) {
        $vectors = array(1, -1, 24, -24, 23, -23, 25, -25);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break; // Препятствие
                $curr += $v;
            }
        }
    }
    
    return false;
}


// 3. ОСНОВНОЙ ПЕРЕБОР ДОСКИ ДЛЯ ПОИСКА ХОДА
$hod_one = null;
$hod_two = null;
$shah_found = false;

for ($d = 53; $d < 300; $d++) {
    // Проверяем, стоит ли на клетке фигура ходящей стороны (и это не король)
    if (isset($sh[$d]) && $sh[$d] >= $my_min && $sh[$d] <= $my_max && $sh[$d] != 6 && $sh[$d] != 16) {
        $current_piece = $sh[$d];
        $piece_type = ($current_piece > 10) ? ($current_piece - 10) : $current_piece;
        
        // Собираем все доступные ходы для этой фигуры
        $possible_moves = array();
        
        if ($piece_type == 3) { // Конь
            $offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
            foreach ($offsets as $o) {
                $possible_moves[] = $d + $o;
            }
        } else if (in_array($piece_type, array(2, 4, 5))) { // Дальнобойные (Ладья, Слон, Ферзь)
            $vectors = array();
            if ($piece_type == 2 || $piece_type == 5) { $vectors = array_merge($vectors, array(1, -1, 24, -24)); }
            if ($piece_type == 4 || $piece_type == 5) { $vectors = array_merge($vectors, array(23, -23, 25, -25)); }
            
            foreach ($vectors as $v) {
                $curr = $d + $v;
                while ($curr >= 53 && $curr < 300) {
                    $possible_moves[] = $curr;
                    // Если наткнулись на любую фигуру (не пустую клетку 40), дальше этот луч блокируется
                    if (isset($sh[$curr]) && $sh[$curr] != 40) {
                        break;
                    }
                    $curr += $v;
                }
            }
        } else {
            // Для остальных фигур (пешки, стрелы и т.д.) базовый шаг на 1 клетку вокруг
            $offsets = array(1, -1, 24, -24, 23, -23, 25, -25);
            foreach ($offsets as $o) {
                $possible_moves[] = $d + $o;
            }
        }
        
        // Анализируем каждый сгенерированный ход
        foreach ($possible_moves as $target_cell) {
            // Проверка границ гигантской доски 24х12
            if ($target_cell < 53 || $target_cell >= 300) continue;
            
            // Нельзя ходить на клетку, где стоит своя же фигура
            if (isset($sh[$target_cell]) && $sh[$target_cell] >= $my_min && $sh[$sh[$target_cell]] <= $my_max) continue;
            // Дополнительная прямая проверка диапазона своих фигур
            if (isset($sh[$target_cell]) && $sh[$target_cell] >= $my_min && $sh[$target_cell] <= $my_max) continue;
            
            // Временный виртуальный ход для проверки шаха
            $temp_board = $sh; 
            $temp_board[$target_cell] = $current_piece;
            $temp_board[$d] = 40; // Клетка освободилась
            
            // Проверяем: если мы сделаем этот ход, окажется ли вражеский король под ударом нашей фигуры?
            if (check_if_cell_attacked($target_cell, $current_piece, $enemy_king_pos, $temp_board)) {
                $target_cell_value = isset($sh[$target_cell]) ? $sh[$target_cell] : 40;
                
                // Исключаем ход, который напрямую «съедает» короля (по правилам шахмат)
                if ($target_cell_value != $enemy_king) {
                    $hod_one = $d;
                    $hod_two = $target_cell;
                    $shah_found = true;
                    break; 
                }
            }
        }
    }
    if ($shah_found) break; 
}

// Вывод результата
if ($shah_found) {
    echo 'Расчет шаха откуда - '.$hod_one;
    echo '<br>Расчет шаха куда - '.$hod_two;
} else {
    echo 'Ходов, объявляющих шах, не найдено.';
}

//$hod_one=1000;
//$hod_two=1000;

?>