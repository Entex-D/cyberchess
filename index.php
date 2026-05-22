<? 
$par='Zinix';

//setcookie ("name", $name, time() + 1);
$doska=$_GET['doska'];
//echo $_GET['doska'].' = '.$doska;
if(!$tip | strlen($doska)>'20') {  $t=$_SERVER["REMOTE_ADDR"]; $t = preg_replace("|[.]+|", "_", $t); $t=$t.'_';  setcookie ("doska_kuki_nomer", $t, time() + 3600*12); } //else $par='Zinix'; ?>

<? if(!isset($_COOKIE['par'])) { echo '';
if($par=='Zinix') { setcookie ("par", $par, time() + 3600*24*7); $r='5'; }
                                            }

if(isset($_COOKIE['par'])) { if($par=='Zinix') {$r='5';  }}
?>

<? include('shapka_load_style.php'); ?>
<? include('hacker.php'); ?>
<? include('load_status.php'); ?>
<? include('anketa_run.php'); ?>
<? include('blokirovka.php'); ?>
<? include('guest/name.php'); ?>

<? if($blok!=true) { // start if $blok==true  ?>

<?
if($tip>'10') { $tip='1'; }

if($tip=='1' | $tip=='2' | $tip=='3' | $tip=='4' | $tip=='5' | $tip=='6' | $tip=='7' | $tip=='8' | $tip=='9' | $tip=='10') {
    
 $t=$_SERVER["REMOTE_ADDR"]; $di = preg_replace("|[.]+|", "_", $t); $di=$di.'_';
if($doska==$di) { $doska='';  }

//echo '='.$doska;
//echo $doska_quq;

if($doska<' ') {    
    
if(!isset($_COOKIE['name'])) {  $di=rand(1,1000); $name='Guest'.$di;
if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name) && $name>' ') { setcookie ("name", $name, time() + 3600*24*365*10);   $doska=$name;  }
                                            }

if(isset($_COOKIE['name'])) {  
    if($doska=='') { $doska=$name; } 
if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) {  }  }

            }
            
 if($doska>' ') { if(preg_match('/^[a-zA-Z0-9]+$/',$doska) | preg_match('/^[a-zA-Z]+$/',$doska))  {  setcookie ("doska_quq", $doska, time() + 3600*10);  } else $doska=$name; }

} // конец если ввели пароль
?>






<?

 if(!$tip) { ?><center>
     <title>Шахматы RMX</title>

<? if($p>' ') { 

?>     
<table width=90%><tr><td class=td_center><br><center>
<font size=2><strong><em>Сайт окрасился в случайный цвет:  <? echo $p; ?></em></strong></font><br>
<font size=1><strong><em>( Цвет сохранится 1 час , если <a target=_blank href=change_style.php>переключите</a> то сохранится на 1 неделю )</em></strong></font>

</center>
</td></tr></table>
<? } ?>

<table width=90%><tr>

<td class=td_center width=1%><br><center></center></td>
<td class=td_center width=40%><br><center><a href=index.php>

<img src=model/logo_color<? echo $style_run; ?>.jpg width=60% />


</a>


</center></td>
<td class=td_center><br><center></center></td>
<td class=td_center width=40%><br><center>

<a href=../index.php>
<img src=../model/logo_color<? echo $style_run; ?>.jpg width=260 />
</a>

</center></td>
<td class=td_center width=6%><br><center></center></td>

</tr></table>






<? if($name && $par=='Zinix') { ?>

<table width=90%><tr>

<td width=7% class=td_center><center>
</center><br></td>

<td class=td_center><center>
<? include('./balance.php'); ?>
</center><br></td>

<td class=td_center ><center>
<? include('./rating.php'); ?>
</center><br></td>

<td class=td_center ><center>
<? include('./win_loss.php'); ?> 
</center><br></td>

<td width=7% class=td_center><center>
</center><br></td>

</tr></table>

<? } ?>

<table width=90% bgcolor=#202020><tr><td class=td_center>
<? 

include('panel.php'); 

?></td></tr></table>

     

<? } if($par<>'Zinix') { } ?>



 <? 







 if($r=='5') {  ?>









<?

if(!$tip) {  include ('vhod1.php'); } else 
if($tip>' ') {  

 
if($doska>' ') {  setcookie ("doska_kuki_nomer", $doska, time() + 100000);  }
if($tip>' ') { setcookie ("doska_kuki_tip", $tip, time() + 100000); }

?>




</HEAD>

<body>


<center>


<? 

if(!$tip) {
 if(isset($_COOKIE['doska_kuki_tip']))  { $tip=$doska_kuki_tip;  }
          } 
 
 if($tip<>'1' & $tip<>'2' & $tip<>'3' & $tip<>'4' & $tip<>'5' & $tip<>'6' & $tip<>'7' & $tip<>'8' & $tip<>'9' & $tip<>'10') { $tip='1'; }

if(!$tip) {  $tip='1'; 
                       // include ('vhod.php'); 
 }
//if($par=='Zinix') {
    
if($tip=='1') { include ('variant1/include10.php'); }
if($tip=='2') { include ('variant2/include10.php'); }
if($tip=='3') { include ('variant3/include10.php'); }
if($tip=='4') { include ('variant4/include10.php'); }
if($tip=='5') { include ('variant5/include10.php'); }
if($tip=='6') { include ('variant6/include10.php'); }
if($tip=='7') { include ('variant7/include10.php'); }
if($tip=='8') { include ('variant8/include10.php'); }
if($tip=='9') { include ('variant9/include10.php'); }
if($tip=='10') { include ('variant10/include10.php'); }

 // echo '$tip = '.$tip;

 include ('shess_x_index.php');
?>

<iframe width="100%" height="90" src="spisok_dosok/doski_all.php" frameborder="0" background="#171717" scrolling="no"></iframe><br><br>

<? }}  ?>


<center>

<? include('index_podval.php'); ?>

</center>

<br><br>



<?


} // end if $blok==true

if(!$tip && $d!='4') { echo "<meta http-equiv='refresh' content='4;url=index.php?d=4'>";  }

if($d=='4' && $blok!=true && $zvuki=='11') {
?><audio src="zvuk/run_variant.mp3" autoplay="autoplay"></audio><?
}


if($tip=='1' && !$nomer_doski) { $run_variant='1'; $ked='1'; }
if($tip=='2' && !$nomer_doski2) { $run_variant='1'; $ked='2'; }
if($tip=='3' && !$nomer_doski3) { $run_variant='1'; $ked='3'; }
if($tip=='4' && !$nomer_doski4) { $run_variant='1'; $ked='4'; }
if($tip=='5' && !$nomer_doski5) { $run_variant='1';  $ked='5'; }
if($tip=='6' && !$nomer_doski6) { $run_variant='1'; $ked='6'; }
if($tip=='7' && !$nomer_doski7) { $run_variant='1'; $ked='7'; }
if($tip=='8' && !$nomer_doski8) { $run_variant='1'; $ked='8'; }

if($run_variant=='1' && $zvuki=='11') { 

$pp=rand(0,1);

if($pp==0) {
$tty=rand(0,1); if($tty==1) { ?><audio src="zvuk/pobeda_algoritm.mp3" autoplay="autoplay"></audio><? } 
                 }

if($pp==1) {
$tty=rand(0,1); if($tty==1) { ?><audio src="zvuk/run_game.mp3" autoplay="autoplay"></audio><? } 
                 }

}

if(!$tip && $d!='4' && $blok==true) { ?><audio src="zvuk/hello.mp3" autoplay="autoplay"></audio><?  }

?>