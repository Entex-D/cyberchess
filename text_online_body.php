<?
if(isset($_COOKIE['nomer'])) { $nomer_doski=$nomer;
 }
if(!$nomer && isset($_COOKIE['nomer_doski'])) { //echo '<br>считан номер доски='.$nomer_doski;
 }
//echo ''.$nomer_doski;

if(isset($_COOKIE['nomer2'])) { $nomer_doski2=$nomer2;
 }
if(!$nomer2 && isset($_COOKIE['nomer_doski2'])) { //echo '<br>считан номер доски='.$nomer_doski2;
 }
//echo ''.$nomer_doski2;

if(isset($_COOKIE['nomer3'])) { $nomer_doski3=$nomer3;
 }
if(!$nomer3 && isset($_COOKIE['nomer_doski3'])) { //echo '<br>считан номер доски='.$nomer_doski3;
 }
//echo ''.$nomer_doski3;

if(isset($_COOKIE['nomer4'])) { $nomer_doski4=$nomer4;
 }
if(!$nomer4 && isset($_COOKIE['nomer_doski4'])) { //echo '<br>считан номер доски='.$nomer_doski4;
 }
//echo ''.$nomer_doski4;

if(isset($_COOKIE['nomer6'])) { $nomer_doski6=$nomer6;
 }
if(!$nomer6 && isset($_COOKIE['nomer_doski6'])) { //echo '<br>считан номер доски='.$nomer_doski6;
 }
//echo ''.$nomer_doski6;

if(isset($_COOKIE['nomer7'])) { $nomer_doski7=$nomer7;
 }
if(!$nomer7 && isset($_COOKIE['nomer_doski7'])) { //echo '<br>считан номер доски='.$nomer_doski7;
 }
//echo ''.$nomer_doski6;

if(isset($_COOKIE['nomer8'])) { $nomer_doski8=$nomer8;
 }
if(!$nomer8 && isset($_COOKIE['nomer_doski8'])) { //echo '<br>считан номер доски='.$nomer_doski8;
 }
//echo ''.$nomer_doski6;

if(isset($_COOKIE['nomer9'])) { $nomer_doski9=$nomer9;
 }
if(!$nomer9 && isset($_COOKIE['nomer_doski9'])) { //echo '<br>считан номер доски='.$nomer_doski9;
 }
//echo ''.$nomer_doski9;

if(isset($_COOKIE['nomer10'])) { $nomer_doski10=$nomer10;
 }
if(!$nomer10 && isset($_COOKIE['nomer_doski10'])) { //echo '<br>считан номер доски='.$nomer_doski10;
 }
//echo ''.$nomer_doski10;
?>









  <style>

         
         td.border_menusex a:hover {

	 font-size: 11px;

		  colorl:#000;

		  colorl:#00E5EE;

 font-family: Trebuchet MS, Helvetica, sans-serif;
border-radius:8px; 

 text-align: center;

 background:#606060;

}
         
            td.border_menuse  {

 displayl:block;
vertical-align:top;
	 font-size: 11px;

		  colorl:#00E5EE;
border-radius:8px; 

 font-family: Trebuchet MS, Helvetica, sans-serif;

 text-align: center;

 background:#525252;

}
</style>

 
 
 <table  width=100%  ><tr><td class=td_center>



<?
//считывание и запись просто логина


$openchatdb=fopen("save_name.txt","a");

if(fwrite($openchatdb," "))
{
 if(fwrite($openchatdb,$name."\n")) {   }                          
}
                  

fclose($openchatdb);
                 
?>

<?
if ( !file_exists("save_name.txt") ) exit("файл base не существует");
if($file = fopen("save_name.txt", "r")) {  $s=0; } 


while(!feof($file)) { 
if($name2[]= fgets ($file)){$s++;} }

fclose ($file); 

if($s>26) {


$openchatdb=fopen("save_name.txt","w");

if(fwrite($openchatdb," "))
{
 if(fwrite($openchatdb,$name."\n")) {   }
}

fclose($openchatdb);
    

              } 

//считывание и запись просто логина закончена
?>



<?

$schet1='0';

for($a=1;$a<$s+1;$a++) { 

if($name2[$a]<>$name2[$a+1])  {
if($name2[$a]<>$name2[$a+2])  {
if($name2[$a]<>$name2[$a+3])  {
if($name2[$a]<>$name2[$a+4])  {
if($name2[$a]<>$name2[$a+5])  {
if($name2[$a]<>$name2[$a+6])  {
if($name2[$a]<>$name2[$a+7])  {
if($name2[$a]<>$name2[$a+8])  {

if($name2[$a]>'  ') { 
$schet1++; }

                                   }}}}}}}}
}

 echo '<font size=1><center><strong><br>Онлайн людей: '.$schet1.'</strong></center></font><br>'; 

//if($schet1=='1') { mail("unlater2@mail.ru", "RMX 1 онлайн", "На сайте шахмат RMX зафиксирован 1 человек онлайн"); }
//if($schet1=='2') { mail("unlater2@mail.ru", "RMX 2 онлайн", "На сайте шахмат RMX зафиксировано 2 человека онлайн"); }

for($a=1;$a<$b+1;$a++) { 

if($save2[$a]<>$save2[$a+1])  {
if($save2[$a]<>$save2[$a+2])  {
if($save2[$a]<>$save2[$a+3])  {
if($save2[$a]<>$save2[$a+4])  {
if($save2[$a]<>$save2[$a+5])  {
if($save2[$a]<>$save2[$a+6])  {
if($save2[$a]<>$save2[$a+7])  {
if($save2[$a]<>$save2[$a+8])  {

if($save2[$a]>'  ') { 
if($tip>'8') { echo '&nbsp;&nbsp;&nbsp;'.$save2[$a].'<br>'; } 
}

                                   }}}}}}}}
}



?>


<center>

<?


 //include ('online_igrok.php'); 
if($tip>'9') { 
include ('prosmotr_doski.php'); 
}

?>

<? if($tip=='1' | $tip=='2' | $tip=='3' | $tip=='4' | $tip=='5' | $tip=='6' | $tip=='7' | $tip=='8' | $tip=='9' | $tip=='10') { include('chat_igrok/text_chat_body.php'); } ?>

</td></tr></table>