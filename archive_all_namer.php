<? if(isset($_COOKIE['name'])) { if($name==$namer) { $reset='1'; } } ?>
<? if(!$namer) { $namer=$name; } ?>

<HTML><HEAD><title>Список игроков</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>

<? include('./shapka_load_style.php'); ?>


<center>

<? include('./shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><font size=2><strong><em>

<? include('./archive_namer2.php'); ?>

</em></strong></td></tr></table><br>

<center>
<? include('./podval.php'); ?>
</center>