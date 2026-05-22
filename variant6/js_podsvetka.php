<?php

        for ($i = 0; $i < 300; $i++) {
           $sh[$i] = preg_replace("|[\r\n]+|", "", $sh[$i]);
 $shef[$i] = $sh[$i]; // Заполняем массив числами от 0 до 64
        }
    ?>

<script>
document.querySelectorAll('.cell').forEach(item => {
    item.addEventListener('click', function() {
       
if (typeof clickedCellId === 'undefined') {
    clickedCellId = this.id;
} else { clickedCellId = undefined; }

 
        const di = ['Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A88', 'B88', 'C88','D88', 'E88', 'F88','G88', 'H88','I88', 'K88','L88', 'M88', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A9', 'B9', 'C9','D9', 'E9', 'F9','G9', 'H9','I9', 'K9','L9', 'M9', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A8', 'B8', 'C8','D8', 'E8', 'F8','G8', 'H8','I8', 'K8','L8', 'M8', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A7', 'B7', 'C7','D7', 'E7', 'F7','G7', 'H7','I7', 'K7','L7', 'M7', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A6', 'B6', 'C6','D6', 'E6', 'F6','G6', 'H6','I6', 'K6','L6', 'M6', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A5', 'B5', 'C5','D5', 'E5', 'F5','G5', 'H5','I5', 'K5','L5', 'M5', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A4', 'B4', 'C4','D4', 'E4', 'F4','G4', 'H4','I4', 'K4','L4', 'M4', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A3', 'B3', 'C3','D3', 'E3', 'F3','G3', 'H3','I3', 'K3','L3', 'M3', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A2', 'B2', 'C2','D2', 'E2', 'F2','G2', 'H2','I2', 'K2','L2', 'M2', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A1', 'B1', 'C1','D1', 'E1', 'F1','G1', 'H1','I1', 'K1','L1', 'M1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A11', 'B11', 'C11','D11', 'E11', 'F11','G11', 'H11','I11', 'K11','L11', 'M11', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1',
                        'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1','A12', 'B12', 'C12','D12', 'E12', 'F12','G12', 'H12','I12', 'K12','L12', 'M12', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1', 'Z1'];


for(var f=0;f<300;f++) {
 
       var sh_d = <?= json_encode($shef) ?>;
        
      // console.log(sh_d);
            console.log("Элемент " + f + ": " + sh_d[f]);

 if (clickedCellId === di[f]) { 
if (sh_d[f]=='3' | sh_d[f]=='13') {
            const x1Cell = document.getElementById(di[f+26]);
            const x2Cell = document.getElementById(di[f+22]);
            const x3Cell = document.getElementById(di[f+49]);
            const x7Cell = document.getElementById(di[f+47]);
            const x4Cell = document.getElementById(di[f-26]);
            const x5Cell = document.getElementById(di[f-22]);
            const x6Cell = document.getElementById(di[f-49]);
            const x8Cell = document.getElementById(di[f-47]);
            
    
    if(x1Cell !== null) {     if(sh_d[f+26]<'40')   {       x1Cell.classList.toggle('highlighted2'); } else x1Cell.classList.toggle('highlighted'); }
     if(x2Cell !== null) {     if(sh_d[f+22]<'40')   {       x2Cell.classList.toggle('highlighted2'); } else x2Cell.classList.toggle('highlighted'); }
     if(x3Cell !== null) {     if(sh_d[f+49]<'40')   {       x3Cell.classList.toggle('highlighted2'); } else x3Cell.classList.toggle('highlighted'); }
     if(x7Cell !== null) {     if(sh_d[f+47]<'40')   {       x7Cell.classList.toggle('highlighted2'); } else x7Cell.classList.toggle('highlighted'); }
     if(x4Cell !== null) {     if(sh_d[f-26]<'40')   {       x4Cell.classList.toggle('highlighted2'); } else x4Cell.classList.toggle('highlighted'); }
     if(x5Cell !== null) {     if(sh_d[f-22]<'40')   {       x5Cell.classList.toggle('highlighted2'); } else x5Cell.classList.toggle('highlighted'); }
     if(x6Cell !== null) {     if(sh_d[f-49]<'40')   {       x6Cell.classList.toggle('highlighted2'); } else x6Cell.classList.toggle('highlighted'); }
     if(x8Cell !== null) {     if(sh_d[f-47]<'40')   {       x8Cell.classList.toggle('highlighted2'); } else x8Cell.classList.toggle('highlighted'); }
     } else

if (sh_d[f]=='6' | sh_d[f]=='16') {
      
if(f=='60' | f=='228') {
      const x1Cell = document.getElementById(di[f+1]);
            const x2Cell = document.getElementById(di[f-1]);
            const x3Cell = document.getElementById(di[f+24]);
            const x7Cell = document.getElementById(di[f-24]);
            const x4Cell = document.getElementById(di[f-23]);
            const x5Cell = document.getElementById(di[f-25]);
            const x6Cell = document.getElementById(di[f+23]);
            const x8Cell = document.getElementById(di[f+25]);
            
            const x9Cell = document.getElementById(di[f+2]);
            const x10Cell = document.getElementById(di[f-2]);
            
    
    if(x1Cell !== null) {     if(sh_d[f+1]<'40')   {       x1Cell.classList.toggle('highlighted2'); } else x1Cell.classList.toggle('highlighted'); }
     if(x2Cell !== null) {     if(sh_d[f-1]<'40')   {       x2Cell.classList.toggle('highlighted2'); } else x2Cell.classList.toggle('highlighted'); }
     if(x3Cell !== null) {     if(sh_d[f+24]<'40')   {       x3Cell.classList.toggle('highlighted2'); } else x3Cell.classList.toggle('highlighted'); }
     if(x7Cell !== null) {     if(sh_d[f-24]<'40')   {       x7Cell.classList.toggle('highlighted2'); } else x7Cell.classList.toggle('highlighted'); }
     if(x4Cell !== null) {     if(sh_d[f-23]<'40')   {       x4Cell.classList.toggle('highlighted2'); } else x4Cell.classList.toggle('highlighted'); }
     if(x5Cell !== null) {     if(sh_d[f-25]<'40')   {       x5Cell.classList.toggle('highlighted2'); } else x5Cell.classList.toggle('highlighted'); }
     if(x6Cell !== null) {     if(sh_d[f+23]<'40')   {       x6Cell.classList.toggle('highlighted2'); } else x6Cell.classList.toggle('highlighted'); }
     if(x8Cell !== null) {     if(sh_d[f+25]<'40')   {       x8Cell.classList.toggle('highlighted2'); } else x8Cell.classList.toggle('highlighted'); }

     if(x9Cell !== null) {     if(sh_d[f+2]<'40')   {       x9Cell.classList.toggle('highlighted2'); } else x9Cell.classList.toggle('highlighted'); }
     if(x10Cell !== null) {     if(sh_d[f-2]<'40')   {       x10Cell.classList.toggle('highlighted2'); } else x10Cell.classList.toggle('highlighted'); }
    
                       } else

if(f!='60' & f!='228') {
      const x1Cell = document.getElementById(di[f+1]);
            const x2Cell = document.getElementById(di[f-1]);
            const x3Cell = document.getElementById(di[f+24]);
            const x7Cell = document.getElementById(di[f-24]);
            const x4Cell = document.getElementById(di[f-23]);
            const x5Cell = document.getElementById(di[f-25]);
            const x6Cell = document.getElementById(di[f+23]);
            const x8Cell = document.getElementById(di[f+25]);
            
    
    if(x1Cell !== null) {     if(sh_d[f+1]<'40')   {       x1Cell.classList.toggle('highlighted2'); } else x1Cell.classList.toggle('highlighted'); }
     if(x2Cell !== null) {     if(sh_d[f-1]<'40')   {       x2Cell.classList.toggle('highlighted2'); } else x2Cell.classList.toggle('highlighted'); }
     if(x3Cell !== null) {     if(sh_d[f+24]<'40')   {       x3Cell.classList.toggle('highlighted2'); } else x3Cell.classList.toggle('highlighted'); }
     if(x7Cell !== null) {     if(sh_d[f-24]<'40')   {       x7Cell.classList.toggle('highlighted2'); } else x7Cell.classList.toggle('highlighted'); }
     if(x4Cell !== null) {     if(sh_d[f-23]<'40')   {       x4Cell.classList.toggle('highlighted2'); } else x4Cell.classList.toggle('highlighted'); }
     if(x5Cell !== null) {     if(sh_d[f-25]<'40')   {       x5Cell.classList.toggle('highlighted2'); } else x5Cell.classList.toggle('highlighted'); }
     if(x6Cell !== null) {     if(sh_d[f+23]<'40')   {       x6Cell.classList.toggle('highlighted2'); } else x6Cell.classList.toggle('highlighted'); }
     if(x8Cell !== null) {     if(sh_d[f+25]<'40')   {       x8Cell.classList.toggle('highlighted2'); } else x8Cell.classList.toggle('highlighted'); }
    
                       } 
 } else

if (sh_d[f]=='18' | sh_d[f]=='8') {
        
    const x1Cell = document.getElementById(di[f+24]);
            const x2Cell = document.getElementById(di[f-24]);
            const x9Cell = document.getElementById(di[f+47]);
            const x10Cell = document.getElementById(di[f-47]);
            const x6Cell = document.getElementById(di[f+49]);
            const x3Cell = document.getElementById(di[f-49]);
            const x7Cell = document.getElementById(di[f+70]);
            const x8Cell = document.getElementById(di[f-70]);
            const x11Cell = document.getElementById(di[f+74]);
            const x12Cell = document.getElementById(di[f-74]);

            const x13Cell = document.getElementById(di[f+23]);
            const x14Cell = document.getElementById(di[f-23]);
            const x15Cell = document.getElementById(di[f+25]);
            const x16Cell = document.getElementById(di[f-25]);
            const x17Cell = document.getElementById(di[f+46]);
            const x18Cell = document.getElementById(di[f-46]);
            const x19Cell = document.getElementById(di[f+50]);
            const x20Cell = document.getElementById(di[f-50]);
            const x21Cell = document.getElementById(di[f+69]);
            const x22Cell = document.getElementById(di[f-69]);
            const x23Cell = document.getElementById(di[f+75]);
            const x24Cell = document.getElementById(di[f-75]);
                    
          if(x1Cell !== null) {   x1Cell.classList.toggle('highlighted');   }
             if(x2Cell !== null) {   x2Cell.classList.toggle('highlighted');   }
             if(x9Cell !== null) {   x9Cell.classList.toggle('highlighted');   }
             if(x10Cell !== null) {   x10Cell.classList.toggle('highlighted');   }
             if(x6Cell !== null) {   x6Cell.classList.toggle('highlighted');   }
             if(x3Cell !== null) {   x3Cell.classList.toggle('highlighted');   }
             if(x7Cell !== null) {   x7Cell.classList.toggle('highlighted');   }
             if(x8Cell !== null) {   x8Cell.classList.toggle('highlighted');   }
             if(x11Cell !== null) {   x11Cell.classList.toggle('highlighted');   }
             if(x12Cell !== null) {   x12Cell.classList.toggle('highlighted');   }

               if(x13Cell !== null) {   x13Cell.classList.toggle('highlighted2');   }
             if(x14Cell !== null) {   x14Cell.classList.toggle('highlighted2');   }
            if(x15Cell !== null) {   x15Cell.classList.toggle('highlighted2');   }
             if(x16Cell !== null) {   x16Cell.classList.toggle('highlighted2');   }
               if(x17Cell !== null) {   x17Cell.classList.toggle('highlighted2');   }
             if(x18Cell !== null) {   x18Cell.classList.toggle('highlighted2');   }
              if(x19Cell !== null) {   x19Cell.classList.toggle('highlighted2');   }
             if(x20Cell !== null) {   x20Cell.classList.toggle('highlighted2');   }
               if(x21Cell !== null) {   x21Cell.classList.toggle('highlighted2');   }
             if(x22Cell !== null) {   x22Cell.classList.toggle('highlighted2');   }
              if(x23Cell !== null) {   x23Cell.classList.toggle('highlighted2');   }
             if(x24Cell !== null) {   x24Cell.classList.toggle('highlighted2');   }
          
  } else

if (sh_d[f]=='17' | sh_d[f]=='7') {

    const x1Cell = document.getElementById(di[f+23]);
            const x2Cell = document.getElementById(di[f-23]);
            const x9Cell = document.getElementById(di[f+25]);
            const x10Cell = document.getElementById(di[f-25]);
            const x6Cell = document.getElementById(di[f+2]);
            const x3Cell = document.getElementById(di[f-2]);
            const x7Cell = document.getElementById(di[f+48]);
            const x8Cell = document.getElementById(di[f-48]);
            
            const x11Cell = document.getElementById(di[f+22]);
            const x12Cell = document.getElementById(di[f-22]);
            const x13Cell = document.getElementById(di[f+26]);
            const x14Cell = document.getElementById(di[f-26]);
            const x15Cell = document.getElementById(di[f+47]);
            const x16Cell = document.getElementById(di[f-47]);
            const x17Cell = document.getElementById(di[f+49]);
            const x18Cell = document.getElementById(di[f-49]);
            const x19Cell = document.getElementById(di[f+46]);
            const x20Cell = document.getElementById(di[f-46]);
            const x21Cell = document.getElementById(di[f+50]);
            const x22Cell = document.getElementById(di[f-50]);

          if(x1Cell !== null) {   x1Cell.classList.toggle('highlighted');   }
             if(x2Cell !== null) {   x2Cell.classList.toggle('highlighted');   }
             if(x9Cell !== null) {   x9Cell.classList.toggle('highlighted');   }
             if(x10Cell !== null) {   x10Cell.classList.toggle('highlighted');   }
             if(x6Cell !== null) {   x6Cell.classList.toggle('highlighted');   }
             if(x3Cell !== null) {   x3Cell.classList.toggle('highlighted');   }
             if(x7Cell !== null) {   x7Cell.classList.toggle('highlighted');   }
             if(x8Cell !== null) {   x8Cell.classList.toggle('highlighted');   }
            
              if(x11Cell !== null) {   x11Cell.classList.toggle('highlighted2');   }
             if(x12Cell !== null) {   x12Cell.classList.toggle('highlighted2');   }
               if(x13Cell !== null) {   x13Cell.classList.toggle('highlighted2');   }
             if(x14Cell !== null) {   x14Cell.classList.toggle('highlighted2');   }
             if(x15Cell !== null) {   x15Cell.classList.toggle('highlighted2');   }
             if(x16Cell !== null) {   x16Cell.classList.toggle('highlighted2');   }
               if(x17Cell !== null) {   x17Cell.classList.toggle('highlighted2');   }
             if(x18Cell !== null) {   x18Cell.classList.toggle('highlighted2');   }
               if(x19Cell !== null) {   x19Cell.classList.toggle('highlighted2');   }
             if(x20Cell !== null) {   x20Cell.classList.toggle('highlighted2');   }
               if(x21Cell !== null) {   x21Cell.classList.toggle('highlighted2');   }
             if(x22Cell !== null) {   x22Cell.classList.toggle('highlighted2');   }
                  
} else
if (sh_d[f]=='19' | sh_d[f]=='9') {
            const x1Cell = document.getElementById(di[f+23]);
            const x2Cell = document.getElementById(di[f-23]);
            const x3Cell = document.getElementById(di[f+25]);
            const x4Cell = document.getElementById(di[f-25]);
            const x5Cell = document.getElementById(di[f+2]);
            const x6Cell = document.getElementById(di[f-2]);
            const x7Cell = document.getElementById(di[f+48]);
            const x8Cell = document.getElementById(di[f-48]);
            
            const x9Cell = document.getElementById(di[f+22]);
            const x10Cell = document.getElementById(di[f-22]);
            const x11Cell = document.getElementById(di[f+26]);
            const x12Cell = document.getElementById(di[f-26]);
            const x13Cell = document.getElementById(di[f+47]);
            const x14Cell = document.getElementById(di[f-47]);
            const x15Cell = document.getElementById(di[f+49]);
            const x16Cell = document.getElementById(di[f-49]);
                     
                   if(x1Cell !== null) {    x1Cell.classList.toggle('highlighted');   }
              if(x2Cell !== null) {    x2Cell.classList.toggle('highlighted');   }
              if(x3Cell !== null) {    x3Cell.classList.toggle('highlighted');   }
              if(x4Cell !== null) {    x4Cell.classList.toggle('highlighted');   }
              if(x5Cell !== null) {    x5Cell.classList.toggle('highlighted');   }
              if(x6Cell !== null) {    x6Cell.classList.toggle('highlighted');   }
              if(x7Cell !== null) {    x7Cell.classList.toggle('highlighted');   }
              if(x8Cell !== null) {    x8Cell.classList.toggle('highlighted');   }

              if(x9Cell !== null) {    x9Cell.classList.toggle('highlighted2');   }
              if(x10Cell !== null) {    x10Cell.classList.toggle('highlighted2');   }
              if(x11Cell !== null) {    x11Cell.classList.toggle('highlighted2');   }
              if(x12Cell !== null) {    x12Cell.classList.toggle('highlighted2');   }
              if(x13Cell !== null) {    x13Cell.classList.toggle('highlighted2');   }
              if(x14Cell !== null) {    x14Cell.classList.toggle('highlighted2');   }
              if(x15Cell !== null) {    x15Cell.classList.toggle('highlighted2');   }
              if(x16Cell !== null) {    x16Cell.classList.toggle('highlighted2');   }

 } else

if (sh_d[f]=='14' | sh_d[f]=='4') {

            const x1Cell = document.getElementById(di[f+25]);
            const x2Cell = document.getElementById(di[f-25]);
            const x3Cell = document.getElementById(di[f+23]);
            const x4Cell = document.getElementById(di[f-23]);
           
            const x5Cell = document.getElementById(di[f+50]);
            const x6Cell = document.getElementById(di[f-50]);
            const x7Cell = document.getElementById(di[f+46]);
            const x8Cell = document.getElementById(di[f-46]);
          
            const x9Cell = document.getElementById(di[f+75]);
            const x10Cell = document.getElementById(di[f-75]);
            const x11Cell = document.getElementById(di[f+69]);
            const x12Cell = document.getElementById(di[f-69]);
          
            const x13Cell = document.getElementById(di[f+100]);
            const x14Cell = document.getElementById(di[f-100]);
            const x15Cell = document.getElementById(di[f+92]);
            const x16Cell = document.getElementById(di[f-92]);
                      
            const x17Cell = document.getElementById(di[f+125]);
            const x18Cell = document.getElementById(di[f-125]);
            const x19Cell = document.getElementById(di[f+115]);
            const x20Cell = document.getElementById(di[f-115]);
                      
            const x21Cell = document.getElementById(di[f+150]);
            const x22Cell = document.getElementById(di[f-150]);
            const x23Cell = document.getElementById(di[f+138]);
            const x24Cell = document.getElementById(di[f-138]);
                      
            const x25Cell = document.getElementById(di[f+175]);
            const x26Cell = document.getElementById(di[f-175]);
            const x27Cell = document.getElementById(di[f+161]);
            const x28Cell = document.getElementById(di[f-161]);
            

      if(x1Cell !== null) {     if(sh_d[f+25]<'40')   {       x1Cell.classList.toggle('highlighted2'); } else x1Cell.classList.toggle('highlighted'); }
     if(x2Cell !== null) {     if(sh_d[f-25]<'40')   {       x2Cell.classList.toggle('highlighted2'); } else x2Cell.classList.toggle('highlighted'); }
     if(x3Cell !== null) {     if(sh_d[f+23]<'40')   {       x3Cell.classList.toggle('highlighted2'); } else x3Cell.classList.toggle('highlighted'); }
     if(x4Cell !== null) {     if(sh_d[f-23]<'40')   {       x4Cell.classList.toggle('highlighted2'); } else x4Cell.classList.toggle('highlighted'); }
     
     if(x5Cell !== null) {      if(sh_d[f+25]>'30')   { if(sh_d[f+50]<'40')   {       x5Cell.classList.toggle('highlighted2'); } else x5Cell.classList.toggle('highlighted'); } }
     if(x6Cell !== null) {      if(sh_d[f-25]>'30')   { if(sh_d[f-50]<'40')   {       x6Cell.classList.toggle('highlighted2'); } else x6Cell.classList.toggle('highlighted'); } } 
     if(x7Cell !== null) {      if(sh_d[f+23]>'30')   { if(sh_d[f+46]<'40')   {       x7Cell.classList.toggle('highlighted2'); } else x7Cell.classList.toggle('highlighted'); } }       
     if(x8Cell !== null) {      if(sh_d[f-23]>'30')   { if(sh_d[f-46]<'40')   {       x8Cell.classList.toggle('highlighted2'); } else x8Cell.classList.toggle('highlighted'); } }
     
     if(x9Cell !== null) {      if(sh_d[f+25]>'30' && sh_d[f+50]>'30')   { if(sh_d[f+75]<'40')   {       x9Cell.classList.toggle('highlighted2'); } else x9Cell.classList.toggle('highlighted'); } }
     if(x10Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30')   {  if(sh_d[f-75]<'40')   {       x10Cell.classList.toggle('highlighted2'); } else x10Cell.classList.toggle('highlighted'); } }
     if(x11Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30')   {  if(sh_d[f+69]<'40')   {       x11Cell.classList.toggle('highlighted2'); } else x11Cell.classList.toggle('highlighted'); } }
     if(x12Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30')   {  if(sh_d[f-69]<'40')   {       x12Cell.classList.toggle('highlighted2'); } else x12Cell.classList.toggle('highlighted'); } }
     
     if(x13Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30')   {  if(sh_d[f+100]<'40')   {       x13Cell.classList.toggle('highlighted2'); } else x13Cell.classList.toggle('highlighted'); } }
     if(x14Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30')   {   if(sh_d[f-100]<'40')   {       x14Cell.classList.toggle('highlighted2'); } else x14Cell.classList.toggle('highlighted'); } }
     if(x15Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30' && sh_d[f+69]>'30')   {   if(sh_d[f+92]<'40')   {       x15Cell.classList.toggle('highlighted2'); } else x15Cell.classList.toggle('highlighted'); } }
     if(x16Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30')   {   if(sh_d[f-92]<'40')   {       x16Cell.classList.toggle('highlighted2'); } else x16Cell.classList.toggle('highlighted'); } }
     
     if(x17Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30' && sh_d[f+100]>'30')   {  if(sh_d[f+125]<'40')   {       x17Cell.classList.toggle('highlighted2'); } else x17Cell.classList.toggle('highlighted'); } }
     if(x18Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30' && sh_d[f-100]>'30')   {  if(sh_d[f-125]<'40')   {       x18Cell.classList.toggle('highlighted2'); } else x18Cell.classList.toggle('highlighted'); } }
     if(x19Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30' && sh_d[f+69]>'30' && sh_d[f+92]>'30')   {  if(sh_d[f+115]<'40')   {       x19Cell.classList.toggle('highlighted2'); } else x19Cell.classList.toggle('highlighted'); } }
     if(x20Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30' && sh_d[f-92]>'30')   {  if(sh_d[f-115]<'40')   {       x20Cell.classList.toggle('highlighted2'); } else x20Cell.classList.toggle('highlighted'); } }
     
     if(x21Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30' && sh_d[f+100]>'30' && sh_d[f+125]>'30')   {  if(sh_d[f+150]<'40')   {       x21Cell.classList.toggle('highlighted2'); } else x21Cell.classList.toggle('highlighted'); } }
     if(x22Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30' && sh_d[f-100]>'30' && sh_d[f-125]>'30')   {  if(sh_d[f-150]<'40')   {       x22Cell.classList.toggle('highlighted2'); } else x22Cell.classList.toggle('highlighted'); } }
     if(x23Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+6]>'30' && sh_d[f+69]>'30' && sh_d[f+92]>'30' && sh_d[f+115]>'30')   {  if(sh_d[f+138]<'40')   {       x23Cell.classList.toggle('highlighted2'); } else x23Cell.classList.toggle('highlighted'); } }
     if(x24Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30' && sh_d[f-92]>'30' && sh_d[f-115]>'30')   {  if(sh_d[f-138]<'40')   {       x24Cell.classList.toggle('highlighted2'); } else x24Cell.classList.toggle('highlighted'); } }
     
     if(x25Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30' && sh_d[f+100]>'30' && sh_d[f+125]>'30' && sh_d[f+150]>'30')   {  if(sh_d[f+175]<'40')   {       x25Cell.classList.toggle('highlighted2'); } else x25Cell.classList.toggle('highlighted'); } }
     if(x26Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30' && sh_d[f-100]>'30' && sh_d[f-125]>'30' && sh_d[f-150]>'30')   {  if(sh_d[f-175]<'40')   {       x26Cell.classList.toggle('highlighted2'); } else x26Cell.classList.toggle('highlighted'); } }
     if(x27Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30' && sh_d[f+69]>'30' && sh_d[f+92]>'30' && sh_d[f+115]>'30' && sh_d[f+138]>'30')   {  if(sh_d[f+161]<'40')   {       x27Cell.classList.toggle('highlighted2'); } else x27Cell.classList.toggle('highlighted'); } }
     if(x28Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30' && sh_d[f-92]>'30' && sh_d[f-115]>'30' && sh_d[f-138]>'30')   {  if(sh_d[f-161]<'40')   {       x28Cell.classList.toggle('highlighted2'); } else x28Cell.classList.toggle('highlighted'); } }

      } else 

if (sh_d[f]=='12' | sh_d[f]=='2') {

            const x200Cell = document.getElementById(di[f+1]);
            const x201Cell = document.getElementById(di[f+2]);
         const x202Cell = document.getElementById(di[f+3]);
         const x203Cell = document.getElementById(di[f+4]);
          const x204Cell = document.getElementById(di[f+5]);
            const x205Cell = document.getElementById(di[f+6]);
         const x206Cell = document.getElementById(di[f+7]);
         const x207Cell = document.getElementById(di[f+8]);
         const x208Cell = document.getElementById(di[f+9]);
            const x209Cell = document.getElementById(di[f+10]);
         const x210Cell = document.getElementById(di[f+11]);

            const x211Cell = document.getElementById(di[f-1]);
            const x212Cell = document.getElementById(di[f-2]);
         const x213Cell = document.getElementById(di[f-3]);
         const x214Cell = document.getElementById(di[f-4]);
          const x215Cell = document.getElementById(di[f-5]);
            const x216Cell = document.getElementById(di[f-6]);
         const x217Cell = document.getElementById(di[f-7]);
         const x218Cell = document.getElementById(di[f-8]);
         const x219Cell = document.getElementById(di[f-9]);
            const x220Cell = document.getElementById(di[f-10]);
         const x221Cell = document.getElementById(di[f-11]);

            const x222Cell = document.getElementById(di[f-24]);
            const x223Cell = document.getElementById(di[f-48]);
         const x224Cell = document.getElementById(di[f-72]);
         const x225Cell = document.getElementById(di[f-96]);
          const x226Cell = document.getElementById(di[f-120]);
            const x227Cell = document.getElementById(di[f-144]);
         const x228Cell = document.getElementById(di[f-168]);

            const x229Cell = document.getElementById(di[f+24]);
            const x230Cell = document.getElementById(di[f+48]);
         const x231Cell = document.getElementById(di[f+72]);
         const x232Cell = document.getElementById(di[f+96]);
          const x233Cell = document.getElementById(di[f+120]);
            const x234Cell = document.getElementById(di[f+144]);
         const x235Cell = document.getElementById(di[f+168]);

     if(x200Cell !== null) {     if(sh_d[f+1]<'40')   {       x200Cell.classList.toggle('highlighted2'); } else x200Cell.classList.toggle('highlighted'); }
     if(x201Cell !== null) {     if(sh_d[f+1]>'30')   {  if(sh_d[f+2]<'40')   {       x201Cell.classList.toggle('highlighted2'); } else x201Cell.classList.toggle('highlighted'); } }
     if(x202Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30')   {  if(sh_d[f+3]<'40')   {       x202Cell.classList.toggle('highlighted2'); } else x202Cell.classList.toggle('highlighted'); } }
     if(x203Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30')   {  if(sh_d[f+4]<'40')   {       x203Cell.classList.toggle('highlighted2'); } else x203Cell.classList.toggle('highlighted'); } }
     if(x204Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30')   {  if(sh_d[f+5]<'40')   {       x204Cell.classList.toggle('highlighted2'); } else x204Cell.classList.toggle('highlighted'); } }
     if(x205Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30')   {  if(sh_d[f+6]<'40')   {       x205Cell.classList.toggle('highlighted2'); } else x205Cell.classList.toggle('highlighted'); } }
     if(x206Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30')   {  if(sh_d[f+7]<'40')   {       x206Cell.classList.toggle('highlighted2'); } else x206Cell.classList.toggle('highlighted'); } }
     if(x207Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30')   {  if(sh_d[f+8]<'40')   {       x207Cell.classList.toggle('highlighted2'); } else x207Cell.classList.toggle('highlighted'); } }
     if(x208Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30' && sh_d[f+8]>'30')   {  if(sh_d[f+9]<'40')   {       x208Cell.classList.toggle('highlighted2'); } else x208Cell.classList.toggle('highlighted'); } }
     if(x209Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30' && sh_d[f+8]>'30' && sh_d[f+9]>'30')   {  if(sh_d[f+10]<'40')   {       x209Cell.classList.toggle('highlighted2'); } else x209Cell.classList.toggle('highlighted'); } }
     if(x210Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30' && sh_d[f+8]>'30' && sh_d[f+9]>'30' && sh_d[f+10]>'30')   {  if(sh_d[f+11]<'40')   {       x210Cell.classList.toggle('highlighted2'); } else x210Cell.classList.toggle('highlighted'); } }

     if(x211Cell !== null) {     if(sh_d[f-1]<'40')   {        x211Cell.classList.toggle('highlighted2'); } else x211Cell.classList.toggle('highlighted'); }
     if(x212Cell !== null) {     if(sh_d[f-1]>'30')   {  if(sh_d[f-2]<'40')   {       x212Cell.classList.toggle('highlighted2'); } else x212Cell.classList.toggle('highlighted'); } }
     if(x213Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30')   {  if(sh_d[f-3]<'40')   {       x213Cell.classList.toggle('highlighted2'); } else x213Cell.classList.toggle('highlighted'); } }
     if(x214Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30')   {  if(sh_d[f-4]<'40')   {       x214Cell.classList.toggle('highlighted2'); } else x214Cell.classList.toggle('highlighted'); } }
     if(x215Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30')   {  if(sh_d[f-5]<'40')   {       x215Cell.classList.toggle('highlighted2'); } else x215Cell.classList.toggle('highlighted'); } }
     if(x216Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30')   {  if(sh_d[f-6]<'40')   {       x216Cell.classList.toggle('highlighted2'); } else x216Cell.classList.toggle('highlighted'); } }
     if(x217Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30')   {  if(sh_d[f-7]<'40')   {       x217Cell.classList.toggle('highlighted2'); } else x217Cell.classList.toggle('highlighted'); } }
     if(x218Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30')   {  if(sh_d[f-8]<'40')   {       x218Cell.classList.toggle('highlighted2'); } else x218Cell.classList.toggle('highlighted'); } }
     if(x219Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30' && sh_d[f-8]>'30')   {  if(sh_d[f-9]<'40')   {       x219Cell.classList.toggle('highlighted2'); } else x219Cell.classList.toggle('highlighted'); } }
     if(x220Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30' && sh_d[f-8]>'30' && sh_d[f-9]>'30')   {  if(sh_d[f-10]<'40')   {       x220Cell.classList.toggle('highlighted2'); } else x220Cell.classList.toggle('highlighted'); } }
     if(x221Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30' && sh_d[f-8]>'30' && sh_d[f-9]>'30' && sh_d[f-10]>'30')   {  if(sh_d[f-11]<'40')   {       x221Cell.classList.toggle('highlighted2'); } else x221Cell.classList.toggle('highlighted'); } }

     if(x222Cell !== null) {     if(sh_d[f-24]<'40')   {       x222Cell.classList.toggle('highlighted2'); } else x222Cell.classList.toggle('highlighted'); }
     if(x223Cell !== null) {     if(sh_d[f-24]>'30')   {  if(sh_d[f-48]<'40')   {       x223Cell.classList.toggle('highlighted2'); } else x223Cell.classList.toggle('highlighted'); } }
     if(x224Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30')   {  if(sh_d[f-72]<'40')   {       x224Cell.classList.toggle('highlighted2'); } else x224Cell.classList.toggle('highlighted'); } }
     if(x225Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30')   {  if(sh_d[f-96]<'40')   {       x225Cell.classList.toggle('highlighted2'); } else x225Cell.classList.toggle('highlighted'); } }
     if(x226Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30' && sh_d[f-96]>'30')   {  if(sh_d[f-120]<'40')   {       x226Cell.classList.toggle('highlighted2'); } else x226Cell.classList.toggle('highlighted'); } }
     if(x227Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30' && sh_d[f-96]>'30' && sh_d[f-120]>'30')   {  if(sh_d[f-144]<'40')   {       x227Cell.classList.toggle('highlighted2'); } else x227Cell.classList.toggle('highlighted'); } }
     if(x228Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30' && sh_d[f-96]>'30' && sh_d[f-120]>'30' && sh_d[f-144]>'30')   {  if(sh_d[f-168]<'40')   {       x228Cell.classList.toggle('highlighted2'); } else x228Cell.classList.toggle('highlighted'); } }

     if(x229Cell !== null) {     if(sh_d[f+24]<'40')   {       x229Cell.classList.toggle('highlighted2'); } else x229Cell.classList.toggle('highlighted'); }
     if(x230Cell !== null) {     if(sh_d[f+24]>'30')   {  if(sh_d[f+48]<'40')   {       x230Cell.classList.toggle('highlighted2'); } else x230Cell.classList.toggle('highlighted'); } }
     if(x231Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30')   {  if(sh_d[f+72]<'40')   {       x231Cell.classList.toggle('highlighted2'); } else x231Cell.classList.toggle('highlighted'); } }
     if(x232Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30')   {  if(sh_d[f+96]<'40')   {       x232Cell.classList.toggle('highlighted2'); } else x232Cell.classList.toggle('highlighted'); } }
     if(x233Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30' && sh_d[f+96]>'30')   {  if(sh_d[f+120]<'40')   {       x233Cell.classList.toggle('highlighted2'); } else x233Cell.classList.toggle('highlighted'); } }
     if(x234Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30' && sh_d[f+96]>'30' && sh_d[f+120]>'30')   {  if(sh_d[f+144]<'40')   {       x234Cell.classList.toggle('highlighted2'); } else x234Cell.classList.toggle('highlighted'); } }
     if(x235Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30' && sh_d[f+96]>'30' && sh_d[f+120]>'30' && sh_d[f+144]>'30')   {  if(sh_d[f+168]<'40')   {       x235Cell.classList.toggle('highlighted2'); } else x235Cell.classList.toggle('highlighted'); } }
     
   } else 

if (sh_d[f]=='15' | sh_d[f]=='5') {

            const x1Cell = document.getElementById(di[f+25]);
            const x2Cell = document.getElementById(di[f-25]);
            const x3Cell = document.getElementById(di[f+23]);
            const x4Cell = document.getElementById(di[f-23]);
           
            const x5Cell = document.getElementById(di[f+50]);
            const x6Cell = document.getElementById(di[f-50]);
            const x7Cell = document.getElementById(di[f+46]);
            const x8Cell = document.getElementById(di[f-46]);
          
            const x9Cell = document.getElementById(di[f+75]);
            const x10Cell = document.getElementById(di[f-75]);
            const x11Cell = document.getElementById(di[f+69]);
            const x12Cell = document.getElementById(di[f-69]);
          
            const x13Cell = document.getElementById(di[f+100]);
            const x14Cell = document.getElementById(di[f-100]);
            const x15Cell = document.getElementById(di[f+92]);
            const x16Cell = document.getElementById(di[f-92]);
                      
            const x17Cell = document.getElementById(di[f+125]);
            const x18Cell = document.getElementById(di[f-125]);
            const x19Cell = document.getElementById(di[f+115]);
            const x20Cell = document.getElementById(di[f-115]);
                      
            const x21Cell = document.getElementById(di[f+150]);
            const x22Cell = document.getElementById(di[f-150]);
            const x23Cell = document.getElementById(di[f+138]);
            const x24Cell = document.getElementById(di[f-138]);
                      
            const x25Cell = document.getElementById(di[f+175]);
            const x26Cell = document.getElementById(di[f-175]);
            const x27Cell = document.getElementById(di[f+161]);
            const x28Cell = document.getElementById(di[f-161]);
            


      if(x1Cell !== null) {     if(sh_d[f+25]<'40')   {       x1Cell.classList.toggle('highlighted2'); } else x1Cell.classList.toggle('highlighted'); }
     if(x2Cell !== null) {     if(sh_d[f-25]<'40')   {       x2Cell.classList.toggle('highlighted2'); } else x2Cell.classList.toggle('highlighted'); }
     if(x3Cell !== null) {     if(sh_d[f+23]<'40')   {       x3Cell.classList.toggle('highlighted2'); } else x3Cell.classList.toggle('highlighted'); }
     if(x4Cell !== null) {     if(sh_d[f-23]<'40')   {       x4Cell.classList.toggle('highlighted2'); } else x4Cell.classList.toggle('highlighted'); }
     
     if(x5Cell !== null) {      if(sh_d[f+25]>'30')   { if(sh_d[f+50]<'40')   {       x5Cell.classList.toggle('highlighted2'); } else x5Cell.classList.toggle('highlighted'); } }
     if(x6Cell !== null) {      if(sh_d[f-25]>'30')   { if(sh_d[f-50]<'40')   {       x6Cell.classList.toggle('highlighted2'); } else x6Cell.classList.toggle('highlighted'); } } 
     if(x7Cell !== null) {      if(sh_d[f+23]>'30')   { if(sh_d[f+46]<'40')   {       x7Cell.classList.toggle('highlighted2'); } else x7Cell.classList.toggle('highlighted'); } }       
     if(x8Cell !== null) {      if(sh_d[f-23]>'30')   { if(sh_d[f-46]<'40')   {       x8Cell.classList.toggle('highlighted2'); } else x8Cell.classList.toggle('highlighted'); } }
     
     if(x9Cell !== null) {      if(sh_d[f+25]>'30' && sh_d[f+50]>'30')   { if(sh_d[f+75]<'40')   {       x9Cell.classList.toggle('highlighted2'); } else x9Cell.classList.toggle('highlighted'); } }
     if(x10Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30')   {  if(sh_d[f-75]<'40')   {       x10Cell.classList.toggle('highlighted2'); } else x10Cell.classList.toggle('highlighted'); } }
     if(x11Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30')   {  if(sh_d[f+69]<'40')   {       x11Cell.classList.toggle('highlighted2'); } else x11Cell.classList.toggle('highlighted'); } }
     if(x12Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30')   {  if(sh_d[f-69]<'40')   {       x12Cell.classList.toggle('highlighted2'); } else x12Cell.classList.toggle('highlighted'); } }
     
     if(x13Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30')   {  if(sh_d[f+100]<'40')   {       x13Cell.classList.toggle('highlighted2'); } else x13Cell.classList.toggle('highlighted'); } }
     if(x14Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30')   {   if(sh_d[f-100]<'40')   {       x14Cell.classList.toggle('highlighted2'); } else x14Cell.classList.toggle('highlighted'); } }
     if(x15Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30' && sh_d[f+69]>'30')   {   if(sh_d[f+92]<'40')   {       x15Cell.classList.toggle('highlighted2'); } else x15Cell.classList.toggle('highlighted'); } }
     if(x16Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30')   {   if(sh_d[f-92]<'40')   {       x16Cell.classList.toggle('highlighted2'); } else x16Cell.classList.toggle('highlighted'); } }
     
     if(x17Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30' && sh_d[f+100]>'30')   {  if(sh_d[f+125]<'40')   {       x17Cell.classList.toggle('highlighted2'); } else x17Cell.classList.toggle('highlighted'); } }
     if(x18Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30' && sh_d[f-100]>'30')   {  if(sh_d[f-125]<'40')   {       x18Cell.classList.toggle('highlighted2'); } else x18Cell.classList.toggle('highlighted'); } }
     if(x19Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30' && sh_d[f+69]>'30' && sh_d[f+92]>'30')   {  if(sh_d[f+115]<'40')   {       x19Cell.classList.toggle('highlighted2'); } else x19Cell.classList.toggle('highlighted'); } }
     if(x20Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30' && sh_d[f-92]>'30')   {  if(sh_d[f-115]<'40')   {       x20Cell.classList.toggle('highlighted2'); } else x20Cell.classList.toggle('highlighted'); } }
     
     if(x21Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30' && sh_d[f+100]>'30' && sh_d[f+125]>'30')   {  if(sh_d[f+150]<'40')   {       x21Cell.classList.toggle('highlighted2'); } else x21Cell.classList.toggle('highlighted'); } }
     if(x22Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30' && sh_d[f-100]>'30' && sh_d[f-125]>'30')   {  if(sh_d[f-150]<'40')   {       x22Cell.classList.toggle('highlighted2'); } else x22Cell.classList.toggle('highlighted'); } }
     if(x23Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+6]>'30' && sh_d[f+69]>'30' && sh_d[f+92]>'30' && sh_d[f+115]>'30')   {  if(sh_d[f+138]<'40')   {       x23Cell.classList.toggle('highlighted2'); } else x23Cell.classList.toggle('highlighted'); } }
     if(x24Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30' && sh_d[f-92]>'30' && sh_d[f-115]>'30')   {  if(sh_d[f-138]<'40')   {       x24Cell.classList.toggle('highlighted2'); } else x24Cell.classList.toggle('highlighted'); } }
     
     if(x25Cell !== null) {     if(sh_d[f+25]>'30' && sh_d[f+50]>'30' && sh_d[f+75]>'30' && sh_d[f+100]>'30' && sh_d[f+125]>'30' && sh_d[f+150]>'30')   {  if(sh_d[f+175]<'40')   {       x25Cell.classList.toggle('highlighted2'); } else x25Cell.classList.toggle('highlighted'); } }
     if(x26Cell !== null) {     if(sh_d[f-25]>'30' && sh_d[f-50]>'30' && sh_d[f-75]>'30' && sh_d[f-100]>'30' && sh_d[f-125]>'30' && sh_d[f-150]>'30')   {  if(sh_d[f-175]<'40')   {       x26Cell.classList.toggle('highlighted2'); } else x26Cell.classList.toggle('highlighted'); } }
     if(x27Cell !== null) {     if(sh_d[f+23]>'30' && sh_d[f+46]>'30' && sh_d[f+69]>'30' && sh_d[f+92]>'30' && sh_d[f+115]>'30' && sh_d[f+138]>'30')   {  if(sh_d[f+161]<'40')   {       x27Cell.classList.toggle('highlighted2'); } else x27Cell.classList.toggle('highlighted'); } }
     if(x28Cell !== null) {     if(sh_d[f-23]>'30' && sh_d[f-46]>'30' && sh_d[f-69]>'30' && sh_d[f-92]>'30' && sh_d[f-115]>'30' && sh_d[f-138]>'30')   {  if(sh_d[f-161]<'40')   {       x28Cell.classList.toggle('highlighted2'); } else x28Cell.classList.toggle('highlighted'); } }
     

            const x200Cell = document.getElementById(di[f+1]);
            const x201Cell = document.getElementById(di[f+2]);
         const x202Cell = document.getElementById(di[f+3]);
         const x203Cell = document.getElementById(di[f+4]);
          const x204Cell = document.getElementById(di[f+5]);
            const x205Cell = document.getElementById(di[f+6]);
         const x206Cell = document.getElementById(di[f+7]);
         const x207Cell = document.getElementById(di[f+8]);
         const x208Cell = document.getElementById(di[f+9]);
            const x209Cell = document.getElementById(di[f+10]);
         const x210Cell = document.getElementById(di[f+11]);

            const x211Cell = document.getElementById(di[f-1]);
            const x212Cell = document.getElementById(di[f-2]);
         const x213Cell = document.getElementById(di[f-3]);
         const x214Cell = document.getElementById(di[f-4]);
          const x215Cell = document.getElementById(di[f-5]);
            const x216Cell = document.getElementById(di[f-6]);
         const x217Cell = document.getElementById(di[f-7]);
         const x218Cell = document.getElementById(di[f-8]);
         const x219Cell = document.getElementById(di[f-9]);
            const x220Cell = document.getElementById(di[f-10]);
         const x221Cell = document.getElementById(di[f-11]);

            const x222Cell = document.getElementById(di[f-24]);
            const x223Cell = document.getElementById(di[f-48]);
         const x224Cell = document.getElementById(di[f-72]);
         const x225Cell = document.getElementById(di[f-96]);
          const x226Cell = document.getElementById(di[f-120]);
            const x227Cell = document.getElementById(di[f-144]);
         const x228Cell = document.getElementById(di[f-168]);

            const x229Cell = document.getElementById(di[f+24]);
            const x230Cell = document.getElementById(di[f+48]);
         const x231Cell = document.getElementById(di[f+72]);
         const x232Cell = document.getElementById(di[f+96]);
          const x233Cell = document.getElementById(di[f+120]);
            const x234Cell = document.getElementById(di[f+144]);
         const x235Cell = document.getElementById(di[f+168]);

     
     if(x200Cell !== null) {     if(sh_d[f+1]<'40')   {       x200Cell.classList.toggle('highlighted2'); } else x200Cell.classList.toggle('highlighted'); }
     if(x201Cell !== null) {     if(sh_d[f+1]>'30')   {  if(sh_d[f+2]<'40')   {       x201Cell.classList.toggle('highlighted2'); } else x201Cell.classList.toggle('highlighted'); } }
     if(x202Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30')   {  if(sh_d[f+3]<'40')   {       x202Cell.classList.toggle('highlighted2'); } else x202Cell.classList.toggle('highlighted'); } }
     if(x203Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30')   {  if(sh_d[f+4]<'40')   {       x203Cell.classList.toggle('highlighted2'); } else x203Cell.classList.toggle('highlighted'); } }
     if(x204Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30')   {  if(sh_d[f+5]<'40')   {       x204Cell.classList.toggle('highlighted2'); } else x204Cell.classList.toggle('highlighted'); } }
     if(x205Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30')   {  if(sh_d[f+6]<'40')   {       x205Cell.classList.toggle('highlighted2'); } else x205Cell.classList.toggle('highlighted'); } }
     if(x206Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30')   {  if(sh_d[f+7]<'40')   {       x206Cell.classList.toggle('highlighted2'); } else x206Cell.classList.toggle('highlighted'); } }
     if(x207Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30')   {  if(sh_d[f+8]<'40')   {       x207Cell.classList.toggle('highlighted2'); } else x207Cell.classList.toggle('highlighted'); } }
     if(x208Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30' && sh_d[f+8]>'30')   {  if(sh_d[f+9]<'40')   {       x208Cell.classList.toggle('highlighted2'); } else x208Cell.classList.toggle('highlighted'); } }
     if(x209Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30' && sh_d[f+8]>'30' && sh_d[f+9]>'30')   {  if(sh_d[f+10]<'40')   {       x209Cell.classList.toggle('highlighted2'); } else x209Cell.classList.toggle('highlighted'); } }
     if(x210Cell !== null) {     if(sh_d[f+1]>'30' && sh_d[f+2]>'30' && sh_d[f+3]>'30' && sh_d[f+4]>'30' && sh_d[f+5]>'30' && sh_d[f+6]>'30' && sh_d[f+7]>'30' && sh_d[f+8]>'30' && sh_d[f+9]>'30' && sh_d[f+10]>'30')   {  if(sh_d[f+11]<'40')   {       x210Cell.classList.toggle('highlighted2'); } else x210Cell.classList.toggle('highlighted'); } }

     if(x211Cell !== null) {     if(sh_d[f-1]<'40')   {        x211Cell.classList.toggle('highlighted2'); } else x211Cell.classList.toggle('highlighted'); }
     if(x212Cell !== null) {     if(sh_d[f-1]>'30')   {  if(sh_d[f-2]<'40')   {       x212Cell.classList.toggle('highlighted2'); } else x212Cell.classList.toggle('highlighted'); } }
     if(x213Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30')   {  if(sh_d[f-3]<'40')   {       x213Cell.classList.toggle('highlighted2'); } else x213Cell.classList.toggle('highlighted'); } }
     if(x214Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30')   {  if(sh_d[f-4]<'40')   {       x214Cell.classList.toggle('highlighted2'); } else x214Cell.classList.toggle('highlighted'); } }
     if(x215Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30')   {  if(sh_d[f-5]<'40')   {       x215Cell.classList.toggle('highlighted2'); } else x215Cell.classList.toggle('highlighted'); } }
     if(x216Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30')   {  if(sh_d[f-6]<'40')   {       x216Cell.classList.toggle('highlighted2'); } else x216Cell.classList.toggle('highlighted'); } }
     if(x217Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30')   {  if(sh_d[f-7]<'40')   {       x217Cell.classList.toggle('highlighted2'); } else x217Cell.classList.toggle('highlighted'); } }
     if(x218Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30')   {  if(sh_d[f-8]<'40')   {       x218Cell.classList.toggle('highlighted2'); } else x218Cell.classList.toggle('highlighted'); } }
     if(x219Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30' && sh_d[f-8]>'30')   {  if(sh_d[f-9]<'40')   {       x219Cell.classList.toggle('highlighted2'); } else x219Cell.classList.toggle('highlighted'); } }
     if(x220Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30' && sh_d[f-8]>'30' && sh_d[f-9]>'30')   {  if(sh_d[f-10]<'40')   {       x220Cell.classList.toggle('highlighted2'); } else x220Cell.classList.toggle('highlighted'); } }
     if(x221Cell !== null) {     if(sh_d[f-1]>'30' && sh_d[f-2]>'30' && sh_d[f-3]>'30' && sh_d[f-4]>'30' && sh_d[f-5]>'30' && sh_d[f-6]>'30' && sh_d[f-7]>'30' && sh_d[f-8]>'30' && sh_d[f-9]>'30' && sh_d[f-10]>'30')   {  if(sh_d[f-11]<'40')   {       x221Cell.classList.toggle('highlighted2'); } else x221Cell.classList.toggle('highlighted'); } }

     if(x222Cell !== null) {     if(sh_d[f-24]<'40')   {       x222Cell.classList.toggle('highlighted2'); } else x222Cell.classList.toggle('highlighted'); }
     if(x223Cell !== null) {     if(sh_d[f-24]>'30')   {  if(sh_d[f-48]<'40')   {       x223Cell.classList.toggle('highlighted2'); } else x223Cell.classList.toggle('highlighted'); } }
     if(x224Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30')   {  if(sh_d[f-72]<'40')   {       x224Cell.classList.toggle('highlighted2'); } else x224Cell.classList.toggle('highlighted'); } }
     if(x225Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30')   {  if(sh_d[f-96]<'40')   {       x225Cell.classList.toggle('highlighted2'); } else x225Cell.classList.toggle('highlighted'); } }
     if(x226Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30' && sh_d[f-96]>'30')   {  if(sh_d[f-120]<'40')   {       x226Cell.classList.toggle('highlighted2'); } else x226Cell.classList.toggle('highlighted'); } }
     if(x227Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30' && sh_d[f-96]>'30' && sh_d[f-120]>'30')   {  if(sh_d[f-144]<'40')   {       x227Cell.classList.toggle('highlighted2'); } else x227Cell.classList.toggle('highlighted'); } }
     if(x228Cell !== null) {     if(sh_d[f-24]>'30' && sh_d[f-48]>'30' && sh_d[f-72]>'30' && sh_d[f-96]>'30' && sh_d[f-120]>'30' && sh_d[f-144]>'30')   {  if(sh_d[f-168]<'40')   {       x228Cell.classList.toggle('highlighted2'); } else x228Cell.classList.toggle('highlighted'); } }

     if(x229Cell !== null) {     if(sh_d[f+24]<'40')   {       x229Cell.classList.toggle('highlighted2'); } else x229Cell.classList.toggle('highlighted'); }
     if(x230Cell !== null) {     if(sh_d[f+24]>'30')   {  if(sh_d[f+48]<'40')   {       x230Cell.classList.toggle('highlighted2'); } else x230Cell.classList.toggle('highlighted'); } }
     if(x231Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30')   {  if(sh_d[f+72]<'40')   {       x231Cell.classList.toggle('highlighted2'); } else x231Cell.classList.toggle('highlighted'); } }
     if(x232Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30')   {  if(sh_d[f+96]<'40')   {       x232Cell.classList.toggle('highlighted2'); } else x232Cell.classList.toggle('highlighted'); } }
     if(x233Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30' && sh_d[f+96]>'30')   {  if(sh_d[f+120]<'40')   {       x233Cell.classList.toggle('highlighted2'); } else x233Cell.classList.toggle('highlighted'); } }
     if(x234Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30' && sh_d[f+96]>'30' && sh_d[f+120]>'30')   {  if(sh_d[f+144]<'40')   {       x234Cell.classList.toggle('highlighted2'); } else x234Cell.classList.toggle('highlighted'); } }
     if(x235Cell !== null) {     if(sh_d[f+24]>'30' && sh_d[f+48]>'30' && sh_d[f+72]>'30' && sh_d[f+96]>'30' && sh_d[f+120]>'30' && sh_d[f+144]>'30')   {  if(sh_d[f+168]<'40')   {       x235Cell.classList.toggle('highlighted2'); } else x235Cell.classList.toggle('highlighted'); } }
       
  } else 

if (sh_d[f]=='1') {
 if (clickedCellId == 'B7' | clickedCellId == 'C7' | clickedCellId == 'D7' | clickedCellId == 'E7' | clickedCellId == 'F7' | clickedCellId == 'G7' | clickedCellId == 'H7' | clickedCellId == 'I7' | clickedCellId == 'A7' | clickedCellId == 'K7') { 
            const x1Cell = document.getElementById(di[f+24]);
            const x2Cell = document.getElementById(di[f+48]);
            const x3Cell = document.getElementById(di[f+23]);
            const x4Cell = document.getElementById(di[f+25]);
      if(sh_d[f+24]>'30')   {       x1Cell.classList.toggle('highlighted'); }
     if(sh_d[f+48]>'30' & sh_d[f+24]>'30')   {       x2Cell.classList.toggle('highlighted');  }
     if(sh_d[f+23]<'40')   {    x3Cell.classList.toggle('highlighted2'); }
     if(sh_d[f+25]<'40')   {    x4Cell.classList.toggle('highlighted2'); }

} else

 if (clickedCellId != 'B7' & clickedCellId != 'C7' & clickedCellId != 'D7' & clickedCellId != 'E7' & clickedCellId != 'F7' & clickedCellId != 'G7' & clickedCellId != 'H7' & clickedCellId != 'I7' & clickedCellId != 'A7' & clickedCellId != 'K7') { 
            const x1Cell = document.getElementById(di[f+24]);
            const x3Cell = document.getElementById(di[f+23]);
            const x4Cell = document.getElementById(di[f+25]);
      if(sh_d[f+24]>'30')   {       x1Cell.classList.toggle('highlighted'); }
     if(sh_d[f+23]<'40')   {    x3Cell.classList.toggle('highlighted2'); }
     if(sh_d[f+25]<'40')   {    x4Cell.classList.toggle('highlighted2'); }

}
        } else

if (sh_d[f]=='11') {
 if (clickedCellId == 'C2' | clickedCellId == 'D2' | clickedCellId == 'E2' | clickedCellId == 'F2' | clickedCellId == 'G2' | clickedCellId == 'H2' | clickedCellId == 'I2' | clickedCellId == 'K2') { 
            const x1Cell = document.getElementById(di[f-24]);
            const x2Cell = document.getElementById(di[f-48]);
            const x3Cell = document.getElementById(di[f-23]);
            const x4Cell = document.getElementById(di[f-25]);
      if(sh_d[f-24]>'30')   {       x1Cell.classList.toggle('highlighted'); }
     if(sh_d[f-48]>'30' & sh_d[f-24]>'30')   {       x2Cell.classList.toggle('highlighted');  }
     if(sh_d[f-23]<'40')   {    x3Cell.classList.toggle('highlighted2'); }
     if(sh_d[f-25]<'40')   {    x4Cell.classList.toggle('highlighted2'); }

} else

 if (clickedCellId != 'C2' & clickedCellId != 'D2' & clickedCellId != 'E2' & clickedCellId != 'F2' & clickedCellId != 'G2' & clickedCellId != 'H2' & clickedCellId != 'I2' & clickedCellId != 'K2') { 
            const x1Cell = document.getElementById(di[f-24]);
            const x3Cell = document.getElementById(di[f-23]);
            const x4Cell = document.getElementById(di[f-25]);
       if(sh_d[f-24]>'30')   {       x1Cell.classList.toggle('highlighted'); }
    if(sh_d[f-23]<'40')   {    x3Cell.classList.toggle('highlighted2'); }
     if(sh_d[f-25]<'40')   {    x4Cell.classList.toggle('highlighted2'); }

}
        }

} else {
            this.classList.toggle('highlighted');
        }

} //end for
    });
});
</script>