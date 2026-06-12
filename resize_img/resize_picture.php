<? include('../shapka_load_style.php'); ?>



<center>

<? include('../shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><br>

<br><br>
<center><strong>

<? if($name==$name_admin && preg_match('/'.$ip_adress.'/',$ip) ) { ?>

<a href=resize_picture.php?dostup1=1>Обрезать Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup2=1>Обрезать Model_game</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup3=1>Обрезать Model_game/figure_style4</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup4=1>Обрезать Model_game/figure_style6</a><br><br>
<a href=resize_picture.php?dostup5=1>Model_game/figure_style11</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup6=1>Model_game/figure_style16</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup7=1>Обрезать Picture</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup8=1>Обрезать Picture/figure_design1</a><br><br>
<a href=resize_picture.php?dostup9=1>Обрезать Picture/figure_design2</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup10=1>Обрезать Picture/figure_design3</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup11=1>Обрезать Picture/figure_design4</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup12=1>Обрезать Picture/new_figure</a>

<? } else { ?>

<a href=resize_picture.php?dostup1=k>Обрезать Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup2=k>Обрезать Model_game</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup3=k>Обрезать Model_game/figure_style4</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup4=k>Обрезать Model_game/figure_style6</a><br><br>
<a href=resize_picture.php?dostup5=k>Model_game/figure_style11</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup6=k>Model_game/figure_style16</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup7=k>Обрезать Picture</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup8=k>Обрезать Picture/figure_design1</a><br><br>
<a href=resize_picture.php?dostup9=k>Обрезать Picture/figure_design2</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup10=k>Обрезать Picture/figure_design3</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup11=k>Обрезать Picture/figure_design4</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href=resize_picture.php?dostup12=k>Обрезать Picture/new_figure</a>

<? } ?>

</strong></center>

<?
$razmer=$razmer*1024;
if(!$dostup1) { $dostup1=0; }
if(!$dostup2) { $dostup2=0; }
if(!$dostup3) { $dostup3=0; }
if(!$dostup4) { $dostup4=0; }
if(!$dostup5) { $dostup5=0; }
if(!$dostup6) { $dostup6=0; }
if(!$dostup7) { $dostup7=0; }
if(!$dostup8) { $dostup8=0; }
if(!$dostup9) { $dostup9=0; }
if(!$dostup10) { $dostup10=0; }
if(!$dostup11) { $dostup11=0; }
if(!$dostup12) { $dostup12=0; }

?>

<br>
<center><em>
Обрезание на 0.9, при размере > <? echo $razmer; ?> Byte
</em></center>







<? if($dostup1==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../gallery/data/'; //убери цифру 9 чтобы работало

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup2==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../model_game/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup3==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../model_game/figure_style4/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup4==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../model_game/figure_style6/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup5==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../model_game/figure_style11/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup6==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../model_game/figure_style16/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup7==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../picture/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup8==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../picture/figure_design1/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup9==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../picture/figure_design2/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup10==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../picture/figure_design3/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup11==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../picture/figure_design4/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>

















<? if($dostup12==1) { ?>

<?php
// Путь к папке с картинками (обязательно со слэшем на конце)
$dir = '../picture/new_figure/'; 

// Поиск картинок (с учетом регистра расширений для PHP 5.2)
$images = array_merge(
    glob($dir . '*.[jJ][pP][gG]'),
    glob($dir . '*.[jJ][pP][eE][gG]'),
    glob($dir . '*.[pP][nN][gG]'),
    glob($dir . '*.[gG][iI][fF]')
);

foreach ($images as $image) {
    // Проверяем размер файла (100 КБ = 102400 байт)
    if (filesize($image) > $razmer) {
        
        // Получаем ширину, высоту и тип картинки
        list($width, $height, $type) = getimagesize($image);
        
        // Вычисляем новые размеры (уменьшаем на 20%, то есть умножаем на 0.8)
        $new_width = round($width * 0.9);
        $new_height = round($height * 0.9);
        
        // Создаем пустое полотно под новые размеры
        $thumb = imagecreatetruecolor($new_width, $new_height);
        
        $source = null;
        
        // Загружаем картинку в зависимости от ее формата
        switch ($type) {
            case IMAGETYPE_JPEG:
                $source = imagecreatefromjpeg($image);
                break;
            case IMAGETYPE_PNG:
                // Сохраняем прозрачность для PNG
                imagealphablending($thumb, false);
                imagesavealpha($thumb, true);
                $source = imagecreatefrompng($image);
                break;
            case IMAGETYPE_GIF:
                $source = imagecreatefromgif($image);
                break;
        }
        
        if ($source) {
            // Пережимаем картинку с сохранением пропорций
            imagecopyresampled($thumb, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
            
            // Сохраняем поверх старого файла
            switch ($type) {
                case IMAGETYPE_JPEG:
                    imagejpeg($thumb, $image, 85); // 85 - качество сжатия
                    break;
                case IMAGETYPE_PNG:
                    imagepng($thumb, $image);
                    break;
                case IMAGETYPE_GIF:
                    imagegif($thumb, $image);
                    break;
            }
            
            // Очищаем память
            imagedestroy($thumb);
            imagedestroy($source);
            
            echo "Файл " . basename($image) . " успешно уменьшен.<br>";
        }
    }
}

} // end if $dostup
?>







<br>

</td></tr></table><br>

<? include('../podval.php'); ?>

</center>

<br><br>