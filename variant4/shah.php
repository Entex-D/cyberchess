<?

if($namer && $nomer4) { //start

for($g=0;$g<300;$g++) {

if($sh[$g]=='81') { $sh[$g]='40'; $dd[$g]='81';} 
if($sh[$g]=='82') { $sh[$g]='40'; $dd[$g]='82'; }
    
if($sh[$g]<' ') { $sh[$g]=$figury[$g]; $sh[$g] = preg_replace("|[\r\n]+|", "", $sh[$g]); }
                                      }
                                                               
                                 
 include ('../variant4/matrix/class_shah_kon12.php');                                
 include ('../variant4/matrix/class_shah_tura12.php');                                
 include ('../variant4/matrix/class_shah_slon12.php');                                
 include ('../variant4/matrix/class_shah_ferz12.php'); 
                                  } //end







    
for($sed=0;$sed<302;$sed++) {

if($sh[$sed]=='81') { $sh[$sed]='40'; $dd[$sed]='81'; } 
if($sh[$sed]=='82') { $sh[$sed]='40'; $dd[$sed]='82'; }
                                                         if($sh[$sed]=='83') { $ogon_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                }
                            
                                
                                 
 include ('variant4/matrix/class_shah_kon12.php');                                
 include ('variant4/matrix/class_shah_tura12.php');                                
 include ('variant4/matrix/class_shah_slon12.php');                                
 include ('variant4/matrix/class_shah_ferz12.php'); 





for($sed=0;$sed<302;$sed++) {

if($dd[$sed]=='81') { $sh[$sed]='81'; }
if($dd[$sed]=='82') { $sh[$sed]='82'; }
                                                      if($ogon_zapas[$sed]=='83') { $sh[$sed]=$ogon_zapas[$sed];  }
                                                }






for($g=0;$g<300;$g++) {

if($shah=='1') { if($sh[$g]=='6') { $color_b[$g]='#8B0000'; } }
if($shah=='2') { if($sh[$g]=='16') { $color_b[$g]='#8B0000'; } }

if($shah=='1') { if($figury[$g]=='6') { $color_b[$g]='#8B0000'; } }
if($shah=='2') { if($figury[$g]=='16') { $color_b[$g]='#8B0000'; } }
if($shah=='1') { if($figury[$g]=='6') { $color_b[$g]='#8B0000'; } }
if($shah=='2') { if($figury[$g]=='16') { $color_b[$g]='#8B0000'; } }

if($sh[$g]=='1' || $sh[$g]=='11') { $alt[$g]='Крепость'; }
if($sh[$g]=='2' || $sh[$g]=='12') { $alt[$g]='Сердце'; }
if($sh[$g]=='3' || $sh[$g]=='13') { $alt[$g]='Конь'; }
if($sh[$g]=='4' || $sh[$g]=='14') { $alt[$g]='Слон'; }
if($sh[$g]=='5' || $sh[$g]=='15') { $alt[$g]='Звезда'; }
if($sh[$g]=='6' || $sh[$g]=='16') { $alt[$g]='Король'; }
if($sh[$g]=='7' || $sh[$g]=='17') { $alt[$g]='Ястреб'; }
if($sh[$g]=='8' || $sh[$g]=='18') { $alt[$g]='Медведь'; }
if($sh[$g]=='9' || $sh[$g]=='19') { $alt[$g]='Сюрприз'; }

                                      }

?>