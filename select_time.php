<?
//Считывание btc
if($name) { $file_guest='./btc/'.$name.'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc
?>

&nbsp;&nbsp;

<? 

if($name==$sopernik) { unset($sopernik); }

if(!$sopernik) { $sopernik_zapas='0'; setcookie ("sopernik_zapas", $sopernik_zapas, time() + 1); }

if($sopernik) { $sopernik_zapas=$sopernik; setcookie ("sopernik_zapas", $sopernik_zapas, time() + 3600*24); }


if($sopernik_zapas) { 

 ?>
<select class="button" size="1" name='igrok'>
 <option  class="button" value=<? echo $sopernik_zapas; ?>> Соперник  <? echo $sopernik_zapas; ?></option>
 </select>

<? 


} 
 ?>

<? if($tip!='22' && !$sopernik_zapas) {  ?>

<select class="button" size="1" name='igrok'>
<? if($tip<'9') { ?>  <option  class="button" value='Comp'> c AI</option><? } ?>
 <option  class="button" value='gamer'>с человеком</option> 
<? if($tip<'9') { ?> <option  class="button" value='Computer'>AI + AI</option> <? } ?>
 </select>

&nbsp;&nbsp;


<?  } ?>

<? if($tip) { ?>

<select class="button" size="1" name='game_nomer'>
 <option  class="button" value='game1'>1. Игра Extol ( обычная )</option>
 <? if($tip<'8') { ?><option  class="button" value='game2'>2. Игра Trox ( упрощенная 1 )</option><? } ?>
 <? if($tip!='4' && $tip!='8') { ?>   <option class="button" value='game3'>3. Игра Lixa ( упрощенная 2 )</option>
 <option  class="button" value='game4'>4. Игра Detra ( упрощенная 3 )</option>
 <? } ?>

</select>

&nbsp;&nbsp;

<? } ?>

<? if($tip=='22') { ?>

<select class="button" size="1" name='timer'>
 <option  class="button" value='min86400'>1 сутки</option>
  <option  class="button" value='min360'>6 часов</option>
  <option  class="button" value='min120'>2 часа</option>
  <option  class="button" value='min60'>1 час</option>
  <option  class="button" value='min30'>30 минут</option>
  <option  class="button" value='min15'>15 минут</option>
  <option  class="button" value='min10'>10 минут</option>
  <option  class="button" value='min0'>Без времени</option>
 </select>

&nbsp;&nbsp;

<? } ?>

<? if($err=='24')  { ?>

<select class="button" size="1" name='btc'>
 <option  class="button" value='btc0'>За 0 btc</option>
 <? if($v[0]>='0.001') { ?><option  class="button" value='btc0001'>За 0.001 btc</option> <? } ?>
 <? if($v[0]>='0.002') { ?> <option  class="button" value='btc0002'>За 0.002 btc</option><? } ?>
 <? if($v[0]>='0.005') { ?> <option  class="button" value='btc0005'>За 0.005 btc</option><? } ?>
 <? if($v[0]>='0.01') { ?> <option  class="button" value='btc001'>За 0.01 btc</option><? } ?>
 <? if($v[0]>='0.02') { ?> <option  class="button" value='btc002'>За 0.02 btc</option><? } ?>
<? if($v[0]>='0.04') { ?>  <option  class="button" value='btc004'>За 0.04 btc</option><? } ?>
 <? if($v[0]>='0.06') { ?> <option  class="button" value='btc006'>За 0.06 btc</option><? } ?>
  </select>

<? } ?>