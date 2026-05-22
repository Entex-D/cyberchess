









<center>
<? include('shapka_load_style.php'); ?>
<? include('shapka.php'); ?>






<center>



<table width=90%><tr>

<td class=td_center width=><br><center><font size=5 color=#DCDCDC><strong><em><a href=#>Слежка за двумя чатами</a></em></strong></font><br><br><td class=td_center width=><br><br><br><center></center></td>

</tr></table>

<br>









<table width=90% height=60%><tr>
<td class=td_center><center><font size=4><br><strong>

<table border=3 width=90% height=60%><tr>
<td bgcolor=#404040><center><font size=4><br><strong>



<center>
В чате чебуречная 
<script type="text/javascript" language="JavaScript" src="https://api.chatovod.ru/call?chatname=cheburachka&method=getOnlineUsersCountByChat&retvar=onlineCount"></script>
<script type="text/javascript" language="JavaScript">
  document.write(onlineCount);

kolvo=onlineCount;
</script>
 человек:

<br>

<script type="text/javascript" language="JavaScript" src="https://api.chatovod.ru/call?chatname=cheburachka&method=getOnlineUsersByChat&retvar=onlineUsers"></script>
<script type="text/javascript" language="JavaScript">
  for(var i=0;i<onlineUsers.length;i++) {
    if (i != 0) document.write(", ");
    var u = onlineUsers[i];
    document.write(u.nick.replace(/&/gi, "&amp;").replace(/</gi, "&lt;").replace(/>/gi, "&gt;"));
  }
</script>









<br><br>
В чате КПСС 
<script type="text/javascript" language="JavaScript" src="https://api.chatovod.ru/call?chatname=kpsss&method=getOnlineUsersCountByChat&retvar=onlineCount"></script>
<script type="text/javascript" language="JavaScript">
  document.write(onlineCount);

kolvo2=onlineCount;
</script>
 человек:

<br>

<script type="text/javascript" language="JavaScript" src="https://api.chatovod.ru/call?chatname=kpsss&method=getOnlineUsersByChat&retvar=onlineUsers"></script>
<script type="text/javascript" language="JavaScript">
  for(var i=0;i<onlineUsers.length;i++) {
    if (i != 0) document.write(", ");
    var u = onlineUsers[i];
    document.write(u.nick.replace(/&/gi, "&amp;").replace(/</gi, "&lt;").replace(/>/gi, "&gt;"));
  }
</script>





<script>

//  document.write(kolvo,"<br>");
//  document.write(kolvo2,"<br>");

if(kolvo>kolvo2) { raznica=kolvo-kolvo2; type=1; document.cookie = "edis=" + type; document.cookie = "rraznica=" + raznica; } else
if(kolvo2>kolvo) { raznica=kolvo2-kolvo; type=2;  document.cookie = "edis=" + type; document.cookie = "rraznica=" + raznica; } 
 if(kolvo2==kolvo) { type=3;  document.cookie = "edis=" + type; document.cookie = "rraznica=" + 0; } 
   
 // document.write(raznica);

</script>


<? 

if($edis==1 && $tede==4 && $tase!=4) { echo '<br><br><br>В чате "Чебуречная" больше человек, чем в чате "КПСС", разница '.$rraznica.' человека'; ?><audio src="./zvuk/4bur.mp3" autoplay="autoplay"></audio><? }

if($edis==2 && $tede==4 && $tase!=4) { echo '<br><br><br>В чате "КПСС" больше человек, чем в чате "Чебуречная", разница '.$rraznica.' человека'; ?><audio src="./zvuk/kpcc.mp3" autoplay="autoplay"></audio><? }

if($edis==3 && $tede==4 && $tase!=4) { echo '<br><br><br>В чатах одинаковое количество посетителей, разница '.$rraznica.' человек'; ?><audio src="./zvuk/odinakovo.mp3" autoplay="autoplay"></audio><? }

?>




<?
if($tase==4) { 

if($edis==1) { echo '<br><br><br>В чате "Чебуречная" больше человек, чем в чате "КПСС", разница '.$rraznica.' человека'; }

if($edis==2) { echo '<br><br><br>В чате "КПСС" больше человек, чем в чате "Чебуречная", разница '.$rraznica.' человека'; }

if($edis==3) { echo '<br><br><br>В чатах одинаковое количество посетителей, разница '.$rraznica.' человек';  }

?><audio src="./zvuk/rraznica_<? echo $rraznica; ?>.mp3" autoplay="autoplay"></audio>

<? }
?>






<br><br><br><br>

<a target=_blank href=https://cheburachka.chatovod.ru>Чат Чебуречная</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a target=_blank href=https://kpsss.chatovod.ru>Чат КПСС</a>

</center>




</strong><br><br></font></center></td></tr></table>

<table width=90%>

<tr><td class=td_center>
<center>




</center>

</td></tr></table>
</td></tr></table>

<br>





<? include('podval.php'); ?>


<? echo "<meta http-equiv='refresh' content='600;url=chatovod.php'>"; ?>
<? if($tede!=4) { echo "<meta http-equiv='refresh' content='3;url=chatovod.php?tede=4'>"; } ?>
<? if($tede==4 && $tase!=4) { echo "<meta http-equiv='refresh' content='3;url=chatovod.php?tede=4&tase=4'>"; } ?>