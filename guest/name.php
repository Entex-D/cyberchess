<? 

 if(isset($_COOKIE['name'])) { //echo '$name_x считалось='.$name_x;
                                                                                               } else  if(!isset($_COOKIE['name'])) { //echo '$name не считалось';

$r=rand(0,10000);
$name='User'.$r;

//добавление про гостя из кремля
 $ip=$_SERVER['REMOTE_ADDR'];
//if(preg_match('/185/',$ip)) { $name='Kremlin_bot'; }
//добавление про гостя из кремля

setcookie ("name", $name, time() + 3600*24*365*10);

 } 

if(isset($_COOKIE['name'])) {  $dlina2 = strlen ($name); if($dlina2>16) { $name='Cyber'; setcookie ("name", $name, time() + 3600*24*365*10); }  }







$chet_dosok=1;

$dir = '../public_html/guest/data_rating';
 
$f = scandir($dir);
 
foreach ($f as $file){
    if(preg_match('/\.(txt)/', $file)){
    $file_konvert_doski = preg_replace("|[.]+|", "_", $file);
    $file_konvert_doski = preg_replace("|[txt]+|", "", $file_konvert_doski);
$chet_dosok=$chet_dosok+1;
                      }
 }    








$robot='no';

//include('robot.php');

if($d=='4' && $robot=='no') {

$ip=$_SERVER['REMOTE_ADDR']; 

$baseq='./guest/data_rating/'.$name.'.txt';

$openchatdb=fopen($baseq,"w");

 if(fwrite($openchatdb,date("d.m.Y|G:i:s ")."\n".$ip."\n")) { ;  }

fclose($openchatdb);
  
//setcookie ("name", $name, time() + 10);

      




if($name>' ') { $nx=$name;
 $ip=$_SERVER['REMOTE_ADDR'];
$date1=date("d.m.Y|G:i:s ");

if(!preg_match('/'.$ip_adress.'/',$ip)) {

mail($pochta, "$nx зашел на Cyber ( $chet_dosok )", "На сайте шахмат Cyber онлайн посетитель $nx , с ip адресом $ip , время и дата посещения $date1"); 



$logi='./logi.txt';

if(!$name) { $name='Гость'; }

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> зашел на сайт';

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

include('troxa/ip_write.php'); 



} // end if !preg

} //end if $d==4




                } else if($robot=='ok') { 

 $ip=$_SERVER['REMOTE_ADDR'];
$date1=date("d.m.Y|G:i:s ");

//mail("unlater2@mail.ru", "Робот зашел на Cyber ( $chet_dosok )", "На сайте шахмат Cyber онлайн посетитель $name_x , с ip адресом $ip , время и дата посещения $date1"); 

 }
?>