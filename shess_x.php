<?

if($tip=='1' | $tip=='2' | $tip=='3' | $tip=='4' | $tip=='5' | $tip=='6' | $tip=='7' | $tip=='8' | $tip=='9' | $tip=='10') {
    if(isset($_COOKIE['doska_quq'])) { if(!preg_match('/^[^a-zA-Z]+$/',$doska_quq) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska_quq)) { $doska=$doska_quq; echo ''; echo ''; }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; }}
if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $smotrit=$name; }} //для записи внизу кто смотрит
}
//echo '$name= '.$name;
?>

<?

//echo '$doska= '.$doska;

if(!$tip) { 
if(isset($_COOKIE['doska_kuki_tip']))  { $tip=$doska_kuki_tip; }
          }

if(!$doska) {
//if(isset($_COOKIE['doska_kuki_nomer']))  { $doska=$doska_kuki_nomer; }
           }
//echo '='.$doska;
if($tip<>'1' & $tip<>'2' & $tip<>'3' & $tip<>'4' & $tip<>'5' & $tip<>'6' & $tip<>'7' & $tip=='8' & $tip=='9' & $tip=='10') { $tip='1'; }

if(!$tip) { $tip='1'; }

if($tip=='1') { include ('variant1/doska_index.php'); }
if($tip=='2') {  include ('variant2/doska_index.php'); }
if($tip=='3') { include ('variant3/doska_index.php'); }
if($tip=='4') { include ('variant4/doska_index.php'); }
if($tip=='5') { include ('variant5/doska_index.php'); }
if($tip=='6') { include ('variant6/doska_index.php'); }
if($tip=='7') { include ('variant7/doska_index.php'); }
if($tip=='8') { include ('variant8/doska_index.php'); }
if($tip=='9') { include ('variant9/doska_index.php'); }
if($tip=='10') { include ('variant10/doska_index.php'); }

include('shapka_load_style.php');

?>

<?
if($tip=='1') { include ('variant1/podval_tip1.php'); }
if($tip=='2') { include ('variant2/podval_tip1.php'); }
if($tip=='3') { include ('variant3/podval_tip1.php'); }
if($tip=='4') { include ('variant4/podval_tip1.php'); }
if($tip=='5') { include ('variant5/podval_tip1.php'); }
if($tip=='6') { include ('variant6/podval_tip1.php'); }
if($tip=='7') { include ('variant7/podval_tip1.php'); }
if($tip=='8') { include ('variant8/podval_tip1.php'); }
if($tip=='9') { include ('variant9/podval_tip1.php'); }
if($tip=='10') { include ('variant10/podval_tip1.php'); }

// echo '$tip = '.$tip;



 if($tip=='1') { include ('variant1/title1.php'); }
 if($tip=='2') { include ('variant2/title1.php'); }
 if($tip=='3') { include ('variant3/title1.php'); }
if($tip=='4') { include ('variant4/title1.php'); }
if($tip=='5') { include ('variant5/title1.php'); }
if($tip=='6') { include ('variant6/title1.php'); }
if($tip=='7') { include ('variant7/title1.php'); }
if($tip=='8') { include ('variant8/title1.php'); }
if($tip=='9') { include ('variant9/title1.php'); }
if($tip=='10') { include ('variant10/title1.php'); }

echo '<title>'.$title.'</title>';

//include ('doski_all.php');


if($title=='Ваш ходL') {
?>

<script>
    
var replacement = 'Ходите';
var heading     = document.title;
setInterval(function() {
    if (document.title == heading) {
        document.title = replacement;
    } 
    else {
        document.title = heading;
    };
}, 1000);
    
    
</script>

<? } ?>