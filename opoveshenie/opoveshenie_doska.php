<?

// создаем папку АНКЕТА,если она не создана
$xxp='./archive_doski/'.$name.'/anketa/';
$xxp1='./archive_doski/'.$name.'/anketa/email.txt';

if ( !file_exists($xxp) )   { 

if(!mkdir($xxp, 0755,true)) { 
 };

$dxd=rand(1,1000);

$pixa0='0';
$pixa1=$dxd;
$pixa2='Нет';
$pixa3='0';
$pixa4='0';
$pixa5='0';

$openchatdb=fopen($xxp1,"w");

 if(fwrite($openchatdb,$pixa0."\n")) { ;  }
 if(fwrite($openchatdb,$pixa1."\n")) { ;  }
 if(fwrite($openchatdb,$pixa2."\n")) { ;  }
 if(fwrite($openchatdb,$pixa3."\n")) { ;  }
 if(fwrite($openchatdb,$pixa4."\n")) { ;  }
 if(fwrite($openchatdb,$pixa5."\n")) { ;  }
                                  
fclose($openchatdb);

$xxp2='./archive_doski/'.$name.'/anketa/opoveshenie.txt';

$openchatdb=fopen($xxp2,"w");

 if(fwrite($openchatdb,' '."")) { ;  }
                                  
fclose($openchatdb);


}

?>