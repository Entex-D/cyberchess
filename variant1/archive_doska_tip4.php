<?
 $ra='270'; 
$tip='1';
$doska=$namer;
$number=$dir_file_cnt[$s];
 ?>

<table width=100%><td class=td_center width=<? echo $ra; ?>>

<?
 //В начале

?>
<style>

     
  .cell{
                width:21px;
                height:20px;
            }
        
               .bomb{
                width:21px;
                height:20px;
      backgroundl:#202020;
               }
               
               .cell1{
                width:21px;
                height:30px;
      backgroundl:#202020; 
font-size:12px;     }
      
               .cell2{
                width:10px;
                height:0px;
            }
               .bukvi{
                width:21px;
                height:20px;
            }
.selected{
                border:2px solid #000;
				border-radius:4px;
            }
        </style>
 


 <?
for($sx='0';$sx<300;$sx++) {

if($style_figure=='16') { $figure_x='figure_design1/'; $width=18; $height=16; }
if($style_figure=='11') { $figure_x='figure_design2/';  $width=18; $height=16; }
if($style_figure=='6') { $figure_x='figure_design3/';  $width=18; $height=16; }
if($style_figure=='4') { $figure_x='figure_design4/';  $width=18; $height=16; }

$figury[$sx]=preg_replace("|[\n]+|","",$figury[$sx]);
$figury[$sx]=preg_replace("|[\r]+|","",$figury[$sx]);

if($figury[$sx]=='1') { $sh[$sx]='../picture/'.$figure_x.'peshka_black.png'; }
if($figury[$sx]=='2') { $sh[$sx]='../picture/'.$figure_x.'tura_black.png'; }
if($figury[$sx]=='3') { $sh[$sx]='../picture/'.$figure_x.'kon_black.png'; }
if($figury[$sx]=='4') { $sh[$sx]='../picture/'.$figure_x.'slon_black.png'; }
if($figury[$sx]=='5') { $sh[$sx]='../picture/'.$figure_x.'ferz_black.png'; }
if($figury[$sx]=='6') { $sh[$sx]='../picture/'.$figure_x.'korol_black.png'; }
if($figury[$sx]=='7') { $sh[$sx]='../picture/'.$figure_x.'yastreb_black1.png'; }
if($figury[$sx]=='9') { $sh[$sx]='../picture/'.$figure_x.'prizrak_black1.png'; }
if($figury[$sx]=='11') { $sh[$sx]='../picture/'.$figure_x.'peshka.png'; }
if($figury[$sx]=='12') { $sh[$sx]='../picture/'.$figure_x.'tura.png'; }
if($figury[$sx]=='13') { $sh[$sx]='../picture/'.$figure_x.'kon.png'; }
if($figury[$sx]=='14') { $sh[$sx]='../picture/'.$figure_x.'slon.png'; }
if($figury[$sx]=='15') { $sh[$sx]='../picture/'.$figure_x.'ferz.png'; }
if($figury[$sx]=='16') { $sh[$sx]='../picture/'.$figure_x.'korol.png'; }
if($figury[$sx]=='17') { $sh[$sx]='../picture/'.$figure_x.'yastreb_white1.png'; }
if($figury[$sx]=='18') { $sh[$sx]='../picture/'.$figure_x.'medved_white1.png'; }
if($figury[$sx]=='8') { $sh[$sx]='../picture/'.$figure_x.'medved_black1.png'; }
if($figury[$sx]=='19') { $sh[$sx]='../picture/'.$figure_x.'prizrak_white1.png'; }
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

  <div class="cell id" id="A8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="B8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="C8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="D8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="E8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="F8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="G8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="H8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="I8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="K8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell id" id="L8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="M8"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<br><div class="cell2" id="">7</div>

 <? $x=$x+'13'; ?> <div class="cell dark" id="A7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="B7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="C7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="D7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="E7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="F7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="G7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="H7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="I7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="K7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="L7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="M7"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">6</div>

 <? $x=$x+'13'; ?> <div class="cell" id="A6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="B6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="C6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="D6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="E6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="F6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="G6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="H6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="I6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="K6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="L6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="M6"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">5</div>

 <? $x=$x+'13'; ?> <div class="cell dark" id="A5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="B5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="C5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="D5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="E5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="F5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="G5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="H5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="I5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="K5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="L5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="M5"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">4</div>

 <? $x=$x+'13'; ?> <div class="cell" id="A4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="B4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="C4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="D4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="E4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="F4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="G4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="H4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="I4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="K4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="L4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="M4"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">3</div>

 <? $x=$x+'13'; ?> <div class="cell dark" id="A3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="B3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="C3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="D3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="E3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="F3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="G3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="H3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="I3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="K3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="L3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="M3"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">2</div>

 <? $x=$x+'13'; ?> <div class="cell" id="A2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="B2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="C2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="D2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="E2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="F2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="G2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="H2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="I2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="K2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="L2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="M2"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">1</div>

 <? $x=$x+'13'; ?> <div class="cell dark" id="A1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell id" id="B1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="C1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="D1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="E1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="F1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="G1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="H1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="I1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell" id="K1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell dark" id="L1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
           <? $x=$x+'1'; ?> <div class="cell id" id="M1"><img src="<?echo $sh[$x]?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
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

  </div>
</td>

<td class=td_center width=40>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td class=td_center>

<? include('../punkty_doski_archive_uvel.php'); ?>

</td>

<td class=td_center width=40>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td class=td_center>

<? include('../timer_archive.php'); ?>

</td>

<td class=td_center width=10%><img src=../picture/ogon.gif width=60% /></td>

</tr>
 <?  // конец условия показа нормальной доски 
?> 
</table>