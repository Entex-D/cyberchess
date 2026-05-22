
<?  if(isset($_COOKIE['nick'])) {  } 

if($storona=='1' || $storona=='2') { setcookie ("storona", $storona, time() + 1); 
//echo "<meta http-equiv='refresh' content='2;url=dosa.php'>";
}

if($storona!='1' && $storona!='2') {
     // if(isset($_COOKIE['storona'])) {  } 
                                                }
if(!$storona) { $storona='1'; }

//echo '='.$storona;

if(!isset($_COOKIE['nick'])) {  
$r=rand(1,1000);
$nick='Igrok'.$r;
if(setcookie ("nick", $nick, time() + 3600*24*365)) {  } 
                                         } 


?>

<? include('../sea_battle2/load_style.php'); ?>


<style>


.cell{
  width:20px,
  height:10px;
floatl:left;
                borderl:1px solid #404040;
                box-sizing:border-box;
                cursor:pointer;
                text-align:center;
                line-height:40px;
                font-sizel:30px;
                }

.cell_dark{
  width20px,
  height:10px;
  bgcolor:#404040;
}

.сhess-board{
  width: 150px;
background:#525252;
 borderl:1px solid #404040;
               }
.сhess-board td[id]{
  border:0px solid #404040;
  width:20px,
  height:10px,
  cursor: pointer;
}

.сhess-board td[id] img{
  width:14px;
  height:14px;
  positionl: absolute;
  transition: 1s linear;
  z-index: 999;
  cursor: pointer;
}

.dark{bgcolor:#404040;}

@keyframes click-piece {
  from {margin-left: 2px; margin-top: 2px;}
  to {margin-left: -2px; margin-top: -2px;}
}
</style>

<? include('../sea_battle2/error_blocking.php'); ?>
<? if($fix=='1') { ?>
<? include('../sea_battle2/script_doska_hod.php'); ?>


<? } ?>


<?

$s='0';
$width_variant2_doska_niz='90%';

?>

<center>
<table width=90%><tr>

<td class=td_center width=1%><br><center></center></td>
<td class=td_center width=40%><br><center><a href=../index.php>

<img src=../model/logo_color<? echo $style_run; ?>.jpg width=60% />

</a></center></td>
<td class=td_center><br><center></center></td>
<td class=td_center width=40%><br><center>

<a href=../index.php>
<img src=../model/logo_color<? echo $style_run; ?>.jpg width=260 />
</a>

</center></td>
<td class=td_center width=6%><br><center></center></td>

</tr></table>
</center>
<br>

<?


echo '<center><table width='.$width_variant2_doska_niz.'><tr><td bgcolor=>';
?>

<br><center><font size=3><strong><em><a href=#>Морской бой</a></em></strong></font>
<font size=1><strong><em> Доска  <? echo $nick; ?> </em></strong></font></center>
<br><center><font size=2><strong><em>Победи компьютер в Морской бой [ Компьютер снайпер на 50%) ] </em></strong></font></center><br>

</td></tr></table></center>

<?
include('../sea_battle2/figure_read.php');
//include('../sea_battle2/hod_bgcolor.php');
?>










<? 
if($storona=='1' || $storona=='2') { ?>

<?
if($view=='ok') { include('../sea_battle2/figure_config.php'); } else 
if($view!='ok') { include('../sea_battle2/figure_config_comp.php'); }
?>


<center>
<table class="" width=90%><tr><td><br><center><strong><em><font size=2><a href=#>Поле Компьютера</a></font></em></strong></center><br>












<center>
<table class="сhess-board">



<tr><td class="  " width=20 height=10>15</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P15 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>14</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P14 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>





<tr><td class="  " width=20 height=10>13</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P13 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>12</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P12 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>





<tr><td class="  " width=20 height=10>11</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P11 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>10</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P10 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>





<tr><td class="  " width=20 height=10>9</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P9 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>8</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P8 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>7</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P7 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>6</td>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
    <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P6 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>5</td>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P5 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>4</td>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?>
  <td class="<? echo $d; ?>" <? echo $col; ?> id=A4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
    <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P4 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>


<tr><td class="  " width=20 height=10>3</td>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P3 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>2</td>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
    <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P2 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>1</td>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P1 ><img src="../<? echo $arImages[$fexo_comp[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10><font size=2></font></td>
<td class=" " width=20 height=10><font size=2>A</font></td>
<td class=" " width=20 height=10><font size=2>B</font></td>
<td class=" " width=20 height=10><font size=2>C</font></td>
<td class=" " width=20 height=10><font size=2>D</font></td>
<td class=" " width=20 height=10><font size=2>E</font></td>
<td class=" " width=20 height=10><font size=2>F</font></td>
<td class=" " width=20 height=10><font size=2>G</font></td>
<td class=" " width=20 height=10><font size=2>H</font></td>
<td class=" " width=20 height=10><font size=2>I</font></td>
<td class=" " width=20 height=10><font size=2>K</font></td>
<td class=" " width=20 height=10><font size=2>L</font></td>
<td class=" " width=20 height=10><font size=2>M</font></td>
<td class=" " width=20 height=10><font size=2>N</font></td>
<td class=" " width=20 height=10><font size=2>O</font></td>
<td class=" " width=20 height=10><font size=2>P</font></td>

</tr></table>
</center>














</td><td><br><center><strong><em><font size=2><a href=#>Поле Игрока</a></font></em></strong></center><br>


<? $s='0'; ?>

<? include('../sea_battle2/figure_config.php'); ?>






<center>
<table class="сhess-board">



<tr><td class="  " width=20 height=10>15</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P15 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>14</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P14 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>





<tr><td class="  " width=20 height=10>13</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P13 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>12</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P12 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>





<tr><td class="  " width=20 height=10>11</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P11 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>10</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P10 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>





<tr><td class="  " width=20 height=10>9</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P9 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>8</td>
  
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
 <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P8 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>7</td>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P7 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>6</td>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
    <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P6 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>5</td>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P5 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10>4</td>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?>
  <td class="<? echo $d; ?>" <? echo $col; ?> id=A4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
    <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P4 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>


<tr><td class="  " width=20 height=10>3</td>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P3 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>2</td>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
  <? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/>  </td><? $s=$s+'1'; ?>
    <? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>

<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P2 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>



<tr><td class="  " width=20 height=10>1</td>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=A1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=B1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=C1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=D1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=E1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=F1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=G1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=H1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=I1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=K1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>

<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=L1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=M1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=N1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?>
<? if($color_b[$s]!='#404040') { $d='cell'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=O1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1' ?>
<? if($color_b[$s]!='#404040') { $d='cell dark'; } else $d=''; $col='bgcolor="'.$color_b[$s].'"'; ?><td class="<? echo $d; ?>" <? echo $col; ?>  id=P1 ><img src="../<? echo $arImages[$fexo[$s+1]]; ?>"/></td><? $s=$s+'1'; ?></tr>




<tr><td class="  " width=20 height=10><font size=2></font></td>
<td class=" " width=20 height=10><font size=2>A</font></td>
<td class=" " width=20 height=10><font size=2>B</font></td>
<td class=" " width=20 height=10><font size=2>C</font></td>
<td class=" " width=20 height=10><font size=2>D</font></td>
<td class=" " width=20 height=10><font size=2>E</font></td>
<td class=" " width=20 height=10><font size=2>F</font></td>
<td class=" " width=20 height=10><font size=2>G</font></td>
<td class=" " width=20 height=10><font size=2>H</font></td>
<td class=" " width=20 height=10><font size=2>I</font></td>
<td class=" " width=20 height=10><font size=2>K</font></td>
<td class=" " width=20 height=10><font size=2>L</font></td>
<td class=" " width=20 height=10><font size=2>M</font></td>
<td class=" " width=20 height=10><font size=2>N</font></td>
<td class=" " width=20 height=10><font size=2>O</font></td>
<td class=" " width=20 height=10><font size=2>P</font></td>

</tr></table>
</center>





</tr></table>
</center>

<? } ?>
























































<?
echo '<center><table width='.$width_variant2_doska_niz.'><tr><td bgcolor=>';
?>

<center><font size=2>

<? 
//echo 'Ход с '.$hod_shto1; 
//echo 'Ход на '.$hod_kuda1; 

include('../sea_battle2/figure_write.php');
include('../sea_battle2/pobeda.php');

?>
<br><br><a href=dosa.php?game=new>Новая игра</a>&nbsp;&nbsp;

</font></center><br>
</td></tr></table></center>

<?

if($game=='new' || $game=='new2' || $game=='new3') {
include('../sea_battle2/game_new.php');
}
?>

<?
include('../sea_battle2/hody_read.php');
?>


<?
include('../sea_battle2/analiz_read.php');
?>


<?

include('../sea_battle2/secret_file.php');
                            
?>





<br>
<center>
<? include('../podval.php'); ?>
</center><br>