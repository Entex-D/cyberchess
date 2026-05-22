<? include('../vsego_dosok_archive.php'); ?>

<table width=90%><tr>

<? if($namer==$name) { ?>

<td class=td_center><center><font size=4><br><strong><a href=#>[[</a> Мой список досок варианта #<? echo $tip; ?> <a href=#>]]</a> </strong></font>&nbsp;&nbsp;
               <font size=2><em><br><br><? echo $dosok_vsego; ?></em></font>
               <font size=3><em><? echo $dosok_variant; ?></em></font>
               <font size=2><em><? echo $play_all_doski; ?></em></font>
<? } ?>

<? if($namer!=$name) { ?> 

<td class=td_center><center><font size=4><br><strong>Список досок варианта #<? echo $tip; ?> <? echo $namer; ?></strong></font>&nbsp;&nbsp;

            <font size=2><strong>( <a href=../variant<? echo $tip; ?>/archive_doski_tip4.php?namer=<? echo $name; ?>&tip=<? echo $tip; ?>>Перейти на свой архив</a> ) </strong></font>
<font size=2><em><br><br><? echo $dosok_vsego; ?></em></font>
               <font size=3><em><? echo $dosok_variant; ?></em></font>
               <font size=2><em><? echo $play_all_doski; ?></em></font>
<? } ?>

<br><br></center></td></tr></table>

<br>
















<table width=90%><tr>
<td class=td_center><center><font size=3><br><strong>
 
<? if($tip!='1') { ?> [ <a href=../variant1/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=1>Вариант #1</a> ]
                  <? } else if($tip=='1') { ?> <a href=#>[[</a> Вариант #1 <a href=#>]]</a> <? } ?>
    
&nbsp;&nbsp;&nbsp;&nbsp;

<? if($tip!='2') { ?> [ <a href=../variant2/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=2>Вариант #2</a> ]
                  <? } else if($tip=='2') { ?> <a href=#>[[</a> Вариант #2 <a href=#>]]</a> <? } ?>

&nbsp;&nbsp;&nbsp;&nbsp;
    
<? if($tip!='3') { ?> [ <a href=../variant3/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=3>Вариант #3</a> ]
                  <? } else if($tip=='3') { ?> <a href=#>[[</a> Вариант #3 <a href=#>]]</a> <? } ?>

&nbsp;&nbsp;&nbsp;&nbsp;
    
<? if($tip!='4') { ?> [ <a href=../variant4/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=4>Вариант #4</a> ]
                  <? } else if($tip=='4') { ?> <a href=#>[[</a> Вариант #4 <a href=#>]]</a> <? } ?>

&nbsp;&nbsp;&nbsp;&nbsp;
    
<? if($tip!='5') { ?> [ <a href=../variant5/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=5>Вариант #5</a> ]
                  <? } else if($tip=='5') { ?> <a href=#>[[</a> Вариант #5 <a href=#>]]</a> <? } ?>

&nbsp;&nbsp;&nbsp;&nbsp;
    
<? if($tip!='6') { ?> [ <a href=../variant6/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=6>Вариант #6</a> ]
                  <? } else if($tip=='6') { ?> <a href=#>[[</a> Вариант #6 <a href=#>]]</a> <? } ?>

&nbsp;&nbsp;&nbsp;&nbsp;
    
<? if($tip!='7') { ?> [ <a href=../variant7/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=7>Вариант #7</a> ]
                  <? } else if($tip=='7') { ?> <a href=#>[[</a> Вариант #7 <a href=#>]]</a> <? } ?>

&nbsp;&nbsp;&nbsp;&nbsp;
    
<? if($tip!='8') { ?> [ <a href=../variant8/archive_doski_tip4.php?namer=<? echo $namer; ?>&tip=8>Вариант #8</a> ]
                  <? } else if($tip=='8') { ?> <a href=#>[[</a> Вариант #8 <a href=#>]]</a> <? } ?>
    


   
    </strong><br><br></font></center></td></tr></table>

<br>