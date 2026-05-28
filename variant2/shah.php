<?

if($namer && $nomer2) { //start

for($g=0;$g<300;$g++) {

if($sh[$g]=='81') { $sh[$g]='40'; $dd[$g]='81';} 
if($sh[$g]=='82') { $sh[$g]='40'; $dd[$g]='82'; }
    
if($sh[$g]<' ') { $sh[$g]=$figury[$g]; $sh[$g] = preg_replace("|[\r\n]+|", "", $sh[$g]); }
                                      }
                                                               
                                 
 include ('../variant2/matrix/class_shah_kon12.php');                                
 include ('../variant2/matrix/class_shah_tura12.php');                                
 include ('../variant2/matrix/class_shah_slon12.php');                                
 include ('../variant2/matrix/class_shah_ferz12.php'); 
                                  } //end










for($sed=0;$sed<302;$sed++) {

if($sh[$sed]=='81') { $sh[$sed]='40'; $dd[$sed]='81'; } 
if($sh[$sed]=='82') { $sh[$sed]='40'; $dd[$sed]='82'; }
                                                         if($sh[$sed]=='83') { $ogon_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='83') { $ogon_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='84') { $sneginka_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='85') { $detonator_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='86') { $vzryv_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                if($sh[$sed]=='90') { $podarok_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                  if($sh[$sed]=='91') { $zamok_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                      if($sh[$sed]=='92') { $baza_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                    if($sh[$sed]=='93') { $almaz_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                               }
                            
                                
                                 
 include ('variant2/matrix/class_shah_kon12.php');                                
 include ('variant2/matrix/class_shah_tura12.php');                                
 include ('variant2/matrix/class_shah_slon12.php');                                
 include ('variant2/matrix/class_shah_ferz12.php'); 





for($sed=0;$sed<302;$sed++) {

if($dd[$sed]=='81') { $sh[$sed]='81'; }
if($dd[$sed]=='82') { $sh[$sed]='82'; }
                                                      if($ogon_zapas[$sed]=='83') { $sh[$sed]=$ogon_zapas[$sed];  }
                                                     if($sneginka_zapas[$sed]=='84') { $sh[$sed]=$sneginka_zapas[$sed];  }
                                                      if($detonator_zapas[$sed]=='85') { $sh[$sed]=$detonator_zapas[$sed];  }
                                                      if($vzryv_zapas[$sed]=='86') { $sh[$sed]=$vzryv_zapas[$sed];  }
                                               if($podarok_zapas[$sed]=='90') { $sh[$sed]=$podarok_zapas[$sed];  }
                                                      if($zamok_zapas[$sed]=='91') { $sh[$sed]=$zamok_zapas[$sed];  }
                                                          if($baza_zapas[$sed]=='92') { $sh[$sed]=$baza_zapas[$sed];  }
                                                     if($almaz_zapas[$sed]=='93') { $sh[$sed]=$almaz_zapas[$sed];  }
                                                    }





for($g=0;$g<300;$g++) {

 if($sh[$g]=='91') { 

$color_b[$g-1]=$color_b_x; 
$color_b[$g+1]=$color_b_x; 
$color_b[$g-24]=$color_b_x; 
$color_b[$g+24]=$color_b_x; 
$color_b[$g-23]=$color_b_x; 
$color_b[$g+23]=$color_b_x; 
$color_b[$g-25]=$color_b_x; 
$color_b[$g+25]=$color_b_x; 
$color_b[$g]=$color_b_x3; 
}


 if($sh[$g]=='84') { 

$color_b[$g-1]=$color_b_x2; 
$color_b[$g+1]=$color_b_x2; 
$color_b[$g-24]=$color_b_x2; 
$color_b[$g+24]=$color_b_x2; 
$color_b[$g-23]=$color_b_x2; 
$color_b[$g+23]=$color_b_x2; 
$color_b[$g-25]=$color_b_x2; 
$color_b[$g+25]=$color_b_x2; 
$color_b[$g]=$color_b_x4; 
}

                                      }



for($g=0;$g<300;$g++) {

if($shah=='1') { if($sh[$g]=='6') { $color_b[$g]='#8B0000'; } }
if($shah=='2') { if($sh[$g]=='16') { $color_b[$g]='#8B0000'; } }

if($shah=='1') { if($figury[$g]=='6') { $color_b[$g]='#8B0000'; } }
if($shah=='2') { if($figury[$g]=='16') { $color_b[$g]='#8B0000'; } }

                                      }





if($zvuki_hody=='11') { 

if($shah=='1' && $exxo[12]!=11 && $defe[0]==0) { $zapret=1; ?><audio src="../zvuk/shah_black_korol.mp3" autoplay="autoplay"></audio><? }
if($shah=='2' && $exxo[12]!=11 && $defe[0]==0) { $zapret=1; ?><audio src="../zvuk/shah_white_korol.mp3" autoplay="autoplay"></audio><? }
                  
                                 } 

if($shah=='1') { $exxo[11]='Черные'; $tty='1'; }
if($shah=='2') { $exxo[11]='Белые'; $tty='1'; }

if($tty=='1') {

$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

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

}

?>