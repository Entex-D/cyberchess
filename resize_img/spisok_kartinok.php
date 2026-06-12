<? include('../shapka_load_style.php'); ?>



<center>

<? include('../shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><br>

<br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в галерее &nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=resize_picture.php>Обрезать картинки</a></strong></font><br>

<?
$total_img=0;
$total_razmer=0;
$resize_index=0;?>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../gallery/data/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>














<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в model_game</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../model_game/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>











<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в model_game/figure_style4</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../model_game/figure_style4/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>













<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в model_game/figure_style6</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../model_game/figure_style6/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в model_game/figure_style11</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../model_game/figure_style11/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в model_game/figure_style16</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../model_game/figure_style16/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>
















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в picture</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../picture/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>













<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в picture/figure_design2</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../picture/figure_design2/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>
















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в picture/figure_design3</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../picture/figure_design3/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>
















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в picture/figure_design4</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../picture/figure_design4/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>
















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в picture/new_figure</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../picture/new_figure/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
?>
















<br><br><font size=4><strong>&nbsp;&nbsp;&nbsp;&nbsp;Картинки в picture/figure_design1</strong></font><br>

<?php
// Укажите путь к вашей папке с картинками (например, 'images/')
$dir = '../picture/figure_design1/'; 
$ii=1;
$razm=0;

// Ищем файлы с расширениями jpg, jpeg, png, gif (без учета регистра)
$images = glob($dir . '*.[jJ][pP][gG]', GLOB_BRACE) + 
          glob($dir . '*.[jJ][pP][eE][gG]', GLOB_BRACE) + 
          glob($dir . '*.[pP][nN][gG]', GLOB_BRACE) + 
          glob($dir . '*.[gG][iI][fF]', GLOB_BRACE);

if (!empty($images)) {
    echo "<ul>";
    foreach ($images as $image) {
        // Получаем размер файла в байтах
        $filesize = filesize($image); 
        
        // Переводим в килобайты для удобства (округляем до 2 знаков)
        $filesize_kb = round($filesize / 1024, 2); 
        
        // Получаем только имя файла без пути
        $filename = basename($image); 
        
if($filesize_kb>$razmer) { $tisa='<font color=red>к обрезанию</font>'; $resize_index=$resize_index+1; } else $tisa='';

        echo "<li><strong>Файл ".$ii.":</strong> " . $filename . " | <strong>Размер:</strong> " . $filesize_kb . " КБ ".$tisa."</li>";

$ii=$ii+1;
$razm=$razm+$filesize_kb;
$total_razmer=$total_razmer+$filesize_kb;
    }
    echo "</ul>";
} else {
    echo "Картинки в папке не найдены.";
}

$total_img=$total_img+$ii;
$total_razmer_mb=$total_razmer/1000;
$razm=$razm/1000;
echo '&nbsp;&nbsp;&nbsp;&nbsp;Всего картинок: '.$total_img;
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Размер этой папки: '.$razm.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer.' KB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;Всего размер: '.$total_razmer_mb.' MB';
echo '<br>&nbsp;&nbsp;&nbsp;&nbsp;<font color=red>Всего к обрезанию: '.$resize_index.'</font>';
?>

<br><br>


<br>

</td></tr></table><br>

<? include('../podval.php'); ?>

</center>

<br><br>