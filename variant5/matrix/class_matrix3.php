<?

$prov=$hod_two-$hod_one;   // минусую "ход_куда - ход_откуда"
//echo '<br><br><font size=1><strong>two - one = '.$prov.'</strong>';
//echo '<br><font size=1><strong>sh-two = '.$sh[$hod_two].'</strong><br>';

if($prov=='0') { echo ''; }

if($sh[$hod_one]=='4' | $sh[$hod_one]=='14')  {   // если ходит офицер,проверяю допустимость хода 

if($prov!='23' & $prov!='25' & $prov!='-23' & $prov!='-25' &
 $prov!='46' & $prov!='50' & $prov!='-46' & $prov!='-50' & 
 $prov!='69' & $prov!='75' & $prov!='-69' & $prov!='-75' & 
 $prov!='92' & $prov!='100' & $prov!='-92' & $prov!='-100' & 
 $prov!='115' & $prov!='125' & $prov!='-115' & $prov!='-125' & 
 $prov!='138' & $prov!='150' & $prov!='-138' & $prov!='-150' & 
 $prov!='161' & $prov!='175' & $prov!='-161' & $prov!='-175' & 
 $prov!='184' & $prov!='200' & $prov!='-184' & $prov!='-200' &
$prov!='207' & $prov!='225' & $prov!='-207' & $prov!='-225' & 
$prov!='230' & $prov!='250' & $prov!='-230' & $prov!='-250' &
 $prov!='253' & $prov!='300' & $prov!='-258' & $prov!='-300') { echo '<br>Не допустим ход слона  = ['.$prov.']';$hod_one='1000'; $hod_two='1000'; }

                                                                         }



if($sh[$hod_one]=='3' | $sh[$hod_one]=='13')  {   // если ходит конь,проверяю допустимость хода 

if($prov!='26' & $prov!='22' & $prov!='-26' & $prov!='-22' &
 $prov!='47' & $prov!='49' & $prov!='-47' & $prov!='-49') { echo '<br>Не допустим ход коня = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                         }


if($sh[$hod_one]=='5' | $sh[$hod_one]=='15')  {   // если ходит ферзь, пока проверка наискось ,как у офицера 

if($prov!='23' & $prov!='25' & $prov!='-23' & $prov!='-25' &
 $prov!='46' & $prov!='50' & $prov!='-46' & $prov!='-50' & 
 $prov!='69' & $prov!='75' & $prov!='-69' & $prov!='-75' & 
 $prov!='92' & $prov!='100' & $prov!='-92' & $prov!='-100' & 
 $prov!='115' & $prov!='125' & $prov!='-115' & $prov!='-125' & 
 $prov!='138' & $prov!='150' & $prov!='-138' & $prov!='-150' & 
 $prov!='161' & $prov!='175' & $prov!='-161' & $prov!='-175' & 
 $prov!='184' & $prov!='200' & $prov!='-184' & $prov!='-200' &
$prov!='207' & $prov!='225' & $prov!='-207' & $prov!='-225' & 
$prov!='230' & $prov!='250' & $prov!='-230' & $prov!='-250' &
 $prov!='253' & $prov!='300' & $prov!='-258' & $prov!='-300' &
$prov!='24' & $prov!='-24' & 
 $prov!='48' & $prov!='-48' & 
 $prov!='72' & $prov!='-72' & 
 $prov!='96' & $prov!='-96' & 
 $prov!='120' & $prov!='-120' & 
 $prov!='144' & $prov!='-144' & 
 $prov!='168' & $prov!='-168' & 
 $prov!='192' & $prov!='-192' & 
 $prov!='216' & $prov!='-216' & 
 $prov!='240' & $prov!='-240' &
  $prov!='1' & $prov!='-1' &
 $prov!='2' & $prov!='-2' &
 $prov!='3' & $prov!='-3' &
 $prov!='4' & $prov!='-4' &
 $prov!='5' & $prov!='-5' &
 $prov!='6' & $prov!='-6' &
 $prov!='7' & $prov!='-7' &
 $prov!='8' & $prov!='-8' &
 $prov!='9' & $prov!='-9' &
 $prov!='10' & $prov!='-10' &
 $prov!='11' & $prov!='-11') { echo '<br>Не допустим ход ферзя  = ['.$prov.']';$hod_one='1000'; $hod_two='1000'; }

                                                                         }

                                       
                                                                   
                                                                         
                                                
                                          
if($sh[$hod_one]=='2' | $sh[$hod_one]=='12')  {   // если ходит тура,пока только вверх и вниз 

if($prov!='24' & $prov!='-24' & 
 $prov!='48' & $prov!='-48' & 
 $prov!='72' & $prov!='-72' & 
 $prov!='96' & $prov!='-96' & 
 $prov!='120' & $prov!='-120' & 
 $prov!='144' & $prov!='-144' & 
 $prov!='168' & $prov!='-168' & 
 $prov!='192' & $prov!='-192' & 
 $prov!='216' & $prov!='-216' & 
 $prov!='240' & $prov!='-240' &
  $prov!='1' & $prov!='-1' &
 $prov!='2' & $prov!='-2' &
 $prov!='3' & $prov!='-3' &
 $prov!='4' & $prov!='-4' &
 $prov!='5' & $prov!='-5' &
 $prov!='6' & $prov!='-6' &
 $prov!='7' & $prov!='-7' &
 $prov!='8' & $prov!='-8' &
 $prov!='9' & $prov!='-9' &
 $prov!='10' & $prov!='-10' &
 $prov!='11' & $prov!='-11') { echo '<br>Не допустим ход ладьи  = ['.$prov.']';$hod_one='1000'; $hod_two='1000'; }

                                                                         }




if($sh[$hod_one]=='1' | $sh[$hod_one]=='11')  {   // если ходит пешка,если первый ход,даю ход на 2 клетки

if($sh[$hod_two]=='40' || $sh[$hod_two]=='81' || $sh[$hod_two]=='82' || $sh[$hod_two]=='83') {
    
if($hod_shto=='A2' || $hod_shto=='B2' || $hod_shto=='C2' || $hod_shto=='D2' || $hod_shto=='E2' || $hod_shto=='F2' || 
$hod_shto=='G2' || $hod_shto=='H2' || $hod_shto=='I2' || $hod_shto=='K2' || $hod_shto=='L2' || $hod_shto=='M2') { $rad='1'; }
    
if($hod_shto=='A7' || $hod_shto=='B7' || $hod_shto=='C7' || $hod_shto=='D7' || $hod_shto=='E7' || $hod_shto=='F7' || 
$hod_shto=='G7' || $hod_shto=='H7' || $hod_shto=='I7' || $hod_shto=='K7' || $hod_shto=='L7' || $hod_shto=='M7') { $rad='2'; }

    if($sh[$hod_one]=='11' && $rad=='1') { 

if($prov!='-24' && $prov!='-48') { echo '<br>Не допустим первый ход пешки  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                    } else 
                                          
    if($sh[$hod_one]=='1' && $rad=='2') { 

if($prov!='24' && $prov!='48') { echo '<br>Не допустим первый ход пешки  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                    }  else
                                                                    
    if($sh[$hod_one]=='11') { 
    if($prov!='-24') { echo '<br>Не допустим ход пешки  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                   } else  
                                                             
    if($sh[$hod_one]=='1') { 
    if($prov!='24') { echo '<br>Не допустим ход пешки  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                   }  }                                          

                                if($sh[$hod_two]!='40' && $sh[$hod_two]!='81' && $sh[$hod_two]!='82' && $sh[$hod_two]!='83') {

if($sh[$hod_one]=='1') {
   if($prov!='23' && $prov!='25') {  echo '<br>Так бьет пешка,недопустимо  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }
                              } else 

if($sh[$hod_one]=='11') {
   if($prov!='-23' && $prov!='-25') {  echo '<br>Так бьет пешка,недопустимо  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }
                              } 
                                            }
    if($sh[$hod_one]=='1') { if($prov=='48') { if($sh[$hod_one+24]!='40') {  echo '<br>Пешка перепрыгивает через  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000';   }  } } 
    if($sh[$hod_one]=='11') { if($prov=='-48') { if($sh[$hod_one-24]!='40') {  echo '<br>Пешка перепрыгивает через  = ['.$prov.']'; $hod_one='1000'; $hod_two='1000';   }  } } 
    
    
} 

   













if($sh[$hod_one]=='7' | $sh[$hod_one]=='17')  {   // если ходит конь,проверяю допустимость хода 

if($prov!='75' & $prov!='69' & $prov!='-75' & $prov!='-69' &
 $prov!='48' & $prov!='72' & $prov!='-48' & $prov!='-72' &
$prov!='2' & $prov!='3' & $prov!='-2' & $prov!='-3' &
 $prov!='50' & $prov!='46' & $prov!='-50' & $prov!='-46') { echo '<br>Ястреб ходит по другому = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                         }


if($sh[$hod_one]=='8' | $sh[$hod_one]=='18')  {   // если ходит конь,проверяю допустимость хода 

if($prov!='2' & $prov!='-2' & $prov!='48' & $prov!='-48' &
 $prov!='46' & $prov!='-46' & $prov!='49' & $prov!='-49' &
$prov!='50' & $prov!='-50' & $prov!='22' & $prov!='-22' &
$prov!='47' & $prov!='-47' & $prov!='26' & $prov!='-26') { echo '<br>Медведь ходит по другому = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                                         }


if($sh[$hod_one]=='9' | $sh[$hod_one]=='19')  {   // если ходит конь,проверяю допустимость хода 

               if($sh[$hod_two]!='40' && $sh[$hod_two]!='81' && $sh[$hod_two]!='82' && $sh[$hod_two]!='83') {

if($prov!='1' & $prov!='-1' & $prov!='24' & $prov!='-24' &
 $prov!='23' & $prov!='-23' & $prov!='25' & $prov!='-25') { echo '<br>Призрак бьёт по другому = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                  } else if($sh[$hod_two]=='40' || $sh[$hod_two]=='81' || $sh[$hod_two]=='82' || $sh[$hod_two]=='83') {

if($prov!='2' & $prov!='-2' & $prov!='3' & $prov!='-3' &
 $prov!='48' & $prov!='-48' & $prov!='72' & $prov!='-72' &
$prov!='26' & $prov!='-26' & $prov!='27' & $prov!='-27' &
$prov!='22' & $prov!='-22' & $prov!='21' & $prov!='-21' &
$prov!='49' & $prov!='-49' & $prov!='47' & $prov!='-47' &
$prov!='73' & $prov!='-73' & $prov!='71' & $prov!='-71' &
$prov!='50' & $prov!='-50' & $prov!='46' & $prov!='-46') { echo '<br>Призрак ходит по другому = ['.$prov.']'; $hod_one='1000'; $hod_two='1000'; }

                                                  }
                                                                         }



















if($sh[$hod_one]=='6' | $sh[$hod_one]=='16')  {   

if($hod_one!='60' & $hod_one!='228') {        // если ходит король, если не исходная позиция 

if($prov!='23' & $prov!='25' & $prov!='-23' & $prov!='-25' & 
$prov!='24' & $prov!='-24' & $prov!='1' & $prov!='-1') { echo '<br>Не допустим ход короля(1)  = ['.$prov.']';$hod_one='1000'; $hod_two='1000'; }

                                                        } else {

if($prov!='23' & $prov!='25' & $prov!='-23' & $prov!='-25' & 
$prov!='24' & $prov!='-24' & $prov!='1' & $prov!='-1' &
 $prov!='2' & $prov!='-2' & $prov!='3' & $prov!='-3') { echo '<br>Не допустим ход короля(2)  = ['.$prov.']';$hod_one='1000'; $hod_two='1000'; }

                                                                  }
                                                                         }
?>