<? 

unset($color_b);

for($g=0;$g<300;$g++) {

 if($figury[$g]=='91') { 

$color_b[$g-1]=$color_b_x; 
$color_b[$g+1]=$color_b_x; 
$color_b[$g-24]=$color_b_x; 
$color_b[$g+24]=$color_b_x; 
$color_b[$g-23]=$color_b_x; 
$color_b[$g+23]=$color_b_x; 
$color_b[$g-25]=$color_b_x; 
$color_b[$g+25]=$color_b_x; 
$color_b[$g]=$color_b_x3; 
}


 if($figury[$g]=='84') { 

$color_b[$g-1]=$color_b_x2; 
$color_b[$g+1]=$color_b_x2; 
$color_b[$g-24]=$color_b_x2; 
$color_b[$g+24]=$color_b_x2; 
$color_b[$g-23]=$color_b_x2; 
$color_b[$g+23]=$color_b_x2; 
$color_b[$g-25]=$color_b_x2; 
$color_b[$g+25]=$color_b_x2; 
$color_b[$g]=$color_b_x4; 
}

                                      }


?>