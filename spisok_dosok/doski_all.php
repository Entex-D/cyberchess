
<? include('../shapka_load_style.php'); ?>


<?


//  считывание файлов .тхт в папке ip

  echo '<center><table width=92% bgcolor=#202020><tr><td class=td_center bgcolor=#202020><center>';


$chet_dosok=0;
$chet_dosok_vsego=0;

$dir = '../ip';
 
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
echo '<em>Логинов варианта №1:<strong> <a target=_blank href=spisok_dosok.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;
?> <br> <?

 
 
 
 
 
 
 
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip2';
 
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
echo '<em>Логинов варианта №2:<strong> <a target=_blank href=spisok_dosok2.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?> </td><td class=td_center bgcolor=#202020><br><center><?

 
 
 
 
 
 
  
 
 
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip3';
 
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
echo '<em>Логинов варианта №3:<strong> <a target=_blank href=spisok_dosok3.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?>  <?

?> <br> <? 
 
 
 
 
 
  
 
 
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip4';
 
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
  echo '<em>Логинов варианта №4:<strong> <a target=_blank href=spisok_dosok4.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?> </td><td class=td_center bgcolor=#202020><br><center> <?

 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip5';
 
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
echo '<em>Логинов варианта №5:<strong> <a target=_blank href=spisok_dosok5.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?>  <?

?> <br> <? 
 
 
 
 
 
 
  
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip6';
 
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
echo '<em>Логинов варианта №6:<strong> <a target=_blank href=spisok_dosok6.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?>  <?

?> </td><td class=td_center bgcolor=#202020><br><center> <?
 
 
 
 
 
 
  
 
 
 
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip7';
 
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
echo '<em>Логинов варианта №7:<strong> <a target=_blank href=spisok_dosok7.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?> <br> <?

 
 
 
 
 
 
  
 
 
 
$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip8';
 
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
echo '<em>Логинов варианта №8:<strong> <a target=_blank href=spisok_dosok8.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?>  <?

?> </td><td class=td_center bgcolor=#202020><br><center> <?
 
 
 
 
 
 
 
 
  
 
 
 if($rr=='2') {
 

$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip9';
 
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
echo '<em>Логинов варианта №9:<strong> <a target=_blank href=spisok_dosok9.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?> <br> <?

 
 
 
 
 
 
  
 
 
 
$chet_dosok=0;
//$chet_dosok_vsego=0;

$dir = '../ip10';
 
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
echo '<em>Логинов варианта №10:<strong> <a target=_blank href=spisok_dosok10.php>'.$chet_dosok.'</a></strong></em>';
$chet_dosok_vsego=$chet_dosok_vsego+$chet_dosok;

?>  <?

} //end if($rr

?> </td><td class=td_center bgcolor=#202020><br><center> <?
 
 
 
 
 
 
  
 
 
 
?> <br><? echo '<font size=4><strong><em>Всего логинов: '.$chet_dosok_vsego.'</em></strong><br><br></font>'; ?> <?

 
 
 
 
 
 
  
 
 
 
 
 
 
 
 
 
 
 
  echo '<br></center></td></tr></table></center>';

?>