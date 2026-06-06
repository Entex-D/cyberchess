<? 

/**
 * Универсальная функция глубокого анализа ходов коня на 4 шага вперед
 * Совместима с PHP 5.2
 *
 * @param int $startIndex Текущий индекс коня на доске
 * @param array $board Массив состояния доски
 * @param int $depth Текущая глубина рекурсии (начинаем с 4)
 * @param string $color Цвет атакующего коня ('Черные' или 'Белые')
 * @return array Массив с оценкой ветки и лучшим первым ходом
 */
function evaluateKnightChainPHP52($startIndex, $board, $depth, $color) {
    // Математические смещения коня для доски 24х12
    $offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
    
    // Ценность фигур для оценки качества атаки
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

    // Базовый выход из рекурсии
    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    $bestScore = -1; 
    $bestMoveForThisStep = null;

    // Координаты старта для проверки краев
    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    foreach ($offsets as $offset) {
        $targetIndex = $startIndex + $offset;

        // 1. Проверка физических границ одномерного массива доски (24 * 12 = 288 ячеек)
        if ($targetIndex < 54 || $targetIndex >= 229) {
            continue; 
        }

        // 2. Валидация Г-образного прыжка (запрет сквозного переноса через края)
        $targetX = $targetIndex % 24;
        $targetY = (int)($targetIndex / 24);
        
        $deltaX = abs($targetX - $startX);
        $deltaY = abs($targetY - $startY);

        if (!($deltaX == 2 && $deltaY == 1) && !($deltaX == 1 && $deltaY == 2)) {
            continue; 
        }

        $currentScore = 0;
        $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;

        // Определяем правила атаки и препятствий в зависимости от цвета коня
        if ($color == 'Черные') {
            // Цель атаки — белые фигуры (11-19)
            if ($targetPiece > 10 && $targetPiece < 20) {
                $currentScore += $pieceValues[$targetPiece];
            }
            // Препятствие — свои черные фигуры (1-9)
            elseif ($targetPiece > 0 && $targetPiece < 10) {
                continue;
            }
        } else { // Белые
            // Цель атаки — черные фигуры (1-9)
            if ($targetPiece > 0 && $targetPiece < 10) {
                $currentScore += $pieceValues[$targetPiece];
            }
            // Препятствие — свои белые фигуры (11-19)
            elseif ($targetPiece > 10 && $targetPiece < 20) {
                continue;
            }
        }

        // Виртуальный симуляционный ход
        $tempBoard = $board;
        $tempBoard[$startIndex] = 0; // Освобождаем старую клетку
        $tempBoard[$targetIndex] = ($color == 'Черные') ? 3 : 13; // Перемещаем коня

        // Рекурсивный вызов для просчета последующих ходов (глубина уменьшается)
        $nextSteps = evaluateKnightChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
        $totalScore = $currentScore + $nextSteps['score'];

        // Выбираем маршрут с наибольшей ценностью съеденных фигур
        if ($totalScore > $bestScore) {
            $bestScore = $totalScore;
            $bestMoveForThisStep = $targetIndex;
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

// === ВАШ ИНТЕГРИРОВАННЫЙ ЦИКЛ ===

for($rer = 53; $rer < 200; $rer++) {

    $tt = rand(53, 240);
    $index = $tt;
    $index_to = null;

    // 1. АТАКА ЧЕРНОГО КОНЯ
    if($sh[$index] == 3 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateKnightChainPHP52($index, $sh, 4, 'Черные');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черного коня: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; // Ход найден, прерываем итерацию
        }
    }  

    // 2. АТАКА БЕЛОГО КОНЯ
    if($sh[$index] == 13 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateKnightChainPHP52($index, $sh, 4, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белого коня: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; // Ход найден, прерываем итерацию
        }
    }
}

?>