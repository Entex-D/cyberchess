<?

 include('./variant1/random_figura/hod_vertical_load.php'); 
 include('./variant1/random_figura/config_figura.php'); 

?>


<? 

if($exxo[11]=='Черные') { $texto='Черным'; }
if($exxo[11]=='Белые') { $texto='Белым'; }

?>

<center>
<table width=60%><tr><td class=td_centerl bgcolor=#444444><center><font size=1><br><strong><? echo $texto; ?> ход разрешен этими фигурами:</strong><br><br></font></center></td></tr></table>



<table width=60%>

<? if($exxo[11]=='Черные') { ?>

<tr>

<td class=td_centerl  bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $figura_black1.' [ '.$load_black[0].' ]'; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $figura_black2.' [ '.$load_black[1].' ]'; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $figura_black3.' [ '.$load_black[2].' ]'; ?></strong><br><br></font></center></td>


</tr>

<? } ?>


<? if($exxo[11]=='Белые') { ?>

<tr>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $figura_white1.' [ '.$load_white[0].' ]'; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $figura_white2.' [ '.$load_white[1].' ]'; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $figura_white3.' [ '.$load_white[2].' ]'; ?></strong><br><br></font></center></td>


</tr>

<? } ?>




</table>
</center>