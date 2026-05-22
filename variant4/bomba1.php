<?

if($sh[$hod_two]=='40') { $bomba=$hod_two; }
//if($hod_two=='159') { $bomba='159'; }

$kletka='1';
$vzryv='0';
$death1='0';
$death2='0';

for($x=0;$x<8;$x++) {


if($sh[$bomba-$kletka]=='1') { $ball_belye=$ball_belye+'2'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $krepost_black=$krepost_black+'1'; $krepost_black_ball=$krepost_black_ball+'1';  }
if($sh[$bomba-$kletka]=='2') { $ball_chernye=$ball_chernye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $serdce_black=$serdce_black+'1'; $serdce_black_ball=$serdce_black_ball+'8'; }
if($sh[$bomba-$kletka]=='3') { $ball_belye=$ball_belye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $kon_black= $kon_black+'1'; $kon_black_ball=$kon_black_ball+'3'; }
if($sh[$bomba-$kletka]=='4') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $slon_black=$slon_black+'1'; $slon_black_ball=$slon_black_ball+'5'; }
if($sh[$bomba-$kletka]=='5') { $ball_chernye=$ball_chernye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83';  $zvezda_black=$zvezda_black+'1'; $zvezda_black_ball=$zvezda_black_ball+'10'; }
if($sh[$bomba-$kletka]=='6') { $ball_belye=$ball_belye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $death2='1'; }
if($sh[$bomba-$kletka]=='7') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $yastreb_black=$yastreb_black+'1'; $yastreb_black_ball=$yastreb_black_ball+'5';  }
if($sh[$bomba-$kletka]=='8') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83';  $medved_black=$medved_black+'1'; $medved_black_ball=$medved_black_ball+'5'; }
if($sh[$bomba-$kletka]=='9') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $surpris_black=$surpris_black+'1'; $surpris_black_ball=$surpris_black_ball+'5';  }

if($sh[$bomba-$kletka]=='11') { $ball_chernye=$ball_chernye+'2'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $krepost_white=$krepost_white+'1'; $krepost_white_ball=$krepost_white_ball+'1';  }
if($sh[$bomba-$kletka]=='12') { $ball_belye=$ball_belye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $serdce_white=$serdce_white+'1'; $serdce_white_ball=$serdce_white_ball+'8';  }
if($sh[$bomba-$kletka]=='13') { $ball_chernye=$ball_chernye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $kon_white=$kon_white+'1'; $kon_white_ball=$kon_white_ball+'3';  }
if($sh[$bomba-$kletka]=='14') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $slon_white= $slon_white+'1'; $slon_white_ball=$slon_white_ball+'5';  }
if($sh[$bomba-$kletka]=='15') { $ball_belye=$ball_belye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $zvezda_white= $zvezda_white+'1'; $zvezda_white_ball=$zvezda_white_ball+'10';  }
if($sh[$bomba-$kletka]=='16') { $ball_chernye=$ball_chernye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83';  $death1='1'; }
if($sh[$bomba-$kletka]=='17') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $yastreb_white=$yastreb_white+'1'; $yastreb_white_ball=$yastreb_white_ball+'5'; }
if($sh[$bomba-$kletka]=='18') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $medved_white=$medved_white+'1'; $medved_white_ball=$medved_white_ball+'5';  }
if($sh[$bomba-$kletka]=='19') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba-$kletka]='83'; $surpris_white=$surpris_white+'1'; $surpris_white_ball=$surpris_white_ball+'5';  }


if($sh[$bomba+$kletka]=='1') { $ball_belye=$ball_belye+'2'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $krepost_black=$krepost_black+'1'; $krepost_black_ball=$krepost_black_ball+'1'; }
if($sh[$bomba+$kletka]=='2') { $ball_chernye=$ball_chernye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $serdce_black=$serdce_black+'1'; $serdce_black_ball=$serdce_black_ball+'8'; }
if($sh[$bomba+$kletka]=='3') { $ball_belye=$ball_belye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $kon_black= $kon_black+'1'; $kon_black_ball=$kon_black_ball+'3';}
if($sh[$bomba+$kletka]=='4') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $slon_black=$slon_black+'1'; $slon_black_ball=$slon_black_ball+'5'; }
if($sh[$bomba+$kletka]=='5') { $ball_chernye=$ball_chernye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $zvezda_black=$zvezda_black+'1'; $zvezda_black_ball=$zvezda_black_ball+'10';  }
if($sh[$bomba+$kletka]=='6') { $ball_belye=$ball_belye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $death2='1'; }
if($sh[$bomba+$kletka]=='7') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $yastreb_black=$yastreb_black+'1'; $yastreb_black_ball=$yastreb_black_ball+'5';  }
if($sh[$bomba+$kletka]=='8') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $medved_black=$medved_black+'1'; $medved_black_ball=$medved_black_ball+'5';  }
if($sh[$bomba+$kletka]=='9') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $surpris_black=$surpris_black+'1'; $surpris_black_ball=$surpris_black_ball+'5'; }

if($sh[$bomba+$kletka]=='11') { $ball_chernye=$ball_chernye+'2'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $krepost_white=$krepost_white+'1'; $krepost_white_ball=$krepost_white_ball+'1';  }
if($sh[$bomba+$kletka]=='12') { $ball_belye=$ball_belye+'8'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $serdce_white=$serdce_white+'1'; $serdce_white_ball=$serdce_white_ball+'8';  }
if($sh[$bomba+$kletka]=='13') { $ball_chernye=$ball_chernye+'3'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $kon_white=$kon_white+'1'; $kon_white_ball=$kon_white_ball+'3';  }
if($sh[$bomba+$kletka]=='14') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $slon_white= $slon_white+'1'; $slon_white_ball=$slon_white_ball+'5';  }
if($sh[$bomba+$kletka]=='15') { $ball_belye=$ball_belye+'10'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $zvezda_white= $zvezda_white+'1'; $zvezda_white_ball=$zvezda_white_ball+'10';  }
if($sh[$bomba+$kletka]=='16') { $ball_chernye=$ball_chernye+'50'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83';  $death1='1';}
if($sh[$bomba+$kletka]=='17') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $yastreb_white=$yastreb_white+'1'; $yastreb_white_ball=$yastreb_white_ball+'5'; }
if($sh[$bomba+$kletka]=='18') { $ball_chernye=$ball_chernye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $medved_white=$medved_white+'1'; $medved_white_ball=$medved_white_ball+'5';  }
if($sh[$bomba+$kletka]=='19') { $ball_belye=$ball_belye+'5'; $vzryv=$vzryv+'1'; $sh[$bomba+$kletka]='83'; $surpris_white=$surpris_white+'1'; $surpris_white_ball=$surpris_white_ball+'5';  }

           if($kletka=='1') { $kletka='24'; 
} else if($kletka=='24') { $kletka='23'; 
} else if($kletka=='23') { $kletka='25'; 
} 

}

?>