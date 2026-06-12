<?
if(isset($_COOKIE['nomer2'])) { $nomer_doski2=$nomer2;
 }
if(!$nomer2 && isset($_COOKIE['nomer_doski2'])) { //echo '<br>считан номер доски='.$nomer_doski2;
 }

if(isset($_COOKIE['doska_quq'])) { if(!preg_match('/^[^a-zA-Z]+$/',$doska_quq) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska_quq)) { $doska=$doska_quq; echo ''; }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; }}

include('./variant2/config_type4.php');
?>



<table width=<? echo $shirina; ?> bgcolor=#202020 align=center><tr><td class=td_center width=100%>
<font size=2><strong><em>
<?

 $hod_one='1000';
$hod_two='1000';
			
$position=0;

if($exxo[1]=='Comp' || $exxo[2]=='Comp') { $ffred='Da'; }
if($exxo[5]=='0' && $ffred=='Da') {		

$AI4='Da';

if($exxo[11]=='Черные' && $exxo[4]==$name) { $AI4='Net'; }
if($exxo[11]=='Белые' && $exxo[3]==$name) { $AI4='Net'; }

if($AI4=='Da') {

if($exxo[11]=='Черные') { $potok='1'; }
if($exxo[11]=='Белые') { $potok='2'; }


if($potok=='1') { $korol='2';

$exxo[11]='Белые';

$zapas_exxo[4]=$exxo[4];
$zapas_exxo[3]=$exxo[3];
$zapas_exxo[1]=$exxo[1]; $exxo[1]='Comp'; 
$zapas_exxo[2]=$exxo[2]; $exxo[2]='Comp';  

$exxo[4]='Comp';
$exxo[3]='Comp';
 } 



if($potok=='2') { $korol='1';

$exxo[11]='Черные';

$zapas_exxo[4]=$exxo[4];
$zapas_exxo[3]=$exxo[3];
 $zapas_exxo[1]=$exxo[1]; $exxo[1]='Comp'; 
 $zapas_exxo[2]=$exxo[2]; $exxo[2]='Comp';  

$exxo[4]='Comp';
$exxo[3]='Comp';
 } 

if(!$shah && !$ok_hod_attack) {  include('AI4/shah_neiro.php');  }

if($potok=='1') { $exxo[11]='Черные'; $exxo[1]=$zapas_exxo[1]; $exxo[2]=$zapas_exxo[2]; $seeed='белых'; $exxo[4]=$zapas_exxo[4]; $exxo[3]=$zapas_exxo[3];}
if($potok=='2') { $exxo[11]='Белые'; $exxo[1]=$zapas_exxo[1]; $exxo[2]=$zapas_exxo[2];  $seeed='черных'; $exxo[4]=$zapas_exxo[4]; $exxo[3]=$zapas_exxo[3];  }


if($hod_two!='1000') {
echo '<br>Расчёт хода <a href=#>для '.$seeed.'</a> с клетки '.$hod_one.' на клетку '.$hod_two;
                                } //else echo '<br>Расчёт шаха от <a href=#>'.$seeed.'</a> не найден';

if($hod_two!='1000') { $ugroza=$hod_two; $ugroza_one=$hod_one; echo '<br>Угроза на клетке '.$ugroza; }

unset($ok_hod_attack);
unset($index);

$hod_one='1000';
$hod_two='1000';

}



if($shah=='1') { $exxo[11]='Черные'; }
if($shah=='2') { $exxo[11]='Белые'; }

if($exxo[11]=='Черные' && $exxo[4]=='Comp') { $okay_dobro='da'; }
if($exxo[11]=='Белые' && $exxo[3]=='Comp') { $okay_dobro='da'; }
		  		
if($ugroza) { include('AI2/uhod_s_ugrozy.php');  } 
if($okay_dobro=='da') { if(!$shah && !$ugroza) { $ddee=rand(0,1); if($ddee==1) { include('AI3/shah_neiro.php'); } } } 
 if(!$ok_hod_attack && !$ugroza) { include('AI2/ataka_neiro_4_figure.php');  }  
 if(!$ok_hod_attack && !$ugroza) { include('AI/coord.php'); } 
include('AI/hody.php');
			  }

if($position>0 && $exxo[11]=='Белые' && $exxo[3]=='Comp') { echo '<br>Рассмотрено позиций: '.$position.'<br>'; }
if($position>0 && $exxo[11]=='Черные' && $exxo[4]=='Comp') { echo '<br>Рассмотрено позиций: '.$position.'<br>'; }

// ниже Ход чего
// ниже Ход чего
if($hod_one!='1000' && !$hod_shto) { $hod_shto=$hod_one; }
if($hod_two!='1000' && !$hod_kuda) { $hod_kuda=$hod_two; }








if($hod_shto!='1000' && $hod_kuda!='1000') {

 $koo=$hod_shto;
$alfav=array('A'=>1,'B'=>2,'C'=>3,'D'=>4,'E'=>5,'F'=>6,'G'=>7,'H'=>8,'I'=>9,'K'=>10,'L'=>11,'M'=>12);
$x=$alfav[$koo[0]]+(8-$koo[1])*24+53;

$hod_one=$x;









 $koo2=$hod_kuda;
$alfav2=array('A'=>1,'B'=>2,'C'=>3,'D'=>4,'E'=>5,'F'=>6,'G'=>7,'H'=>8,'I'=>9,'K'=>10,'L'=>11,'M'=>12);
$x=$alfav2[$koo2[0]]+(8-$koo2[1])*24+53;

$hod_two=$x;

}

if($hod_one<' ' || $hod_two<' ') { $hod_one='1000'; $hod_two='1000'; }











if($hod_one!='1000' || $hod_two!='1000') { echo 'Ход - '.$hod_shto.' | Ход куда - '.$hod_kuda; }

for($sed=20;$sed<300;$sed++) {
                                                      if($sh[$sed]=='81') { $sh[$sed]='40'; } 
                                                     if($sh[$sed]=='82') { $sh[$sed]='40'; $ddd[$sed]='82'; }
                                                         if($sh[$sed]=='86') { $sh[$sed]='40'; }
                                                 if($sh[$sed]=='83') { $ogon_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='84') { $sneginka_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='85') { $detonator_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='86') { $vzryv_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                if($sh[$sed]=='90') { $podarok_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='91') { $zamok_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                       if($sh[$sed]=='92') { $baza_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                    if($sh[$sed]=='93') { $almaz_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                              }

if($nomer_doski2 && $hod_one>' ' && $hod_one<'1000') {

 include('./variant2/hod_vertical/hod_vertical_off.php'); 
 include ('variant2/hod_vertical/hod_vertical_load.php');                                 
 include ('variant2/hod_vertical/hod_vertical_run.php');                                 
 include ('variant2/random_figura/hod_vertical_load.php');                                 
 include ('variant2/random_figura/hod_vertical_run.php');                                 
 include ('variant2/matrix/class_matrix3.php');                                 
 include ('variant2/matrix/class_matrix_tura3.php');                               
 include ('variant2/matrix/class_matrix_ferz3.php');                                
 include ('variant2/matrix/class_matrix_slon3.php');                                 
 include ('variant2/matrix/class_shah_kon12.php');                                
 include ('variant2/matrix/class_shah_tura12.php');                                
 include ('variant2/matrix/class_shah_slon12.php');                                
 include ('variant2/matrix/class_shah_ferz12.php');                               
 include ('variant2/matrix/class_otkrytie_shaha12.php');
                      
if($exxo[11]=='Черные' && $exxo[4]!='Comp') { $error_hod='Da'; } else
if($exxo[11]=='Белые' && $exxo[3]!='Comp') { $error_hod='Da'; } 

if($error_hod=='Da' && $zvuki_hody=='11') { if($hod_one=='1000' || $hod_two=='1000') { ?><audio src="./zvuk/error_hod.mp3" autoplay="autoplay"></audio><? } }
    }        

$ball_belye=$exxo[21]; $ball_chernye=$exxo[22];


for($sed=0;$sed<300;$sed++) {
                                                     if($ddd[$sed]=='82') { $sh[$sed]='82'; }
                                                      if($ogon_zapas[$sed]=='83') { $sh[$sed]=$ogon_zapas[$sed];  }
                                                     if($sneginka_zapas[$sed]=='84') { $sh[$sed]=$sneginka_zapas[$sed];  }
                                                      if($detonator_zapas[$sed]=='85') { $sh[$sed]=$detonator_zapas[$sed];  }
                                                    //  if($vzryv_zapas[$sed]=='86') { $sh[$sed]=$vzryv_zapas[$sed];  }
                                                if($podarok_zapas[$sed]=='90') { $sh[$sed]=$podarok_zapas[$sed];  }
                                                      if($zamok_zapas[$sed]=='91') { $sh[$sed]=$zamok_zapas[$sed];  }
                                                         if($baza_zapas[$sed]=='92') { $sh[$sed]=$baza_zapas[$sed];  }
                                                          if($almaz_zapas[$sed]=='93') { $sh[$sed]=$almaz_zapas[$sed];  }
                                                 }


if($sh[$hod_two]=='83') { 

if($sh[$hod_one]<'10') {  
                                   if($ball_chernye>'9') {
$ball_chernye=$ball_chernye-'10'; $rokirovka='<font size=1><em>Ход на огонь, -10 баллов</em></font>';
                                                                   } else

                                   if($ball_chernye<'10') {
$x_b=$ball_chernye; $ball_chernye='0'; $rokirovka='<font size=1><em>Ход на огонь, -'.$x_b.' баллов</em></font>';
                                                                   }

                                   }

if($sh[$hod_one]>'10' && $sh[$hod_one]<'20') {  
                                   if($ball_belye>'9') {
$ball_belye=$ball_belye-'10'; $rokirovka='<font size=1><em>Ход на огонь, -10 баллов</em></font>';
                                                                   } else

                                   if($ball_belye<'10') {
$x_b2=$ball_belye; $ball_belye='0'; $rokirovka='<font size=1><em>Ход на огонь, -'.$x_b2.' баллов</em></font>';
                                                                   }

                                     }

                                    }

for($sed=20;$sed<300;$sed++) {   if($sh[$sed]=='83') { $sh[$sed]='40'; }    }









$zapas=$sh[$hod_one]; $sh[$hod_one]='40';

//if($sh[$hod_two]>'20') {
if($sh[$hod_two]=='82') { include('variant2/bomba1.php'); }
if($sh[$hod_two]=='82') { $rokirovka='<font size=1><em>Взорвалось '.$vzryv.' фигур</em></font>'; 

if($zvuki_hody=='11') { ?><audio src="./zvuk/hod_two_bomba.mp3" autoplay="autoplay"></audio><? $magic='1'; }

if($death1=='1') { $rokirovka=$rokirovka.'&nbsp;&nbsp;<font size=1><em>Король белых взорван</em></font>';  } else
if($death2=='1') { $rokirovka=$rokirovka.'&nbsp;&nbsp;<font size=1><em>Король черных взорван</em></font>';  } 
                                                                                                                    }
                       //             }

$sh[$hod_one]=$zapas;









if ($exxo[12] > 0 && $exxo[12] % $transform_index === 0 && $new_transform=='11') { $vexo='1'; } //не проговариваем "превратилась пешка" при трансформации

if($new_transform_magic=='11') { //начало magic

if($exxo[21]>'19' || $ball_belye>'19') { 

$fig=rand(0,5);

if($fig=='0') { $magic='17'; }
if($fig=='1') { $magic='18'; }
if($fig=='2') { $magic='19'; }
if($fig=='3') { $magic='17'; }
if($fig=='4') { $magic='18'; }
if($fig=='5') { $magic='19'; }

$i='0';

for($t=0;$t<300;$t++) {
if($i=='0') {
$pes=rand(53,240);

if($sh[$pes]=='11') { $sh[$pes]=$magic; $ball_belye=$ball_belye-'20'; $i='1'; $rokirovka='<font size=1><em>Превратилась белая пешка</em></font>';
if($hod_two<'1000' && !$shah && $zvuki_hody=='11' && $vexo!='1' && $defe[0]==0) { $zapret=1; ?><audio src="./zvuk/magic_white_peshka.mp3" autoplay="autoplay"></audio><? $magic='1'; } }

} //end if $i

} // end for

 } //end if $eexo[21]







if($exxo[22]>'19' || $ball_chernye>'19') { 

$fig=rand(0,5);

if($fig=='0') { $magic='7'; }
if($fig=='1') { $magic='8'; }
if($fig=='2') { $magic='9'; }
if($fig=='3') { $magic='7'; }
if($fig=='4') { $magic='8'; }
if($fig=='5') { $magic='9'; }

$i='0';

for($t=0;$t<300;$t++) {
if($i=='0') {
$pes=rand(53,240);

if($sh[$pes]=='1') { $sh[$pes]=$magic; $ball_chernye=$ball_chernye-'20'; $i='1'; $rokirovka='<font size=1><em>Превратилась черная пешка</em></font>';
if($hod_two<'1000' && !$shah && $zvuki_hody=='11' && $vexo!='1' && $defe[0]==0) { $zapret=1; ?><audio src="./zvuk/magic_black_peshka.mp3" autoplay="autoplay"></audio><? $magic='1'; } }

} //end if $i

} // end for

 } //end if $eexo[22]

} //end magic


if($proverka==true) {
if($sh[$hod_one]=='6' | $sh[$hod_one]=='16')  {   
if($prov!='23' & $prov!='25' & $prov!='-23' & $prov!='-25' & 
$prov!='24' & $prov!='-24' & $prov!='1' & $prov!='-1') { echo '<br>Король под шахом,прыгать через клетку не может  = ['.$prov.']';$hod_one='1000'; $hod_two='1000'; }
                                                                         }
                               }




if($hod_one=='60' & $hod_two=='58' & $sh[60]=='6' & $sh[57]=='40' & $sh[58]=='40' & $sh[59]=='40' & $sh[56]=='40' & $sh[55]=='2') { $sh[55]='40'; $sh[59]='2';  $rokirovka='<font size=1><em>Рокировка черных</em></font>'; 

} else if($hod_one=='60' & $hod_two=='58' & $sh[60]=='6') { echo '<br>Рокировка не удалась'; $hod_one='0'; $hod_two='0'; }
                                                                       


if($hod_one=='60' & $hod_two=='62' & $sh[60]=='6' & $sh[61]=='40' & $sh[62]=='40' & $sh[63]=='40' & $sh[64]=='2') { $sh[64]='40'; $sh[61]='2';  $rokirovka='<font size=1><em>Рокировка черных</em></font>'; 

} else if($hod_one=='60' & $hod_two=='62' & $sh[60]=='6') { echo '<br>Рокировка не удалась'; $hod_one='0'; $hod_two='0'; }



if($hod_one=='228' & $hod_two=='226' & $sh[228]=='16' & $sh[227]=='40' & $sh[227]=='40' & $sh[226]=='40' & $sh[224]=='40' & $sh[223]=='12') { $sh[223]='40'; $sh[227]='12';  $rokirovka='<font size=1><em>Рокировка белых</em></font>'; 

} else if($hod_one=='228' & $hod_two=='226' & $sh[228]=='16') { echo '<br>Рокировка не удалась'; $hod_one='0'; $hod_two='0'; }



if($hod_one=='228' & $hod_two=='230' & $sh[228]=='16' & $sh[229]=='40' & $sh[230]=='40' & $sh[231]=='40' & $sh[232]=='12') { $sh[232]='40'; $sh[229]='12';  $rokirovka='<font size=1><em>Рокировка белых</em></font>'; 

} else if($hod_one=='228' & $hod_two=='230' & $sh[228]=='16') { echo '<br>Рокировка не удалась'; $hod_one='0'; $hod_two='0'; }






//if($sh[$hod_two]=='6' | $sh[$hod_two]=='16') {   echo '<br>Ход на короля,короля бить нельзя';  $hod_one='1000'; $hod_two='1000'; }



// изменение про "попытка хода вражескими фигурами"

if($nomer_doski2 || $nomer2) {
$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);
$exxo[3] = preg_replace("|[\r\n]+|", "", $exxo[3]);
$exxo[4] = preg_replace("|[\r\n]+|", "", $exxo[4]);
$exxo[5] = preg_replace("|[\r\n]+|", "", $exxo[5]);
$exxo[6] = preg_replace("|[\r\n]+|", "", $exxo[6]);
$exxo[7] = preg_replace("|[\r\n]+|", "", $exxo[7]);
$exxo[8] = preg_replace("|[\r\n]+|", "", $exxo[8]);
$exxo[9] = preg_replace("|[\r\n]+|", "", $exxo[9]);
$exxo[10] = preg_replace("|[\r\n]+|", "", $exxo[10]);
$exxo[11] = preg_replace("|[\r\n]+|", "", $exxo[11]);
$exxo[12] = preg_replace("|[\r\n]+|", "", $exxo[12]);
$exxo[13] = preg_replace("|[\r\n]+|", "", $exxo[13]);
$exxo[14] = preg_replace("|[\r\n]+|", "", $exxo[14]);
$exxo[15] = preg_replace("|[\r\n]+|", "", $exxo[15]);
$exxo[16] = preg_replace("|[\r\n]+|", "", $exxo[16]);
$exxo[17] = preg_replace("|[\r\n]+|", "", $exxo[17]);
$exxo[18] = preg_replace("|[\r\n]+|", "", $exxo[18]);
$exxo[19] = preg_replace("|[\r\n]+|", "", $exxo[19]);
$exxo[20] = preg_replace("|[\r\n]+|", "", $exxo[20]);
$exxo[21] = preg_replace("|[\r\n]+|", "", $exxo[21]);
$exxo[22] = preg_replace("|[\r\n]+|", "", $exxo[22]);

//  конец считываем данные регистрации
 
}
// конец про изменение "попытка хода вражескими фигурами"




 if($exxo[1]=='Comp') { $name_zapas=$name; $name='Comp'; $qq='1'; } else $qq='2'; 




if($sh[$hod_two]=='1' | $sh[$hod_two]=='11' | $sh[$hod_two]=='9' | $sh[$hod_two]=='19' | $sh[$hod_two]=='6' | $sh[$hod_two]=='16' | 
$sh[$hod_one]=='1' | $sh[$hod_one]=='11' | $sh[$hod_one]=='9' | $sh[$hod_one]=='19' | $sh[$hod_one]=='6' | $sh[$hod_one]=='16')  { 

if(!isset($_COOKIE['avto_hod']))  {  
 if($name==$exxo[3] & $qq=='2' & $sh[$hod_one]<'10' & $sh[$hod_one]>'0') {  echo '<br><br>Попытка хода черными,вражескими фигурами';  $hod_one='1000'; $hod_two='1000'; }
}
if($name==$exxo[4] & $qq=='2' & $sh[$hod_one]>'10' & $sh[$hod_one]<'30') {  echo '<br><br>Попытка хода белыми,вражескими фигурами';  $hod_one='1000'; $hod_two='1000'; }

if($sh[$hod_one]<'10' & $sh[$hod_two]<'10' & $hod_one!='1000') {  echo '<br>Попытка черных убить черную фигуру';  $hod_one='1000'; $hod_two='1000'; }
if($sh[$hod_one]>'10' & $sh[$hod_two]>'10' &$sh[$hod_one]<'30' & $sh[$hod_two]<'30') {  echo '<br>Попытка белых убить белую фигуру'; $hod_one='1000'; $hod_two='1000'; }

} else if($sh[$hod_two]!='1' && $sh[$hod_two]!='11' && $sh[$hod_two]!='9' && $sh[$hod_two]!='19' && 
$sh[$hod_one]!='1' && $sh[$hod_one]!='11' && $sh[$hod_one]!='9' && $sh[$hod_one]!='19')  { 

if(!isset($_COOKIE['avto_hod']))  {  
 if($name==$exxo[3] & $exxo[11]=='Белые' & $qq=='2' & $sh[$hod_one]<'10' & $sh[$hod_one]>'0') {   echo '<br><br>Попытка хода черными,вражескими фигурами';  $hod_one='1000'; $hod_two='1000';   }
}
if($name==$exxo[4]  & $exxo[11]=='Черные' & $qq=='2' & $sh[$hod_one]>'10' & $sh[$hod_one]<'30') {  echo '<br><br>Попытка хода белыми,вражескими фигурами';  $hod_one='1000'; $hod_two='1000';  }

if($sh[$hod_one]<'10' & $sh[$hod_two]<'10' & $hod_one!='1000' && $sh[$hod_two]!='16' && $sh[$hod_one]!='6' && $sh[$hod_two]!='6') {  echo '<br>Черные обмениваются с '.$hod_kuda; $figura_obmen=$sh[$hod_two]; }
if($sh[$hod_one]>'10' & $sh[$hod_two]>'10' &$sh[$hod_one]<'30' & $sh[$hod_two]<'30' && $sh[$hod_two]!='6' && $sh[$hod_one]!='16' && $sh[$hod_two]!='16') {  echo '<br>Белые обмениваются с '.$hod_kuda; $figura_obmen=$sh[$hod_two];  }

}

if(!$figura_obmen) {
if($sh[$hod_two]=='6' | $sh[$hod_two]=='16') {   echo '<br>Ход на короля,короля бить нельзя';  $hod_one='1000'; $hod_two='1000'; }
                            }

if($sh[$hod_one]=='6') { 
if($sh[$hod_two-1]=='16' | $sh[$hod_two+1]=='16' | $sh[$hod_two-23]=='16' | $sh[$hod_two-24]=='16' | $sh[$hod_two-25]=='16' | $sh[$hod_two+23]=='16' | $sh[$hod_two+24]=='16' | $sh[$hod_two+25]=='16') {
 echo '<br>Черный король приближается к белому королю'; $hod_one='1000'; $hod_two='1000'; }}

if($sh[$hod_one]=='16') { 
if($sh[$hod_two-1]=='6' | $sh[$hod_two+1]=='6' | $sh[$hod_two-23]=='6' | $sh[$hod_two-24]=='6' | $sh[$hod_two-25]=='6' | $sh[$hod_two+23]=='6' | $sh[$hod_two+24]=='6' | $sh[$hod_two+25]=='6') {
 echo '<br>Белый король приближается к черному королю'; $hod_one='1000'; $hod_two='1000'; }}



if($change_bomb==11) {

 if($hod_two=='126' | $hod_two=='150' | $hod_two=='137' | $hod_two=='161') { 
if($sh[$hod_two]<'30') { echo '<br>Эта фигура в домике,убить нельзя'; $hod_one='1000'; $hod_two='1000'; $magic='1'; ?><audio src="./zvuk/domik.mp3" autoplay="autoplay"></audio><?  } }

}

if($sh[$hod_one]=='40') {  $hod_one='1000'; $hod_two='1000'; echo '<br>Попытка хода пустой клеткой'; }
if($sh[$hod_one]=='82') {  $hod_one='1000'; $hod_two='1000'; echo '<br>Ходить бомбой нельзя'; }

include('./variant2/pobeda.php'); // в этом файле написан подсчет "зависания" компа при шахе, после 20 раз ИИ говорит "Сдаюсь"

if($hod_one<'1000') {  




include('./new_kletki.php'); // в этом файле написаны клетки Снежинка, Детонатор, Подарок и Замок







if($shah=='1' || $shah=='2') { $rokirovka=' [ шах ] '.$rokirovka; }

if($magic!='1' && $zvuki_hody=='11') {
if($sh[$hod_one]=='1' || $sh[$hod_one]=='11') { ?><audio src="./zvuk/peshka.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='2' || $sh[$hod_one]=='12') { ?><audio src="./zvuk/ladya.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='3' || $sh[$hod_one]=='13') { ?><audio src="./zvuk/kon.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='4' || $sh[$hod_one]=='14') { ?><audio src="./zvuk/slon.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='5' || $sh[$hod_one]=='15') { ?><audio src="./zvuk/ferz.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='6' || $sh[$hod_one]=='16') { ?><audio src="./zvuk/korol.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='7' || $sh[$hod_one]=='17') { ?><audio src="./zvuk/delf.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='8' || $sh[$hod_one]=='18') { ?><audio src="./zvuk/legenda.mp3" autoplay="autoplay"></audio><? }
if($sh[$hod_one]=='9' || $sh[$hod_one]=='19') { ?><audio src="./zvuk/egik.mp3" autoplay="autoplay"></audio><? }
                     }

if($sh[$hod_two]=='1' && !$figura_obmen) { $lasex=' - взяли черную пешку'; $ball_belye=$ball_belye+'1'; $peshka_black=$peshka_black+'1'; $peshka_black_ball=$peshka_black_ball+'1'; }
if($sh[$hod_two]=='2' && !$figura_obmen) { $lasex=' - взяли черную ладью'; $ball_belye=$ball_belye+'8'; $ladya_black=$ladya_black+'1'; $ladya_black_ball=$ladya_black_ball+'8'; }
if($sh[$hod_two]=='3' && !$figura_obmen) { $lasex=' - взяли черного коня';  $ball_belye=$ball_belye+'3';  $kon_black= $kon_black+'1'; $kon_black_ball=$kon_black_ball+'3';  }
if($sh[$hod_two]=='4' && !$figura_obmen) { $lasex=' - взяли черного слона';  $ball_belye=$ball_belye+'5';  $slon_black=$slon_black+'1'; $slon_black_ball=$slon_black_ball+'5';  }
if($sh[$hod_two]=='5' && !$figura_obmen) { $lasex=' - взяли черного ферзя';  $ball_belye=$ball_belye+'10';  $ferz_black=$ferz_black+'1'; $ferz_black_ball=$ferz_black_ball+'10'; }
if($sh[$hod_two]=='11' && !$figura_obmen) { $lasex=' - взяли белую пешку';  $ball_chernye=$ball_chernye+'1'; $peshka_white=$peshka_white+'1'; $peshka_white_ball=$peshka_white_ball+'1'; }
if($sh[$hod_two]=='12' && !$figura_obmen) { $lasex=' - взяли белую ладью'; $ball_chernye=$ball_chernye+'8'; $ladya_white=$ladya_white+'1'; $ladya_white_ball=$ladya_white_ball+'8';  }
if($sh[$hod_two]=='13' && !$figura_obmen) { $lasex=' - взяли белого коня'; $ball_chernye=$ball_chernye+'3';  $kon_white=$kon_white+'1'; $kon_white_ball=$kon_white_ball+'3';  }
if($sh[$hod_two]=='14' && !$figura_obmen) { $lasex=' - взяли белого слона'; $ball_chernye=$ball_chernye+'5';  $slon_white= $slon_white+'1'; $slon_white_ball=$slon_white_ball+'5'; }
if($sh[$hod_two]=='15' && !$figura_obmen) { $lasex=' - взяли белого ферзя'; $ball_chernye=$ball_chernye+'10';  $ferz_white= $ferz_white+'1'; $ferz_white_ball=$ferz_white_ball+'10'; }
if($sh[$hod_two]=='7' && !$figura_obmen) { $lasex=' - взяли черного дельфина';  $ball_belye=$ball_belye+'5'; $delfin_black=$delfin_black+'1'; $delfin_black_ball=$delfin_black_ball+'5';  }
if($sh[$hod_two]=='17' && !$figura_obmen) { $lasex=' - взяли белого дельфина'; $ball_chernye=$ball_chernye+'5';  $delfin_white=$delfin_white+'1'; $delfin_white_ball=$delfin_white_ball+'5';  }
if($sh[$hod_two]=='9' && !$figura_obmen) { $lasex=' - взяли черного ёжика';  $ball_belye=$ball_belye+'5'; $egik_black=$egik_black+'1'; $egik_black_ball=$egik_black_ball+'5';  }
if($sh[$hod_two]=='19' && !$figura_obmen) { $lasex=' - взяли белого ёжика'; $ball_chernye=$ball_chernye+'5'; $egik_white=$egik_white+'1'; $egik_white_ball=$egik_white_ball+'5';  }
if($sh[$hod_two]=='8' && !$figura_obmen) { $lasex=' - взяли черную легенду';  $ball_belye=$ball_belye+'5'; $legenda_black=$legenda_black+'1'; $legenda_black_ball=$legenda_black_ball+'5';  }
if($sh[$hod_two]=='18' && !$figura_obmen) { $lasex=' - взяли белую легенду'; $ball_chernye=$ball_chernye+'5'; $legenda_white=$legenda_white+'1'; $legenda_white_ball=$legenda_white_ball+'5';  }

if($figura_obmen>' ') { $lasex=' - Обмен с '.$hod_kuda; }

$hod_x_one=$hod_one; $hod_x_two=$hod_two;

 $sh[$hod_two]=$sh[$hod_one];
if(!$figura_obmen) { $sh[$hod_one]='40'; } else $sh[$hod_one]=$figura_obmen;

// превращение пешки ниже
//редактирование превращение в ферзя от 09.01.2023
if($sh[54]=='11') { $sh[54]='15'; }  
if($sh[55]=='11') { $sh[55]='15'; }  
if($sh[56]=='11') { $sh[56]='15'; }  
if($sh[57]=='11') { $sh[57]='15'; }  
if($sh[58]=='11') { $sh[58]='15'; }  
if($sh[59]=='11') { $sh[59]='15'; }  
if($sh[60]=='11') { $sh[60]='15'; }  
if($sh[61]=='11') { $sh[61]='15'; }  
if($sh[62]=='11') { $sh[62]='15'; }  
if($sh[63]=='11') { $sh[63]='15'; }   
if($sh[64]=='11') { $sh[64]='15'; }   
if($sh[65]=='11') { $sh[65]='15'; }  

if($sh[222]=='1') { $sh[222]='5'; }  
if($sh[223]=='1') { $sh[223]='5'; }  
if($sh[224]=='1') { $sh[224]='5'; }  
if($sh[225]=='1') { $sh[225]='5'; }  
if($sh[226]=='1') { $sh[226]='5'; }  
if($sh[227]=='1') { $sh[227]='5'; }  
if($sh[228]=='1') { $sh[228]='5'; }  
if($sh[229]=='1') { $sh[229]='5'; }  
if($sh[230]=='1') { $sh[230]='5'; }  
if($sh[231]=='1') { $sh[231]='5'; }  
if($sh[232]=='1') { $sh[232]='5'; }  
if($sh[233]=='1') { $sh[233]='5'; } 
//редактирование превращение в ферзя от 09.01.2023
// конец превращение пешки

$hod_one='1000'; }

// echo '<br>$sh[$hod_one] = '.$sh[$hod_one];


if($change_bomb==11) {

if($sh[126]=='40') { $sh[126]='81'; } 
if($sh[150]=='40') { $sh[150]='81'; }
if($sh[137]=='40') { $sh[137]='81'; } 
if($sh[161]=='40') { $sh[161]='81'; }

if($sh[128]=='40') { $sh[128]='82'; } 
if($sh[159]=='40') { $sh[159]='82'; } 

}


if($hod_two!='1000') {
$openchatdb=fopen($base,"w");

for($h=0;$h<300;$h++) {
if($sh[$h]>'0' && $sh[$h]<'200') {
 if(fwrite($openchatdb,$sh[$h]."\n")) { ;  }
                   }               } 
fclose($openchatdb);
      }
         if($hod_two!='1000') {        
 echo '<br><br>Ход на  '.$hod_two.' записан в файл <b>'.$base.'</b> со скрипта';
                            //  $hod_two='0';    
      }


?>
</em><strong></font>
</td></tr></table>
</center>



<? include('general_record.php');  //считывание общих ходов из архива
?>












<? 
//$base_hod_ip=$base_hody;

// записываем ходы на каждую доску в отдельный файл .тхт

if ( !file_exists($base_hod_ip) )   {  echo 'файл '.$base_hod_ip.' отсутствует';

$openchatdb=fopen($base_hod_ip,"w");

 if(fwrite($openchatdb," "."\n")) { ;  }

fclose($openchatdb);
 } 

echo '<br><center><table bgcolor=#202020 width=92%><tr><td width=5% class=td_center bgcolor=#202020></td><td class=td_center bgcolor=#202020><font size=2><strong>';

if($hod_two!='1000') {
$openchatdb=fopen($base_hod_ip,"a");

if($sh[$hod_two]<'10') { $hod_zapis='Черные: '.$hod_shto.' - '.$hod_kuda; }
if($sh[$hod_two]>'10' & $sh[$hod_two]<'30') { $hod_zapis='Белые: '.$hod_shto.' - '.$hod_kuda; }
 if(fwrite($openchatdb,'<a href=#><font size=1>'.date("G:i:s ").'</font></a> '.$hod_zapis.', '.$rokirovka.$lasex."\n")) {  // echo '<br>Записан текст $hod_zapis - '.$hod_zapis.'<br>$sh[$hod_two]= '.$sh[$hod_two]; 
                                                                                                         }
                               
fclose($openchatdb);


















//записываем копию ходов в архив надолго
unset($hody);

if($nomer_doski2 || $nomer2) { // начало записи если своя доска
if($file = fopen($base_hod_ip, "r")) { echo ''; $bx5=0;} 

while(!feof($file)) { 
if($hody[]= fgets ($file)){$bx5++;} }

fclose ($file); 


$xxd='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_hody.txt';
//echo '<br>'.$xxd;
$openchatdb=fopen($xxd,"w");

for($r=0;$r<$bx5;$r++) {
    //echo '<br>$hody[$r]='.$hody[$r];
if($hody[$r]>' ') {
if(fwrite($openchatdb,$hody[$r])) {  // echo '<br>Записан текст $hod_zapis - '.$hod_zapis.'<br>$sh[$hod_two]= '.$sh[$hod_two];
 }}
}
fclose($openchatdb);
//конец записи ходов в архив


$xxd='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_hod_bgcolor.txt';
$openchatdb=fopen($xxd,"w");
if(fwrite($openchatdb,$hod_x_one."\n".$hod_x_two."\n")) {  
}
fclose($openchatdb);
//конец записи ходов в архив




// переписываем фигуры в архиве
$xxp='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'.txt';
$openchatdb=fopen($xxp,"w");

for($h=0;$h<300;$h++) {
if($sh[$h]>'0' && $sh[$h]<'200') {
 if(fwrite($openchatdb,$sh[$h]."\n")) { ;  }
 }}          
fclose($openchatdb);
      
// конец переписываем фигуры в архиве






$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);
$exxo[3] = preg_replace("|[\r\n]+|", "", $exxo[3]);
$exxo[4] = preg_replace("|[\r\n]+|", "", $exxo[4]);
$exxo[5] = preg_replace("|[\r\n]+|", "", $exxo[5]);
$exxo[6] = preg_replace("|[\r\n]+|", "", $exxo[6]);
$exxo[7] = preg_replace("|[\r\n]+|", "", $exxo[7]);
$exxo[8] = preg_replace("|[\r\n]+|", "", $exxo[8]);
$exxo[9] = preg_replace("|[\r\n]+|", "", $exxo[9]);
$exxo[10] = preg_replace("|[\r\n]+|", "", $exxo[10]);
$exxo[11] = preg_replace("|[\r\n]+|", "", $exxo[11]);
$exxo[12] = preg_replace("|[\r\n]+|", "", $exxo[12]);
$exxo[13] = preg_replace("|[\r\n]+|", "", $exxo[13]);
$exxo[14] = preg_replace("|[\r\n]+|", "", $exxo[14]);
$exxo[15] = preg_replace("|[\r\n]+|", "", $exxo[15]);
$exxo[16] = preg_replace("|[\r\n]+|", "", $exxo[16]);
$exxo[17] = preg_replace("|[\r\n]+|", "", $exxo[17]);
$exxo[18] = preg_replace("|[\r\n]+|", "", $exxo[18]);
$exxo[19] = preg_replace("|[\r\n]+|", "", $exxo[19]);
$exxo[20] = preg_replace("|[\r\n]+|", "", $exxo[20]);
$exxo[21] = preg_replace("|[\r\n]+|", "", $exxo[21]);
$exxo[22] = preg_replace("|[\r\n]+|", "", $exxo[22]);

//  конец считываем данные регистрации
 


// считываем типа $nomer2 и перезаписываем игрока 2 в файл,чтобы показалась доска для 2 игрока

if($exxo[11]=='Черные') { $exxo[11]='Белые'; } else if($exxo[11]=='Белые') { $exxo[11]='Черные'; }
$exxo[12]=$exxo[12]+'1';

$zapret=2;

include('./zapret_zvukov.php');

$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

if($ball_belye!=$exxo[21]) { $exxo[21]=$ball_belye; }
if($ball_chernye!=$exxo[22]) { $exxo[22]=$ball_chernye; }

$openchatdb=fopen($sxx,"w");

 if(fwrite($openchatdb,$exxo[0]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[1]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[2]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[3]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[4]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[5]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[6]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[7]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[8]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[9]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[10]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[11]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[12]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[13]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[14]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[15]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[16]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[17]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[18]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[19]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[20]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[21]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[22]."\n")) { ;  }

fclose($openchatdb);


// конец считываем типа $nomer2 и перезаписываем игрока 2 в файл,чтобы показалась доска для 2 игрока









$logi='logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> сделал ход у игрока <strong>'.$doska.'</strong> на доске '.$nomer_doski2.' - вариант #2: '.$hod_zapis.', '.$rokirovka.$lasex.' <a target=_blank href=variant2/archive_d_tip4_uvel.php?namer='.$doska.'&tip=2&nomer2='.$nomer_doski2.'>Посмотреть</a>';;;
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);


  $logi2='ip/hod/base_hod.txt';
$openchatdb2=fopen($logi2,"a");
 if(fwrite($openchatdb2,$logi_text."\n")) { ;  }
fclose($openchatdb2);
  



        include('./opoveshenie/opoveshenie_podval.php');
include('ochki/ochki_write.php');
include('variant2/hod_vertical/hod_vertical_create.php');
 include ('variant2/random_figura/hod_vertical_create.php');                                





} //конец записи если своя доска






















     $hod_two='1000';  }
// echo '<br>'.$hod_zapis;

// считываем ходы из отдельного файла на каждую доску

if($file = fopen($base_hod_ip, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($hody[]= fgets ($file)) { $b5++; } }

fclose ($file); 

// $b5=$b5-1;

 // $base_hod_ip2 = preg_replace("|[ip/hod/]+|", "", $base_hod_ip);
 
echo '<br>Записей ходов - '.$b5.', <font size=1>на доске <a href=#>'.$nomer_doski2.'</a> игрока <a href=#>'.$doska.'</a></font><br><br>';

for($r=0;$r<$b5+1;$r++) {
$d=$r+1;
if($hody[$r]>'  ') {
//echo $d.'. '.$hody[$r].'&nbsp;&nbsp;&nbsp;<br>';

}                      }

if($nomer_doski2) { //номер доски
if(preg_match('/Белые/',$hody[$b5-1])) { echo '<br><font size=1>Сейчас ход черных</font>'; $hod_dostup='2'; 
} else  if(preg_match('/Черные/',$hody[$b5-1])) { echo '<br><font size=1>Сейчас ход белых</font>'; $hod_dostup='1'; 
}  else   $hod_dostup='3'; echo '';
                            
if($hod_dostup=='3') {  echo '<br><font size=1>Ходов еще нет, первыми ходят белые</font>'; } 
} // конец номер доски
?>

</strong></font></td><tr></table><br></center>

<? if($hod_shto!='1000') { ?>
<script language="JavaScript"> document.cookie = "hod_shto=1000"; document.cookie = "hod_kuda=1000"; </script> 
<? } ?>