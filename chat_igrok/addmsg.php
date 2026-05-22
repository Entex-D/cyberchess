<?
if(isset($_COOKIE['doska_quq'])) { if(!preg_match('/^[^a-zA-Z]+$/',$doska_quq) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska_quq)) { $doska=$doska_quq; echo ''; echo ''; }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; }}
if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $smotrit=$name; }} //для записи внизу кто смотрит
//echo '$name= '.$name;

?>

<? include('../shapka_load_style.php'); ?>



<?

$t=$_SERVER["REMOTE_ADDR"];
?>

<center>

<table width=100% align=center><tr><td class=td_center>




<center>
<form  name="formtext" method='post' action='writemsg.php'>


 <font size=1 color="#e4e4e4"><? echo 'Персональный чат игрока <strong>'.$doska.' </strong>'; ?></font><input type="text" class="button"  size=100% maxlength=230 name="chatmsg" value="" style:bgcolor=black>
<input type='submit' class="button" value='        Отправить         '>
</form>

</center>
</td></tr></table></center>



</body>
</html>