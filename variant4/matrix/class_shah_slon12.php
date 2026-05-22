<?

// echo '<br>';

for($i=0;$i<300;$i++)  {  

$sh_prov[$i]=$sh[$i];

 // echo '&nbsp;&nbsp;&nbsp;$sh['.$i.'] = '.$sh[$i];


if($sh[$i]=='14')  {  // проверка белый офицер вверх есть ли шах
                           if($sh[$i-23]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='40' & $sh[$i-161]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='40' & $sh[$i-161]=='40' & $sh[$i-184]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='40' & $sh[$i-161]=='40' & $sh[$i-184]=='40' & $sh[$i-207]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
               
            }  // конец белый офицер вверх





if($sh[$i]=='14')  {  // проверка белый офицер вниз есть ли шах
                           if($sh[$i+23]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='40' & $sh[$i+161]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='40' & $sh[$i+161]=='40' & $sh[$i+184]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='40' & $sh[$i+161]=='40' & $sh[$i+184]=='40' & $sh[$i+207]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
               
            }  // конец белый офицер вниз







if($sh[$i]=='14')  {  // проверка белый офицер вверх есть ли шах
                           if($sh[$i-25]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='40' & $sh[$i-175]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='40' & $sh[$i-175]=='40' & $sh[$i-200]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='40' & $sh[$i-175]=='40' & $sh[$i-200]=='40' & $sh[$i-225]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
               
            }  // конец белый офицер вверх





if($sh[$i]=='14')  {  // проверка белый офицер вниз есть ли шах
                           if($sh[$i+25]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='40' & $sh[$i+175]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='40' & $sh[$i+175]=='40' & $sh[$i+200]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='40' & $sh[$i+175]=='40' & $sh[$i+200]=='40' & $sh[$i+225]=='6')  {  $proverka=true; echo '<br>Шах черному королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='1';  }
               
            }  // конец белый офицер вниз











if($sh[$i]=='4')  {  // проверка черный офицер вверх есть ли шах
                           if($sh[$i-23]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='40' & $sh[$i-161]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='40' & $sh[$i-161]=='40' & $sh[$i-184]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-23]=='40' & $sh[$i-46]=='40' & $sh[$i-69]=='40' & $sh[$i-92]=='40' & $sh[$i-115]=='40' & $sh[$i-138]=='40' & $sh[$i-161]=='40' & $sh[$i-184]=='40' & $sh[$i-207]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
               
            }  // конец черный офицер вверх





if($sh[$i]=='4')  {  // проверка черный офицер вниз есть ли шах
                           if($sh[$i+23]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='40' & $sh[$i+161]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='40' & $sh[$i+161]=='40' & $sh[$i+184]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+23]=='40' & $sh[$i+46]=='40' & $sh[$i+69]=='40' & $sh[$i+92]=='40' & $sh[$i+115]=='40' & $sh[$i+138]=='40' & $sh[$i+161]=='40' & $sh[$i+184]=='40' & $sh[$i+207]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
               
            }  // конец черный офицер вниз







if($sh[$i]=='4')  {  // проверка черный офицер вверх есть ли шах
                           if($sh[$i-25]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='40' & $sh[$i-175]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='40' & $sh[$i-175]=='40' & $sh[$i-200]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i-25]=='40' & $sh[$i-50]=='40' & $sh[$i-75]=='40' & $sh[$i-100]=='40' & $sh[$i-125]=='40' & $sh[$i-150]=='40' & $sh[$i-175]=='40' & $sh[$i-200]=='40' & $sh[$i-225]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
               
            }  // конец черный офицер вверх





if($sh[$i]=='4')  {  // проверка черный офицер вниз есть ли шах
                           if($sh[$i+25]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='40' & $sh[$i+175]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='40' & $sh[$i+175]=='40' & $sh[$i+200]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
                           if($sh[$i+25]=='40' & $sh[$i+50]=='40' & $sh[$i+75]=='40' & $sh[$i+100]=='40' & $sh[$i+125]=='40' & $sh[$i+150]=='40' & $sh[$i+175]=='40' & $sh[$i+200]=='40' & $sh[$i+225]=='16')  {  $proverka=true; echo '<br>Шах белому королю от слона - ['.$i.'], <font size=1><strong>( Может ошибиться )</strong></font>'; $shah='2';  }
               
            }  // конец черный офицер вниз











                                  }  // цикл for

                        





if($hod_one<'1000' & $proverka==true) {

for($i=0;$i<300;$i++)  {  



//$sh_prov[$hod_two]=$sh_prov[$hod_one];   // экспериментально ходим, снят ли шах
if($sh_prov[$hod_one]<>'40') { $sh_prov[$hod_two]=$sh_prov[$hod_one]; $sh_prov[$hod_one]='40'; }  // экспериментально ходим, снят ли шах







if($sh_prov[$i]=='14')  {  // проверка белый офицер вверх есть ли шах
                           if($sh_prov[$i-23]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='40' & $sh_prov[$i-161]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='40' & $sh_prov[$i-161]=='40' & $sh_prov[$i-184]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='40' & $sh_prov[$i-161]=='40' & $sh_prov[$i-184]=='40' & $sh_prov[$i-207]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец белый офицер вверх





if($sh_prov[$i]=='14')  {  // проверка белый офицер вниз есть ли шах
                           if($sh_prov[$i+23]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='40' & $sh_prov[$i+161]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='40' & $sh_prov[$i+161]=='40' & $sh_prov[$i+184]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='40' & $sh_prov[$i+161]=='40' & $sh_prov[$i+184]=='40' & $sh_prov[$i+207]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец белый офицер вниз







if($sh_prov[$i]=='14')  {  // проверка белый офицер вверх есть ли шах
                           if($sh_prov[$i-25]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='40' & $sh_prov[$i-175]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='40' & $sh_prov[$i-175]=='40' & $sh_prov[$i-200]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='40' & $sh_prov[$i-175]=='40' & $sh_prov[$i-200]=='40' & $sh_prov[$i-225]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец белый офицер вверх





if($sh_prov[$i]=='14')  {  // проверка белый офицер вниз есть ли шах
                           if($sh_prov[$i+25]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='40' & $sh_prov[$i+175]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='40' & $sh_prov[$i+175]=='40' & $sh_prov[$i+200]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='40' & $sh_prov[$i+175]=='40' & $sh_prov[$i+200]=='40' & $sh_prov[$i+225]=='6')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец белый офицер вниз











if($sh_prov[$i]=='4')  {  // проверка черный офицер вверх есть ли шах
                           if($sh_prov[$i-23]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='40' & $sh_prov[$i-161]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='40' & $sh_prov[$i-161]=='40' & $sh_prov[$i-184]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-23]=='40' & $sh_prov[$i-46]=='40' & $sh_prov[$i-69]=='40' & $sh_prov[$i-92]=='40' & $sh_prov[$i-115]=='40' & $sh_prov[$i-138]=='40' & $sh_prov[$i-161]=='40' & $sh_prov[$i-184]=='40' & $sh_prov[$i-207]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец черный офицер вверх





if($sh_prov[$i]=='4')  {  // проверка черный офицер вниз есть ли шах
                           if($sh_prov[$i+23]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='40' & $sh_prov[$i+161]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='40' & $sh_prov[$i+161]=='40' & $sh_prov[$i+184]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+23]=='40' & $sh_prov[$i+46]=='40' & $sh_prov[$i+69]=='40' & $sh_prov[$i+92]=='40' & $sh_prov[$i+115]=='40' & $sh_prov[$i+138]=='40' & $sh_prov[$i+161]=='40' & $sh_prov[$i+184]=='40' & $sh_prov[$i+207]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец черный офицер вниз







if($sh_prov[$i]=='4')  {  // проверка черный офицер вверх есть ли шах
                           if($sh_prov[$i-25]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='40' & $sh_prov[$i-175]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='40' & $sh_prov[$i-175]=='40' & $sh_prov[$i-200]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i-25]=='40' & $sh_prov[$i-50]=='40' & $sh_prov[$i-75]=='40' & $sh_prov[$i-100]=='40' & $sh_prov[$i-125]=='40' & $sh_prov[$i-150]=='40' & $sh_prov[$i-175]=='40' & $sh_prov[$i-200]=='40' & $sh_prov[$i-225]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец черный офицер вверх





if($sh_prov[$i]=='4')  {  // проверка черный офицер вниз есть ли шах
                           if($sh_prov[$i+25]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='40' & $sh_prov[$i+175]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='40' & $sh_prov[$i+175]=='40' & $sh_prov[$i+200]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
                           if($sh_prov[$i+25]=='40' & $sh_prov[$i+50]=='40' & $sh_prov[$i+75]=='40' & $sh_prov[$i+100]=='40' & $sh_prov[$i+125]=='40' & $sh_prov[$i+150]=='40' & $sh_prov[$i+175]=='40' & $sh_prov[$i+200]=='40' & $sh_prov[$i+225]=='16')  {  echo '<br>Шах не снят от слона - ['.$i.'], <font size=1><strong>( Разрешаю ход,может ошибка )</strong></font>';  $hod_one='1000'; $hod_two='1000';  }
               
            }  // конец черный офицер вниз













// echo '&nbsp;&nbsp;&nbsp;$sh_prov['.$i.'] = '.$sh_prov[$i];

                                   }

                          }


?>