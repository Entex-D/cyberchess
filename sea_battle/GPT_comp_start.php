<?php

$start_comp=array();
$schet_func2;

rrr2();

function rrr2() {

global $start_comp;
global $schet_func2;

$k1='2';
$d1='0';
$p1='0';
$tt='0';
$pp='0';
$dd='0';
$korabl4='0';
$rr='0';

for ($i = 1; $i < 102; $i++) {
$start_comp[$i]='40';
                                         }


for ($i = 1; $i < 102; $i++) {
        
$r='0';

        if($start_comp[$i]=='40') { $start_comp[$i] = rand(1, 8); $r='1'; }

if($start_comp[$i]=='1' && $k1=='1' && $r=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='1' && $k1!='1') { $rer=rand(1,2);




if($rer=='1') { 
if($start_comp[$i-10]=='40' && $start_comp[$i+1]=='40' && $start_comp[$i-1]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i+1+20]=='40' && $start_comp[$i-1-20]=='40' && $start_comp[$i+1+30]=='40' && $start_comp[$i-1-30]=='40' && $start_comp[$i+40]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i+1-10]=='40' && $start_comp[$i+1+40]=='40' && $start_comp[$i-1+40]=='40') {
 
$start_comp[$i+10]='1'; $start_comp[$i+20]='1'; $start_comp[$i+30]='1'; $k1='1';  
                                                                                                            } else  $start_comp[$i]='40';
                   }



if($rer=='2') { 
if($start_comp[$i-1]=='40' && $start_comp[$i+10]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i+1-10]=='40' && $start_comp[$i+2+10]=='40' && $start_comp[$i+2-10]=='40' && $start_comp[$i+3+10]=='40' && $start_comp[$i+3-10]=='40' && $start_comp[$i+4]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+4-10]=='40' && $start_comp[$i+4+10]=='40') {
 
$start_comp[$i+1]='1'; $start_comp[$i+2]='1'; $start_comp[$i+3]='1'; $k1='1'; 
                                                                                                              }else $start_comp[$i]='40';
                    }

 }  





if($start_comp[$i]=='2' && $d1=='1' && $r=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='2' && $d1!='1') { 

if($start_comp[$i-1]=='40' && $start_comp[$i+10]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i+2+10]=='40' && $start_comp[$i+2-10]=='40' && $start_comp[$i+3]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+3-10]=='40' && $start_comp[$i+3+10]=='40') {
                                                
                                                $d1='1'; $start_comp[$i+1]='2'; $start_comp[$i+2]='2'; } else $start_comp[$i]='40';                                                              
                                               }



if($start_comp[$i]=='5' && $tt=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='5' && $tt!='1') {
                      
if($start_comp[$i-1]=='40' && $start_comp[$i+1]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i+1+20]=='40' && $start_comp[$i-1+20]=='40' && $start_comp[$i+30]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+1+30]=='40' && $start_comp[$i-1+30]=='40') {
                                             
                                              $tt='1'; $start_comp[$i]='2';  $start_comp[$i+10]='2'; $start_comp[$i+20]='2';                                              
                                   } else $start_comp[$i]='40';    
                                              }



if($start_comp[$i]=='3' && $p1=='1' && $r=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='3' && $p1!='1') { 

       
if($start_comp[$i-1]=='40' && $start_comp[$i+1]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+20]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+1+20]=='40' && $start_comp[$i-1+20]=='40') {
              
              $p1='1'; $start_comp[$i+10]='3'; 
                                                                                                                                                                                                                    } else $start_comp[$i]='40';
                                            }





if($start_comp[$i]=='6' && $pp=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='6' && $pp!='1') { 

if($start_comp[$i-1]=='40' && $start_comp[$i+10]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i+2]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+2-10]=='40' && $start_comp[$i+2-10]=='40') {

$pp='1';     $start_comp[$i]='3'; $start_comp[$i+1]='3'; 
                                                                                                                                                                                                                     } else $start_comp[$i]='40';
                                             }  
                                                             




if($start_comp[$i]=='7' && $dd=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='7' && $dd!='1') { 


if($start_comp[$i-1]=='40' && $start_comp[$i+1]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+20]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+1+20]=='40' && $start_comp[$i-1+20]=='40') {
        
$dd='1';     $start_comp[$i]='3'; $start_comp[$i+10]='3';                                                                                                                                                    } else $start_comp[$i]='40'; 

                                              }  
                                                             



if($start_comp[$i]=='8' && $rr=='1') { $start_comp[$i]='40'; }
if($start_comp[$i]=='8' && $rr!='1') { 

if($start_comp[$i-1]=='40' && $start_comp[$i+10]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i+2]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+2-10]=='40' && $start_comp[$i+2-10]=='40') {

$rr='1';     $start_comp[$i]='3'; $start_comp[$i+1]='3'; 
                                                                                                                                                                                                                    } else $start_comp[$i]='40';
                                            }  
                                                             



if($start_comp[$i]=='4') {  if($korabl4<'4') { 

if($start_comp[$i-1]=='40' && $start_comp[$i+1]=='40' && $start_comp[$i-10]=='40' && $start_comp[$i+10]=='40' && $start_comp[$i-1-10]=='40' && $start_comp[$i-1+10]=='40' && $start_comp[$i+1+10]=='40' && $start_comp[$i+1-10]=='40') {
$korabl4=$korabl4+'1'; $start_comp[$i]='4'; 
                                                                                                                     } else $start_comp[$i]='40';
                                                     } else $start_comp[$i]='40'; }

   
}







$schet_func2='0';

// Заполняем доску рандомными значениями
for ($i = 1; $i < 102; $i++) {

if($start_comp[$i]<'5') { $schet_func2=$schet_func2+'1'; }

                                         }
}


while ($schet_func2 != '22') {
 unset($start_comp);    
rrr2();
}

//if($schet_func!='22') { echo '='.$schet_func; unset($start_comp); rrr(); }

?>