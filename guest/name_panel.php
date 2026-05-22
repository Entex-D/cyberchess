<?


$chet_dosok=0;
$chet_dosok_vsego=0;

$dir = './data_rating';
 
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
//echo '<em>На сайт заходило '.$chet_dosok.' человек <strong> <a target=_blank href=spisok_name.php>[ Список ]</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;
?> <br> <?

 



?>