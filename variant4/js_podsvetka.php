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

if (sh_d[f]=='18' | sh_d[f]=='8') {
        
    const x1Cell = document.getElementById(di[f+2]);
            const x2Cell = document.getElementById(di[f-2]);
            const x9Cell = document.getElementById(di[f+48]);
            const x10Cell = document.getElementById(di[f-48]);
            const x6Cell = document.getElementById(di[f+26]);
            const x3Cell = document.getElementById(di[f-26]);
            const x7Cell = document.getElementById(di[f+49]);
            const x8Cell = document.getElementById(di[f-49]);
            const x11Cell = document.getElementById(di[f+50]);
            const x12Cell = document.getElementById(di[f-50]);
            const x13Cell = document.getElementById(di[f+22]);
            const x14Cell = document.getElementById(di[f-22]);
            const x15Cell = document.getElementById(di[f+47]);
            const x16Cell = document.getElementById(di[f-47]);
            const x17Cell = document.getElementById(di[f+46]);
            const x18Cell = document.getElementById(di[f-46]);
           
          if(x1Cell !== null) {   x1Cell.classList.toggle('highlighted2');   }
             if(x2Cell !== null) {   x2Cell.classList.toggle('highlighted2');   }
             if(x9Cell !== null) {   x9Cell.classList.toggle('highlighted2');   }
             if(x10Cell !== null) {   x10Cell.classList.toggle('highlighted2');   }
             if(x6Cell !== null) {   x6Cell.classList.toggle('highlighted2');   }
             if(x3Cell !== null) {   x3Cell.classList.toggle('highlighted2');   }
             if(x7Cell !== null) {   x7Cell.classList.toggle('highlighted2');   }
             if(x8Cell !== null) {   x8Cell.classList.toggle('highlighted2');   }
             if(x11Cell !== null) {   x11Cell.classList.toggle('highlighted2');   }
             if(x12Cell !== null) {   x12Cell.classList.toggle('highlighted2');   }
               if(x13Cell !== null) {   x13Cell.classList.toggle('highlighted2');   }
             if(x14Cell !== null) {   x14Cell.classList.toggle('highlighted2');   }
            if(x15Cell !== null) {   x15Cell.classList.toggle('highlighted2');   }
             if(x16Cell !== null) {   x16Cell.classList.toggle('highlighted2');   }
               if(x17Cell !== null) {   x17Cell.classList.toggle('highlighted2');   }
             if(x18Cell !== null) {   x18Cell.classList.toggle('highlighted2');   }
          
  } else

if (sh_d[f]=='17' | sh_d[f]=='7') {

    const x1Cell = document.getElementById(di[f+2]);
            const x2Cell = document.getElementById(di[f-2]);
            const x9Cell = document.getElementById(di[f+3]);
            const x10Cell = document.getElementById(di[f-3]);
            const x6Cell = document.getElementById(di[f+50]);
            const x3Cell = document.getElementById(di[f-50]);
            const x7Cell = document.getElementById(di[f+46]);
            const x8Cell = document.getElementById(di[f-46]);
            const x11Cell = document.getElementById(di[f+75]);
            const x12Cell = document.getElementById(di[f-75]);
            const x13Cell = document.getElementById(di[f+69]);
            const x14Cell = document.getElementById(di[f-69]);
            const x15Cell = document.getElementById(di[f+48]);
            const x16Cell = document.getElementById(di[f-48]);
            const x17Cell = document.getElementById(di[f+72]);
            const x18Cell = document.getElementById(di[f-72]);

          if(x1Cell !== null) {   x1Cell.classList.toggle('highlighted2');   }
             if(x2Cell !== null) {   x2Cell.classList.toggle('highlighted2');   }
             if(x9Cell !== null) {   x9Cell.classList.toggle('highlighted2');   }
             if(x10Cell !== null) {   x10Cell.classList.toggle('highlighted2');   }
             if(x6Cell !== null) {   x6Cell.classList.toggle('highlighted2');   }
             if(x3Cell !== null) {   x3Cell.classList.toggle('highlighted2');   }
             if(x7Cell !== null) {   x7Cell.classList.toggle('highlighted2');   }
             if(x8Cell !== null) {   x8Cell.classList.toggle('highlighted2');   }
             if(x11Cell !== null) {   x11Cell.classList.toggle('highlighted2');   }
             if(x12Cell !== null) {   x12Cell.classList.toggle('highlighted2');   }
               if(x13Cell !== null) {   x13Cell.classList.toggle('highlighted2');   }
             if(x14Cell !== null) {   x14Cell.classList.toggle('highlighted2');   }
             if(x15Cell !== null) {   x15Cell.classList.toggle('highlighted2');   }
             if(x16Cell !== null) {   x16Cell.classList.toggle('highlighted2');   }
               if(x17Cell !== null) {   x17Cell.classList.toggle('highlighted2');   }
             if(x18Cell !== null) {   x18Cell.classList.toggle('highlighted2');   }
                  
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

        }

} else {
            this.classList.toggle('highlighted');
        }

} //end for
    });
});
</script>