<? include('./variant6/hod_bgcolor.php'); ?>

<td class=td_center><center>
<?
 //В начале

?>
<style>

     
  .cell{
                width:46px;
                height:42px;
            }
        
               .bomb{
                width:46px;
                height:42px;
     background:#707070;
               }
               
               .cell1{
                width:46px;
                height:0px;
         }
      
               .cell2{
                width:30px;
                height:0px;
            }
               .bukvi{
                width:46px;
                height:20px;
            }

        </style>
<?

if($style_figure=='16') { $figure_x='figure_design1/'; $width=42; $height=38; }
if($style_figure=='11') { $figure_x='figure_design2/';  $width=42; $height=38; }
if($style_figure=='6') { $figure_x='figure_design3/';  $width=42; $height=38; }
if($style_figure=='4') { $figure_x='figure_design4/';  $width=42; $height=38; }

 $arImages = array(
   // перечисляешь все фигуры
// .....
   1 => 'picture/'.$figure_x.'peshka_black.png',
   2 => 'picture/'.$figure_x.'tura_black.png',
   3 => 'picture/'.$figure_x.'kon_black.png',
   4 => 'picture/'.$figure_x.'slon_black.png',
   5 => 'picture/'.$figure_x.'ferz_black.png',
   6 => 'picture/'.$figure_x.'korol_black.png',
   11 => 'picture/'.$figure_x.'peshka.png',
   12 => 'picture/'.$figure_x.'tura.png',
   13 => 'picture/'.$figure_x.'kon.png',
   14 => 'picture/'.$figure_x.'slon.png',
   15 => 'picture/'.$figure_x.'ferz.png',
   16 => 'picture/'.$figure_x.'korol.png',
   40 => 'picture/kletka-0.png',
   80 => 'picture/kletka-0.png',
     81 => 'picture/kletka-2.png',
 7 => 'picture/new_figure/insider_black.png',
   17 => 'picture/'.$figure_x.'insider_white.png',
   18 => 'picture/'.$figure_x.'geniy_white.png',
   8 => 'picture/new_figure/geniy_black.png',
   19 => 'picture/'.$figure_x.'white_pauk.png',
   9 => 'picture/new_figure/black_pauk.png',
   82 => 'picture/bomba.png',
   83 => 'picture/ogon.gif',
     84 => 'picture/moroz.png',
   85 => 'picture/detonator.png',
   86 => 'picture/vzryv.gif',
  90 => 'picture/podarok.png',
   91 => 'picture/zamok.png',
    92 => 'picture/baza.png',
   93 => 'picture/almaz.png',
    94 => 'picture/stena.jpg',
   //.....
 );

?>
 
<? include('js_podsvetka.php'); ?>

      <? $x='54'; ?>

<div id="table">
         
<div class="cell2" id="">8</div>

  <div class="cell id" id="A8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="B8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="C8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="D8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="E8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="F8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="G8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="H8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="I8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="K8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell id" id="L8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="M8" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<br><div class="cell2" id="">7</div>
  <? $x=$x+'13'; ?><div class="cell dark" id="A7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="B7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="C7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="D7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="E7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="F7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="G7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="H7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="I7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="K7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="L7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="M7" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">6</div>

  <? $x=$x+'13'; ?><div class="cell" id="A6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="B6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="C6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="D6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="E6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="F6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="G6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="H6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="I6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="K6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="L6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="M6" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">5</div>

  <? $x=$x+'13'; ?><div class="cell dark" id="A5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="B5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="C5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="D5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="E5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="F5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="G5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="H5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="I5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="K5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="L5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="M5" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">4</div>

  <? $x=$x+'13'; ?><div class="cell" id="A4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="B4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="C4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="D4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="E4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="F4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="G4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="H4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="I4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="K4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="L4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="M4" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">3</div>

  <? $x=$x+'13'; ?><div class="cell dark" id="A3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="B3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="C3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="D3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="E3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="F3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="G3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="H3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="I3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="K3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="L3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="M3" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">2</div>

  <? $x=$x+'13'; ?><div class="cell" id="A2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="B2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="C2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="D2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="E2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="F2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="G2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="H2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="I2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="K2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="L2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="M2" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
<div class="cell2" id="">1</div>

  <? $x=$x+'13'; ?><div class="cell dark" id="A1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell id" id="B1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="C1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="D1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="E1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="F1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="G1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="H1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="I1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell" id="K1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell dark" id="L1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
            <? $x=$x+'1'; ?><div class="cell id" id="M1" style="background-color:<? echo $color_b[$x]; ?>"><img src="<?echo $arImages[$sh[$x]]?>" title="<? echo $alt[$x]; ?>" <? echo 'width='.$width; echo 'height='.$height; ?>></div>
        
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


   </div></center>

<? include('js_podsvetka.php'); ?>