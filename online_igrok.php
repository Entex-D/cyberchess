<?

// считывание онлайн ли игрок

if($file = fopen("save_ip.txt", "r")) {  $b5=0; } 

while(!feof($file)) { 
if($save2[]= fgets ($file)){$b5++;} }

fclose ($file); 

//конец считывание онлайн ли игрок

//  считывание файлов .тхт в папке ip

$chet_dosok_vsego=0;

$dir = 'ip';
 
$f = scandir($dir);
 
foreach ($f as $file){
    if(preg_match('/\.(txt)/', $file)){
   //    echo $file.'<br/>';
$chet_dosok_vsego=$chet_dosok_vsego+1;
    }
 }  

$chet_dosok=0;
//$chet_dosok_vsego=$chet_dosok-20;

//echo '<font size=2><strong>Первые 20 досок<strong></font><br><br>';

$dir = 'ip';
 
$f = scandir($dir);
 
foreach ($f as $file){
    if(preg_match('/\.(txt)/', $file)){
//$file_ip=$file;
    $file_konvert = preg_replace("|[.]+|", "_", $file);
    $file_konvert = preg_replace("|[txt]+|", "", $file_konvert);
$chet_dosok=$chet_dosok+1;
//$chet_dosok_vsego=$chet_dosok_vsego+1;
if($chet_dosok<21) {   
// echo $chet_dosok.' - выбрать доску <a href=?doska='.$file_konvert.'&tip=1>'.$file.'</a><br/>';
   }                      }
 }    

//echo '<br><a target=_blank href=spisok_dosok.php>Список всех '.$chet_dosok_vsego.' досок</a><br>';

?> <br> 
