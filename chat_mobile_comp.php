<?php

function check_mobile_device() {
    // Проверяем, существует ли заголовок User-Agent
    if (!isset($_SERVER['HTTP_USER_AGENT'])) {
        return false;
    }

    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    
    // Список ключевых слов для поиска
    $mobile_agents = array(
        'ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 
        'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 
        'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 
        'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser'
    );

    // Поиск совпадений
    foreach ($mobile_agents as $value) {
        if (strpos($agent, $value) !== false) {
            return true;
        }
    }

    return false;
}

// Определение типа устройства и назначение переменной $user
$user = check_mobile_device() ? 'mobile' : 'pc';

?>