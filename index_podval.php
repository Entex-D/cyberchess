<?
if(!$par) { include ('general_record.php'); }
?>



<table width=92%>
    
    <tr><td class=td_center><br><centerl><font size=2><strong><em>

<? include('pravila.php'); ?>

<br></td>
</tr>


</table>

<br>


<table width=92%>
    <tr><td class=td_center><br>

<? include('donate.php'); ?>

<br></td></tr>
</table><br>


<? if($tip==200) { ?>
<table width=90%>

<? include ('chat/chat.php'); ?>

</table>
<br>
<? } ?>

<? include('./guest/name_read.php'); ?>

<? include('podval.php'); ?>