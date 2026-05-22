<?


if($new_kletki==11 && $hod_one<'1000' && $hod_two<'1000' && $tip!='7' && $tip!='8') { //начало новые клетки

if($hod_one<'1000') {  

 if($sh[$hod_one]=='84') { ?><audio src="./zvuk/hod_one_moroz.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='85') { ?><audio src="./zvuk/hod_one_detonator.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='90') { ?><audio src="./zvuk/hod_one_podarok.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='91') { ?><audio src="./zvuk/hod_one_zamok.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='92') { ?><audio src="./zvuk/hod_one_baza.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='93') { ?><audio src="./zvuk/hod_one_almaz.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='94') { ?><audio src="./zvuk/hod_one_stena.mp3" autoplay="autoplay"></audio><? } 


 if($sh[$hod_one]=='84') { echo '<br>Эта фигура Мороз, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_one]=='85') { echo '<br>Эта фигура Детонатор, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_one]=='86') { echo '<br>Эта фигура Взрыв, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_one]=='90') { echo '<br>Эта фигура Подарок, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_one]=='91') { echo '<br>Эта фигура Замок, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_two]=='91') { echo '<br>На фигуру Замок ходить нельзя'; $hod_one='1000'; $hod_two='1000'; ?><audio src="./zvuk/hod_two_zamok.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_two]=='94') { echo '<br>На фигуру Стена ходить нельзя'; $hod_one='1000'; $hod_two='1000'; ?><audio src="./zvuk/hod_two_stena.mp3" autoplay="autoplay"></audio><? } 
 if($sh[$hod_one]=='92') { echo '<br>Эта фигура База, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_one]=='93') { echo '<br>Эта фигура Алмаз, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 
 if($sh[$hod_one]=='94') { echo '<br>Эта фигура Стена, ей ходить нельзя'; $hod_one='1000'; $hod_two='1000'; } 

}

if($hod_one!='1000') {

if($sh[$hod_one-1]=='84' || $sh[$hod_one+1]=='84' || $sh[$hod_one-24]=='84' || $sh[$hod_one+24]=='84' || 
$sh[$hod_one-23]=='84' || $sh[$hod_one+23]=='84' || $sh[$hod_one-25]=='84' || $sh[$hod_one+25]=='84') { $hod_one='1000';$hod_two='1000'; if($zvuki_hody=='11' && $defe[0]==0) { $zapret=1; ?><audio src="./zvuk/moroz.mp3" autoplay="autoplay"></audio><? }}

}



if($hod_two!='1000' && $sh[$hod_two]!='40' && $sh[$hod_two]<'30') {

if($sh[$hod_two-1]=='91' || $sh[$hod_two+1]=='91' || $sh[$hod_two-24]=='91' || $sh[$hod_two+24]=='91' || 
$sh[$hod_two-23]=='91' || $sh[$hod_two+23]=='91' || $sh[$hod_two-25]=='91' || $sh[$hod_two+25]=='91') { $hod_two='1000';$hod_two='1000'; $magic='1'; if($zvuki_hody=='11') { ?><audio src="./zvuk/zamok.mp3" autoplay="autoplay"></audio><? }}

}


if($sh[$hod_two]=='84') {
if($sh[$hod_one]<10) { $ball_chernye=$ball_chernye+10; $magic='1';  if($zvuki_hody=='11') {  ?><audio src="./zvuk/hod_na_moroz.mp3" autoplay="autoplay"></audio><? }} else
if($sh[$hod_one]<30 && $sh[$hod_one]>10) { $ball_belye=$ball_belye+10; $magic='1';  if($zvuki_hody=='11') {  ?><audio src="./zvuk/hod_na_moroz.mp3" autoplay="autoplay"></audio><? }} 

}











$podarok='0';

for($g=0;$g<300;$g++) { //проверяем есть ли 2 подарка

if($sh[$g]=='90') { $podarok=$podarok+1; }
}

if($ball_belye>9 || $ball_chernye>9) { // стена превращается в подарки если есть 10 баллов 

for($g=0;$g<300;$g++) { //превращение всей стены в подарки

if($sh[$g]=='94') { $sh[$g]='90'; $podarok=$podarok+'1'; // не удаляем подарки с самого начала
}
} //end for
} //end if $ball_belye







if($sh[$hod_two]=='93') { // превращение в стену от хода на алмаз

 if($zvuki_hody=='11') { ?><audio src="./zvuk/almaz.mp3" autoplay="autoplay"></audio><? }

$magic='1';

//if($sh[$hod_two-1]>'30') { $sh[$hod_two-1]='94'; }
//if($sh[$hod_two+1]>'30') { $sh[$hod_two+1]='94'; }
//if($sh[$hod_two-24]>'30') { $sh[$hod_two-24]='94'; }
//if($sh[$hod_two+24]>'30') { $sh[$hod_two+24]='94'; }
if($sh[$hod_two-23]>'30') { $sh[$hod_two-23]='94'; }
if($sh[$hod_two+23]>'30') { $sh[$hod_two+23]='94'; }
if($sh[$hod_two-25]>'30') { $sh[$hod_two-25]='94'; }
if($sh[$hod_two+25]>'30') { $sh[$hod_two+25]='94'; }

}


if($podarok<2) { //алмаз не появится ,пока старые подарки не разберут

for($g=0;$g<300;$g++) { //исчезновение и появление алмаза

if($sh[$g]=='93') { $sh[$g]='40'; }
}


$kon_white='0';

for($g=0;$g<300;$g++) {

$q1=rand(53,240);

$zet='93'; 

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<1) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for

} // end if $podarok











if($sh[$hod_two]=='92') {
if($sh[$hod_one]<10 && $sh[$hod_one]!='6') { $magic='1';  if($zvuki_hody=='11') {  ?><audio src="./zvuk/hod_two_baza.mp3" autoplay="autoplay"></audio><? 

$tte=rand(0,6);

if($tte==0) { $sh[$hod_one]='3'; } //фигура превращается от хода на базу
if($tte==1) { $sh[$hod_one]='4'; }
if($tte==2) { $sh[$hod_one]='2'; }
if($tte==3) { $sh[$hod_one]='5'; }
if($tte==4) { $sh[$hod_one]='7'; }
if($tte==5) { $sh[$hod_one]='8'; }
if($tte==6) { $sh[$hod_one]='9'; }


}} else
if($sh[$hod_one]<30 && $sh[$hod_one]>10 && $sh[$hod_one]!='16') {  $magic='1';  if($zvuki_hody=='11') {  ?><audio src="./zvuk/hod_two_baza.mp3" autoplay="autoplay"></audio><? 

$tte=rand(0,6);

if($tte==0) { $sh[$hod_one]='13'; } //фигура превращается от хода на базу
if($tte==1) { $sh[$hod_one]='14'; }
if($tte==2) { $sh[$hod_one]='12'; }
if($tte==3) { $sh[$hod_one]='15'; }
if($tte==4) { $sh[$hod_one]='17'; }
if($tte==5) { $sh[$hod_one]='18'; }
if($tte==6) { $sh[$hod_one]='19'; }


}} 

}














if($sh[$hod_two]=='90') {
if($sh[$hod_one]<10) { $ball_chernye=$ball_chernye+10; $magic='1'; $dd90='1'; if($zvuki_hody=='11') {  ?><audio src="./zvuk/podarok.mp3" autoplay="autoplay"></audio><? }} else
if($sh[$hod_one]<30 && $sh[$hod_one]>10) { $ball_belye=$ball_belye+10; $magic='1'; $dd90='2'; if($zvuki_hody=='11') {  ?><audio src="./zvuk/podarok.mp3" autoplay="autoplay"></audio><? }} 

$kon_white='0';

for($g=0;$g<300;$g++) { //появление коня при ходе на подарок

//$q1=rand(53,240);

if($dd90=='1') { $zet='3'; } else
if($dd90=='2') { $zet='13'; }  

$qq=rand(0,7);

if($qq==0) { $q1=$hod_two+1; }
if($qq==1) { $q1=$hod_two-1; }
if($qq==2) { $q1=$hod_two+24; }
if($qq==3) { $q1=$hod_two-24; }
if($qq==4) { $q1=$hod_two+23; }
if($qq==5) { $q1=$hod_two-23; }
if($qq==6) { $q1=$hod_two+25; }
if($qq==7) { $q1=$hod_two-25; }

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<1) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for

} //end if hod=90



for($g=0;$g<300;$g++) { //исчезновение и появление снежинки

if($sh[$g]=='84') { $sh[$g]='40'; }
}


$kon_white='0';

for($g=0;$g<300;$g++) {

$q1=rand(53,240);

$zet='84'; 

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<2) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for





for($g=0;$g<300;$g++) { //исчезновение и появление базы

if($sh[$g]=='92') { $sh[$g]='40'; }
}


$kon_white='0';

for($g=0;$g<300;$g++) {

$q1=rand(53,240);

$zet='92'; 

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<1) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for









if($podarok<2) { // если 1 или 0 подарков и не осталось от стены

for($g=0;$g<300;$g++) { //исчезновение и появление подарка

if($sh[$g]=='90') { $sh[$g]='40'; }
}




$deton_n=rand(0,1);

if($deton_n==1) { //подарок будет появляться в 2 раза меньше

$kon_white='0';

for($g=0;$g<300;$g++) {

$q1=rand(53,240);

$zet='90'; 

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<1) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for

}

} //end if $podarok













for($g=0;$g<300;$g++) { //исчезновение и появление замка

if($sh[$g]=='91') { $sh[$g]='40'; }
}


$kon_white='0';

for($g=0;$g<300;$g++) {

$q1=rand(53,240);

$zet='91'; 

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<1) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for























if($sh[$hod_two]=='85') { $ssee='1'; //фигуру не взрываем от детонатора, если ход на детонатор
if($sh[$hod_one]<10) { $ball_belye=0; $ball_chernye=$ball_chernye*2; $magic='1';  } else
if($sh[$hod_one]<30 && $sh[$hod_one]>10) { $ball_chernye=0; $ball_belye=$ball_belye*2; $magic='1';  } 

}


for($g=0;$g<300;$g++) { //исчезновение и появление детонатора

if($sh[$g]=='85') { $detonator=$g; $sh[$g]='86'; }
}



$det=rand(0,2);
$fig=rand(0,7);

if($det==0 || $det==1){

if($detonator>0 && $ssee!='1') {

if($fig==0) { if($sh[$detonator-1]!=40 && $sh[$detonator-1]!=6 && $sh[$detonator-1]!=16 && $detonator-1!=$hod_one && $detonator-1!=126 && $detonator-1!=150 && $detonator-1!=137 && $detonator-1!=161){ 
$sh[$detonator-1]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }} //взрыв случайной фигуры от детонатора

if($fig==1) { if($sh[$detonator+1]!=40 && $sh[$detonator+1]!=6 && $sh[$detonator+1]!=16 && $detonator+1!=$hod_one && $detonator+1!=126 && $detonator+1!=150 && $detonator+1!=137 && $detonator+1!=161){  
$sh[$detonator+1]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}

if($fig==2) { if($sh[$detonator-24]!=40 && $sh[$detonator-24]!=6 && $sh[$detonator-24]!=16 && $detonator-24!=$hod_one && $detonator-24!=126 && $detonator-24!=150 && $detonator-24!=137 && $detonator-24!=161){  
$sh[$detonator-24]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}

if($fig==3) { if($sh[$detonator+24]!=40 && $sh[$detonator+24]!=6 && $sh[$detonator+24]!=16 && $detonator+24!=$hod_one && $detonator+24!=126 && $detonator+24!=150 && $detonator+24!=137 && $detonator+24!=161){  
$sh[$detonator+24]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}

if($fig==4) { if($sh[$detonator-23]!=40 && $sh[$detonator-23]!=6 && $sh[$detonator-23]!=16 && $detonator-23!=$hod_one && $detonator-23!=126 && $detonator-23!=150 && $detonator-23!=137 && $detonator-23!=161){  
$sh[$detonator-23]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}

if($fig==5) { if($sh[$detonator+23]!=40 && $sh[$detonator+23]!=6 && $sh[$detonator+23]!=16 && $detonator+23!=$hod_one && $detonator+23!=126 && $detonator+23!=150 && $detonator+23!=137 && $detonator+23!=161){  
$sh[$detonator+23]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}

if($fig==6) { if($sh[$detonator-25]!=40 && $sh[$detonator-25]!=6 && $sh[$detonator-25]!=16 && $detonator-25!=$hod_one && $detonator-25!=126 && $detonator-25!=150 && $detonator-25!=137 && $detonator-25!=161){  
$sh[$detonator-25]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}

if($fig==7) { if($sh[$detonator+25]!=40 && $sh[$detonator+25]!=6 && $sh[$detonator+25]!=16 && $detonator+25!=$hod_one && $detonator+25!=126 && $detonator+25!=150 && $detonator+25!=137 && $detonator+25!=161){  
$sh[$detonator+25]='83'; $rokirovka=' [ детонатор ] '.$rokirovka; }}
                         }
}


$deton_n=rand(0,1);

if($deton_n==1) {

$kon_white='0';

for($g=0;$g<300;$g++) {

$q1=rand(53,240);

$zet='85'; 

if($q1>53 && $q1<66) { $b1=1; }
if($q1>77 && $q1<90) { $b1=1; }
if($q1>101 && $q1<114) { $b1=1; }
if($q1>125 && $q1<138) { $b1=1; }
if($q1>149 && $q1<162) { $b1=1; }
if($q1>173 && $q1<186) { $b1=1; }
if($q1>197 && $q1<210) { $b1=1; }
if($q1>221 && $q1<234) { $b1=1; }

if($b1==1) { if($kon_white<1) { if($sh[$q1]=='40' && $q1!='126' && $q1!='150' && $q1!='137' && $q1!='161' && $q1!=$hod__two) { $sh[$q1]=$zet; $kon_white=$kon_white+1; } } }

$b1=0;
} //end for

}// конец if($deton


}//конец новые клетки


















if($new_kletki==6) { //если новые клетки отключены

for($g=0;$g<300;$g++) { 

if($sh[$g]=='84') { $sh[$g]='40'; } //удаляем новые клетки с доски
if($sh[$g]=='85') { $sh[$g]='40'; }
if($sh[$g]=='86') { $sh[$g]='40'; }
if($sh[$g]=='90') { $sh[$g]='40'; }
if($sh[$g]=='91') { $sh[$g]='40'; }
if($sh[$g]=='92') { $sh[$g]='40'; }
if($sh[$g]=='93') { $sh[$g]='40'; }
if($sh[$g]=='94') { $sh[$g]='40'; }
}

} //end of $new kletki == 6







if($change_bomb==6) { //если бомбы и домики отключены

for($g=0;$g<300;$g++) { 

if($sh[$g]=='81') { $sh[$g]='40'; } //удаляем бомбы и домики с доски
if($sh[$g]=='82') { $sh[$g]='40'; }
}

} //end of $change_bomb == 6









for($g=0;$g<300;$g++) { //вычисляем, заморожен ли король

if($exxo[11]=='Черные') { 

if($sh[$g]=='6'  && $shah=='1') { if($sh[$g-1]=='84' || $sh[$g+1]=='84' || $sh[$g-24]=='84' || $sh[$g+24]=='84' || $sh[$g-23]=='84' || $sh[$g+23]=='84' || $sh[$g-25]=='84' || $sh[$g+25]=='84') { 
 $yy=rand(0,2); if($zvuki_hody=='11' && $yy=='1') { $magic='1'; ?><audio src="./zvuk/pobeda_belyh.mp3" autoplay="autoplay"></audio><? } }
}

 }

if($exxo[11]=='Белые') { 

if($sh[$g]=='16' && $shah=='2') { if($sh[$g-1]=='84' || $sh[$g+1]=='84' || $sh[$g-24]=='84' || $sh[$g+24]=='84' || $sh[$g-23]=='84' || $sh[$g+23]=='84' || $sh[$g-25]=='84' || $sh[$g+25]=='84') { 
 $yy=rand(0,2); if($zvuki_hody=='11' && $yy=='1') { $magic='1'; ?><audio src="./zvuk/pobeda_chernyh.mp3" autoplay="autoplay"></audio><? } }
}

 }

} // end for














//трансформация от метаморфозы ниже

if ($exxo[12] > 0 && $exxo[12] % $transform_index === 0 && $new_transform=='11' && $hod_one<'1000' && $hod_two<'1000') {
    // Здесь код для выполнения на каждом 5‑м ходу

for($g=0;$g<300;$g++) {

$x_belye=rand(0,5);
$x_chernye=rand(0,5);

if($x_belye==0) { $x_belye_transform=12; }
if($x_belye==1) { $x_belye_transform=13; }
if($x_belye==2) { $x_belye_transform=14; }
if($x_belye==3) { $x_belye_transform=15; }
if($x_belye==4) { $x_belye_transform=17; }
if($x_belye==5) { $x_belye_transform=18; }

if($x_chernye==0) { $x_chernye_transform=2; }
if($x_chernye==1) { $x_chernye_transform=3; }
if($x_chernye==2) { $x_chernye_transform=4; }
if($x_chernye==3) { $x_chernye_transform=5; }
if($x_chernye==4) { $x_chernye_transform=7; }
if($x_chernye==5) { $x_chernye_transform=8; }

if($sh[$g]<10 && $sh[$g]!=1 && $sh[$g]!=6 && $sh[$g]!=9 && 
$sh[$g-1]!=84 && $sh[$g+1]!=84 && $sh[$g-24]!=84 && $sh[$g+24]!=84 && $sh[$g-23]!=84 && $sh[$g+23]!=84 && $sh[$g-25]!=84 && $sh[$g+25]!=84 && 
$sh[$g-1]!=91 && $sh[$g+1]!=91 && $sh[$g-24]!=91 && $sh[$g+24]!=91 && $sh[$g-23]!=91 && $sh[$g+23]!=91 && $sh[$g-25]!=91 && $sh[$g+25]!=91) { 
$sh[$g]=$x_chernye_transform; $magic=1; }

if($sh[$g]>10 && $sh[$g]<30 && $sh[$g]!=11 && $sh[$g]!=16 && $sh[$g]!=19 && 
$sh[$g-1]!=84 && $sh[$g+1]!=84 && $sh[$g-24]!=84 && $sh[$g+24]!=84 && $sh[$g-23]!=84 && $sh[$g+23]!=84 && $sh[$g-25]!=84 && $sh[$g+25]!=84 && 
$sh[$g-1]!=91 && $sh[$g+1]!=91 && $sh[$g-24]!=91 && $sh[$g+24]!=91 && $sh[$g-23]!=91 && $sh[$g+23]!=91 && $sh[$g-25]!=91 && $sh[$g+25]!=91) { 
$sh[$g]=$x_belye_transform; $magic=1; }

} //end for

 $rokirovka=' / трансформация / '.$rokirovka; 
 if($zvuki_hody=='11') { ?><audio src="./zvuk/transform.mp3" autoplay="autoplay"></audio><? }

} //конец if $exxo[12] 





include('./zapret_zvukov.php');




?>