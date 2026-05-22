<script>

var hod_ot=0;
var hod_to=0;


function fe(el) {

if(hod_ot!=0) {
  hod_to=el.id;
 document.cookie = "hod_kuda=" + hod_to; 
                     }

if(hod_ot==0) {
    hod_ot=el.id;
 document.cookie = "hod_shto=" + hod_ot; 
                }

if(hod_to!=0 && hod_ot!=0) {
//location.reload();
                   }

}

</script>