<? include('../shapka_load_style.php'); ?>



<?

if(isset($_COOKIE['par'])) { // если считано имя 

?>


<center><table width=100%><tr><td class=td_center>

<form  name="formtext" method='post' action='writemsg.php'>

<center>

 <font size=1 color="#e4e4e4">Текст:</font><input type="text" class="button"  size=90% maxlength=440 name="chatmsg" value="" style:bgcolor=black>
<input type='submit' class="button" value='        Отправить         '> 
</form>

</center>
</td></tr></table></center>



</body>
</html>

<? } ?>