<?php

// Исходные данные: ценность фигур
$pieceValues = array(
    1 => 10, 11 => 10,   // Пешки
    2 => 50, 12 => 50,   // Ладьи
    3 => 30, 13 => 30,   // Кони
    4 => 30, 14 => 30,   // Слоны
    5 => 90, 15 => 90,   // Ферзи
    6 => 1000, 16 => 1000, // Короли
    7 => 40, 17 => 40,   // Ястребы
    8 => 100, 18 => 100, // Медведи
    9 => 60, 19 => 60    // Призраки
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

// Массивы смещений для нестандартных фигур
$moveOffsets = array(2, -2, 3, -3, 48, -48, 72, -72, 26, -26, 27, -27,
    22, -22, 21, -21, 47, -47, 49, -49, 73, -73, 71, -71, 50, -50, 46, -46);

$attackOffsets = array(1, -1, 24, -24, 23, -23, 25, -25);

$hawkVectors = array(-75, 75, -69, 69, -48, 48, -72, 72, -2, 2, -3, 3, -50, 50, -46, 46);
$bearVectors = array(-2, 2, -48, 48, -46, 46, -49, 49, -50, 50, -22, 22, -47, 47, -26, 26);



function check_if_cell_attacked_v2($attacker_pos, $attacker_piece, $target_king_pos, $board) {
    $type = ($attacker_piece > 10) ? ($attacker_piece - 10) : $attacker_piece;
    
    global $hawkVectors, $bearVectors;

    if ($type == 2 || $type == 12) { // Ладья
        $vectors = array(1, -1, 24, -24);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break;
                $curr += $v;
            }
        }
    }
    if ($type == 3 || $type == 13) { // Конь
        $knight_offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
        foreach ($knight_offsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    }
    if ($type == 4 || $type == 14) { // Слон
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
    if ($type == 5 || $type == 15) { // Ферзь
        $vectors = array(1, -1, 24, -24, 23, -23, 25, -25);
        foreach ($vectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break;
                $curr += $v;
            }
        }
    }
    if ($type == 7 || $type == 17) { // Ястреб
        foreach ($hawkVectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break;
                $curr += $v;
            }
        }
    }
    if ($type == 8 || $type == 18) { // Медведь
        foreach ($bearVectors as $v) {
            $curr = $attacker_pos + $v;
            while ($curr >= 53 && $curr < 300) {
                if ($curr == $target_king_pos) return true;
                if (isset($board[$curr]) && $board[$curr] != 40) break;
                $curr += $v;
            }
        }
    }
    if ($type == 9 || $type == 19) { // Призрак
        global $attackOffsets;
        foreach ($attackOffsets as $offset) {
            if ($attacker_pos + $offset == $target_king_pos) return true;
        }
    }

    return false;
}


$hod_one = null;
$hod_two = null;
$shah_found = false;

for ($d = 53; $d < 300; $d++) {
    if (isset($sh[$d]) && $sh[$d] >= $my_min && $sh[$d] <= $my_max && $sh[$d] != 6 && $sh[$d] != 16) {
        $current_piece = $sh[$d];
        $piece_type = ($current_piece > 10) ? ($current_piece - 10) : $current_piece;
        
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
                    if (isset($sh[$curr]) && $sh[$curr] != 40) {
                        break;
                    }
                    $curr += $v;
                }
            }
        } else {
            // --- Логика для нестандартных фигур ---
            if ($piece_type == 7 || $piece_type == 17 || $piece_type == 8 || $piece_type == 18) {
                // Ястреб и Медведь
                $use_vectors = ($piece_type == 7 || $piece_type == 17) ? $hawkVectors : $bearVectors;
                foreach ($use_vectors as $v) {
                    $curr = $d + $v;
                    while ($curr >= 53 && $curr < 300) {
                        if (isset($sh[$curr]) && in_array($sh[$curr], range($my_min,$my_max))) break;
                        $possible_moves[] = $curr;
                        if (isset($sh[$curr]) && $sh[$curr] != 40) {
                            break;
                        }
                        $curr += $v;
                    }
                }
            } elseif ($piece_type == 9 || $piece_type == 19) {
                // Призрак
                global $moveOffsets, $attackOffsets;
                
                // А. Ходы на пустые клетки (движение)
                foreach ($moveOffsets as $o) {
                    $next_cell = $d + $o;
                    if (!isset($sh[$next_cell])) {
                        $possible_moves[] = $next_cell;
                    }
                }

                // Б. Ходы на клетки с фигурами (атака)
                foreach ($attackOffsets as $o) {
                    $next_cell = $d + $o;
                    if (isset($sh[$next_cell]) && !in_array($sh[$next_cell], range($my_min,$my_max))) {
                        $possible_moves[] = $next_cell;
                    }
                }
            }
        }
        
        foreach ($possible_moves as $target_cell) {
            if ($target_cell < 53 || $target_cell >= 300) continue;
            
            // Нельзя ходить на свою фигуру
            if (isset($sh[$target_cell]) && $sh[$target_cell] >= $my_min && $sh[$target_cell] <= $my_max) continue;

            $temp_board = $sh;
            $temp_board[$target_cell] = $current_piece;
            $temp_board[$d] = 40;

            if (check_if_cell_attacked_v2($target_cell, $current_piece, $enemy_king_pos, $temp_board)) {
                $target_cell_value = isset($sh[$target_cell]) ? $sh[$target_cell] : 40;
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

if ($shah_found) {
    echo '<br><a href=#>Ход для шаха откуда - '.$hod_one.'</a>';
    echo '<br><a href=#>Ход для шаха куда - '.$hod_two.'</a>';
} else {
    echo '<br><a href=#>Ходов, объявляющих шах, не найдено.</a>';
}
?>