<?

$dir = './chat_igrok/igrok_message/';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$list_message=count($dir_file_cnt);

//echo '&nbsp;&nbsp;&nbsp;<font size=2>Чатов в архиве '.$list_message.'</font><br><br>';

$bd5=$list_message;

?>