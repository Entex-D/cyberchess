<HTML><HEAD><title>Увеличение доски игрока <? echo $namer ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>

<? include('../shapka_load_style.php'); ?>


<center>

<? include('../shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=4><br><strong><a href=#>[[</a> Просмотр доски <? echo $nomer6; ?> игрока <? echo $namer; ?> <a href=#>]]</a></strong><br></font></center></td></tr></table>


<table width=90%><tr>
<td class=td_center><center><font size=2><br><strong>



<?

if($namer) { if(preg_match('/^[a-zA-Z0-9]+$/',$namer)) {

//if($tip6!='1') { $tip6='1'; }

$ndoski='../archive_doski/'.$namer.'/tip6/'.$nomer6.'/'.$nomer6.'_hody.txt';
 $b4='0';
if($file = fopen($ndoski, "r")) {    
while(!feof($file)) { 
if($dx[]= fgets ($file)){ $b4=$b4+1;  }
 }}
fclose ($file);


$fdoski='../archive_doski/'.$namer.'/tip6/'.$nomer6.'/'.$nomer6.'.txt';
 $b5='0';
if($file = fopen($fdoski, "r")) {    
while(!feof($file)) { 
if($figury[]= fgets ($file)){ $b5=$b5+1;  }
 }
} 
fclose ($file);


$fstatix='../archive_doski/'.$namer.'/tip6/'.$nomer6.'/'.$nomer6.'_statix.txt';
 $b6='0';
if($file = fopen($fstatix, "r")) {    
while(!feof($file)) { 
if($dstatix[]= fgets ($file)){ $b6=$b6+1;  }
 }
} 
fclose ($file);


//echo '$b4='.$b4;

if($b5>'0') { // если доска существует,если архив не стер,то показзываем

?>

<? 
$doska=$namer; 
$db=$nomer6;
$number=$nomer6;
?>

<? include('../variant6/hod_bgcolor.php'); ?>
<? include('../variant6/shah.php'); ?>
<? if($zvuki_hody=='11') { include('../variant6/zvuk_uvel.php'); } ?>

<table width=90%><tr><td class=td_center><? include('../timer.php'); ?></td></tr></table>

<br>

<center><font size=1><strong><em>Обновление каждые 40 секунд</em></strong><br><br></font></center>

<?

//echo '<em>Последние ходы: ';

//if($b4>'0') { echo $b4.'. '.$dx[$b4-1]; }
//if($b4>'1') { echo $b4+'1'.'. '.$dx[$b4]; }

//if($b4>'0' || $b4>'1') { echo '<br><br>'; }

//echo '</em>';
?>

<? //echo '<br>'.$b4;
?>

<? //echo '<br>'.$b5;
?>

<?
 $ra='620'; 
?>

<table width=90%><td class=td_center width=<? echo $ra; ?>>

<?
 //В начале

?>
<style>

     #table { background:#373737;}

  .cell{
                width:46px;
                height:40px;
            }
        
               .bomb{
                width:46px;
                height:40px;
      background:#373737;
               }
               
               .cell1{
                width:46px;
                height:40px;
      background:#373737;      }
      
               .cell2{
                width:36px;
                height:0px;
            }
               .bukvi{
                width:46px;
                height:40px;
            }
.selected{
                border:2px solid #000;
				border-radius:4px;
            }
        </style>

 <?
for($sx='0';$sx<300;$sx++) {

if($style_figure=='16') { $figure_x='figure_design1/'; $width=42; $height=38; }
if($style_figure=='11') { $figure_x='figure_design2/';  $width=42; $height=38; }
if($style_figure=='6') { $figure_x='figure_design3/';  $width=42; $height=38; }
if($style_figure=='4') { $figure_x='figure_design4/';  $width=42; $height=38; }

$figury[$sx]=preg_replace("|[\n]+|","",$figury[$sx]);
$figury[$sx]=preg_replace("|[\r]+|","",$figury[$sx]);

if($figury[$sx]=='1') { $sh[$sx]='../picture/'.$figure_x.'peshka_black.png'; }
if($figury[$sx]=='2') { $sh[$sx]='../picture/'.$figure_x.'tura_black.png'; }
if($figury[$sx]=='3') { $sh[$sx]='../picture/'.$figure_x.'kon_black.png'; }
if($figury[$sx]=='4') { $sh[$sx]='../picture/'.$figure_x.'slon_black.png'; }
if($figury[$sx]=='5') { $sh[$sx]='../picture/'.$figure_x.'ferz_black.png'; }
if($figury[$sx]=='6') { $sh[$sx]='../picture/'.$figure_x.'korol_black.png'; }
if($figury[$sx]=='7') { $sh[$sx]='../picture/new_figure/insider_black.png'; }
if($figury[$sx]=='9') { $sh[$sx]='../picture/new_figure/black_pauk.png'; }
if($figury[$sx]=='11') { $sh[$sx]='../picture/'.$figure_x.'peshka.png'; }
if($figury[$sx]=='12') { $sh[$sx]='../picture/'.$figure_x.'tura.png'; }
if($figury[$sx]=='13') { $sh[$sx]='../picture/'.$figure_x.'kon.png'; }
if($figury[$sx]=='14') { $sh[$sx]='../picture/'.$figure_x.'slon.png'; }
if($figury[$sx]=='15') { $sh[$sx]='../picture/'.$figure_x.'ferz.png'; }
if($figury[$sx]=='16') { $sh[$sx]='../picture/'.$figure_x.'korol.png'; }
if($figury[$sx]=='17') { $sh[$sx]='../picture/'.$figure_x.'insider_white.png'; }
if($figury[$sx]=='18') { $sh[$sx]='../picture/'.$figure_x.'geniy_white.png'; }
if($figury[$sx]=='8') { $sh[$sx]='../picture/new_figure/geniy_black.png'; }
if($figury[$sx]=='19') { $sh[$sx]='../picture/'.$figure_x.'white_pauk.png'; }
if($figury[$sx]=='40') { $sh[$sx]='../picture/kletka-0.png'; }
if($figury[$sx]=='80') { $sh[$sx]='../picture/kletka-0.png'; }
if($figury[$sx]=='81') { $sh[$sx]='../picture/kletka-2.png'; }
if($figury[$sx]=='82') { $sh[$sx]='../picture/bomba.png'; }
if($figury[$sx]=='83') { $sh[$sx]='../picture/ogon.gif'; }
if($figury[$sx]=='84') { $sh[$sx]='../picture/moroz.png'; }
if($figury[$sx]=='85') { $sh[$sx]='../picture/detonator.png'; }
if($figury[$sx]=='86') { $sh[$sx]='../picture/vzryv.gif'; }
if($figury[$sx]=='90') { $sh[$sx]='../picture/podarok.png'; }
if($figury[$sx]=='91') { $sh[$sx]='../picture/zamok.png'; }
if($figury[$sx]=='92') { $sh[$sx]='../picture/baza.png'; }
if($figury[$sx]=='93') { $sh[$sx]='../picture/almaz.png'; }
if($figury[$sx]=='94') { $sh[$sx]='../picture/stena.jpg'; }

} //end for

?>

      <? $x='54'; ?>

 <div id="table">
         
 <div class="cell2" id="">8</div>

  <div class="cell id" id="A8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="B8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="C8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="D8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="E8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="F8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="G8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="H8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="I8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="K8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell id" id="L8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="M8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<br> <div class="cell2" id="">7</div>

  <? $x=$x+'13'; ?> <div class="cell dark" id="A7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="B7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="C7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="D7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="E7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="F7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="G7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="H7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="I7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="K7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="L7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="M7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
 <div class="cell2" id="">6</div>

  <? $x=$x+'13'; ?> <div class="cell" id="A6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="B6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="C6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="D6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="E6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="F6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="G6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="H6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="I6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="K6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="L6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="M6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
 <div class="cell2" id="">5</div>

  <? $x=$x+'13'; ?> <div class="cell dark" id="A5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="B5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="C5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="D5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="E5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="F5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="G5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="H5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="I5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="K5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="L5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="M5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
 <div class="cell2" id="">4</div>

  <? $x=$x+'13'; ?> <div class="cell" id="A4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="B4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="C4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="D4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="E4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="F4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="G4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="H4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="I4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="K4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="L4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="M4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">3</div>

  <? $x=$x+'13'; ?> <div class="cell dark" id="A3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="B3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="C3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="D3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="E3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="F3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="G3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="H3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="I3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="K3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="L3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="M3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
 <div class="cell2" id="">2</div>

  <? $x=$x+'13'; ?> <div class="cell" id="A2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="B2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="C2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="D2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="E2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="F2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="G2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="H2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="I2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="K2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="L2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="M2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">1</div>

  <? $x=$x+'13'; ?> <div class="cell dark" id="A1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell id" id="B1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="C1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="D1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="E1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="F1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="G1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="H1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="I1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell" id="K1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell dark" id="L1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?> <div class="cell id" id="M1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
 <?
$d='2'; 
if($d=='2') { ?>       
  <div class="cell2" id=""></div>
    
 <div class="cell1" id="">A</div>
   <div class="cell1" id="">B</div>
   <div class="cell1" id="">C</div>
    <div class="cell1" id="">D</div>
   <div class="cell1" id="">E</div>
   <div class="cell1" id="">F</div>
    <div class="cell1" id="">G</div>
   <div class="cell1" id="">H</div>
   <div class="cell1" id="">I</div>
   <div class="cell1" id="">K</div>
   <div class="cell1" id="">L</div>
   <div class="cell1" id="">M</div>
  
  </div>

<? } ?>

<? //unset($color_b); unset($x);
 ?>
  </div>
</td>

<td class=td_center width=20>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td class=td_center>

<? include('../punkty_doski_archive_uvel.php'); ?>

</td>

<td class=td_center width=20>&nbsp;&nbsp;&nbsp;&nbsp;</td>


</tr>
 <?  // конец условия показа нормальной доски 
?> 
</table>

<? include('../load_hody_uvel.php'); ?>

<table width=90%><tr>
<td class=td_center><centerl><font size=2><br><strong>

<?

} else echo 'Игрок '.$namer.' удалил партию из архива(';  // конец if $b5>0


} else echo '<br><center><font size=4><strong><em>Не правильно введено имя Guest</em></strong></font></center>'; } // if namer
?>

</strong><br><br></font></center></td></tr></table>

<table width=90%><tr>
<td class=td_center><centerl>

<font size=1><br><strong>
<? echo '&nbsp;&nbsp;&nbsp;&nbsp;Правила на доске '.$nomer6.', игрока '.$namer.':'; ?>
</strong><br><br></font>

<? $fixxa='figure_style'.$style_run.'/'; ?>

<font size=2><strong><em>
&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_geniy.jpg>Правила ходов у Гения</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_insider.jpg>Правила ходов у Insider</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_pauk.jpg>Правила ходов у Паука</a><br>

<br>

Конь,Ладья,Слон,Ферзь,Гений и Insider могут меняться местами<br>
Каждые <? echo $transform_index; ?> ходов 6 фигур рандомно превращаются ( Конь, Слон, Ферзь, Ладья, Гений и Insider )<br>
За убитые фигуры зачисляются баллы<br>
За 20 баллов случайная пешка превращается в Гения,Insider или в Паука<br>
При ходе на клетку Бомба фигуры вокруг взрываются и зачисляются баллы за убитые фигуры<br>
Ход на огонь -10 баллов<br>
Вокруг клеток Снежинок фигуры вокруг замораживаются и не могут ходить<br>
Ход на Снежинку +10 баллов<br>
Клетка Детонатор взрывает случайную фигуру вокруг<br>
При ходе на Детонатор баллы соперника обнуляются, ваши баллы умножаются<br>
Клетка Замок защищает фигуры вокруг от атаки<br>
При ходе на клетку Подарок появляется Конь на рандомной клетке<br>
При ходе на клетку База ходящая фигура превращается<br>
При ходе на Алмаз появляется Стена<br>
Если у игрока 10 баллов,Стена превращается в подарки<br>
</em></strong></font>

<br>
</center></td></tr></table></td></tr></table>
<br>

<meta http-equiv='refresh' content='40;url=archive_d_tip4_uvel.php?namer=<? echo $namer; ?>&tip=6&nomer6=<? echo $nomer6; ?>'>

<? include('../podval.php'); ?>

</center><br><br>