<?
$color_green='#90EE90';
$color_red='#F08080';

if($exxo[13]=='00:00' || $exxo[14]=='00:00')  { $dostup='da'; }

if($win && $loss)  { $dostup='da'; } else $dostup='no';

if($dostup=='da')  { //начало if dostup






//Считывание btc win
if($dostup=='da') { if(!$db) { $file_guest1='./rating/'.$win.'.txt';  } else if($db) { $file_guest1='../rating/'.$win.'.txt';  }
 
if($file = fopen($file_guest1, "r")) { echo ''; $bx4=0;

while(!feof($file)) { 
if($rating_win[]= fgets ($file)){$bx4++;} }
fclose ($file); 

 }


$rating_win[0] = preg_replace("|[\n\r]+|", "", $rating_win[0]);
$rating_win[1] = preg_replace("|[\n\r]+|", "", $rating_win[1]);
$rating_win[2] = preg_replace("|[\n\r]+|", "", $rating_win[2]);



//Считывание btc loss
if($dostup=='da') { if(!$db) { $file_guest2='./rating/'.$loss.'.txt'; } else if($db) { $file_guest2='../rating/'.$loss.'.txt'; }  
 
if($file = fopen($file_guest2, "r")) { echo ''; $bx4=0;

while(!feof($file)) { 
if($rating_loss[]= fgets ($file)){$bx4++;} }
fclose ($file); 

 }


$rating_loss[0] = preg_replace("|[\n\r]+|", "", $rating_loss[0]);
$rating_loss[1] = preg_replace("|[\n\r]+|", "", $rating_loss[1]);
$rating_loss[2] = preg_replace("|[\n\r]+|", "", $rating_loss[2]);


if($rating_win[0]==$rating_loss[0]) { $index_win='25'; $index_loss='25';  

} else if($rating_win[0]>$rating_loss[0]) {  $index_win='25'; $index_loss='25';  

} else if($rating_win[0]<$rating_loss[0]) {  $index_win='45'; $index_loss='45';  }


$rating_win[0]=$rating_win[0]+$index_win; $rating_win[1]=$rating_win[1]+$index_win;

$rating_loss[0]=$rating_loss[0]-$index_win; $rating_loss[2]=$rating_loss[2]+$index_win;


if($rating_win[1]>'125') { $rating_win[1]=$rating_win[1]/5; }
if($rating_win[2]>'125') { $rating_win[2]=$rating_win[2]/5; }


if($rating_loss[1]>'125') { $rating_loss[1]=$rating_loss[1]/5; }
if($rating_loss[2]>'125') { $rating_loss[2]=$rating_loss[2]/5; }


//$vd[0]=$vd[0]+$exxo[20];

 if(!$file = fopen($file_guest1, "w")) {   } else if(!fputs ($file, $rating_win[0]."\n".$rating_win[1]."\n".$rating_win[2]."\n")) { ;} fclose ($file);



if($rating_loss[0]<'0') { $rating_loss[0]='0'; }

//$b[0]=$b[0]-$exxo[20];

 if(!$file = fopen($file_guest2, "w")) {   } else if(!fputs ($file, $rating_loss[0]."\n".$rating_loss[1]."\n".$rating_loss[2]."\n")) { ;} fclose ($file);





//Считывание btc win

if(!$db) { $logi='./logi.txt'; } else if($db) { $logi='../logi.txt'; }

if(!$tip) { $tip_x=rand(1,8); } else $tip_x=$tip;

if($tip=='1') { $nom=''; $nomerex=$nomer; }
if($tip=='2') { $nom='2'; $nomerex=$nomer2; }
if($tip=='3') { $nom='3'; $nomerex=$nomer3; }
if($tip=='4') { $nom='4'; $nomerex=$nomer4; }
if($tip=='5') { $nom='5'; $nomerex=$nomer5; }
if($tip=='6') { $nom='6'; $nomerex=$nomer6; }
if($tip=='7') { $nom='7'; $nomerex=$nomer7; }
if($tip=='8') { $nom='8'; $nomerex=$nomer8; }

if($doska) { $imya=$doska; } else if($namer) { $imya=$namer; }

if($win!='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игроку <strong><em><a target=_blank href=variant'.$tip_x.'/archive_doski_tip4.php?namer='.$win.'&tip='.$tip_x.'>'.$win.'</a></em></strong> зачислено <font color='.$color_green.'>+'.$index_win.'</font> очков за победу над игроком <strong>'.$loss.'</strong>, рейтинг <font color='.$color_green.'>'.$rating_win[0].'</font> [ <a target=_blank href=variant'.$tip_x.'/archive_d_tip4_uvel.php?namer='.$imya.'&tip='.$tip_x.'&nomer'.$nom.'='.$nomerex.'>посмотреть</a> ]';
                       }

if($win=='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игроку <strong><em>'.$win.'</em></strong> зачислено <font color='.$color_green.'>+'.$index_win.'</font> очков за победу над игроком <strong>'.$loss.'</strong>, рейтинг <font color='.$color_green.'>'.$rating_win[0].'</font> [ <a target=_blank href=variant'.$tip_x.'/archive_d_tip4_uvel.php?namer='.$imya.'&tip='.$tip_x.'&nomer'.$nom.'='.$nomerex.'>посмотреть</a> ]';
                       }


$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);




// записываем оповещения о зачислении btc
if(!$db) { $xxpc1='./archive_doski/'.$win.'/anketa/opoveshenie.txt'; } else if($db) { $xxpc1='../archive_doski/'.$win.'/anketa/opoveshenie.txt'; }
$ddx='Вам зачислено <font color='.$color_green.'>+'.$index_win.'</font> очков за победу над игроком <strong>'.$loss.'</strong>, рейтинг <font color='.$color_green.'>'.$rating_win[0].' </font>&nbsp;&nbsp;( <font size=1>'.date("d.m.Y|G:i:s").'</font> )';

if ( file_exists($xxpc1) )   { 

$openchatdb=fopen($xxpc1,"a");

if(fwrite($openchatdb,$ddx."\n")) { ;  }
          
fclose($openchatdb);
      
// 

}























}


if(!$tip) { $tip_x=rand(1,8); } else $tip_x=$tip;


if($tip=='1') { $nom=''; $nomerex=$nomer; }
if($tip=='2') { $nom='2'; $nomerex=$nomer2; }
if($tip=='3') { $nom='3'; $nomerex=$nomer3; }
if($tip=='4') { $nom='4'; $nomerex=$nomer4; }
if($tip=='5') { $nom='5'; $nomerex=$nomer5; }
if($tip=='6') { $nom='6'; $nomerex=$nomer6; }
if($tip=='7') { $nom='7'; $nomerex=$nomer7; }
if($tip=='8') { $nom='8'; $nomerex=$nomer8; }

if($doska) { $imya=$doska; } else if($namer) { $imya=$namer; }

if($loss!='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> У игрока <strong><em><a target=_blank href=variant'.$tip_x.'/archive_doski_tip4.php?namer='.$loss.'&tip='.$tip_x.'>'.$loss.'</a></em></strong> высчитано <font color='.$color_red.'>-'.$index_loss.'</font> очков за проигрыш с игроком <strong>'.$win.'</strong>, рейтинг <font color='.$color_red.'>'.$rating_loss[0].'</font> [ <a target=_blank href=variant'.$tip_x.'/archive_d_tip4_uvel.php?namer='.$imya.'&tip='.$tip_x.'&nomer'.$nom.'='.$nomerex.'>посмотреть</a> ]';
                 }

if($loss=='Comp') { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> У игрока <strong><em>'.$loss.'</em></strong> высчитано <font color='.$color_red.'>-'.$index_loss.'</font> очков за проигрыш с игроком <strong>'.$win.'</strong>, рейтинг <font color='.$color_red.'>'.$rating_loss[0].'</font> [ <a target=_blank href=variant'.$tip_x.'/archive_d_tip4_uvel.php?namer='.$imya.'&tip='.$tip_x.'&nomer'.$nom.'='.$nomerex.'>посмотреть</a> ]';
                 }


$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);





// записываем оповещения о высчитывании btc
if(!$db) { $xxpc2='./archive_doski/'.$loss.'/anketa/opoveshenie.txt'; } else if($db) { $xxpc2='../archive_doski/'.$loss.'/anketa/opoveshenie.txt'; }
$ddx='У Вас высчитано <font color='.$color_red.'>-'.$index_loss.'</font> за проигрыш с игроком <strong>'.$win.'</strong>, рейтинг <font color='.$color_red.'>'.$rating_loss[0].' </font>&nbsp;&nbsp;( <font size=1>'.date("d.m.Y|G:i:s").'</font> )';

if ( file_exists($xxpc2) )   { 

$openchatdb=fopen($xxpc2,"a");

if(fwrite($openchatdb,$ddx."\n")) { ;  }
          
fclose($openchatdb);
      
// 

}









}









} //конец if $dostup
?>