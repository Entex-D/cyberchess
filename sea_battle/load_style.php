<html><head><title>Морской бой</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<? if(!isset($_COOKIE['style_run'])) { 

 echo '<link rel="stylesheet" type="text/css" href="../sea_battle/style/style4.css">' ; 
$style_run='4'; setcookie ("style_run", $style_run, time() + 3600*24*7);
//mail("vila@liozenda.ru", "Start II", "Starting");


} else if(isset($_COOKIE['style_run'])) { 

$style=$style_run;

if($style_run=='4') { echo '<link rel="stylesheet" type="text/css" href="../sea_battle/style/style4.css">' ; }
if($style_run=='6') { echo '<link rel="stylesheet" type="text/css" href="../sea_battle/style/style6.css">' ; }
if($style_run=='11') { echo '<link rel="stylesheet" type="text/css" href="../sea_battle/style/style11.css">' ; }
if($style_run=='12') { echo '<link rel="stylesheet" type="text/css" href="../sea_battle/style/style12.css">' ; }
if($style_run=='16') { echo '<link rel="stylesheet" type="text/css" href="../sea_battle/style/style16.css">' ; }
}

//echo '='.$style_run;
?>