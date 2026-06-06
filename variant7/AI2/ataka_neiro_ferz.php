<?

/**
 * Функция глубокого анализа ходов ферзя на 4 шага вперед (PHP 5.2)
 * Группирует смещения в лучи и учитывает блокировку фигурами на пути.
 */
function evaluateQueenChainPHP52($startIndex, $board, $depth, $color) {
    // Векторы направлений движения ферзя.
    // Каждый подмассив — это прямая линия. Ферзь движется по ней, пока не встретит препятствие.
    $directions = array(
        // Диагональные лучи (из вашего списка)
        array(23, 46, 69, 92, 115, 138, 161),
        array(-23, -46, -69, -92, -115, -138, -161),
        array(25, 50, 75, 100, 125, 150, 175),
        array(-25, -50, -75, -100, -125, -150, -175),
        
        // Горизонтальные лучи (вправо и влево)
        array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
        array(-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11, -12),
        
        // Вертикальные лучи (вниз и вверх)
        array(24, 48, 72, 96, 120, 144, 168),
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

    // Перебираем каждое из 8 направлений
    foreach ($directions as $line) {
        foreach ($line as $offset) {
            $targetIndex = $startIndex + $offset;

            // 1. Проверка игровых границ доски 24х12
            if ($targetIndex < 54 || $targetIndex >= 229) {
                break; // Выход за пределы игровой зоны, прекращаем этот луч
            }

            // 2. Валидация геометрии хода (проверка на "сквозной перенос" через край доски)
            $targetX = $targetIndex % 24;
            $targetY = (int)($targetIndex / 24);
            
            $absOffset = abs($offset);
            
            // Если движение горизонтальное (смещение 1, 2, 3...), строка Y не должна измениться
            if ($absOffset < 23) {
                if ($targetY !== $startY) { break; }
            }
            // Если движение вертикальное (смещение 24, 48, 72...), столбец X не должен измениться
            elseif ($absOffset % 24 === 0) {
                if ($targetX !== $startX) { break; }
            }
            // Если движение диагональное (смещение кратно 23 или 25)
            else {
                if (abs($targetX - $startX) !== abs($targetY - $startY)) { break; }
            }

            $currentScore = 0;
            $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
            $hitObstacle = false;

            if ($color == 'Черные') {
                // Нашли фигуру белых (11-19) -> атакуем
                if ($targetPiece > 10 && $targetPiece < 20) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true; // Фигуру съели, встали на её место, дальше по лучу в этот ход нельзя
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
            $tempBoard[$targetIndex] = ($color == 'Черные') ? 5 : 15; // Ставим ферзя (5 или 15)

            // Рекурсивно смотрим на ходы вперед
            $nextSteps = evaluateQueenChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
            $totalScore = $currentScore + $nextSteps['score'];

            // Выбираем путь с максимальной суммой очков
            if ($totalScore > $bestScore) {
                $bestScore = $totalScore;
                $bestMoveForThisStep = $targetIndex;
            }

            // Если ферзь съел врага, он останавливается на этой клетке. Луч прерывается.
            if ($hitObstacle) {
                break;
            }
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

// === ВАШ ИНТЕГРИРОВАННЫЙ ЦИКЛ ===

for($rer = 53; $rer < 200; $rer++) {

    $tt = rand(53, 240);
    $index = $tt;
    $index_to = null;

    // 1. АТАКА ЧЕРНОГО ФЕРЗЯ (ID: 5)
    if($sh[$index] == 5 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateQueenChainPHP52($index, $sh, 4, 'Черные');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черного ферзя: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; // Ход найден, завершаем поиск
        }
    }  

    // 2. АТАКА БЕЛОГО ФЕРЗЯ (ID: 15)
    if($sh[$index] == 15 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateQueenChainPHP52($index, $sh, 4, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белого ферзя: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; // Ход найден, завершаем поиск
        }
    }
}

?>