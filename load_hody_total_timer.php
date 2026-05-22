<?
// проверяем черные ли владелец доски,и белые ли игрок

echo '<table width=100% align=center bgcolor=#101010>
<tr><td width=5%></td><td class=td_center><center>';


?>

<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>

<script type="text/javascript">
$(function(){
$("#blinkingText").hide();
setTimeout(function(){$("#blinkingText").show();setInterval(function()
{$("#blinkingText").toggle();},29000)},30000);
});
</script>





<center>
<font size=3><em>
<?
if($hod_dostup=='1') {   echo '<p id="blinkingText">Ваш ход ( белыми )</p>'; $no='1';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script>
<? } else 
if($hod_dostup=='2') {   echo '<p id="blinkingText">Ваш ход ( черными )</p>'; $no='1';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else 
if($exxo[9]=='0' && $hod_dostup=='3') { echo 'Первыми ходят белые';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else
 if($hod_dostup=='4') { echo 'Партия завершена,белые выиграли'; $no='2';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else 
 if($hod_dostup=='5') { echo 'Партия завершена,черные выиграли'; $no='2';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else $no='2';
 
  if($no=='2') {  echo '<p id="blinkingText">Не ваш ход</p>'; $hod_shto='1000'; $hod_kuda='1000'; } 
  ?>

</center></td></tr></table></center>