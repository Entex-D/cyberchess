<?php

// Исходные данные: ценность фигур
$pieceValues = array(
    1 => 10, 11 => 10,   // Пешки
    2 => 50, 12 => 50,   // Ладьи
    3 => 30, 13 => 30,   // Кони
    4 => 30, 14 => 30,   // Слоны
    5 => 90, 15 => 90,   // Ферзи
    6 => 1000, 16 => 1000, // Короли
    7 => 40, 17 => 40,   // Дельфины
    8 => 100, 18 => 100, // Легенды
    9 => 60, 19 => 60    // Ёжики
);

if($exxo[11] == 'Черные') {
    $my_min = 1;
    $my_max = 9;
    $enemy_king = 16;
}

if($exxo[11] == 'Белые') {
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
function check_if_cell_attacked_v2($attacker_pos, $attacker_piece, $target_king_pos, $board)
{
    $type = ($attacker_piece > 10) ? ($attacker_piece - 10) : $attacker_piece;
    
    // --- СТАНДАРТНЫЕ ФИГУРЫ ---
    if ($type == 3) { // Конь
        $knight_offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
        foreach ($knight_offsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    } elseif ($type == 2 || $type == 5) { // Ладья или Ферзь (горизонталь/вертикаль)
        $vectors = array(1, -1, 24, -24);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break;
                $curr += $v;
            }
        }
    } elseif ($type == 4 || $type == 5) { // Слон или Ферзь (диагонали)
        $vectors = array(23, -23, 25, -25);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break;
                $curr += $v;
            }
        }
    }

    // --- НОВЫЕ ФИГУРЫ (ДОБАВЛЕННЫЙ БЛОК) ---

    // Дельфин (7 и 17): Атакует как король (на одну клетку вокруг)
    if ($type == 7) {
        $attack_offsets = array(1, -1, 24, -24, 2, -2, 48, -48); // Вправо, Влево, Вниз, Вверх
        foreach ($attack_offsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    }

    // Легенда (8 и 18): Атакует во всех направлениях, как ферзь, но только на одну клетку
    if ($type == 8) {
        $kinglike_offsets = array(3, -3, 22, -22, 26, -26, 47, -47, 49, -49, 72, -72);
        foreach ($kinglike_offsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    }

    // Ёжик (9 и 19): Атакует специфическим паттерном
    if ($type == 9) {
        $hedgehog_attack_offsets = array(22, -22, 26, -26, 47, -47, 49, -49);
        foreach ($hedgehog_attack_offsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    }

    return false;
}












// 3. ОСНОВНОЙ ПЕРЕБОР ДОСКИ ДЛЯ ПОИСКА ХОДА
$hod_one = null;
$hod_two = null;
$shah_found = false;

for ($d = 53; $d < 300; $d++) {
    if ($shah_found) {
        break; // Выходим из основного цикла for, если шах уже найден
    }
    if (isset($sh[$d]) && $sh[$d] >= $my_min && $sh[$d] <= $my_max && $sh[$d] != 6 && $sh[$d] != 16) {
        $current_piece = $sh[$d];
        $piece_type = ($current_piece > 10) ? ($current_piece - 10) : $current_piece;
        
        $possible_moves = array();

        switch ($piece_type) {
            case 3: // Конь
                $offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
                foreach ($offsets as $o) {
                    $target = $d + $o;
                    if ($target >= 53 && $target < 300) {
                        $possible_moves[] = $target;
                    }
                }
                break;

            case 2: // Ладья
            case 4: // Слон
            case 5: // Ферзь
                $vectors = array();
                if ($piece_type == 2 || $piece_type == 5) {
                    $vectors = array_merge($vectors, array(1, -1, 24, -24));
                }
                if ($piece_type == 4 || $piece_type == 5) {
                    $vectors = array_merge($vectors, array(23, -23, 25, -25));
                }
                
                foreach ($vectors as $v) {
                    $curr = $d + $v;
                    while ($curr >= 53 && $curr < 300) {
                        $possible_moves[] = $curr;
                        if (isset($sh[$curr]) && $sh[$curr] != 40) {
                            break;
                        }
                        $curr += $v;
                    }
                }
                break;

            case 7: // Дельфин
                $offsets = array(22, -22, 23, -23, 25, -25, 26, -26, 47, -47, 49, -49);
                foreach ($offsets as $o) {
                    $target = $d + $o;
                    if ($target >= 53 && $target < 300) {
                        $possible_moves[] = $target;
                    }
                }
                break;

            case 8: // Легенда
                $offsets = array(2, -2, 48, -48, 46, -46, 50, -50);
                foreach ($offsets as $o) {
                    $target = $d + $o;
                    if ($target >= 53 && $target < 300) {
                        $possible_moves[] = $target;
                    }
                }
                break;

            case 9: // Ёжик
                $offsets = array(23, -23, 25, -25, 46, -46, 50, -50);
                foreach ($offsets as $offset) { // ИСПРАВЛЕНИЕ: Используем $offset для вычисления цели
                    $target = $d + $offset;
                    if ($target >= 53 && $target < 300) {
                        $possible_moves[] = $target;
                    }
                }
                break;

            default:
                // Сюда попадут пешки (1,11) или другие неопознанные фигуры.
                break;
        }

        // Анализируем каждый сгенерированный ход
        foreach ($possible_moves as $target_cell) {
            if ($target_cell < 53 || $target_cell >= 300) continue;
            
            // Нельзя ходить на клетку со своей фигурой
            if (isset($sh[$target_cell]) && in_array($sh[$target_cell], range($my_min, $my_max))) {
                continue;
            }
            
            $temp_board = $sh;
            $temp_board[$target_cell] = $current_piece;
            $temp_board[$d] = 40;
            
            if (check_if_cell_attacked_v2($target_cell, $current_piece, $enemy_king_pos, $temp_board)) {
                if (!(isset($sh[$target_cell]) && $sh[$target_cell] == $enemy_king)) {
                    $hod_one = $d;
                    $hod_two = $target_cell;
                    $shah_found = true;
                    break; // Выходим из цикла foreach по возможным ходам
                }
            }
        }
    }
}

// Вывод результата
if ($shah_found) {
    echo '<br><a href=#>Ход для шаха откуда - '.$hod_one.'</a>';
    echo '<br><a href=#>Ход для шаха куда - '.$hod_two.'</a>';
} else {
    echo '<br><a href=#>Ходов, объявляющих шах, не найдено.</a>';
}
?>