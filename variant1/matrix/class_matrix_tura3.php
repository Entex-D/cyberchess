<?
$prov=$hod_two-$hod_one;   // минусую "ход_куда - ход_откуда"
// echo '<br><br><font size=1><strong>two - one = '.$prov.'</strong>';
// echo '<br><font size=1><strong>sh-two = '.$sh[$hod_two].'</strong><br><br>';

if($sh[$hod_one]=='8888' | $sh[$hod_one]=='18888') { if($sh[$hod_two]!='40') { $k='1'; } }

if($sh[$hod_one]=='2' | $sh[$hod_one]=='12' | $k=='1')  {

if($sh[$hod_one]=='2' | $sh[$hod_one]=='12') { $t='Ладья'; } else if($sh[$hod_one]=='8888' | $sh[$hod_one]=='18888') { $t='Капитан'; }

//if($sh[$hod_one]=='2' | $sh[$hod_one]=='24' | $sh[$hod_one]=='8' | $sh[$hod_one]=='18')  {

if($prov=='48') {
                        
if($sh[$hod_two-24]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-48') {
                        
if($sh[$hod_two+24]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='2') {
                        
if($sh[$hod_two-1]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-2') {
                        
if($sh[$hod_two+1]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }






if($prov=='72') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-72') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='3') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-3') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }











if($prov=='96') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-96') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='4') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-4') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }








if($prov=='120') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-120') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='5') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-5') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }







if($prov=='144') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-144') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='6') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-6') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }








if($prov=='168') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40' | $sh[$hod_two-144]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-168') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40' | $sh[$hod_two+144]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='7') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-7') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }








if($prov=='192') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40' | $sh[$hod_two-144]!='40' | $sh[$hod_two-168]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-192') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40' | $sh[$hod_two+144]!='40' | $sh[$hod_two+168]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='8') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40' | $sh[$hod_two-7]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-8') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40' | $sh[$hod_two+7]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }







if($prov=='216') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40' | $sh[$hod_two-144]!='40' | $sh[$hod_two-168]!='40' | $sh[$hod_two-192]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-216') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40' | $sh[$hod_two+144]!='40' | $sh[$hod_two+168]!='40' | $sh[$hod_two+192]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }
if($prov=='9') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40' | $sh[$hod_two-7]!='40' | $sh[$hod_two-8]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-9') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40' | $sh[$hod_two+7]!='40' | $sh[$hod_two+8]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }






if($prov=='10') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40' | $sh[$hod_two-7]!='40' | $sh[$hod_two-8]!='40' | $sh[$hod_two-9]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-10') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40' | $sh[$hod_two+7]!='40' | $sh[$hod_two+8]!='40' | $sh[$hod_two+9]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='11') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40' | $sh[$hod_two-7]!='40' | $sh[$hod_two-8]!='40' | $sh[$hod_two-9]!='40' | $sh[$hod_two-10]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-11') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40' | $sh[$hod_two+7]!='40' | $sh[$hod_two+8]!='40' | $sh[$hod_two+9]!='40' | $sh[$hod_two+10]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }






                                                                    }