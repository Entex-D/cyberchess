<?
/**
 * Функция глубокого анализа ходов слона на 4 шага вперед (PHP 5.2)
 * Учитывает блокировку пути фигурами (слон не прыгает через фигуры)
 */
function evaluateBishopChainPHP52($startIndex, $board, $depth, $color) {
    // Векторы направлений движения слона.
    // Каждый подмассив — это прямая линия. Слон идет по ней, пока не упрется.
    $directions = array(
        array(23, 46, 69, 92, 115, 138, 161),
        array(-23, -46, -69, -92, -115, -138, -161),
        array(25, 50, 75, 100, 125, 150, 175),
        array(-25, -50, -75, -100, -125, -150, -175)
    );
    
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

    // Перебираем каждый луч направления
    foreach ($directions as $line) {
        foreach ($line as $offset) {
            $targetIndex = $startIndex + $offset;

            // 1. Проверка игровых границ доски (из вашего условия)
            if ($targetIndex < 54 || $targetIndex >= 229) {
                break; // Линия вышла за пределы, прерываем этот луч
            }

            // 2. Геометрическая валидация непрерывности линии
            $targetX = $targetIndex % 24;
            $targetY = (int)($targetIndex / 24);
            
            // Если шаг смещения не совпадает с реальной сеткой (сломалась диагональ) — стоп луча
            if (abs($targetIndex - $startIndex) % 23 == 0) {
                if (abs($targetX - $startX) != abs($targetY - $startY)) { break; }
            }
            if (abs($targetIndex - $startIndex) % 25 == 0) {
                if (abs($targetX - $startX) != abs($targetY - $startY)) { break; }
            }

            $currentScore = 0;
            $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
            $hitObstacle = false;

            if ($color == 'Черные') {
                // Враг обнаружен
                if ($targetPiece > 10 && $targetPiece < 20) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true; // Съели фигуру — дальше по этой линии в этот ход идти нельзя
                }
                // Свой заблокировал путь
                elseif ($targetPiece > 0 && $targetPiece < 10) {
                    break; // Полная блокировка луча, выходим из внутреннего цикла
                }
            } else { // Белые
                // Враг обнаружен
                if ($targetPiece > 0 && $targetPiece < 10) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                }
                // Свой заблокировал путь
                elseif ($targetPiece > 10 && $targetPiece < 20) {
                    break; 
                }
            }

            // Симулируем ход во временной матрице
            $tempBoard = $board;
            $tempBoard[$startIndex] = 0; 
            $tempBoard[$targetIndex] = ($color == 'Черные') ? 4 : 14; // Слон (4 или 14)

            // Рекурсивный просчет на следующий шаг
            $nextSteps = evaluateBishopChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
            $totalScore = $currentScore + $nextSteps['score'];

            if ($totalScore > $bestScore) {
                $bestScore = $totalScore;
                $bestMoveForThisStep = $targetIndex;
            }

            // Если наткнулись на врага и забрали его, луч прерывается (слон встал на его место)
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

    // 1. АТАКА ЧЕРНОГО СЛОНА (ID: 4)
    if($sh[$index] == 4 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateBishopChainPHP52($index, $sh, 4, 'Черные');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черного слона: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }  

    // 2. АТАКА БЕЛОГО СЛОНА (ID: 14)
    if($sh[$index] == 14 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateBishopChainPHP52($index, $sh, 4, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белого слона: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }
}

?>