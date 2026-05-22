<?

 include('./variant1/hod_vertical/hod_vertical_load.php'); 

?>


<? 

if($exxo[11]=='Черные') { $texto='Черным'; }
if($exxo[11]=='Белые') { $texto='Белым'; }

?>

<center>
<table width=40%><tr><td class=td_centerl bgcolor=#444444><center><font size=1><br><strong><? echo $texto; ?> разрешен ход с вертикалей:</strong><br><br></font></center></td></tr></table>



<table width=40%>

<? if($exxo[11]=='Черные') { ?>

<tr>

<td class=td_centerl  bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_black[0]; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_black[1]; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_black[2]; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_black[3]; ?></strong><br><br></font></center></td>

</tr>

<? } ?>


<? if($exxo[11]=='Белые') { ?>

<tr>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_white[0]; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_white[1]; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#606060 width=25%><center><font size=2><br><strong><? echo $load_white[2]; ?></strong><br><br></font></center></td>

<td class=td_centerl bgcolor=#505050 width=25%><center><font size=2><br><strong><? echo $load_white[3]; ?></strong><br><br></font></center></td>

</tr>

<? } ?>




</table>
</center>