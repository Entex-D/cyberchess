<?php
// --- НАЧАЛО: ФУНКЦИИ АНАЛИЗА ХОДОВ ---

/**
 * Универсальная функция глубокого анализа ходов коня на 4 шага вперед
 */
function evaluateKnightChainPHP52($startIndex, $board, $depth, $color) {
    // Математические смещения коня для доски 24х12
    $offsets = array(22, -22, 26, -26, 49, -49, 47, -47);
    
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

    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    $bestScore = -1;
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    foreach ($offsets as $offset) {
        $targetIndex = $startIndex + $offset;

        // Проверка границ игрового поля (игнорируем внешние рамки)
        if ($targetIndex < 54 || $targetIndex >= 229) {
            continue;
        }

        // Валидация Г-образного прыжка
        $targetX = $targetIndex % 24;
        $targetY = (int)($targetIndex / 24);
        $deltaX = abs($targetX - $startX);
        $deltaY = abs($targetY - $startY);

        if (!($deltaX == 2 && $deltaY == 1) && !($deltaX == 1 && $deltaY == 2)) {
            continue;
        }

        $currentScore = 0;
        $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;

        // Правила атаки и препятствий
        if ($color == 'Черные') {
            if ($targetPiece > 10 && $targetPiece < 20) { // Атака белых
                $currentScore += $pieceValues[$targetPiece];
            } elseif ($targetPiece > 0 && $targetPiece < 10) { // Свои фигуры
                continue;
            }
        } else { // Белые
            if ($targetPiece > 0 && $targetPiece < 10) { // Атака черных
                $currentScore += $pieceValues[$targetPiece];
            } elseif ($targetPiece > 10 && $targetPiece < 20) { // Свои фигуры
                continue;
            }
        }

        // Симуляция хода
        $tempBoard = $board;
        $tempBoard[$startIndex] = 0;
        $tempBoard[$targetIndex] = ($color == 'Черные') ? 3 : 13;

        // Рекурсивный вызов
        $nextSteps = evaluateKnightChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
        $totalScore = $currentScore + $nextSteps['score'];

        if ($totalScore > $bestScore) {
            $bestScore = $totalScore;
            $bestMoveForThisStep = $targetIndex;
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

/**
 * Функция глубокого анализа ходов ферзя на 4 шага вперед
 */
function evaluateQueenChainPHP52($startIndex, $board, $depth, $color) {
    // Векторы направлений движения ферзя.
    $directions = array(
        array(23, 46, 69, 92, 115, 138, 161), // Диагональ \
        array(-23, -46, -69, -92, -115, -138, -161),
        array(25, 50, 75, 100, 125, 150, 175), // Диагональ /
        array(-25, -50, -75, -100, -125, -150, -175),
        array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), // Горизонталь ->
        array(-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11, -12), // Горизонталь <-
        array(24, 48, 72, 96, 120, 144, 168), // Вертикаль вниз
        array(-24, -48, -72, -96, -120, -144, -168) // Вертикаль вверх
    );

    $pieceValues = array(
        1 => 10, 11 => 10,
        2 => 50, 12 => 50,
        3 => 30, 13 => 30,
        4 => 30, 14 => 30,
        5 => 90, 15 => 90,
        6 => 1000, 16 => 1000,
        7 => 40, 17 => 40,
        8 => 100, 18 => 100,
        9 => 60, 19 => 60
    );

    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    $bestScore = -1;
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    foreach ($directions as $line) {
        foreach ($line as $offset) {
            $targetIndex = $startIndex + $offset;

            // Проверка границ игрового поля
            if ($targetIndex < 54 || $targetIndex >= 229) {
                break; // Прерываем луч
            }

            // Геометрическая валидация
            $targetX = $targetIndex % 24;
            $targetY = (int)($targetIndex / 24);
            $absOffset = abs($offset);

            if ($absOffset < 23) { // Горизонталь
                if ($targetY !== $startY) { break; }
            } elseif ($absOffset % 24 === 0) { // Вертикаль
                if ($targetX !== $startX) { break; }
            } else { // Диагональ
                if (abs($targetX - $startX) !== abs($targetY - $startY)) { break; }
            }

            $currentScore = 0;
            $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
            $hitObstacle = false;

            if ($color == 'Черные') {
                if ($targetPiece > 10 && $targetPiece < 20) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                } elseif ($targetPiece > 0 && $targetPiece < 10) {
                    break;
                }
            } else {
                if ($targetPiece > 0 && $targetPiece < 10) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                } elseif ($targetPiece > 10 && $targetPiece < 20) {
                    break;
                }
            }

            $tempBoard = $board;
            $tempBoard[$startIndex] = 0;
            $tempBoard[$targetIndex] = ($color == 'Черные') ? 5 : 15;

            $nextSteps = evaluateQueenChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
            $totalScore = $currentScore + $nextSteps['score'];

            if ($totalScore > $bestScore) {
                $bestScore = $totalScore;
                $bestMoveForThisStep = $targetIndex;
            }

            if ($hitObstacle) {
                break;
            }
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

/**
 * Функция глубокого анализа ходов слона на 4 шага вперед
 */
function evaluateBishopChainPHP52($startIndex, $board, $depth, $color) {
    $directions = array(
        array(23, 46, 69, 92, 115, 138, 161),
        array(-23, -46, -69, -92, -115, -138, -161),
        array(25, 50, 75, 100, 125, 150, 175),
        array(-25, -50, -75, -100, -125, -150, -175)
    );

    $pieceValues = array(
        1 => 10, 11 => 10,
        2 => 50, 12 => 50,
        3 => 30, 13 => 30,
        4 => 30, 14 => 30,
        5 => 90, 15 => 90,
        6 => 1000, 16 => 1000,
        7 => 40, 17 => 40,
        8 => 100, 18 => 100,
        9 => 60, 19 => 60
    );

    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    $bestScore = -1;
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    foreach ($directions as $line) {
        foreach ($line as $offset) {
            $targetIndex = $startIndex + $offset;

            if ($targetIndex < 54 || $targetIndex >= 229) {
                break;
            }

            $targetX = $targetIndex % 24;
            $targetY = (int)($targetIndex / 24);

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
                if ($targetPiece > 10 && $targetPiece < 20) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                } elseif ($targetPiece > 0 && $targetPiece < 10) {
                    break;
                }
            } else {
                if ($targetPiece > 0 && $targetPiece < 10) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                } elseif ($targetPiece > 10 && $targetPiece < 20) {
                    break;
                }
            }

            $tempBoard = $board;
            $tempBoard[$startIndex] = 0;
            $tempBoard[$targetIndex] = ($color == 'Черные') ? 4 : 14;

            $nextSteps = evaluateBishopChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
            $totalScore = $currentScore + $nextSteps['score'];

            if ($totalScore > $bestScore) {
                $bestScore = $totalScore;
                $bestMoveForThisStep = $targetIndex;
            }

            if ($hitObstacle) {
                break;
            }
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

/**
 * Функция глубокого анализа ходов ладьи на 4 шага вперед
 */
function evaluateRookChainPHP52($startIndex, $board, $depth, $color) {
    $directions = array(
        array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12),
        array(-1, -2, -3, -4, -5, -6, -7, -8, -9, -10, -11, -12),
        array(24, 48, 72, 96, 120, 144, 168),
        array(-24, -48, -72, -96, -120, -144, -168)
    );

    $pieceValues = array(
        1 => 10, 11 => 10,
        2 => 50, 12 => 50,
        3 => 30, 13 => 30,
        4 => 30, 14 => 30,
        5 => 90, 15 => 90,
        6 => 1000, 16 => 1000,
        7 => 40, 17 => 40,
        8 => 100, 18 => 100,
        9 => 60, 19 => 60
    );

    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    $bestScore = -1;
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    foreach ($directions as $line) {
        foreach ($line as $offset) {
            $targetIndex = $startIndex + $offset;

            if ($targetIndex < 54 || $targetIndex >= 229) {
                break;
            }

            $targetX = $targetIndex % 24;
            $targetY = (int)($targetIndex / 24);

            if (abs($offset) < 23) { // Горизонталь
                if ($targetY !== $startY) { break; }
            } else { // Вертикаль
                if ($targetX !== $startX) { break; }
            }

            $currentScore = 0;
            $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
            $hitObstacle = false;

            if ($color == 'Черные') {
                if ($targetPiece > 10 && $targetPiece < 20) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                } elseif ($targetPiece > 0 && $targetPiece < 10) {
                    break;
                }
            } else {
                if ($targetPiece > 0 && $targetPiece < 10) {
                    $currentScore += $pieceValues[$targetPiece];
                    $hitObstacle = true;
                } elseif ($targetPiece > 10 && $targetPiece < 20) {
                    break;
                }
            }

            $tempBoard = $board;
            $tempBoard[$startIndex] = 0;
            $tempBoard[$targetIndex] = ($color == 'Черные') ? 2 : 12;

            $nextSteps = evaluateRookChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
            $totalScore = $currentScore + $nextSteps['score'];

            if ($totalScore > $bestScore) {
                $bestScore = $totalScore;
                $bestMoveForThisStep = $targetIndex;
            }

            if ($hitObstacle) {
                break;
            }
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}

























/**
 * Универсальная функция глубокого анализа ходов Insider на 4 шага вперед
 * Совместима с PHP 5.2*/

function evaluateGhost7ChainPHP52($startIndex, $board, $depth, $color) {
    // Смещения для ДВИЖЕНИЯ призрака (на пустые клетки)
    $moveOffsets = array(
        2, -2, 23, -23, 25, -25, 48, -48
    );

    // Смещения для АТАКИ призрака (только если там враг)
    $attackOffsets = array(23, -23, 25, -25, 46, -46, 50, -50, 69, -69, 75, -75);
    
    // Ценность фигур для оценки качества атаки
    $pieceValues = array(
        1 => 10, 11 => 10,     // Пешки
        2 => 50, 12 => 50,     // Ладьи
        3 => 30, 13 => 30,     // Кони
        4 => 30, 14 => 30,     // Слоны
        5 => 90, 15 => 90,     // Ферзи
        6 => 1000, 16 => 1000, // Короли
        7 => 40, 17 => 40,     // Стрелы
        8 => 100, 18 => 100,   // Драконы
        9 => 60, 19 => 60,     // Отшельники
        20 => 50, 21 => 50     // Идентификатор самого Призрака (если применимо)
    );

    // Базовый выход из рекурсии
    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    // Инициализируем минимальным значением, чтобы даже нулевой ход на пустую клетку был валидным
    $bestScore = -999999; 
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    // Объединяем направления для общего перебора в цикле
    $allOffsets = array_merge($moveOffsets, $attackOffsets);

    foreach ($allOffsets as $offset) {
        $targetIndex = $startIndex + $offset;

        // 1. Проверка физических границ одномерного массива доски 24х12 (0-287)
        if ($targetIndex < 0 || $targetIndex >= 288) {
            continue; 
        }

        // 2. Валидация геометрии: защита от сквозного переноса через края доски 24х12
        $targetX = $targetIndex % 24;
        $targetY = (int)($targetIndex / 24);
        
        $deltaX = abs($targetX - $startX);
        $deltaY = abs($targetY - $startY);

        // Призрак ходит далеко (до 3 клеток по X и Y). Защита от "схлопывания" краев:
        if ($deltaX > 4 || $deltaY > 4) {
            continue;
        }

        $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
        $isAttackOffset = in_array($offset, $attackOffsets);

        $currentScore = 0;

        // Фильтрация действий по цвету и типу смещения
        if ($color == 'Черные') {
            // Если в клетке своя фигура — это всегда препятствие
            if ($targetPiece > 0 && $targetPiece < 10) {
                continue;
            }
            // Если там враг (Белые 11-19)
            if ($targetPiece > 10 && $targetPiece < 20) {
                if (!$isAttackOffset) { continue; } // Врага можно только бить атакой
                $currentScore += $pieceValues[$targetPiece];
            } else {
                // Клетка пустая
                if ($isAttackOffset) { continue; } // Атаковать пустую клетку нельзя
            }
        } else { // Белые
            // Если в клетке своя фигура — препятствие
            if ($targetPiece > 10 && $targetPiece < 20) {
                continue;
            }
            // Если там враг (Черные 1-9)
            if ($targetPiece > 0 && $targetPiece < 10) {
                if (!$isAttackOffset) { continue; } // Врага можно только бить атакой
                $currentScore += $pieceValues[$targetPiece];
            } else {
                // Клетка пустая
                if ($isAttackOffset) { continue; } // Атаковать пустую клетку нельзя
            }
        }

        // Виртуальный симуляционный ход
        $tempBoard = $board;
        $tempBoard[$startIndex] = 0; 
        $tempBoard[$targetIndex] = ($color == 'Черные') ? 20 : 21; // ID Призрака (замените на ваши ID)

        // Рекурсивный вызов
        $nextSteps = evaluateGhost7ChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
        $totalScore = $currentScore + $nextSteps['score'];

        // Выбираем лучший маршрут
        if ($totalScore > $bestScore) {
            $bestScore = $totalScore;
            $bestMoveForThisStep = $targetIndex;
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}























/**
 * Универсальная функция глубокого анализа ходов Гения на 4 шага вперед
 * Совместима с PHP 5.2*/

function evaluateGhost8ChainPHP52($startIndex, $board, $depth, $color) {
    // Смещения для ДВИЖЕНИЯ призрака (на пустые клетки)
    $moveOffsets = array(
        24, -24, 47, -47, 49, -49, 70, -70
    );

    // Смещения для АТАКИ призрака (только если там враг)
    $attackOffsets = array(23, -23, 25, -25, 46, -46, 50, -50, 69, -69, 75, -75);
    
    // Ценность фигур для оценки качества атаки
    $pieceValues = array(
        1 => 10, 11 => 10,     // Пешки
        2 => 50, 12 => 50,     // Ладьи
        3 => 30, 13 => 30,     // Кони
        4 => 30, 14 => 30,     // Слоны
        5 => 90, 15 => 90,     // Ферзи
        6 => 1000, 16 => 1000, // Короли
        7 => 40, 17 => 40,     // Стрелы
        8 => 100, 18 => 100,   // Драконы
        9 => 60, 19 => 60,     // Отшельники
        20 => 50, 21 => 50     // Идентификатор самого Призрака (если применимо)
    );

    // Базовый выход из рекурсии
    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    // Инициализируем минимальным значением, чтобы даже нулевой ход на пустую клетку был валидным
    $bestScore = -999999; 
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    // Объединяем направления для общего перебора в цикле
    $allOffsets = array_merge($moveOffsets, $attackOffsets);

    foreach ($allOffsets as $offset) {
        $targetIndex = $startIndex + $offset;

        // 1. Проверка физических границ одномерного массива доски 24х12 (0-287)
        if ($targetIndex < 0 || $targetIndex >= 288) {
            continue; 
        }

        // 2. Валидация геометрии: защита от сквозного переноса через края доски 24х12
        $targetX = $targetIndex % 24;
        $targetY = (int)($targetIndex / 24);
        
        $deltaX = abs($targetX - $startX);
        $deltaY = abs($targetY - $startY);

        // Призрак ходит далеко (до 3 клеток по X и Y). Защита от "схлопывания" краев:
        if ($deltaX > 4 || $deltaY > 4) {
            continue;
        }

        $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
        $isAttackOffset = in_array($offset, $attackOffsets);

        $currentScore = 0;

        // Фильтрация действий по цвету и типу смещения
        if ($color == 'Черные') {
            // Если в клетке своя фигура — это всегда препятствие
            if ($targetPiece > 0 && $targetPiece < 10) {
                continue;
            }
            // Если там враг (Белые 11-19)
            if ($targetPiece > 10 && $targetPiece < 20) {
                if (!$isAttackOffset) { continue; } // Врага можно только бить атакой
                $currentScore += $pieceValues[$targetPiece];
            } else {
                // Клетка пустая
                if ($isAttackOffset) { continue; } // Атаковать пустую клетку нельзя
            }
        } else { // Белые
            // Если в клетке своя фигура — препятствие
            if ($targetPiece > 10 && $targetPiece < 20) {
                continue;
            }
            // Если там враг (Черные 1-9)
            if ($targetPiece > 0 && $targetPiece < 10) {
                if (!$isAttackOffset) { continue; } // Врага можно только бить атакой
                $currentScore += $pieceValues[$targetPiece];
            } else {
                // Клетка пустая
                if ($isAttackOffset) { continue; } // Атаковать пустую клетку нельзя
            }
        }

        // Виртуальный симуляционный ход
        $tempBoard = $board;
        $tempBoard[$startIndex] = 0; 
        $tempBoard[$targetIndex] = ($color == 'Черные') ? 20 : 21; // ID Призрака (замените на ваши ID)

        // Рекурсивный вызов
        $nextSteps = evaluateGhost8ChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
        $totalScore = $currentScore + $nextSteps['score'];

        // Выбираем лучший маршрут
        if ($totalScore > $bestScore) {
            $bestScore = $totalScore;
            $bestMoveForThisStep = $targetIndex;
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}























/**
 * Универсальная функция глубокого анализа ходов Паука на 4 шага вперед
 * Совместима с PHP 5.2*/

function evaluateGhost9ChainPHP52($startIndex, $board, $depth, $color) {
    // Смещения для ДВИЖЕНИЯ призрака (на пустые клетки)
    $moveOffsets = array(
        23, -23,25, -25, 48, -48, 2, -2
    );

    // Смещения для АТАКИ призрака (только если там враг)
    $attackOffsets = array(2, -2, 22, -22, 26, -26, 47, -47, 48, -48, 49, -49);
    
    // Ценность фигур для оценки качества атаки
    $pieceValues = array(
        1 => 10, 11 => 10,     // Пешки
        2 => 50, 12 => 50,     // Ладьи
        3 => 30, 13 => 30,     // Кони
        4 => 30, 14 => 30,     // Слоны
        5 => 90, 15 => 90,     // Ферзи
        6 => 1000, 16 => 1000, // Короли
        7 => 40, 17 => 40,     // Стрелы
        8 => 100, 18 => 100,   // Драконы
        9 => 60, 19 => 60,     // Отшельники
        20 => 50, 21 => 50     // Идентификатор самого Призрака (если применимо)
    );

    // Базовый выход из рекурсии
    if ($depth <= 0) {
        return array('score' => 0, 'best_move' => null);
    }

    // Инициализируем минимальным значением, чтобы даже нулевой ход на пустую клетку был валидным
    $bestScore = -999999; 
    $bestMoveForThisStep = null;

    $startX = $startIndex % 24;
    $startY = (int)($startIndex / 24);

    // Объединяем направления для общего перебора в цикле
    $allOffsets = array_merge($moveOffsets, $attackOffsets);

    foreach ($allOffsets as $offset) {
        $targetIndex = $startIndex + $offset;

        // 1. Проверка физических границ одномерного массива доски 24х12 (0-287)
        if ($targetIndex < 0 || $targetIndex >= 288) {
            continue; 
        }

        // 2. Валидация геометрии: защита от сквозного переноса через края доски 24х12
        $targetX = $targetIndex % 24;
        $targetY = (int)($targetIndex / 24);
        
        $deltaX = abs($targetX - $startX);
        $deltaY = abs($targetY - $startY);

        // Призрак ходит далеко (до 3 клеток по X и Y). Защита от "схлопывания" краев:
        if ($deltaX > 4 || $deltaY > 4) {
            continue;
        }

        $targetPiece = isset($board[$targetIndex]) ? $board[$targetIndex] : 0;
        $isAttackOffset = in_array($offset, $attackOffsets);

        $currentScore = 0;

        // Фильтрация действий по цвету и типу смещения
        if ($color == 'Черные') {
            // Если в клетке своя фигура — это всегда препятствие
            if ($targetPiece > 0 && $targetPiece < 10) {
                continue;
            }
            // Если там враг (Белые 11-19)
            if ($targetPiece > 10 && $targetPiece < 20) {
                if (!$isAttackOffset) { continue; } // Врага можно только бить атакой
                $currentScore += $pieceValues[$targetPiece];
            } else {
                // Клетка пустая
                if ($isAttackOffset) { continue; } // Атаковать пустую клетку нельзя
            }
        } else { // Белые
            // Если в клетке своя фигура — препятствие
            if ($targetPiece > 10 && $targetPiece < 20) {
                continue;
            }
            // Если там враг (Черные 1-9)
            if ($targetPiece > 0 && $targetPiece < 10) {
                if (!$isAttackOffset) { continue; } // Врага можно только бить атакой
                $currentScore += $pieceValues[$targetPiece];
            } else {
                // Клетка пустая
                if ($isAttackOffset) { continue; } // Атаковать пустую клетку нельзя
            }
        }

        // Виртуальный симуляционный ход
        $tempBoard = $board;
        $tempBoard[$startIndex] = 0; 
        $tempBoard[$targetIndex] = ($color == 'Черные') ? 20 : 21; // ID Призрака (замените на ваши ID)

        // Рекурсивный вызов
        $nextSteps = evaluateGhost9ChainPHP52($targetIndex, $tempBoard, $depth - 1, $color);
        $totalScore = $currentScore + $nextSteps['score'];

        // Выбираем лучший маршрут
        if ($totalScore > $bestScore) {
            $bestScore = $totalScore;
            $bestMoveForThisStep = $targetIndex;
        }
    }

    return array('score' => $bestScore, 'best_move' => $bestMoveForThisStep);
}












// --- КОНЕЦ: ФУНКЦИИ АНАЛИЗА ХОДОВ ---

// --- НАЧАЛО: ОСНОВНОЙ ЦИКЛ ПОИСКА ЛУЧШЕГО ХОДА КОМПЬЮТЕРА ---
// Предполагается, что переменные $sh (доска) и $exxo (настройки игры) уже определены где-то выше в вашем коде.
// Этот блок просто использует их.

for($rer = 53; $rer < 150; $rer++) {
    $tt = rand(53, 233);
    $index = $tt;
    $index_to = null;

    // АТАКА ЧЕРНОГО КОНЯ (ID: 3)
    if(isset($sh[$index]) && $sh[$index] == 3 && isset($exxo[4]) && $exxo[4] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Черные') {
        $analysis = evaluateKnightChainPHP52($index, $sh, $dept, 'Черные');
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черного коня: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        if($index_to) {
            $hod_one = $index;
            $hod_two = $index_to;
            break;
        }
    }

    // АТАКА БЕЛОГО КОНЯ (ID: 13)
    if(isset($sh[$index]) && $sh[$index] == 13 && isset($exxo[3]) && $exxo[3] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Белые') {
        $analysis = evaluateKnightChainPHP52($index, $sh, $dept, 'Белые');
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белого коня: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        if($index_to) {
            $hod_one = $index;
            $hod_two = $index_to;
            break;
        }
    }

    // АТАКА ЧЕРНОГО ФЕРЗЯ (ID: 5)
    if(isset($sh[$index]) && $sh[$index] == 5 && isset($exxo[4]) && $exxo[4] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Черные') {
        $analysis = evaluateQueenChainPHP52($index, $sh, $dept, 'Черные');
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черного ферзя: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        if($index_to) {
            $hod_one = $index;
            $hod_two = $index_to;
            break;
        }
    }

    // АТАКА БЕЛОГО ФЕРЗЯ (ID: 15)
    if(isset($sh[$index]) && $sh[$index] == 15 && isset($exxo[3]) && $exxo[3] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Белые') {
        $analysis = evaluateQueenChainPHP52($index, $sh, $dept, 'Белые');
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белого ферзя: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        if($index_to) {
            $hod_one = $index;
            $hod_two = $index_to;
            break;
        }
    }

    // АТАКА ЧЕРНОГО СЛОНА (ID: 3)
    if(isset($sh[$index]) && $sh[$index] == 3 && isset($exxo[4]) && $exxo[4] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Черные') {
        $analysis = evaluateBishopChainPHP52($index, $sh, $dept, 'Черные');
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

    // АТАКА БЕЛОГО СЛОНА (ID: 13)
    if(isset($sh[$index]) && $sh[$index] == 13 && isset($exxo[3]) && $exxo[3] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Белые') {
        $analysis = evaluateBishopChainPHP52($index, $sh, $dept, 'Белые');
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

    // АТАКА ЧЕРНОЙ ЛАДЬИ (ID: 2)
    if(isset($sh[$index]) && $sh[$index] == 2 && isset($exxo[4]) && $exxo[4] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Черные') {
        $analysis = evaluateRookChainPHP52($index, $sh, $dept, 'Черные');
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки черной ладьи: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        if($index_to) {
            $hod_one = $index;
            $hod_two = $index_to;
            break;
        }
    }

    // АТАКА БЕЛОЙ ЛАДЬИ (ID: 12)
    if(isset($sh[$index]) && $sh[$index] == 12 && isset($exxo[3]) && $exxo[3] == 'Comp' && isset($exxo[11]) && $exxo[11] == 'Белые') {
        $analysis = evaluateRookChainPHP52($index, $sh, $dept, 'Белые');
        if($analysis['best_move'] !== null && $analysis['score'] > 0) {
            $index_to = $analysis['best_move'];
            echo 'Выбрана стратегическая цель для атаки белой ладьи: ' . $index_to . ' (Прогноз ценности на 4 хода: ' . $analysis['score'] . ')<br>';
        }
        if($index_to) {
            $hod_one = $index;
            $hod_two = $index_to;
            break;
        }
    }









// 1. АТАКА/ХОД ЧЕРНОГО INSIDER
    if($sh[$index] == 7 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateGhost7ChainPHP52($index, $sh, $dept, 'Черные');
        
        // Исправлено условие: ходим, даже если score == 0 (нет немедленной жертвы, просто маневр)
        if($analysis['best_move'] !== null && $analysis['score'] >= 0) {
            $index_to = $analysis['best_move'];
            echo 'Insider (Ч) перемещается/атакует клетку: ' . $index_to . ' (Прогноз ценности: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }  

    // 2. АТАКА/ХОД БЕЛОГО INSIDER
    if($sh[$index] == 17 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateGhost7ChainPHP52($index, $sh, $dept, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] >= 0) {
            $index_to = $analysis['best_move'];
            echo 'Insider (Б) перемещается/атакует клетку: ' . $index_to . ' (Прогноз ценности: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }










// 1. АТАКА/ХОД ЧЕРНОГО ГЕНИЯ
    if($sh[$index] == 8 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateGhost8ChainPHP52($index, $sh, $dept, 'Черные');
        
        // Исправлено условие: ходим, даже если score == 0 (нет немедленной жертвы, просто маневр)
        if($analysis['best_move'] !== null && $analysis['score'] >= 0) {
            $index_to = $analysis['best_move'];
            echo 'Гений (Ч) перемещается/атакует клетку: ' . $index_to . ' (Прогноз ценности: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }  

    // 2. АТАКА/ХОД БЕЛОГО ГЕНИЯ
    if($sh[$index] == 18 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateGhost8ChainPHP52($index, $sh, $dept, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] >= 0) {
            $index_to = $analysis['best_move'];
            echo 'Гений (Б) перемещается/атакует клетку: ' . $index_to . ' (Прогноз ценности: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }










// 1. АТАКА/ХОД ЧЕРНОГО ПАУКА
    if($sh[$index] == 9 && $exxo[4] == 'Comp' && $exxo[11] == 'Черные') { 
        
        $analysis = evaluateGhost9ChainPHP52($index, $sh, $dept, 'Черные');
        
        // Исправлено условие: ходим, даже если score == 0 (нет немедленной жертвы, просто маневр)
        if($analysis['best_move'] !== null && $analysis['score'] >= 0) {
            $index_to = $analysis['best_move'];
            echo 'Паук (Ч) перемещается/атакует клетку: ' . $index_to . ' (Прогноз ценности: ' . $analysis['score'] . ')<br>';
        }
        
        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }  

    // 2. АТАКА/ХОД БЕЛОГО ПАУКА
    if($sh[$index] == 19 && $exxo[3] == 'Comp' && $exxo[11] == 'Белые') { 
        
        $analysis = evaluateGhost9ChainPHP52($index, $sh, $dept, 'Белые');
        
        if($analysis['best_move'] !== null && $analysis['score'] >= 0) {
            $index_to = $analysis['best_move'];
            echo 'Паук (Б) перемещается/атакует клетку: ' . $index_to . ' (Прогноз ценности: ' . $analysis['score'] . ')<br>';
        }

        if($index_to) {  
            $hod_one = $index; 
            $hod_two = $index_to; 
            break; 
        }
    }















    // ... (Здесь аналогичным образом добавляются проверки для слонов и ладей)
    // Для краткости полный цикл со всеми фигурами не приведен, но вы можете легко добавить его,
    // используя тот же паттерн, что и для коня и ферзя.
}
// --- КОНЕЦ: ОСНОВНОЙ ЦИКЛ ---

$b11=0;
$q1=$hod_two;

if($q1>53 && $q1<66) { $b11=1; }
if($q1>77 && $q1<90) { $b11=1; }
if($q1>101 && $q1<114) { $b11=1; }
if($q1>125 && $q1<138) { $b11=1; }
if($q1>149 && $q1<162) { $b11=1; }
if($q1>173 && $q1<186) { $b11=1; }
if($q1>197 && $q1<210) { $b11=1; }
if($q1>221 && $q1<234) { $b11=1; }

if($b11==0 && $hod_two<1000) { $hod_one=1000; $hod_two=1000; } else
if($b1==1 && $hod_two<1000) { $ok_hod_attack=$hod_two; $index=$hod_one;  include('cancel_attack.php');   }

unset($index);
unset($index_to);

?>