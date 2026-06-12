<html><head><title>КИБЕРШАХМАТЫ / Новые шахматы</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="Новые варианты шахмат,шахматы,играть онлайн,варианты шахмат,кибершахматы,супершахматы,новые шахматы,разновидности шахмат" />

<meta name="description" content="Кибершахматы — инновационный вариант классических шахмат с уникальными механиками и тактическими возможностями. Испытайте новые стратегии и погрузитесь в мир высокотехнологичного интеллектуального сражения!" />

<?
$pochta='unlater2@mail.ru'; //почта админа
$ip_adress='46.0'; //первые цифры ip адреса админа 
$name_admin='Guest653'; // логин админа
$transform_index=15; // через какое количество ходов делать трансформацию фигур, на вариантах 1,2,3,5,6
//$zvuki='6'; //  для полного отключения голосовых приветствий
//$zvuki_hody='6'; //  для полного отключения звуков ходов
//$new_kletki='6'; // для полного отключения новых 7 клеток
//$new_transform='6'; //  для полного отключения трансформации фигур
//$new_transform_magic='6'; //  для полного отключения превращения пешки
//$change_all='6'; //  для полного отключения всех новшеств
//$change_bomb='6'; //  для полного отключения бомб и домиков
// Для "первичного" отключения этих опций укажите внизу файла ='6'; ,и по умолчанию опции будут отключены, но игроки смогут их включить
$zvuk_sdayus=129; // если у компьютера шах,то он ищет ход 40 раз и потом говорит "сдаюсь,не нахожу ход"
$ball_sdayus=132; // если у компьютера шах,то он ищет ход 44 раза и сдается,игру заканчивает
$desa_parol='0190'; //пароль для админки
$shirina='92%'; //ширина центральной части,где расположена доска,пробуйте указать ширину 66%
$random_index='no'; //поставить 'no' или 'yes' ,чтобы в каждой партии с игроками была игра с рандомом вертикалей и рандомом фигур,по умолчанию рандомы отключены
if(!$doski_v_archive) { $doski_v_archive='20'; } //количество вывода досок в архиве
$dept=3; // глубина анализа ходов у ИИ,при значении 4 сервер перегружается
$razmer=102400/1024*2; // в папке resize_img это размер обрезания картинок 102400 это 100 килобайт
?>

<? if(!isset($_COOKIE['style_run'])) { 

$p=rand(0,3);
$p=2;

if($p==0) {

 echo '<link rel="stylesheet" type="text/css" href="../style/style4.css">' ; 
$style_run='4';$style='4'; setcookie ("style_run", $style_run, time() + 3600);

} else if($p==1) {

 echo '<link rel="stylesheet" type="text/css" href="../style/style6.css">' ; 
$style_run='6';$style='6'; setcookie ("style_run", $style_run, time() + 3600);

} else if($p==2) {

 echo '<link rel="stylesheet" type="text/css" href="../style/style11.css">' ; 
$style_run='11';$style='11'; setcookie ("style_run", $style_run, time() + 3600);

} else if($p==3) {

 echo '<link rel="stylesheet" type="text/css" href="../style/style16.css">' ; 
$style_run='16';$style='16'; setcookie ("style_run", $style_run, time() + 3600);

} 


} else if(isset($_COOKIE['style_run'])) { 

$style=$style_run;

if($style_run=='4') { echo '<link rel="stylesheet" type="text/css" href="../style/style4.css">' ; }
if($style_run=='6') { echo '<link rel="stylesheet" type="text/css" href="../style/style6.css">' ; }
if($style_run=='11') { echo '<link rel="stylesheet" type="text/css" href="../style/style11.css">' ; }
if($style_run=='16') { echo '<link rel="stylesheet" type="text/css" href="../style/style16.css">' ; }
}

//echo '='.$style_run;
?>



<?
if(!$style_run) { 

echo '<link rel="stylesheet" type="text/css" href="../style/pro_dropdown_5.css">';

}

if($style_run) { 

if($style_run=='4') { $style_menu='3'; }
if($style_run=='6') { $style_menu='5'; }
if($style_run=='11') { $style_menu='12'; }
if($style_run=='16') { $style_menu='16'; }
}

echo '<link rel="stylesheet" type="text/css" href="../style/pro_dropdown_'.$style_menu.'.css">';













 if(!isset($_COOKIE['style_figure'])) { 

$p=rand(0,3);
$p=2;

if($p==0) { $style_figure='4'; setcookie ("style_figure", $style_figure, time() + 3600);

} else if($p==1) { $style_figure='6'; setcookie ("style_figure", $style_figure, time() + 3600);

} else if($p==2) { $style_figure='11'; setcookie ("style_figure", $style_figure, time() + 3600);

} else if($p==3) { $style_figure='16'; setcookie ("style_figure", $style_figure, time() + 3600);

} 

                                                    }




 if(!isset($_COOKIE['zvuki'])) { 

 $zvuki='11'; setcookie ("zvuki", $zvuki, time() + 3600);

                                           }



 if(!isset($_COOKIE['zvuki_hody'])) { 

 $zvuki_hody='11'; setcookie ("zvuki_hody", $zvuki_hody, time() + 3600);

                                           }





 if(!isset($_COOKIE['new_kletki'])) { 

 $new_kletki='11'; setcookie ("new_kletki", $new_kletki, time() + 3600);

                                           }







 if(!isset($_COOKIE['new_transform'])) { 

 $new_transform='6'; setcookie ("new_transform", $new_transform, time() + 3600);

                                           }








 if(!isset($_COOKIE['new_transform_magic'])) { 

 $new_transform_magic='6'; setcookie ("new_transform_magic", $new_transform_magic, time() + 3600);

                                           }











 if(!isset($_COOKIE['change_all'])) { 

 $change_all='11'; setcookie ("change_all", $change_all, time() + 3600);

                                           }











 if(!isset($_COOKIE['change_bomb'])) { 

 $change_bomb='6'; setcookie ("change_bomb", $change_bomb, time() + 3600);

                                           }












 if(!isset($_COOKIE['new_vhod'])) { 

 $new_vhod='6'; setcookie ("new_vhod", $new_vhod, time() + 3600);

                                           }















 if(!isset($_COOKIE['dobro_color'])) { 

 $dobro_color='6'; setcookie ("dobro_color", $dobro_color, time() + 3600);

                                           }



if($dobro_color==11) {

if($style_run==11) { $color_b_x='#2da3b3'; $color_b_x2='#0a6d7a'; $color_b_x3='#07444d'; $color_b_x4='#03424a'; } else
if($style_run==16) { $color_b_x='#dbad5e'; $color_b_x2='#c49749'; $color_b_x3='#a16e16'; $color_b_x4='#875c10'; } else
if($style_run==6) { $color_b_x='#d685d6'; $color_b_x2='#c785c7'; $color_b_x3='#a84aa8'; $color_b_x4='#8c3e8c'; } else
if($style_run==4) { $color_b_x='#d1984d'; $color_b_x2='#b58443'; $color_b_x3='#a16e16'; $color_b_x4='#875c10'; } 

} else { $color_b_x=''; $color_b_x2=''; }












//ниже запись в анкету единых настроек

if($name) {




$file_guest='./archive_doski/'.$name.'/anketa/config.txt';
 


if ( !file_exists($file_guest) )   {  

$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,$new_kletki."\n".$new_transform."\n".$new_transform_magic."\n".$change_bomb."\n")) { ;  }

fclose($openchatdb);
   
 } else if ( file_exists($file_guest) )   { 


$openchatdb=fopen($file_guest,"w");

 if(fwrite($openchatdb,$new_kletki."\n".$new_transform."\n".$new_transform_magic."\n".$change_bomb."\n")) { ;  }

fclose($openchatdb);
   

 }




if($exxo[1]>'0' && $exxo[2]>'0') { 


$file_guest='./archive_doski/'.$exxo[1].'/anketa/config.txt';


if($file = fopen($file_guest, "r")) { echo ''; $b49=0;

while(!feof($file)) { 
if($vila[]= fgets ($file)){$b49++;} }
fclose ($file); 

 }


$file_guest='./archive_doski/'.$exxo[2].'/anketa/config.txt';


if($file = fopen($file_guest, "r")) { echo ''; $b49=0;

while(!feof($file)) { 
if($deki[]= fgets ($file)){$b49++;} }
fclose ($file); 

 }

if($vila[0]=='6' || $deki[0]=='6') { $new_kletki='6'; }
if($vila[1]=='6' || $deki[1]=='6') { $new_transform='6'; }
if($vila[2]=='6' || $deki[2]=='6') { $new_transform_magic='6'; }
if($vila[3]=='6' || $deki[3]=='6') { $change_bomb='6'; }



 } //end if $exxo

} //end if $name






include('./zapret_zvukov.php');






?>