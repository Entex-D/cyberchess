<?

if($namer && $nomer7) { //start

for($g=0;$g<300;$g++) {

if($sh[$g]=='81') { $sh[$g]='40'; $dd[$g]='81';} 
if($sh[$g]=='82') { $sh[$g]='40'; $dd[$g]='82'; }
    
if($sh[$g]<' ') { $sh[$g]=$figury[$g]; $sh[$g] = preg_replace("|[\r\n]+|", "", $sh[$g]); }
                                      }
                                                               
                                 
 include ('../variant7/matrix/class_shah_kon12.php');                                
 include ('../variant7/matrix/class_shah_tura12.php');                                
 include ('../variant7/matrix/class_shah_slon12.php');                                
 include ('../variant7/matrix/class_shah_ferz12.php'); 
                                  } //end







    
for($sed=0;$sed<302;$sed++) {

if($sh[$sed]=='81') { $sh[$sed]='40'; $dd[$sed]='81'; } 
if($sh[$sed]=='82') { $sh[$sed]='40'; $dd[$sed]='82'; }
                                                         if($sh[$sed]=='83') { $ogon_zapas[$sed]=$sh[$sed]; $sh[$sed]='40'; }
                                                }
                            
                                
                                 
 include ('variant7/matrix/class_shah_kon12.php');                                
 include ('variant7/matrix/class_shah_tura12.php');                                
 include ('variant7/matrix/class_shah_slon12.php');                                
 include ('variant7/matrix/class_shah_ferz12.php'); 





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

                                      }

if($zvuki_hody=='11') { 

if($shah=='1' && $exxo[12]!=11 && $defe[0]==0) { $zapret=1; ?><audio src="../zvuk/shah_black_korol.mp3" autoplay="autoplay"></audio><? }
if($shah=='2' && $exxo[12]!=11 && $defe[0]==0) { $zapret=1; ?><audio src="../zvuk/shah_white_korol.mp3" autoplay="autoplay"></audio><? }
                  
                                 } 

if($shah=='1') { $exxo[11]='Черные'; $tty='1'; }
if($shah=='2') { $exxo[11]='Белые'; $tty='1'; }

if($tty=='1') {

$sxx='./archive_doski/'.$doska.'/tip7/'.$nomer_doski7.'/'.$nomer_doski7.'_statix.txt';

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