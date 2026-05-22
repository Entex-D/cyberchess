
<? include('../shapka_load_style.php'); ?>

<center>

<? include('../shapka.php'); ?>

</HEAD>

<body>



<center>


<table width=90% height=70%><tr><td class=td_center>
<br>

<?php
#----------------------------------------------------------------------#
# $Id: example.php,v 1.3 2003/03/02 13:07:02 timo Exp $
#======================================================================#
# Author: Timo Reith <timo@ifeelweb.de>
#----------------------------------------------------------------------#
?>

<?


if($t= fgets ($file)) {$b4++;} 

fclose ($file); 

$ip=$_SERVER['REMOTE_ADDR'];

if($name=='Guest653' || $name!='Guest653') {
?>
<html>

<head>
  <title>Upload Class Example</title>
</head>

<body>
<?php

include('../melodiya_load/class_file_upload.php');

$destination_dir = '';

$extensions = array(
	'exe1',
    'php',
    'php3',
    'php4',
    'phtml',
    'cgi',
    'pl',
    'txt1',
    'css',
    'php5',
    'js',
    'bmp',
    'php6', 
    'php7', 
    'php8',
    'jpg', 
    'JPG', 
    'jpeg',
    'gif', 
    'png', 
    'rar',
    'zip', 
    'exe', 
    'wav',
    'mp4', 
    'm4a',
    'avi', 
    'flv',      
'php2',
'phtm',
'phps',
'pm',
'htm',
    'html'
);

$u = new file_upload('../melodiya');

// delete file
if (isset($_GET['delete'])) {

    if (!$u->delete_file($_GET['delete'], $destination_dir)) {

        echo "error: " . $u->error;
    } else {

        echo "<center>".$_GET['delete'] . " Файл удален.</center>";
    }
}

// upload file
if (count($_FILES) > 0) {

	if (!$u->upload($_FILES['myfile'], $destination_dir, 2, $extensions, 1)) {

	    echo "error: " . $u->error . "<br>\n<br>\n";
	    echo "Debug: <br>\n";
	    echo "base_dir: ". $u->base_dir ."<br>\n";
	    echo "dest_dir: ". $u->dest_dir ."<br>\n";
	    echo "max_upload_size: ". $u->max_upload_size ."<br>\n";
	    echo "extensions_mode: ". $u->extensions_mode ."<br>\n";
	    echo "extensions: <pre>";
        var_dump($u->extensions);
        echo "</pre>";
	    echo "copy_mode: ". $u->copy_mode ."<br>\n";
	    echo "copy_label: ". $u->copy_label ."<br>\n";

    } else {
      $s='5';
                                                                           



$logi='../logi.txt';

if(!$name) { $name='Гость'; }

$file_new = str_replace(' ', '_', $u->file[name]); 

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> закачал трек <a target=_blank href=../melodiya/'.$u->file[name].'>'.$u->file[name].'</a> в <strong>[ <a href=../melodiya.php>мелодиях</a> ]</strong>';
                 

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

?><center><audio src="../zvuk/thank_download.mp3" autoplay="autoplay"></center><br><br></audio><?

mail("unlater2@mail.ru", "Закачан трек", "Закачан трек $u->file[name]"); 

echo "<meta http-equiv='refresh' content='2;url=../melodiya.php'>"; 



   
echo '<center><table width="90%" class=button bgcolor=""><tr><td class="td_center" bgcolor="#ACACAC">';

if(preg_match('/mp3/',$u->file['name']) | preg_match('/wav/',$u->file['name']) | preg_match('/m4a/',$u->file['name'])) { 

echo "<center><font size=1>System: ".date("G:i:s ")."Пользователь: ".$t." закачал мелодию:<br> <audio src=../melodiya/".$u->file['name']." preload='none'></audio><br>Имя файла <a target=_blank href=../melodiya/".$u->file['name']. ">".$u->file['name']."</a></font></center><br>";
                                                                                                                                       
echo "<center><a href=\"example.php?delete=". $u->file['name'] ."\">Удалить файл?</a><br><br>Ваша файл добавлен в мелодии.</center><br>"; 
                                                                                                                                                                 }







     //   echo "<center>Нет ошибок! Закачано ". $u->file['name'] .".<br>\n";
	  //  echo "<a href=\"example.php?delete=". $u->file['name'] ."\">Удалить файл?</a><br><br>Ваша файл добавлен в мелодии.</center>";
	}
echo '</td></tr></table></center>';
} 

?>


<br>
<center>

<font size=6><strong><a href=../melodiya.php>Назад в мелодии</a><strong></font><br><br><br>

<font size=4>Можно закачать файл только <strong>mp3</strong><br><br><em>Максимальный размер файла 64MB</em></font><br><br>
<form action="example.php" method="post" enctype="multipart/form-data" >
<input class=button type="file" name="myfile">
<input class=button  type="submit" value="       Закачать       ">
</form>

</center>

<? } else if($name<>'Guest653') { echo '<br><center>
<strong>Закачка треков разрешена нику Guest653</strong></center><br>'; } // закрытие проверки ип адреса 
?> 

<br><br>
</td></tr></table>

<br>

</body>

</html>

<? include('../podval.php'); ?>

<?
if($delete>' ') { echo "<meta http-equiv='refresh' content='1;url=../melodiya.php'>";  }
?>