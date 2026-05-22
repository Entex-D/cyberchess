<html><head><title>ИИ в шахматах</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<? if(!isset($_COOKIE['style_s'])) { 

 echo '<link rel="stylesheet" type="text/css" href="../studiere/style/style4.css">' ; 
$style_s='4'; setcookie ("style_s", $style_s, time() + 3600*24*7);
//mail("vila@liozenda.ru", "Start II", "Starting");


} else if(isset($_COOKIE['style_s'])) { 

$style=$style_run;

if($style_s=='4') { echo '<link rel="stylesheet" type="text/css" href="../studiere/style/style4.css">' ; }
if($style_s=='6') { echo '<link rel="stylesheet" type="text/css" href="../studiere/style/style6.css">' ; }
if($style_s=='11') { echo '<link rel="stylesheet" type="text/css" href="../studiere/style/style11.css">' ; }
if($style_s=='12') { echo '<link rel="stylesheet" type="text/css" href="../studiere/style/style12.css">' ; }
if($style_s=='16') { echo '<link rel="stylesheet" type="text/css" href="../studiere/style/style16.css">' ; }
}

//echo '='.$style_run;
?>