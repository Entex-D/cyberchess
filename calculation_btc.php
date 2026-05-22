<?
$color_green='#90EE90';
$color_red='#F08080';

if($exxo[13]=='00:00' || $exxo[14]=='00:00')  { $dostup='da'; }


if($win && $loss)  { $dostup='da'; } else $dostup='no';

if($dostup=='da')  { //начало if dostup












if($exxo[20]>'0') { // начало if$exxo[20

//Считывание btc win
 if(!$db) { $file_guest1='./btc/'.$win.'.txt';  } else if($db) { $file_guest1='../btc/'.$win.'.txt';  }
 
if($file = fopen($file_guest1, "r")) { echo ''; $bx4=0;

while(!feof($file)) { 
if($vd[]= fgets ($file)){$bx4++;} }
fclose ($file); 

 }

$vd[0] = preg_replace("|[\n\r]+|", "", $vd[0]);
$vd[1] = preg_replace("|[\n\r]+|", "", $vd[1]);
$vd[2] = preg_replace("|[\n\r]+|", "", $vd[2]);

$vd[0]=$vd[0]+$exxo[20];

 if(!$file = fopen($file_guest1, "w")) {   } else if(!fputs ($file, $vd[0]."\n".$exxo[20]."\n".$vd[2]."\n")) { ;} fclose ($file);

//Считывание btc win

if(!$db) { $logi1='./logi.txt'; } else if($db) { $logi1='../logi.txt'; }

$tip_x=rand(1,8);

if($win!='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игроку <strong><em><a target=_blank href=variant'.$tip_x.'/archive_doski_tip4.php?namer='.$win.'&tip='.$tip_x.'>'.$win.'</a></em></strong> зачислено <font color='.$color_green.'>'.$exxo[20].'</font> btc за победу над игроком <strong>'.$loss.'</strong>, Баланс <font color='.$color_green.'>'.$vd[0].'</font> btc';
                        }

if($win=='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игроку <strong><em>'.$win.'</em></strong> зачислено <font color='.$color_green.'>'.$exxo[20].'</font> btc за победу над игроком <strong>'.$loss.'</strong>, Баланс <font color='.$color_green.'>'.$vd[0].'</font> btc';
                        }

$openchatdb=fopen($logi1,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);




// записываем оповещения о зачислении btc
if(!$db) { $xxpd1='./archive_doski/'.$win.'/anketa/opoveshenie.txt'; } else if($db) { $xxpd1='../archive_doski/'.$win.'/anketa/opoveshenie.txt'; }
$ddx='Вам зачислено <font color='.$color_green.'>'.$exxo[20].'</font> btc за победу над игроком <strong>'.$loss.'</strong>, баланс <font color='.$color_green.'>'.$vd[0].'</font> btc&nbsp;&nbsp;( <font size=1>'.date("d.m.Y|G:i:s").'</font> )';

if ( file_exists($xxpd1) )   { 

$openchatdb=fopen($xxpd1,"a");

if(fwrite($openchatdb,$ddx."\n")) { ;  }
          
fclose($openchatdb);
      
// 

}


} // конец if $exxo[20]













//записывание победы у игрока
if(!$db) { $base_hod7='./wins_losses/'.$win.'.txt'; } else if($db) { $base_hod7='../wins_losses/'.$win.'.txt'; }

if ( file_exists($base_hod7) )   { 

if($file = fopen($base_hod7, "r")) { echo ''; $b6=0;} 
while(!feof($file)) { 
if($zapisi_rxxw[]= fgets ($file)){$b6++;} }
fclose ($file); 
}


$zapisi_rxxw[0] = preg_replace("|[\n\r]+|", "", $zapisi_rxxw[0]);
$zapisi_rxxw[1] = preg_replace("|[\n\r]+|", "", $zapisi_rxxw[1]);

if(!$zapisi_rxxw[0] && !$zapisi_rxxw[1]) { $zapisi_rxxw[0]='0'; $zapisi_rxxw[1]='0'; }

$zapisi_rxxw[0]=$zapisi_rxxw[0]+'1';







if(!$db) { $xxpd1='./wins_losses/'.$win.'.txt'; } else if($db) { $xxpd1='../wins_losses/'.$win.'.txt'; }

if ( file_exists($xxpd1) )   { 

$pixas0=$zapisi_rxxw[0];
$pixas1=$zapisi_rxxw[1];

$openchatdb=fopen($xxpd1,"w");

 if(fwrite($openchatdb,$pixas0."\n")) { ;  }
 if(fwrite($openchatdb,$pixas1."\n")) { ;  }
                                  
fclose($openchatdb);

//записывание победы у игрока


}













if($exxo[20]>'0') { // начало if$exxo[20


//Считывание btc loss
 if(!$db) { $file_guest4='./btc/'.$loss.'.txt'; } else if($db) { $file_guest4='../btc/'.$loss.'.txt'; }  
 
if($file = fopen($file_guest4, "r")) { echo ''; $bx4=0;

while(!feof($file)) { 
if($bx[]= fgets ($file)){$bx4++;} }
fclose ($file); 

 }


$bx[0] = preg_replace("|[\n\r]+|", "", $bx[0]);
$bx[1] = preg_replace("|[\n\r]+|", "", $bx[1]);
$bx[2] = preg_replace("|[\n\r]+|", "", $bx[2]);

$bx[0]=$bx[0]-$exxo[20];

 if(!$file = fopen($file_guest4, "w")) {   } else if(!fputs ($file, $bx[0]."\n".$bx[1]."\n".$exxo[20]."\n")) { ;} fclose ($file);

//Считывание btc loss

$tip_x=rand(1,8);

if($loss!='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> У игрока <strong><em><a target=_blank href=variant'.$tip_x.'/archive_doski_tip4.php?namer='.$loss.'&tip='.$tip_x.'>'.$loss.'</a></em></strong> высчитано <font color='.$color_red.'>'.$exxo[20].'</font> btc за проигрыш с игроком <strong>'.$win.'</strong>, Баланс <font color='.$color_red.'>'.$bx[0].'</font> btc';
                          }

if($loss=='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> У игрока <strong><em>'.$loss.'</em></strong> высчитано <font color='.$color_red.'>'.$exxo[20].'</font> btc за проигрыш с игроком <strong>'.$win.'</strong>, Баланс <font color='.$color_red.'>'.$bx[0].'</font> btc';
                          }


$openchatdb=fopen($logi1,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);





// записываем оповещения о высчитывании btc
if(!$db) { $xxpd2='./archive_doski/'.$loss.'/anketa/opoveshenie.txt'; } else if($db) { $xxpd2='../archive_doski/'.$loss.'/anketa/opoveshenie.txt'; }
$ddx='У Вас высчитано <font color='.$color_red.'>'.$exxo[20].'</font> btc за проигрыш с игроком <strong>'.$win.'</strong>, баланс <font color='.$color_red.'>'.$bx[0].'</font> btc&nbsp;&nbsp;( <font size=1>'.date("d.m.Y|G:i:s").'</font> )';

if ( file_exists($xxpd2) )   { 

$openchatdb=fopen($xxpd2,"a");

if(fwrite($openchatdb,$ddx."\n")) { ;  }
          
fclose($openchatdb);
      
// 

}



} // конец if $exxo[20]








//записывание проигрыша у игрока
if(!$db) { $base_hod1='./wins_losses/'.$loss.'.txt'; } else if($db) { $base_hod1='../wins_losses/'.$loss.'.txt'; }

if ( file_exists($base_hod1) )   { 

if($file = fopen($base_hod1, "r")) { echo ''; $b6=0;} 
while(!feof($file)) { 
if($zapisi_rxx2[]= fgets ($file)){$b6++;} }
fclose ($file); 
} 


$zapisi_rxx2[0] = preg_replace("|[\n\r]+|", "", $zapisi_rxx2[0]);
$zapisi_rxx2[1] = preg_replace("|[\n\r]+|", "", $zapisi_rxx2[1]);

if(!$zapisi_rxx2[0] && !$zapisi_rxx2[1]) { $zapisi_rxx2[0]='0'; $zapisi_rxx2[1]='0'; }

$zapisi_rxx2[1]=$zapisi_rxx2[1]+'1';







if(!$db) { $xxp1='./wins_losses/'.$loss.'.txt'; } else if($db) { $xxp1='../wins_losses/'.$loss.'.txt'; }

if ( file_exists($xxp1) )   { 

$pixaw0=$zapisi_rxx2[0];
$pixaw1=$zapisi_rxx2[1];
$openchatdb=fopen($xxp1,"w");

 if(fwrite($openchatdb,$pixaw0."\n")) { ;  }
 if(fwrite($openchatdb,$pixaw1."\n")) { ;  }

fclose($openchatdb);

//записывание проигрыша у игрока


}




} //конец if $dostup


?>