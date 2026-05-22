<?

$ok='yes';
$ok2='yes';
$man_f='0';
$comp_f='0';

for($x=1;$x<101;$x++) {

if($fexo[$x]<'5') { $ok='no'; $man_f=$man_f+'1';}
if($fexo_comp[$x]<'5') { $ok2='no'; $comp_f=$comp_f+'1'; }

                                     }

if($man_f!='22' && $man_f!='21' && $man_f!='23') { $ret='2'; } else $ret='1';
if($comp_f!='22' && $comp_f!='21' && $comp_f!='23') { $ret2='2'; } else $ret2='1';


if($game=='new') {
if($ret=='2' || $ret2=='2') {
echo '<br><strong><font size=3><a href=3><em>Подбор кораблей</em></a>';
echo '&nbsp;&nbsp;[ <a href=#>'.$man_f.'</a> ] [ <a href=#>'.$comp_f.'</a> ]</font></strong><br>';
                                       }
                          }

echo '<br><font size=1>У человека осталось '.$man_f.' кораблей';
echo '&nbsp;/&nbsp;У компьютера осталось '.$comp_f.' кораблей</font>';


if($ok=='yes') { echo '<br><br><font size=5><strong><em>ПОБЕДА,Компьютер выиграл</em></strong></font>'; }
if($ok2=='yes') { echo '<br><br><font size=5><strong><em>ПОБЕДА,Вы выиграли '.$nick.'</em></strong></font>'; }


?>