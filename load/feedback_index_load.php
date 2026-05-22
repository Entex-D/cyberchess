<?

$dir = './feedback/';
 
if (is_dir($dir))
   $dir_file_cnt2 = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt2[0], $dir_file_cnt2[1]);
// и выводим кол-во
//echo count($dir_file_cnt2);

$list_message=count($dir_file_cnt2);

//echo '&nbsp;&nbsp;&nbsp;<font size=2>Чатов в архиве '.$list_message.'</font><br><br>';

$bd6=$list_message;

?>