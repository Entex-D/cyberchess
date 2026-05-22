<?php

$start=array();
$schet_func;

rrr();

function rrr() {

global $start;
global $schet_func;

$k1='2';
$d1='0';
$p1='0';
$tt='0';
$pp='0';
$dd='0';
$korabl4='0';
$rr='0';

for ($i = 1; $i < 102; $i++) {
$start[$i]='40';
                                         }


for ($i = 1; $i < 102; $i++) {
        
$r='0';

        if($start[$i]=='40') { $start[$i] = rand(1, 8); $r='1'; }

if($start[$i]=='1' && $k1=='1' && $r=='1') { $start[$i]='40'; }
if($start[$i]=='1' && $k1!='1') { $rer=rand(1,2);




if($rer=='1') { 
if($start[$i-10]=='40' && $start[$i+1]=='40' && $start[$i-1]=='40' && $start[$i+1+10]=='40' && $start[$i-1-10]=='40' && $start[$i+1+20]=='40' && $start[$i-1-20]=='40' && $start[$i+1+30]=='40' && $start[$i-1-30]=='40' && $start[$i+40]=='40' && $start[$i-1-10]=='40' && $start[$i+1-10]=='40' && $start[$i+1+40]=='40' && $start[$i-1+40]=='40') {
 
$start[$i+10]='1'; $start[$i+20]='1'; $start[$i+30]='1'; $k1='1';  
                                                                                                            } else  $start[$i]='40';
                   }



if($rer=='2') { 
if($start[$i-1]=='40' && $start[$i+10]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i+1-10]=='40' && $start[$i+2+10]=='40' && $start[$i+2-10]=='40' && $start[$i+3+10]=='40' && $start[$i+3-10]=='40' && $start[$i+4]=='40' && $start[$i-1-10]=='40' && $start[$i-1+10]=='40' && $start[$i+4-10]=='40' && $start[$i+4+10]=='40') {
 
$start[$i+1]='1'; $start[$i+2]='1'; $start[$i+3]='1'; $k1='1'; 
                                                                                                              }else $start[$i]='40';
                    }

 }  





if($start[$i]=='2' && $d1=='1' && $r=='1') { $start[$i]='40'; }
if($start[$i]=='2' && $d1!='1') { 

if($start[$i-1]=='40' && $start[$i+10]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i-1-10]=='40' && $start[$i+2+10]=='40' && $start[$i+2-10]=='40' && $start[$i+3]=='40' && $start[$i-1-10]=='40' && $start[$i-1+10]=='40' && $start[$i+3-10]=='40' && $start[$i+3+10]=='40') {
                                                
                                                $d1='1'; $start[$i+1]='2'; $start[$i+2]='2'; } else $start[$i]='40';                                                              
                                               }



if($start[$i]=='5' && $tt=='1') { $start[$i]='40'; }
if($start[$i]=='5' && $tt!='1') {
                      
if($start[$i-1]=='40' && $start[$i+1]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i-1-10]=='40' && $start[$i+1+20]=='40' && $start[$i-1+20]=='40' && $start[$i+30]=='40' && $start[$i-1-10]=='40' && $start[$i-1+10]=='40' && $start[$i+1+30]=='40' && $start[$i-1+30]=='40') {
                                             
                                              $tt='1'; $start[$i]='2';  $start[$i+10]='2'; $start[$i+20]='2';                                              
                                   } else $start[$i]='40';    
                                              }



if($start[$i]=='3' && $p1=='1' && $r=='1') { $start[$i]='40'; }
if($start[$i]=='3' && $p1!='1') { 

       
if($start[$i-1]=='40' && $start[$i+1]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i-1+10]=='40' && $start[$i+20]=='40' && $start[$i-1-10]=='40' && $start[$i-1+10]=='40' && $start[$i+1+20]=='40' && $start[$i-1+20]=='40') {
              
              $p1='1'; $start[$i+10]='3'; 
                                                                                                                                                                                                                    } else $start[$i]='40';
                                            }





if($start[$i]=='6' && $pp=='1') { $start[$i]='40'; }
if($start[$i]=='6' && $pp!='1') { 

if($start[$i-1]=='40' && $start[$i+10]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i-1-10]=='40' && $start[$i+2]=='40' && $start[$i-1-10]=='40' && $start[$i-1+10]=='40' && $start[$i+2-10]=='40' && $start[$i+2-10]=='40') {

$pp='1';     $start[$i]='3'; $start[$i+1]='3'; 
                                                                                                                                                                                                                     } else $start[$i]='40';
                                             }  
                                                             




if($start[$i]=='7' && $dd=='1') { $start[$i]='40'; }
if($start[$i]=='7' && $dd!='1') { 


if($start[$i-1]=='40' && $start[$i+1]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i-1+10]=='40' && $start[$i+20]=='40' && $start[$i-1+10]=='40' && $start[$i+1+20]=='40' && $start[$i-1+20]=='40') {
        
$dd='1';     $start[$i]='3'; $start[$i+10]='3';                                                                                                                                                    } else $start[$i]='40'; 

                                              }  
                                                             



if($start[$i]=='8' && $rr=='1') { $start[$i]='40'; }
if($start[$i]=='8' && $rr!='1') { 

if($start[$i-1]=='40' && $start[$i+10]=='40' && $start[$i-10]=='40' && $start[$i+1+10]=='40' && $start[$i-1-10]=='40' && $start[$i+2]=='40' && $start[$i-1+10]=='40' && $start[$i+2-10]=='40' && $start[$i+2-10]=='40') {

$rr='1';     $start[$i]='3'; $start[$i+1]='3'; 
                                                                                                                                                                                                                    } else $start[$i]='40';
                                            }  
                                                             



if($start[$i]=='4') {  if($korabl4<'4') { 

if($start[$i-1]=='40' && $start[$i+1]=='40' && $start[$i-10]=='40' && $start[$i+10]=='40' && $start[$i-1-10]=='40' && $start[$i-1+10]=='40' && $start[$i+1+10]=='40' && $start[$i+1-10]=='40') {
$korabl4=$korabl4+'1'; $start[$i]='4'; 
                                                                                                                     } else $start[$i]='40';
                                                     } else $start[$i]='40'; }

   
}







$schet_func='0';

// Заполняем доску рандомными значениями
for ($i = 1; $i < 102; $i++) {

if($start[$i]<'5') { $schet_func=$schet_func+'1'; }

                                         }
}


while ($schet_func != '22') {
 unset($start);    
rrr();
}

//if($schet_func!='22') { echo '='.$schet_func; unset($start); rrr(); }

?>