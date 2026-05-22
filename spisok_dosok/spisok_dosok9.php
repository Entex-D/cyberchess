
<? include('../shapka_load_style.php'); ?>


<?


//  считывание файлов .тхт в папке ip

$chet_dosok=0;
$chet_dosok_vsego=0;

  echo '<center><table width=60% ><tr><td class=td_center bgcolor=#202020><font size=4><strong><br><center>Список всех досок варианта №9<br><br></center><strong></font></td></tr></table><table width=60%><tr><td class=td_center bgcolor=#202020><center>';

echo '<table width=40%><tr><td class=td_center bgcolor=#202020><center></td></tr>';

$dir = '../ip9';
 
$f = scandir($dir);
 
foreach ($f as $file){
    if(preg_match('/\.(txt)/', $file)){
    //$file_konvert = preg_replace("|[.]+|", "_", $file);
    $file = preg_replace("/.txt/", "", $file);
$chet_dosok=$chet_dosok+1;
//$chet_dosok_vsego=$chet_dosok_vsego+1;
if($chet_dosok>0 && $file>' ') {   
 //echo $chet_dosok.' - выбрать доску <a href=index.php?doska='.$file_konvert.'&tip=1>'.$file.'</a><br/>';

if(!$cel) { $cel='#484848'; }
if($cel=='#484848') { $cel='#404040'; } else if($cel=='#404040') { $cel='#484848'; }

$data1='../ip9/hod/'.$file.'.txt';
if(!$fer = fopen($data1, "r")) {  unlink('../ip9/'.$file.'.txt');  unlink('../ip9/hod/'.$file.'.txt');  unlink('../ip9/igrok/'.$file.'.txt'); } 
fclose ($fer);

echo '<tr><td bgcolor='.$cel.'><center><strong> '.$chet_dosok.'</strong></center></td><td bgcolor='.$cel.'><center><em><strong> '.$file.'</strong></em><br></center></td></tr>';
   }                      }
 }    


?> </table><br> <?

// конец считывание файлов .тхт в папке ip


  echo '</center></table></center>';

?>