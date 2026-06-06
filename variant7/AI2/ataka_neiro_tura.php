<?

/**
 * Функция глубокого анализа ходов ладьи на 4 шага вперед (PHP 5.2)
 * Группирует смещения в лучи и учитывает блокировку фигурами на пути.
 */
function evaluateRookChainPHP52($startIndex, $board, $depth, $color) {
    // Векторы направлений движения ладьи.
    // Каждый подмассив — это прямая линия. Ладья идет по ней, пока не встретит препятствие.
    $directions = array(
        // Горизонтальный луч вправо
        array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
        // Горизонтальный луч влево
        array(-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11, -12),
        // Вертикальный луч вниз
        array(24, 48, 72, 96, 120, 144, 168),
        // Вертикальный луч вверх
        array(-24, -48, -72, -96, -120, -144, -168)
    );
    
    // Ценность фигур для оценки ветки
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

    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    $bestScore = -1; 
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    // Перебираем каждое из 4 направлений
    foreach ($directions as $line) {
        foreach ($line as $offset) {
            $targetIndex = $startIndex + $offset;

            // 1. Проверка игровых границ доски 24х12
            if ($targetIndex < 54 || $targetIndex >= 229) {
                break; // Вышли за пределы игровой зоны, прекращаем этот луч
            }

            // 2. Валидация геометрии хода (запрет сквозного переноса через край доски)
            $targetX = $targetIndex % 24;
            $targetY = (int)($targetIndex / 24);
            
            // Если движение горизонтальное (смещение 1, 2, 3...), строка Y обязана оставаться прежней
            if (abs($offset) < 23) {
                if ($targetY !== $startY) { break; }
            }
            // Если движение вертикальное (смещение 24, 48...), столбец X обязан оставаться прежним
            else {
                if ($targetX !== $startX) { break; }
            }

            $currentScore = 0;
            $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
            $hitObstacle = false;

            if ($color == 'Черные') {
                // Нашли фигуру белых (11-19) -> атакуем
                if ($targetPiece > 10 && $targetPiece < 20) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true; // Фигуру съели, ладья встала на её место, этот луч прерывается
                }
                // Наткнулись на свою черную фигуру (1-9) -> путь заблокирован полностью
                elseif ($targetPiece > 0 && $targetPiece < 10) {
                    break; 
                }
            } else { // Белые
                // Нашли фигуру черных (1-9) -> атакуем
                if ($targetPiece > 0 && $targetPiece < 10) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                }
                // Наткнулись на свою белую фигуру (11-19) -> путь заблокирован полностью
                elseif ($targetPiece > 10 && $targetPiece < 20) {
                    break; 
                }
            }

            // Моделируем ход во временном массиве доски
            $tempBoard = $board;
            $tempBoard[$startIndex] = 0; 
            $tempBoard[$targetIndex] = ($color == 'Черные') ? 2 : 12; // Ставим ладью (2 или 12)

            // Рекурсивно смотрим на ходы вперед
            $nextSteps = evaluateRookChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
            $totalScore = $currentScore + $nextSteps['score'];

            // Выбираем путь с максимальной суммой очков
            if ($totalScore > $bestScore) {
                $bestScore = $totalScore;
                $bestMoveForThisStep = $targetIndex;
            }

            // Если ладья съела врага, она останавливается. Дальше по лучу идти нельзя.
            if ($hitObstacle) {
                break;
            }
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

// === ИНТЕГРАЦИЯ В ВАШ ОСНОВНОЙ ЦИКЛ ===

for($rer = 53; $rer < 200; $rer++) {

    $tt = rand(53, 240);
    $index = $tt;
    $index_to = null;

    // 1. АТАКА ЧЕРНОЙ ЛАДЬИ (ID: 2)
    if($sh[$index] == 2 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateRookChainPHP52($index, $sh, 4, 'Черные');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черной ладьи: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; // Ход найден, завершаем поиск
        }
    }  

    // 2. АТАКА БЕЛОЙ ЛАДЬИ (ID: 12)
    if($sh[$index] == 12 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateRookChainPHP52($index, $sh, 4, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белой ладьи: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; // Ход найден, завершаем поиск
        }
    }
}

?>