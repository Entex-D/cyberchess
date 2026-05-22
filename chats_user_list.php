<?

$dir = './chat_igrok/igrok_message/';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$list_message=count($dir_file_cnt);

echo '&nbsp;&nbsp;&nbsp;<font size=2>Чатов в архиве '.$list_message.'</font><br><br>';

for($s=2;$s<$list_message+2;$s++) {   //начало for

$effy[$s] = preg_replace("/.db/", "", $dir_file_cnt[$s]);
//$dir_file_cnt[$s] = preg_replace("/.db/", "", $dir_file_cnt[$s]);

echo '<font size=2><a href=chats_user.php?namer='.$effy[$s].'>'.$effy[$s].'</a>:</font>';






$file_guest='./chat_igrok/igrok_message/'.$dir_file_cnt[$s];
if($file = fopen($file_guest, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

echo ' сообщений '.$b4.'<br><br>';






}

?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>