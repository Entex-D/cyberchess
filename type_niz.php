<? 
if($tip=='1') {
if(isset($_COOKIE['nomer_doski'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski.''; } }
                   }
if($tip=='2') {
if(isset($_COOKIE['nomer_doski2'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski2.''; } }
                   }

if($tip=='3') {
if(isset($_COOKIE['nomer_doski3'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski3.''; } }
                   }

if($tip=='4') {
if(isset($_COOKIE['nomer_doski4'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski4.''; } }
                   }

if($tip=='5') {
if(isset($_COOKIE['nomer_doski5'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski5.''; } }
                   }

if($tip=='6') {
if(isset($_COOKIE['nomer_doski6'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski6.''; } }
                   }

if($tip=='7') {
if(isset($_COOKIE['nomer_doski7'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski7.''; } }
                   }

if($tip=='8') {
if(isset($_COOKIE['nomer_doski8'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski8.''; } }
                   }

if($tip=='9') {
if(isset($_COOKIE['nomer_doski9'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski9.''; } }
                   }

if($tip=='10') {
if(isset($_COOKIE['nomer_doski10'])) { //echo '<br>считан номер доски='.$nomer_doski;
if($name==$doska || $name!=$doska) { $sabe='&nbsp;&nbsp;&nbsp;доска № '.$nomer_doski10.''; } }
                   }

if($tip=='1') { $edex='Меркурий'; }
if($tip=='2') { $edex='Венера'; }
if($tip=='3') { $edex='Земля'; }
if($tip=='4') { $edex='Марс'; }
if($tip=='5') { $edex='Юпитер'; }
if($tip=='6') { $edex='Сатурн'; }
if($tip=='7') { $edex='Уран'; }
if($tip=='8') { $edex='Нептун'; }
if($tip=='9') { $edex='Солнце'; }
if($tip=='10') { $edex='Луна'; }

//echo '$tip = '.$tip;
//echo '<br>name='.$name;
//echo '<br>doska='.$doska;
$t=$_SERVER["REMOTE_ADDR"];

  $t_ip = preg_replace("|[.]+|", "_", $t);
$t_ip=$t_ip.'_';

$igr=$doska;
  $igr = preg_replace("|[_]+|", "", $igr);

if($tip=='1') { $soko='<a target=_blank href=variant1/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>';  
} else if($tip=='2') { $soko='<a target=_blank href=variant2/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>'; 
} else if($tip=='3') { $soko='<a target=_blank href=variant3/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>'; 
} else if($tip=='4') { $soko='<a target=_blank href=variant4/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>'; 
} else if($tip=='6') { $soko='<a target=_blank href=variant6/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>'; 
} else if($tip=='7') { $soko='<a target=_blank href=variant7/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>';
} else if($tip=='8') { $soko='<a target=_blank href=variant8/archive_doski_tip4.php?namer='.$igr.'>'.$igr.'</a>';  } else $soko=$igr;

if($doska==$name) { $soko=$igr; } //закомментить если надо показать архив досок

if($name) { $name_tip1=$name; } else $name_tip1=$t_ip; 



if($exxo[1]>' ' && $exxo[1]!='Comp' && $exxo[2]!='Comp' && $exxo[2]=='0') { 

if($tip=='1') { $friend='<a href=?doska='.$doska.'&tip=1&nomer='.$nomer_doski.'>ссылка для друга</a>'; }
if($tip=='2') { $friend='<a href=?doska='.$doska.'&tip=2&nomer2='.$nomer_doski2.'>ссылка для друга</a>'; }
if($tip=='3') { $friend='<a href=?doska='.$doska.'&tip=3&nomer3='.$nomer_doski3.'>ссылка для друга</a>'; }
if($tip=='4') { $friend='<a href=?doska='.$doska.'&tip=4&nomer4='.$nomer_doski4.'>ссылка для друга</a>'; }
if($tip=='5') { $friend='<a href=?doska='.$doska.'&tip=5&nomer5='.$nomer_doski5.'>ссылка для друга</a>'; }
if($tip=='6') { $friend='<a href=?doska='.$doska.'&tip=6&nomer6='.$nomer_doski6.'>ссылка для друга</a>'; }
if($tip=='7') { $friend='<a href=?doska='.$doska.'&tip=7&nomer7='.$nomer_doski7.'>ссылка для друга</a>'; }
if($tip=='8') { $friend='<a href=?doska='.$doska.'&tip=8&nomer8='.$nomer_doski8.'>ссылка для друга</a>'; }

}

if($exxo[1]>' ') { 

if($tip=='1') { $friend2='<a href=variant1/archive_d_tip4_uvel.php?namer='.$doska.'&tip=1&nomer='.$nomer_doski.'>Поделиться игрой</a>'; }
if($tip=='2') { $friend2='<a href=variant2/archive_d_tip4_uvel.php?namer='.$doska.'&tip=2&nomer2='.$nomer_doski2.'>Поделиться игрой</a>'; }
if($tip=='3') { $friend2='<a href=variant3/archive_d_tip4_uvel.php?namer='.$doska.'&tip=3&nomer3='.$nomer_doski3.'>Поделиться игрой</a>'; }
if($tip=='4') { $friend2='<a href=variant4/archive_d_tip4_uvel.php?namer='.$doska.'&tip=4&nomer4='.$nomer_doski4.'>Поделиться игрой</a>'; }
if($tip=='5') { $friend2='<a href=variant5/archive_d_tip4_uvel.php?namer='.$doska.'&tip=5&nomer5='.$nomer_doski5.'>Поделиться игрой</a>'; }
if($tip=='6') { $friend2='<a href=variant6/archive_d_tip4_uvel.php?namer='.$doska.'&tip=6&nomer6='.$nomer_doski6.'>Поделиться игрой</a>'; }
if($tip=='7') { $friend2='<a href=variant7/archive_d_tip4_uvel.php?namer='.$doska.'&tip=7&nomer7='.$nomer_doski7.'>Поделиться игрой</a>'; }
if($tip=='8') { $friend2='<a href=variant8/archive_d_tip4_uvel.php?namer='.$doska.'&tip=8&nomer8='.$nomer_doski8.'>Поделиться игрой</a>'; }

}

$rt='6';
if($rt<>'5') {
echo '<font size=2><strong>&nbsp;&nbsp;<em> Доска '.$edex.' игрока <b> '.$soko.'</b></em></strong></font><font size=2><em> - вариант '.$tip.$sabe.'&nbsp;&nbsp;'.$friend.'&nbsp;&nbsp;'.$friend2.'</em></font> 
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;'; ?>

<font size=2>
<? if($tip!='1') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=1>Вариант #1</a> <? } else if($tip=='1') { ?>&nbsp; <a href=#>[[</a> Вариант #1 <a href=#>]]</a> <? } ?>
<? if($tip!='2') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=2>Вариант #2</a> <? } else if($tip=='2') { ?>&nbsp; <a href=#>[[</a> Вариант #2 <a href=#>]]</a> <? } ?>
<? if($tip!='3') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=3>Вариант #3</a> <? } else if($tip=='3') { ?>&nbsp; <a href=#>[[</a> Вариант #3 <a href=#>]]</a> <? } ?>
<? if($tip!='4') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=4>Вариант #4</a> <? } else if($tip=='4') { ?>&nbsp; <a href=#>[[</a> Вариант #4 <a href=#>]]</a> <? } ?>
<? if($tip!='5') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=5>Вариант #5</a> <? } else if($tip=='5') { ?>&nbsp; <a href=#>[[</a> Вариант #5 <a href=#>]]</a> <? } ?>
<? if($tip!='6') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=6>Вариант #6</a> <? } else if($tip=='6') { ?>&nbsp; <a href=#>[[</a> Вариант #6 <a href=#>]]</a> <? } ?>
<? if($tip!='7') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=7>Вариант #7</a> <? } else if($tip=='7') { ?>&nbsp; <a href=#>[[</a> Вариант #7 <a href=#>]]</a> <? } ?>
<? if($tip!='8') { ?>&nbsp;<a href=?doska=<? echo $name_tip1; ?>&tip=8>Вариант #8</a> <? } else if($tip=='8') { ?>&nbsp; <a href=#>[[</a> Вариант #8 <a href=#>]]</a> <? } ?>
</font>

<? echo '<br><br></CENTER>';
} else //echo '<font size=3><strong>&nbsp;&nbsp; <em>Доска игрока <b> '.$doska.'</b></em></strong></font><br><br>&nbsp;&nbsp;<strong>Редактирование доски на логины Guest * 28.08.2018 *</strong><br>'; 


?>