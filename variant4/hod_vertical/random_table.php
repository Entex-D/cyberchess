<?
if($shah_off[0]=='0') { if($exxo[21]<'10' && $exxo[22]<'10') {

if($shah_off[1]=='2'){ $rede='фигур'; } 
if($shah_off[1]=='1'){ $rede='вертикалей'; } 

 ?>
<center>
<table width=40%><tr><td class=td_centerl bgcolor=#444444><center><font size=1><br><strong>Игра с рандомом <? echo $rede; ?>

<a href=index.php?doska=<? echo $doska; ?>&tip=<? echo $tip; ?>&nomer4=<? echo $nomer_doski4; ?>&random=no>[ отказаться ]</a>

</strong><br><br></font></center></td></tr></table>


</center>
<?  
              
?><center>
<table width=40%><tr><td class=td_centerl bgcolor=#606060><center><font size=1><br><strong>Если баллов >10 и до первого шаха</strong><br><br></font></center></td></tr></table>
<?
                                                                       }
                            } 

if($shah_off[0]=='1') {
       
?><center>
<table width=40%><tr><td class=td_centerl bgcolor=#444444><center><font size=1><br><strong>Рандом  отключен</strong><br><br></font></center></td></tr></table>
<?

                               }

?>