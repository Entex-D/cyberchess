<?
$prov=$hod_two-$hod_one;   // минусую "ход_куда - ход_откуда"
 // echo '<br><br><font size=1><strong>two - one = '.$prov.'</strong>';
// echo '<br><font size=1><strong>sh-two = '.$sh[$hod_two].'</strong><br><br>';


if($sh[$hod_one]=='162361' | $sh[$hod_one]=='2362361') { if($sh[$hod_two]=='40' | $sh[$hod_two]=='81' | $sh[$hod_two]=='80') { $k='1'; } }

if($sh[$hod_one]=='5' | $sh[$hod_one]=='15' | $k=='1')  {

//if($sh[$hod_one]=='5' | $sh[$hod_one]=='15' | $sh[$hod_one]=='7' | $sh[$hod_one]=='17')  {

if($sh[$hod_one]=='5' | $sh[$hod_one]=='15') { $t='Ферзь'; } else if($sh[$hod_one]=='162361' | $sh[$hod_one]=='2362361') { $t='Принцесса'; }

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
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40' | $sh[$hod_two-192]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-168') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40' | $sh[$hod_two+192]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='7') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-7') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }








if($prov=='192') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40' | $sh[$hod_two-192]!='40' | $sh[$hod_two-168]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-192') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40' | $sh[$hod_two+192]!='40' | $sh[$hod_two+168]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='8') {
                        
if($sh[$hod_two-1]!='40' | $sh[$hod_two-2]!='40' | $sh[$hod_two-3]!='40' | $sh[$hod_two-4]!='40' | $sh[$hod_two-5]!='40' | $sh[$hod_two-6]!='40' | $sh[$hod_two-7]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-8') {
                        
if($sh[$hod_two+1]!='40' | $sh[$hod_two+2]!='40' | $sh[$hod_two+3]!='40' | $sh[$hod_two+4]!='40' | $sh[$hod_two+5]!='40' | $sh[$hod_two+6]!='40' | $sh[$hod_two+7]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }







if($prov=='216') {
                        
if($sh[$hod_two-24]!='40' | $sh[$hod_two-48]!='40' | $sh[$hod_two-72]!='40' | $sh[$hod_two-96]!='40' | $sh[$hod_two-120]!='40' | $sh[$hod_two-192]!='40' | $sh[$hod_two-168]!='40' | $sh[$hod_two-192]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-216') {
                        
if($sh[$hod_two+24]!='40' | $sh[$hod_two+48]!='40' | $sh[$hod_two+72]!='40' | $sh[$hod_two+96]!='40' | $sh[$hod_two+120]!='40' | $sh[$hod_two+192]!='40' | $sh[$hod_two+168]!='40' | $sh[$hod_two+192]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
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


// выше по перпендикуляру

// ниже крест на крест



if($prov=='46') {
                        
if($sh[$hod_two-23]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-46') {
                        
if($sh[$hod_two+23]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='50') {
                        
if($sh[$hod_two-25]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-50') {
                        
if($sh[$hod_two+25]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }






if($prov=='69') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-69') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='75') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-75') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }








if($prov=='92') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40' | $sh[$hod_two-69]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-92') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40' | $sh[$hod_two+69]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='100') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40' | $sh[$hod_two-75]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-100') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40' | $sh[$hod_two+75]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }








if($prov=='115') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40' | $sh[$hod_two-69]!='40' | $sh[$hod_two-92]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-115') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40' | $sh[$hod_two+69]!='40' | $sh[$hod_two+92]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='125') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40' | $sh[$hod_two-75]!='40' | $sh[$hod_two-100]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-125') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40' | $sh[$hod_two+75]!='40' | $sh[$hod_two+100]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }










if($prov=='138') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40' | $sh[$hod_two-69]!='40' | $sh[$hod_two-92]!='40' | $sh[$hod_two-115]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-138') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40' | $sh[$hod_two+69]!='40' | $sh[$hod_two+92]!='40' | $sh[$hod_two+115]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='150') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40' | $sh[$hod_two-75]!='40' | $sh[$hod_two-100]!='40' | $sh[$hod_two-125]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-150') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40' | $sh[$hod_two+75]!='40' | $sh[$hod_two+100]!='40' | $sh[$hod_two+125]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }











if($prov=='161') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40' | $sh[$hod_two-69]!='40' | $sh[$hod_two-92]!='40' | $sh[$hod_two-115]!='40' | $sh[$hod_two-138]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-161') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40' | $sh[$hod_two+69]!='40' | $sh[$hod_two+92]!='40' | $sh[$hod_two+115]!='40' | $sh[$hod_two+138]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='175') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40' | $sh[$hod_two-75]!='40' | $sh[$hod_two-100]!='40' | $sh[$hod_two-125]!='40' | $sh[$hod_two-150]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-175') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40' | $sh[$hod_two+75]!='40' | $sh[$hod_two+100]!='40' | $sh[$hod_two+125]!='40' | $sh[$hod_two+150]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }







if($prov=='184') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40' | $sh[$hod_two-69]!='40' | $sh[$hod_two-92]!='40' | $sh[$hod_two-115]!='40' | $sh[$hod_two-138]!='40' | $sh[$hod_two-161]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-184') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40' | $sh[$hod_two+69]!='40' | $sh[$hod_two+92]!='40' | $sh[$hod_two+115]!='40' | $sh[$hod_two+138]!='40' | $sh[$hod_two+161]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='200') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40' | $sh[$hod_two-75]!='40' | $sh[$hod_two-100]!='40' | $sh[$hod_two-125]!='40' | $sh[$hod_two-150]!='40' | $sh[$hod_two-175]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-200') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40' | $sh[$hod_two+75]!='40' | $sh[$hod_two+100]!='40' | $sh[$hod_two+125]!='40' | $sh[$hod_two+150]!='40' | $sh[$hod_two+175]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }










if($prov=='207') {
                        
if($sh[$hod_two-23]!='40' | $sh[$hod_two-46]!='40' | $sh[$hod_two-69]!='40' | $sh[$hod_two-92]!='40' | $sh[$hod_two-115]!='40' | $sh[$hod_two-138]!='40' | $sh[$hod_two-161]!='40' | $sh[$hod_two-184]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-207') {
                        
if($sh[$hod_two+23]!='40' | $sh[$hod_two+46]!='40' | $sh[$hod_two+69]!='40' | $sh[$hod_two+92]!='40' | $sh[$hod_two+115]!='40' | $sh[$hod_two+138]!='40' | $sh[$hod_two+161]!='40' | $sh[$hod_two+184]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']';  $hod_one='1000'; $hod_two='1000'; }
                        }

if($prov=='225') {
                        
if($sh[$hod_two-25]!='40' | $sh[$hod_two-50]!='40' | $sh[$hod_two-75]!='40' | $sh[$hod_two-100]!='40' | $sh[$hod_two-125]!='40' | $sh[$hod_two-150]!='40' | $sh[$hod_two-175]!='40' | $sh[$hod_two-200]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }


if($prov=='-225') {
                        
if($sh[$hod_two+25]!='40' | $sh[$hod_two+50]!='40' | $sh[$hod_two+75]!='40' | $sh[$hod_two+100]!='40' | $sh[$hod_two+125]!='40' | $sh[$hod_two+150]!='40' | $sh[$hod_two+175]!='40' | $sh[$hod_two+200]!='40') {  echo '<br>'.$t.' перепрыгивает через ['.$prov.']'; $hod_one='1000'; $hod_two='1000';  }
                        }





                                                                    }

?>