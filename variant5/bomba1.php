<?

if($sh[$hod_two]=='82') { $bomba=$hod_two; }
//if($hod_two=='159') { $bomba='159'; }

$kletka='1';
$vzryv='0';
$death1='0';
$death2='0';

for($x=0;$x<8;$x++) {


if($sh[$bomba-$kletka]=='1') { $ball_belye=$ball_belye+'1'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $peshka_black=$peshka_black+'1'; $peshka_black_ball=$peshka_black_ball+'1';  }
if($sh[$bomba-$kletka]=='2') { $ball_belye=$ball_belye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $ladya_black=$ladya_black+'1'; $ladya_black_ball=$ladya_black_ball+'8'; }
if($sh[$bomba-$kletka]=='3') { $ball_belye=$ball_belye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $kon_black= $kon_black+'1'; $kon_black_ball=$kon_black_ball+'3'; }
if($sh[$bomba-$kletka]=='4') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $slon_black=$slon_black+'1'; $slon_black_ball=$slon_black_ball+'5'; }
if($sh[$bomba-$kletka]=='5') { $ball_belye=$ball_belye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83';  $ferz_black=$ferz_black+'1'; $ferz_black_ball=$ferz_black_ball+'10'; }
//if($sh[$bomba-$kletka]=='6') { $ball_belye=$ball_belye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $death2='1'; }
if($sh[$bomba-$kletka]=='7') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $yastreb_black=$yastreb_black+'1'; $yastreb_black_ball=$yastreb_black_ball+'5';  }
if($sh[$bomba-$kletka]=='8') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83';  $medved_black=$medved_black+'1'; $medved_black_ball=$medved_black_ball+'5'; }
if($sh[$bomba-$kletka]=='9') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $prizrak_black=$prizrak_black+'1'; $prizrak_black_ball=$prizrak_black_ball+'5';  }

if($sh[$bomba-$kletka]=='11') { $ball_chernye=$ball_chernye+'1'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $peshka_white=$peshka_white+'1'; $peshka_white_ball=$peshka_white_ball+'1';  }
if($sh[$bomba-$kletka]=='12') { $ball_chernye=$ball_chernye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $ladya_white=$ladya_white+'1'; $ladya_white_ball=$ladya_white_ball+'8';  }
if($sh[$bomba-$kletka]=='13') { $ball_chernye=$ball_chernye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $kon_white=$kon_white+'1'; $kon_white_ball=$kon_white_ball+'3';  }
if($sh[$bomba-$kletka]=='14') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $slon_white= $slon_white+'1'; $slon_white_ball=$slon_white_ball+'5';  }
if($sh[$bomba-$kletka]=='15') { $ball_chernye=$ball_chernye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $ferz_white= $ferz_white+'1'; $ferz_white_ball=$ferz_white_ball+'10';  }
//if($sh[$bomba-$kletka]=='16') { $ball_chernye=$ball_chernye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83';  $death1='1'; }
if($sh[$bomba-$kletka]=='17') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $yastreb_white=$yastreb_white+'1'; $yastreb_white_ball=$yastreb_white_ball+'5'; }
if($sh[$bomba-$kletka]=='18') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $medved_white=$medved_white+'1'; $medved_white_ball=$medved_white_ball+'5';  }
if($sh[$bomba-$kletka]=='19') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $prizrak_white=$prizrak_white+'1'; $prizrak_white_ball=$prizrak_white_ball+'5';  }


if($sh[$bomba+$kletka]=='1') { $ball_belye=$ball_belye+'1'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $peshka_black=$peshka_black+'1'; $peshka_black_ball=$peshka_black_ball+'1'; }
if($sh[$bomba+$kletka]=='2') { $ball_belye=$ball_belye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $ladya_black=$ladya_black+'1'; $ladya_black_ball=$ladya_black_ball+'8'; }
if($sh[$bomba+$kletka]=='3') { $ball_belye=$ball_belye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $kon_black= $kon_black+'1'; $kon_black_ball=$kon_black_ball+'3';}
if($sh[$bomba+$kletka]=='4') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $slon_black=$slon_black+'1'; $slon_black_ball=$slon_black_ball+'5'; }
if($sh[$bomba+$kletka]=='5') { $ball_belye=$ball_belye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $ferz_black=$ferz_black+'1'; $ferz_black_ball=$ferz_black_ball+'10';  }
//if($sh[$bomba+$kletka]=='6') { $ball_belye=$ball_belye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $death2='1'; }
if($sh[$bomba+$kletka]=='7') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $yastreb_black=$yastreb_black+'1'; $yastreb_black_ball=$yastreb_black_ball+'5';  }
if($sh[$bomba+$kletka]=='8') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $medved_black=$medved_black+'1'; $medved_black_ball=$medved_black_ball+'5';  }
if($sh[$bomba+$kletka]=='9') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $prizrak_black=$prizrak_black+'1'; $prizrak_black_ball=$prizrak_black_ball+'5'; }

if($sh[$bomba+$kletka]=='11') { $ball_chernye=$ball_chernye+'1'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $peshka_white=$peshka_white+'1'; $peshka_white_ball=$peshka_white_ball+'1';  }
if($sh[$bomba+$kletka]=='12') { $ball_chernye=$ball_chernye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $ladya_white=$ladya_white+'1'; $ladya_white_ball=$ladya_white_ball+'8';  }
if($sh[$bomba+$kletka]=='13') { $ball_chernye=$ball_chernye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $kon_white=$kon_white+'1'; $kon_white_ball=$kon_white_ball+'3';  }
if($sh[$bomba+$kletka]=='14') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $slon_white= $slon_white+'1'; $slon_white_ball=$slon_white_ball+'5';  }
if($sh[$bomba+$kletka]=='15') { $ball_chernye=$ball_chernye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $ferz_white= $ferz_white+'1'; $ferz_white_ball=$ferz_white_ball+'10';  }
//if($sh[$bomba+$kletka]=='16') { $ball_chernye=$ball_chernye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $death1='1';}
if($sh[$bomba+$kletka]=='17') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $yastreb_white=$yastreb_white+'1'; $yastreb_white_ball=$yastreb_white_ball+'5'; }
if($sh[$bomba+$kletka]=='18') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $medved_white=$medved_white+'1'; $medved_white_ball=$medved_white_ball+'5';  }
if($sh[$bomba+$kletka]=='19') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $prizrak_white=$prizrak_white+'1'; $prizrak_white_ball=$prizrak_white_ball+'5';  }

           if($kletka=='1') { $kletka='24'; 
} else if($kletka=='24') { $kletka='23'; 
} else if($kletka=='23') { $kletka='25'; 
} 

}

?>