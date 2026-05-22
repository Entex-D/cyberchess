<? 

$par='TAXUS';
if(!isset($_COOKIE['par'])) { echo''; 
if($par=='TAXUS') { setcookie ("par", $par, time() + 604800); $r='5'; }
                                            }

if(isset($_COOKIE['par'])) { if($par=='TAXUS') {$r='5'; } else setcookie ("par", $par, time() + 1);  }
?>
<? // WR-Gallery v 1.5  //  14.06.10 г.  //  Miha-ingener@yandex.ru

 error_reporting (E_ALL);

include "config.php";

$valid_types=array("gif","jpg","png","jpeg");  // допустимые расширения
$shapka="<html><head><META content='text/html; charset=windows-1251' http-equiv=Content-Type><link rel=stylesheet type='text/css' href='$gal_skin/style199.css'></head><body>";
$back="<center>Вернитесь <a href='javascript:history.back(1)'><B>назад</B></a>"; // Удобная строка

// Функция сортировки
function prcmp ($a, $b) {if ($a==$b) return 0; if ($a<$b) return -1; return 1;}


function replacer ($text) { // ФУНКЦИЯ очистки кода
$text=str_replace("&#032;",' ',$text);
$text=str_replace(">",'&gt;',$text);
$text=str_replace("<",'&lt;',$text);
$text=str_replace("\"",'&quot;',$text);
$text=preg_replace("/\n\n/",'<p>',$text);
$text=preg_replace("/\n/",'<br>',$text);
$text=preg_replace("/\\\$/",'&#036;',$text);
$text=preg_replace("/\r/",'',$text);
$text=preg_replace("/\\\/",'&#092;',$text);
// если magic_quotes включена - чистим везде СЛЭШи в этих случаях: одиночные (') и двойные кавычки ("), обратный слеш (\)
if (get_magic_quotes_gpc()) { $text=str_replace("&#092;&quot;",'&quot;',$text); $text=str_replace("&#092;'",'\'',$text); $text=str_replace("&#092;&#092;",'&#092;',$text); }
$text=str_replace("\r\n","<br> ",$text);
$text=str_replace("\n\n",'<p> ',$text);
$text=str_replace("\n",'<br> ',$text);
$text=str_replace("\t",'',$text);
$text=str_replace("\r",'',$text);
$text=str_replace('   ',' ',$text);
return $text; }


function nospam() { global $max_key,$rand_key; // Функция АНТИСПАМ
if (array_key_exists("image", $_REQUEST)) { $num=replacer($_REQUEST["image"]);
for ($i=0; $i<10; $i++) {if (md5("$i+$rand_key")==$num) {imgwr($st,$i); die();}} }
$xkey=""; mt_srand(time()+(double)microtime()*1000000);
$dopkod=mktime(0,0,0,date("m"),date("d"),date("Y")); // доп.код: меняется каждые 24 часа
$stime=md5("$dopkod+$rand_key");// доп.код
echo'<TR class=row1><TD>Защитный код:</TD><TD>';
for ($i=0; $i<$max_key; $i++) {
$snum[$i]=mt_rand(0,9); $psnum=md5($snum[$i]+$rand_key+$dopkod);
echo "<img src=antispam.php?image=$psnum border='0' alt=''>\n";
$xkey=$xkey.$snum[$i];}
$xkey=md5("$xkey+$rand_key+$dopkod"); //число + ключ из config.php + код меняющийся кажые 24 часа
print" <input name='usernum' class=button type='text' style='WIDTH: 70px;' maxlength=$max_key size=6> (введите число, указанное на картинке)
<input name=xkey type=hidden value='$xkey'>
<input name=stime type=hidden value='$stime'>";
return; }



if (isset($_GET['event'])) {


if ($_GET['event']=="formacoment") {  // Добавление комментария к ФОТО - форма





$rubrika="Добавление комментария к фото";

if (isset($_GET['msnum'])) $msnum=replacer($_GET['msnum']); else $msnum="";

if (strlen($msnum)>10) exit("Ошибка - отсутствует UID-фото. Вы или хакер или ошибка скрипта!");

if (is_file("$datadir/$msnum.dat")) { $linesn = file("$datadir/$msnum.dat"); $in=count($linesn); if ($in > 15) {print "$back <B>более 15 комментариев</B> к объявления добавлять запещено.</center>"; exit;}}

if (is_file("$gal_skin/top.html")) include "$gal_skin/top.html";

print"<center><BR><BR><BR><FORM action='index.php?event=addcoment&msnum=$msnum' method=post name=addForm>
<TABLE class=bakfon cellPadding=2 cellSpacing=1><TBODY>
<TR class=toptable><TD height=23 align=middle colSpan=2><B>$rubrika</B></TD></TR>
<TR class=row1 height=23><TD>Ваше имя: <FONT color=#BE81F7>*</FONT></TD><TD><INPUT name=name class=button style='FONT-SIZE: 14px; WIDTH: 360px' maxlength=40></td></tr>
<TR class=row2><TD>Емайл:</TD><TD><INPUT name=email class=button style='FONT-SIZE: 14px; WIDTH: 360px' maxlength=$maxzag></TD></TR>
<TR class=row1><TD>Текст комментария: <FONT color=#BE81F7>*</FONT></TD><TD><TEXTAREA class=button name=msg style='FONT-SIZE: 14px; HEIGHT: 100px; WIDTH: 360px'></TEXTAREA></TD></TR>
<TR class=row2><TD>Оцените ФОТО:</TD><TD><INPUT name=type type=radio value='1'>1 <INPUT name=type type=radio value='2'>2 <INPUT name=type type=radio value='3'>3 
<INPUT name=type type=radio value='4'>4 <INPUT name=type type=radio value='5'>5 <INPUT name=type type=radio value='6'>6 <INPUT name=type type=radio value='7'>7 
<INPUT name=type type=radio value='8'>8 <INPUT name=type type=radio value='9'>9 <INPUT name=type type=radio value='10'>10 </TD></TR>";

if ($antispam==TRUE) nospam(); // АНТИСПАМ !

print"<TR class=row1><TD colspan=2 height=32 align=middle><INPUT class=longok type=submit value=Сохранить></TD></TR>
</TBODY></TABLE></FORM><BR><BR><BR>";
}






if ($_GET['event']=="addcoment") {  // ДОБАВЛЕНИЕ КОММЕНТАРИЯ К ФОТО - сохранение

if (isset($_GET['msnum'])) $msnum=replacer($_GET['msnum']); else $msnum="";

if (strlen($msnum)>10) exit("Ошибка - отсутствует UID-фото. Вы или хакер или ошибка скрипта!");

if (is_file("$datadir/$msnum.dat")) { $linesn = file("$datadir/$msnum.dat"); $in=count($linesn); if ($in > 15) {print "$back <B>более 15 комментариев</B> к объявления добавлять запещено.</center>"; exit;}}

if (!ctype_digit($msnum) or strlen($msnum)<4) {exit(" <h1>$back. Попытка взлома. Хакерам здесь не место.</h1>");}

if(isset($_GET['event']))  { // Добавление комментария - ШАГ 2 ЗАПИСЬ данных

//--А-Н-Т-И-С-П-А-М--проверка кода--

if (isset($_POST['name'])) {$name=$_POST['name'];} else {$name="";}
if ($name==="" || strlen($name)>$maxname) {print "$back Ваше <B>имя пустое, или превышает $maxname символов!</B></center>"; exit;} $name=str_replace("|","I",$name);
if (isset($_POST['type'])) {$type=$_POST['type'];} else {$type="0";} $type=str_replace("|","I",$type); if (strlen($type)> 2) {print" Ошибка скрипта - \$ type=$type."; exit;}
$msg=$_POST['msg']; if ($msg == "" || strlen($msg) > $maxmsg) {print "$back Ваш <B>комментарий пуст или превышает $maxmsg символов.</B></center>"; exit;} $msg=str_replace("|","I",$msg);
if (isset($_POST['email'])) {$email=$_POST['email'];} else {$email="";} $email=str_replace("|","I",$email);

$day=mktime(); $text="$name|$email|$msg|$day|$type|";

$text=str_replace( "&#032;"     ,' '           ,$text);
$text=str_replace( "&"          ,'&amp;'       ,$text);
$text=str_replace( "<!--"       ,'&#60;&#33;--',$text);
$text=str_replace( "-->"        ,'--&#62;'     ,$text);
$text=preg_replace( "/<script/i",'&#60;script' ,$text);
$text=str_replace( ">"          ,'&gt;'        ,$text);
$text=str_replace( "<"          ,'&lt;'        ,$text);
$text=str_replace( "\""         ,'&quot;'      ,$text);
$text=preg_replace( "/\n\n/"    ,'<p>'         ,$text);
$text=preg_replace( "/\n/"      ,'<br>'        ,$text);
$text=preg_replace( "/\\\$/"    ,'&#036;'      ,$text);
$text=preg_replace( "/\r/"      ,''            ,$text);
$text=stripslashes($text);
$text=preg_replace( "/\\\/",'&#092;',$text);
$text=str_replace("\r\n","<br>", $text);
$text=str_replace("\n\n",'<p>',$text);
$text=str_replace("\n",'<br>',$text);
$text=str_replace("\t",' ',$text);
$text=str_replace("\r",' ',$text);
$text=str_replace('  ',' ',$text);

$fp=fopen("$datadir/$msnum.dat","a+");
flock ($fp,LOCK_EX);
fputs($fp,"$text\r\n");
fflush ($fp);//очищение файлового буфера
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("$datadir/$msnum.dat", 0644);
print "<script language='Javascript'>function reload() {location = \"index.php?event=coment&msnum=$msnum\"}; setTimeout('reload()', 800);</script>"; exit;

}
} // if ($_GET['event']=="addcoment") {  // ДОБАВЛЕНИЕ КОММЕНТАРИЯ К ФОТО - сохранение







if ($_GET['event']=="add") {  // Добавление ФОТО

if (isset ($_POST['name']) & isset ($_POST['msg']) & isset ($_POST['email'])) {$name=$_POST['name']; $msg=$_POST['msg']; $email=$_POST['email'];} else {exit;}
$name=trim($name); $msg=trim($msg); $email=trim($email); // Вырезаем ПРОБЕЛьные символы
$name=str_replace("|","I",$name); $email=str_replace("|","I",$email); $msg=str_replace("|","I",$msg); // чтоб БД не "уронили"!
if ($name==="" || strlen($name)>$maxname) {print "$shapka $back ваше имя или пустое, или превышает $maxname символов!</B></center>"; exit;}
if ($msg==="" || strlen($msg)>$maxmsg) {print "$shapka $back ваше сообщение или пустое или превышает $maxmsg символов.</B></center>"; exit;}
if (!eregi("^([0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-wyz][a-z](fo|g|l|m|mes|o|op|pa|ro|seum|t|u|v|z)?)$", $email) and strlen($email)>30 and $email!=="") {print "$shapka $back и введите корректный E-mail адрес!</B></center>"; exit;}


$fotoname = $_FILES['file']['name']; // определяем имя файла
$fotosize=$_FILES['file']['size']; // Запоминаем размер файла
// проверяем расширение файла
$ext = strtolower(substr($fotoname, 1 + strrpos($fotoname, ".")));
if (!in_array($ext, $valid_types)) {echo '<B>ФАЙЛ НЕ загружен.</B> Возможные причины:<BR>
- разрешена загрузка только файлов с такими расширениями: gif, jpg, jpeg, png<BR>
- Вы пытаетесь загрузить не графический файл;<BR>
- неверно введён адрес или выбран файл;</B><BR>'; exit;}


//                    ЗАЩИТЫ от ВЗЛОМА

// 1. считаем кол-во точек в выражении - если большей одной - СВОБОДЕН!
$findtchka=substr_count($fotoname, "."); if ($findtchka>1) {echo "ТОЧКА встречается в имени файла $findtchka раз(а). Это ЗАПРЕЩЕНО! <BR>\r\n";}

// 2. если в имени есть .php, .html, .htm - свободен! 
$bago="Извините. В имени ФАйла <B>запрещено</B> использовать .php, .html, .htm";
if (preg_match("/\.php/i",$fotoname))  {echo "Вхождение <B>\".php\"</B> найдено. $bago"; exit;}
if (preg_match("/\.html/i",$fotoname)) {echo "Вхождение <B>\".html\"</B> найдено. $bago"; exit;}
if (preg_match("/\.htm/i",$fotoname))  {echo "Вхождение <B>\".htm\"</B> найдено. $bago"; exit;}

// 3. защищаем от РУССКИХ букв в имени файла и проверяем расширение файла 
if (!preg_match("/^[a-z0-9\.\-_]+\.(jpg|gif|png|)+$/is",$fotoname)) {print "Запрещено использовать РУССКИЕ буквы в имени файла!"; exit;}

// 4. Проверяем, может быть файл с таким именем уже есть на сервере
if (file_exists("$datadir/$fotoname")) {print "Файл с таким именем уже существует на сервере! Измените имя на другое!"; exit;}
// Конец защит по имени файла

// 5. Размер фото
$fotoksize=round($fotosize/10.24)/100; // размер ЗАГРУЖАЕМОГО ФОТО в Кб.
$fotomax=round($max_file_size/10.24)/100; // максимальный размер фото в Кб.
if ($fotoksize>$fotomax) {print"Вы превысили допустимый размер фото! <BR><B>Максимально допустимый</B> размер фото: <B>$fotomax </B>Кб.<BR> <B>Вы пытаетесь</B> загрузить изображение: <B>$fotoksize</B> Кб!"; exit;}

// 6. "Габариты" фото > $maxwidth х $maxheight - ДО свиданья! :-)
$size=getimagesize($_FILES['file']['tmp_name']);
if ($size[0]>$maxwidth or $size[1]>$maxheight) {print "$size[0] x $size[1] - не допустимые габариты фото. Допустимо лишь $maxwidth х $maxheight px!"; exit;}

if   ($fotosize>"0" and $fotosize<$max_file_size) {
     copy($_FILES['file']['tmp_name'], $datadir."/".$fotoname);
     print "<br><br>Фото УСПЕШНО загружено: $fotoname (Размер: $fotosize байт)";}
else { print "<B>Файл НЕ ЗАГРУЖЕН - ошибка СЕРВЕРА! Обратитесь к администратору!<B>"; exit;}

$size=getimagesize("$datadir/$fotoname");



// Проверяем размер фото. Если "габариты" меньше заданный в админке 150 х 120 - то ничего с ним не делаем
// блок делает мальное изображение исходной фотки - в качестве превьюшки
if ($size[0]>$smwidth or $size[1]>$smheight) {
$smallfoto="sm-$fotoname";
require ('tumbmaker.php');
if (img_resize("$datadir/$fotoname", "$datadir/$smallfoto", $smwidth, $smheight))  echo ' Изображение масштабировано <B>успешно</B>.'; else  echo '<font color=red><B>Ошибка МАСШАБИРОВАНИЯ фото! Поблемы с GD-библиотекой!</B></font> Обратитесь к Администратору';
} else {$smallfoto="$fotoname";}

// Генерируем рандомный КЛЮЧ - msnum-фото 
do $key=mt_rand(10000,99999); while (file_exists("data/$key.txt"));

// Запись данных:  собщение|имя|емайл|дата|время|фото_малое|фото_большое|размер_Кб|ширина|высота|UID|Рейтинг|Проголосовало|
$text="$msg|$name|$email|$date|$time|$smallfoto|$fotoname|$fotoksize|$size[0]|$size[1]|$key|-1|0|";
$text=replacer($text);

$fp=fopen("$datadir/fotobase.dat","a+");
flock ($fp,LOCK_EX);
fputs($fp,"$text\r\n");
flock ($fp,LOCK_UN);
fclose($fp);
@chmod("$datadir/fotobase.dat", 0644);







$logi='../logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font>User upload new picture in <strong>[ <a href=../gallery/index.php target=_blank>Gallery</a> ]</strong>';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

mail($pochta, "Сообщение на форуме", "Посетитель $name написал на форуме","Content-Type:text/html");











if ($sendmail =="1")  { // отправка СООБЩЕНИЯ админу и на мыло
$headers=null;
$headers.="Content-Type: text/plain; charset=windows-1251\r\n";
$headers.="From: ".$name." <".$email.">\r\n";
$headers.="X-Mailer: PHP/".phpversion()."\r\n";

$host=$_SERVER["HTTP_HOST"]; $self=$_SERVER["PHP_SELF"]; $glurl="http://$host$self";
$allmsg = $glname.chr(13).chr(10).'Загружено новое изображение: '.$glurl.chr(13).chr(10).'Имя: '.$name.chr(13).chr(10).'E-mail: '.$email.chr(13).chr(10).'Сообщение: '.$msg.chr(13).chr(10);
mail("$adminemail", "$glname (сообщение)", $allmsg, $headers); }

//  закачиваем прикреплённый файл на сервер
if (isset($_POST['file'])) {
if (!copy($file, $file.'.bak')) {print ("при копировании файла $file произошла ошибка...<br>\n");}}

print "$shapka <script language='Javascript'>function reload() {location = 'index.php'}; setTimeout('reload()', 1500);</script>
<BR><BR><BR><center><table border=1 cellpadding=7 cellspacing=0 bordercolor=#224488 width=350><tr><td><center>
Спасибо <B>$name</B>, Ваше фото успешно добавлено. Через несколько секунд Вы будете перемещены на главную страницу фотогалереи.
Если этого не происходит, то для возврата нажмите <B><a href='index.php'> здесь</a></B> </td></tr></table></center><BR><BR><BR>";
exit; }





if ($_GET['event']=="showimg") { // показываем КРУПНОЕ ИЗОБРАЖЕНИЕ
 if (!isset($_GET['msnum'])) {exit("$back. Попытка взлома. Хакерам здесь не место.");}
 $msnum=$_GET['msnum']; $msnum=trim($msnum);
 if (!ctype_digit($msnum) or strlen($msnum)!=5) {exit("$back. Попытка взлома. Хакерам здесь не место.");}
$lines=file("$datadir/fotobase.dat"); $maxi=count($lines); $i="0";

do {$dt=explode("|", $lines[$i]); $i++; $number=$i;
    if ($dt[10]===$msnum) { 

$size = getimagesize ("data/".$dt[6]); 

if($size[0]>'900') { $size[0]='900'; $r='900'; } //else if($size[1]>'600') {  $size[1]='600'; $d='600'; }

//if($size[1]>'1200') { $r='360'; } 

if($r<100) { $r='70%'; }


if($file = fopen("http://liozenda.ru/index_save_style.txt", "r")) {  ;} 
while(!feof($file)) { 
if($style= fgets ($file)){;} }
fclose ($file);
?>

<?
if($style<>'1' & $style<>'15') {  }  
echo '<link rel="stylesheet" type="text/css" href="skin-dvduck/style'.$style.'.css">'; 

echo '<center>';
 //include('http://liozenda.ru/opity/style'.$style.'/shapka_file.php'); 
 
$last=$number-2; $dtnext=explode("|",$lines[$last]);

print"$shapka<table border=0 width=80% bgcolor=#202020><tr align=center valign=middle><td class=td><br><A href='index.php?event=showimg&msnum=$dtnext[10]' class=gallery><img src='data/$dt[6]' height='$d'  width='$r' alt='$dt[0]' border=0></A><br><br></td></tr></table>"; $ok="1";
print"<br><table width=80%  bgcolor=#202020><TR align=center><TD class=td width=70>";
if ($number<$maxi) {$next=$number; $dtlast=explode("|",$lines[$next]); print "<A href='index.php?event=showimg&msnum=$dtlast[10]' class=gallery>Предыдущее фото</A>";}
    print "</td><td class=td  width=90><A href='index.php'  class=gallery>Вернуться на главную</A></td><td class=td width=80>";
if ($number>1) {$last=$number-2; $dtnext=explode("|",$lines[$last]); print "<A href='index.php?event=showimg&msnum=$dtnext[10]' class=gallery>Следующее фото</A>";}
print "</td></tr></table></td></tr></table>";    
}

} while($i < $maxi);
if (!isset($ok)) {exit("$back. Данное изображение отсутствует в фотогалерее. Возможно, его удалил админ!");}
exit;}






if ($_GET['event']=="addform" and $whofotoadd==TRUE) { // Выводим ФОРМУ ДЛЯ ЗАГРУЗКИ ФОТКИ
$fotomax=round($max_file_size/10.24)/100; // максимальный размер фото в Кб.

if (is_file("$gal_skin/top.html")) include "$gal_skin/top.html";

print "$shapka <BR><BR><form action='index.php?event=add' method=post name=form enctype=\"multipart/form-data\">
<table width=80% bgcolor=#202020 border=0 class=bakfon align=center cellpadding=2 cellspacing=1><TBODY>
<tr class=toptable><td colspan=3 class=toptable align=center height=25><font style='font-size: 13px'><b>Добавление ФОТО</b></td></tr>
<tr class=row2><td>Имя</td><TD colspan=2><input type=text class=button value='Гость' class=maininput style='FONT-SIZE: 12px; WIDTH: 350px' name=name size=30 maxlength=$maxname></TD></tr>
<tr class=row1><td>Е-майл</td><TD colspan=2><input type=text class=button value='гость@mail.ru' name=email size=26 maxlength=$maxname class=maininput style='FONT-SIZE: 12px; WIDTH: 350px'></td></tr>
<tr class=row2><td>Прикрепить <B>фото</B></td><TD colspan=2><input type=file class=button name=file size=48 style='FONT-SIZE: 11px; WIDTH: 350px'></TD></tr>
<TR class=row1 height=25><TD colspan=3><font color=red>*</font> <B>Максимально</B> разрешённый <B>размер фото: $fotomax</B> Кб.</TD></TR>
<tr class=row2><td><B>Подпись</B> к фото</td><TD colspan=2><textarea cols=51 rows=4 size=500 class=button name=msg maxlength=$maxmsg class=maininput style='FONT-SIZE: 12px; WIDTH: 350px'>Фотка посетителя Гость</textarea></TD></tr>";

if ($antispam==TRUE) nospam(); // АНТИСПАМ !

print"<tr class=row1><td colspan=3 align=center><BR><input type=submit class=button style='FONT-SIZE: 13px;' value='       Добавить       '></form></td></tr>
</table></td></tr></table><BR><BR>"; }





if ($_GET['event']=="coment")  {  // просмотр КОММЕНТАРИЕВ к фото
if (isset($_GET['msnum'])) {$msnum=$_GET['msnum'];} else {exit("$back. Попытка взлома. Хакерам здесь не место.");}
if (!ctype_digit($msnum) or strlen($msnum)<5) {exit("$back. Попытка взлома. Хакерам здесь не место.");}
$lines=file("$datadir/fotobase.dat"); $maxi=count($lines); $i="0";

if (is_file("$gal_skin/top.html")) include "$gal_skin/top.html";

do {$dt=explode("|", $lines[$i]); $i++;
if ($dt[10]===$msnum) { print"<BR><center><td>
<table width=220 cellpadding=1 cellspacing=8 class=maintbl><tr><td>
<table width=219 height=240 cellpadding=1 cellspacing=0 class=seredina><tr><td valign=top align=center>
<font size=-1>Фото № $i</font><BR>
<table border=0 width=210 height=210 cellpadding=1 cellspacing=0><tr><td align=center height=120 colspan=2><a href='index.php?event=showimg&msnum=$msnum' class=gallery><img src='data/$dt[5]' alt='$dt[0]' border=0></a></td></tr>
<TR height=25><TD colspan=2 align=center>$dt[0]<BR></td></tr>
<TR height=25><TD colspan=2 align=center><small>Разрешение: <B>$dt[8] х $dt[9]</B></small><BR></td></tr>
<TR height=25><TD colspan=2 align=center><small>Размер: <B>$dt[7]</B> Кб.</small><BR></td></tr></table></td></tr></table></td></tr></table>"; }
} while($i < $maxi);

if (is_file("$datadir/$msnum.dat")) {
$rlines=file("$datadir/$msnum.dat"); $ri=count($rlines); $bals=0; $all=0;
print"<BR><table class=toptable align=center cellPadding=2 cellSpacing=1 width=560><TR><TD class=main align=center height=25 width=560 class=main colspan=3>Комментарии посетителей:</TD></TR>
<TR class=row1 height=20 align=center><TD>Имя, Емайл, Дата</TD><TD>Текст комментария</TD><TD>Оценка</TD></TR>";
do {$ri--; $edt=explode("|",$rlines[$ri]);
$edt[3]=date("d.m.Y H:i:s",$edt[3]);
if ($edt[4]!=0) {$bals=$bals+$edt[4]; $all++;} else {$edt[4]="-";}
print"<TR class=row1><TD><B>$edt[0]</B><BR>$edt[1]<BR>$edt[3]</TD><TD>$edt[2]</TD><TD align=center>$edt[4]</TD></TR>";
} while($ri>0);
if ($bals==0) {$itogobals="-";} else {$itogobals=round($bals*10/$all)/10;}
print "</TD></TR><TR class=row1><TD colspan=3 align=center height=28><font style='FONT-SIZE: 13px'>Средняя оценка фото: <B>$itogobals</B> / 10</font></TD></TR>
<TR><TD height=35 class=row1 colspan=3 align=center><a href='index.php?event=formacoment&id=&msnum=$msnum' class=gallery><B>Добавить комментарий</B></a></TD></TR></TABLE><BR>";
}} // $event=="coment"











} else {   // ГЛАВНАЯ СТРАНИЦА



if (is_file("$gal_skin/top.html")) include "$gal_skin/top.html";

if (isset($_GET['type'])) $type=$_GET['type']; else $type="0";
if (!ctype_digit($type) or strlen($type)>2) exit("<B>$back. Ошибочный запрос! Поле type может содержать только цифры от 1 до 99!</B>");

$lines=file("$datadir/fotobase.dat"); $itogo=count($lines)-1; $maxi=$itogo; $i=0;

if ($maxi>=0) {

// БЛОК СОРТИРОВКИ фоток в зависимости от ТИПА
/*
   1 - рейтингу;
   2 - кол-ву проголосовавших (самая оживлённая дискусия);
   3 - дате загрузки;
   4 - габаритам (ширина умножить на высота);
   5 - размеру (в байтах);
*/
if ($type!="0") { $p=$itogo;

do {$p--; $dt=explode("|", $lines[$p]);
if ($dt[11]=="") {$dt[11]="-1";}
if ($dt[12]=="") {$dt[12]="0";}
if ($type==1) {$dt[11]=$dt[11]/100; $newlines[$p]="$dt[11]|$dt[0]|$dt[1]|$dt[2]|$dt[3]|$dt[4]|$dt[5]|$dt[6]|$dt[7]|$dt[8]|$dt[9]|$dt[10]|$dt[11]|$dt[12]|";}
if ($type==2) {$newlines[$p]="$dt[12]|$dt[0]|$dt[1]|$dt[2]|$dt[3]|$dt[4]|$dt[5]|$dt[6]|$dt[7]|$dt[8]|$dt[9]|$dt[10]|$dt[11]|$dt[12]|";}
if ($type==3) { $dtt1=explode(".",$dt[3]); $dtt2=explode(":",$dt[4]);
    $then=mktime($dtt2[0],$dtt2[1],0,$dtt1[1],$dtt1[0],$dtt1[2]);
    $today=mktime();  $tekdate=1-100*($today-$then)/$today;
    $newlines[$p]="$tekdate|$dt[0]|$dt[1]|$dt[2]|$dt[3]|$dt[4]|$dt[5]|$dt[6]|$dt[7]|$dt[8]|$dt[9]|$dt[10]|$dt[11]|$dt[12]|";}
if ($type==4) {$tmp=$dt[8]*$dt[9]/100000; $newlines[$p]="$tmp|$dt[0]|$dt[1]|$dt[2]|$dt[3]|$dt[4]|$dt[5]|$dt[6]|$dt[7]|$dt[8]|$dt[9]|$dt[10]|$dt[11]|$dt[12]|";}
if ($type==5) {$tmp=$dt[7]/100; $newlines[$p]="$tmp|$dt[0]|$dt[1]|$dt[2]|$dt[3]|$dt[4]|$dt[5]|$dt[6]|$dt[7]|$dt[8]|$dt[9]|$dt[10]|$dt[12]|";}
} while($p > 0);

usort($newlines,"prcmp");

$p=$itogo;
do {$p--; $dt=explode("|", $newlines[$p]);
$lines[$p]="$dt[1]|$dt[2]|$dt[3]|$dt[4]|$dt[5]|$dt[6]|$dt[7]|$dt[8]|$dt[9]|$dt[10]|$dt[11]|$dt[12]|$dt[13]|\r\n";
} while($p > 0);
}
// КОНЕЦ блока сортировки


// Исключаем ошибку вызова несуществующей страницы
if (!isset($_GET['page'])) $page=1; else {$page=$_GET['page']; if (!ctype_digit($page)) $page=1; if ($page<1) $page=1;}


// собираем блок в зависимости от выбранного типа

$viewtype=""; echo'<center>';
$viewtype="<a href='index.php' class=gallery>без сортировки</a> |"; if ($type=="0") print"<B>$viewtype</B>"; else print"$viewtype";
$viewtype="<a href='index.php?type=1' class=gallery>рейтингу</a> |"; if ($type=="1") print"<B>$viewtype</B>"; else print"$viewtype";
$viewtype="<a href='index.php?type=2' class=gallery>кол-ву комментариев</a> |"; if ($type=="2") print"<B>$viewtype</B>"; else print"$viewtype";
$viewtype="<a href='index.php?type=3' class=gallery>дате загрузки</a> |"; if ($type=="3") print"<B>$viewtype</B>"; else print"$viewtype";
$viewtype="<a href='index.php?type=4' class=gallery>разрешению</a> |"; if ($type=="4") print"<B>$viewtype</B>"; else print"$viewtype";
$viewtype="<a href='index.php?type=5' class=gallery>размеру в байтах</a>"; if ($type=="5") print"<B>$viewtype</B>"; else print"$viewtype";



 if($par<>'TAXUS' & $par<>'LEXUS') { ?><table width=100% bgcolor=#202020><tr><td><br><br><br><br><br><br><center>EDDEX VOTING MAINET FIOX FAORA NEVT<br><br>


<form  name="formtext" method='post' action='index.php'>

<font size=1 color="#e4e4e4">DOTS:</font><input type="text"  class="button" maxlength=20 size=40% name='par' value=''> 
  
<input type='submit' class="button" value='              Enter              '>
</form>
<br><br><br><br><br><br>
</center></tD></tr></table>
 <? } ?>



 <? 


if($_POST['par']) { if($par=='TAXUS') {

 $ip=$_SERVER['REMOTE_ADDR'];

$file = fopen("/home/l/liozendaru/public_html/chat_ip/chat.db", "a"); 
$save='<center><table width=94% class=button border=1><tr><td><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em><a href=#>System:</a> <strong> User-IP: '.$ip.'  write parol on knopka GALEREYA: '.date("G:i:s ").': '.$text.'&nbsp;Parol veren</em></font></td></tr></table></center>';

 if(!fwrite ($file,$save." ")) {echo '<br>No save>index6';}
                             
fclose ($file); 

 }                                              }


if($_POST['par']) { if($par<>'TAXUS') {

 $ip=$_SERVER['REMOTE_ADDR'];

$file = fopen("/home/l/liozendaru/public_html/chat_ip/chat.db", "a"); 
$save='<center><table width=94% class=button border=1><tr><td><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em><a href=#>System:</a> <strong> User-IP: '.$ip.'  write parol on knopka GALEREYA: '.date("G:i:s ").': &nbsp;Parol ne veren: '.$par.'</em></font></td></tr></table></center>';

 if(!fwrite ($file,$save." ")) {echo '<br>No save>index6';}
                             
fclose ($file); 

 }
                                                      }

 if($r=='5') { 

 $t=$_SERVER['REMOTE_ADDR']; 
 
 

//if ( !file_exists("/home/l/liozendaru/public_html/chat_niz2/moi_ip.txt") ) exit("файл base не существует");
//if($file = fopen("/home/l/liozendaru/public_html/chat_niz2/moi_ip.txt", "r")) {  $b4=0; } 


//if($ip= fgets ($file)) {$b4++;} 

//fclose ($file); 


?>



 <? 

if($t==$ip || $t!=$ip) {  

// Выводим qq фото на текущей странице
$maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) {$page=$maxpage;}

// формируем переменную $pageinfo - со СПИСКОМ СТРАНИЦ
$pageinfo=""; $addpage=""; $maxpage=ceil(($maxi+1)/$qq); if ($page>$maxpage) $page=$maxpage;
$pageinfo.="<div style='padding:6px;' align=center class=pgbutt>Страницы: &nbsp;";
if ($page>3 and $maxpage>5) $pageinfo.="<a href=index.php>1</a> ... ";
$f1=$page+2; $f2=abs($page-2); if ($f2=="0") $f2=1; if ($page>=$maxpage-1) $f1=$maxpage;
if ($maxpage<=5) {$f1=$maxpage; $f2=1;}
for($i=$f2; $i<=$f1; $i++) { if ($page==$i) $pageinfo.="<B>$i</B> &nbsp;"; 
else {if ($i!=1) $addpage="?page=$i"; $pageinfo.="<a href=index.php$addpage>$i</a> &nbsp;";} }
if ($page<=$maxpage-3 and $maxpage>5) $pageinfo.="... <a href=index.php?page=$maxpage>$maxpage</a>";
$pageinfo.='</div>';


print"<br><br>$pageinfo";

if ($msginout=="1") 
{ $fm=$qq*($page-1); if ($fm>$maxi) $fm=$maxi-$qq;
  $lm=$fm+$qq; if ($lm>$maxi) $lm=$maxi+1; }
else 
{ $fm=$maxi-$qq*($page-1); if ($fm<"0") $fm=$qq;
  $lm=$fm-$qq; if ($lm<"0") $lm="-1"; }

echo'<table border=0 width=830 align=center cellpadding=0 cellspacing=15><TR align=center>';

do { $dt = explode("|","$lines[$fm]"); $msnum=$dt[10];

if ($msginout=="1") $fm++; else $fm--;

$tp=$fm; $teknum=$maxi-$tp;
                                          
  


print"<td>
<table width=260 cellpadding=1 cellspacing=6 class=maintbl><tr><td>
<table width=250 height=280 cellpadding=1 cellspacing=0 class=seredina><tr><td valign=top align=center>
<font size=-1>Фото № $teknum</font><BR>

<table width=210 height=210 cellpadding=0 cellspacing=0><tr><td align=center height=120 colspan=2>
<a href='index.php?event=showimg&msnum=$msnum' class=gallery><img src='data/$dt[5]' alt='$dt[0]' border=0></a></td></tr>
<TR height=50><TD colspan=2 align=center>$dt[0]<BR></td></tr>
<TR height=25><TD colspan=2 align=center>[$dt[8] х $dt[9]] :: <B>$dt[7]</B> Кб.</small><BR></td></tr>";

if (is_file("$datadir/$msnum.dat"))  {
$rlines=file("$datadir/$msnum.dat"); $ri=count($rlines); $bals=0; $all=0;
print"<TR><TD colspan=2 align=center>Комментарии [<B><a href='index.php?event=coment&msnum=$msnum' class=gallery> $ri </a></B>]</TD></TR>";
do {$ri--; $edt=explode("|",$rlines[$ri]); $edt[3]=date("d.m.Y H:i:s",$edt[3]); if ($edt[4]!=0) {$bals=$bals+$edt[4]; $all++;} else {$edt[4]="-";} } while($ri>0);
if ($bals==0) {$itogobals="+</B>";} else {$itogobals=round($bals*10/$all)/10; $itogobals.="</B>";}
print "<TR><TD colspan=2 align=center>Оценка [<B><a href='index.php?event=formacoment&msnum=$msnum' class=gallery>$itogobals</a>]</TD></TR>";
} else {print"<TR><TD colspan=2 align=center>Комментарии [ <B><a href='index.php?event=formacoment&msnum=$msnum' class=gallery>+</a></B> ]</TD></TR>
<TR><TD colspan=2 align=center>Оценка [<B><a href='index.php?event=formacoment&msnum=$msnum' class=gallery>+</a></B>]</TD></TR>
";}

if ($dt[2]!="") $dt[2]="<a href='mailto:$dt[2]' class=gallery>$dt[1]</a>"; else $dt[2]="$dt[1]";
print"<TR height=30><TD><b>$dt[2]</b></TD><TD align=right><small><b>$dt[3]</B></small><BR><small>$dt[4]</small></td></tr>
</table>
</td></tr></table>
</td></tr></table>
</td>";



$cm=1; // ДЕЛИМ ВСЕ РУБРИКИ на столбцы
$zz=$maxi-$fm/$colrubperpage;
if ((round(($maxi-$fm)/$colrubperpage))==(($maxi-$fm)/$colrubperpage)) {$cm++; print "</TR><TR>";}

if ($msginout=="1") {$whm=$fm; $whe=$lm;} else {$whm=$lm; $whe=$fm;}
} while($whm < $whe);

echo'</table>';

}}

print"$pageinfo";

} else print"<center><BR><BR><BR><BR><BR><b>Нет фото в базе!</b><br>Добавьте своё фото по ссылке вверху страницы.<BR><BR><BR><BR><BR>";
$itogofoto=$maxi+1; print"<br><center>Всего фото: <B>$itogofoto</B></center>";


} // if ($maxi>=0)


print "</td></tr></table></td></tr></table>";

if (is_file("$gal_skin/bottom.html")) include "$gal_skin/bottom.html";
?>

<center></body></html>