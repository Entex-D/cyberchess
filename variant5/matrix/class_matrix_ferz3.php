<?php
// $sh - массив с состоянием доски
// $hod_one - индекс начальной клетки
// $hod_two - индекс конечной клетки

// 1. Строгая проверка: обрабатываем ТОЛЬКО ладью (2,12), слона (4,14) и ферзя (5,15)
if (in_array($sh[$hod_one], array(2, 12, 4, 14, 5, 15))) { 

    $prov = $hod_two - $hod_one; // Разница между клетками
    
    // Если фигура осталась на месте, выходим
    if ($prov == 0) {
        exit;
    }

    // Определяем тип фигуры
    $piece_type = '';
    if (in_array($sh[$hod_one], array(5, 15))) {
        $piece_type = 'Queen';
    } elseif (in_array($sh[$hod_one], array(4, 14))) {
        $piece_type = 'Bishop';
    } elseif (in_array($sh[$hod_one], array(2, 12))) {
        $piece_type = 'Rook';
    }

    // Направления движения
    $directions = array(
        'Queen' => array(1, -1, 24, -24, 25, -25, 23, -23),
        'Bishop' => array(25, -25, 23, -23),
        'Rook' => array(1, -1, 24, -24)
    );

    $is_blocked = false;
    $step = null;

    // 2. Поиск правильного базового шага
    foreach ($directions[$piece_type] as $d) {
        // Проверяем: делится ли расстояние на шаг БЕЗ остатка
        // И совпадают ли знаки (нельзя идти вперед, если шаг отрицательный)
        if ($prov % $d == 0 && ($prov > 0 === $d > 0)) {
            $step = $d;
            break;
        }
    }

    // 3. Если шаг не найден или ход коня мимикрировал под линию — блокируем ход
    if ($step === null) {
        $is_blocked = true;
    } else {
        // 4. Проверка препятствий на пути
        $current = $hod_one + $step;
        
        while ($current != $hod_two) {
            // Защита от бесконечного цикла и выхода за доску
            if (!isset($sh[$current])) {
                $is_blocked = true;
                break;
            }
            
            // Если на пути встретилась любая фигура (не пустое поле '40')
            if ($sh[$current] != '40') {
                echo '<br>' . ucfirst($piece_type) . ' перепрыгивает через препятствие';
                $is_blocked = true;
                break;
            }
            $current += $step;
        }
    }

    // 5. Финал проверки
    if ($is_blocked) {
        // Сброс координат при некорректном ходе или преграде
        $hod_one = 1000;
        $hod_two = 1000;
    } else {
        // Ход успешный — можно передвигать фигуру
        // $sh[$hod_two] = $sh[$hod_one];
        // $sh[$hod_one] = '40';
    }
}
?>