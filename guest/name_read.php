<?


$chet_dosok=0;
$chet_dosok_vsego=0;

$dir = './guest/data_rating';
 
$f = scandir($dir);
 
foreach ($f as $file){
    if(preg_match('/\.(txt)/', $file)){
    $file_konvert_doski = preg_replace("|[.]+|", "_", $file);
    $file_konvert_doski = preg_replace("|[txt]+|", "", $file_konvert_doski);
$chet_dosok=$chet_dosok+1;
//$chet_dosok_vsego=$chet_dosok_vsego+1;
if($chet_dosok>0) {   
 //echo $chet_dosok.' - выбрать доску <a href=index.php?doska='.$file_konvert_doski.'&tip=2>'.$file.'</a><br/>';
   }                      }
 }    
?>



<table width=92%><tr><td><br><center><em>С 1 января 2025 на сайт заходило 

<strong><font size=3>
<p class="odometer" id="odometer1"></p>
</font></strong>

 человек <strong></strong></em></center><br></td></tr></table>



<?
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;
?> <br> <?

 



?>









<link href="https://github.hubspot.com/odometer/themes/odometer-theme-default.css" rel="stylesheet">
<script src="https://github.hubspot.com/odometer/odometer.js"></script>


<script>
        setTimeout(function () {

var sere=<? echo $chet_dosok; ?>;
	// Указываем какой элемент и нужную цифру
            odometer1.innerHTML =sere;
            odometer22.innerHTML = 42;
        }, 100);

</script>