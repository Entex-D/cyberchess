<HTML><HEAD><title>Шахматы liozenda</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<? include('../shapka_load_style.php'); ?>



<link type="text/css" rel="stylesheet" href="../style/jscrollpane.css"/>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  
<script type="text/javascript" src="../style/jscrollpane.js"></script>  
<script type="text/javascript" src="../style//mousewheel.js"></script>



<style type="text/css">

.scroll-pane {
	width: 100%; /* Ширина видимой области*/
	height: 100%; /* Высота видимой области*/
	overflow: auto; /* Если отключены скрипты это правило позволит отобразить обычный скролл */
}

</style>


<script type="text/javascript">

    jQuery(function()

    {

        jQuery('.scroll-pane').jScrollPane();

    });

</script>




</HEAD>

<body>

<div id="panec" class="scroll-pane">
<table bgcolor=#101010  width=100% height=100%>


<?php

if($name!='Cyber') { // если считано имя 

$e='0';
$ChatDB=file("chat.db");
while($a=array_pop($ChatDB))
{
list($date,$nick,$message)=split(" / ",$a,3);

if($e=='0') { $bg_color1='#565656'; }
if($e=='1') { $bg_color1='#606060'; }

 echo " <tr><td width=1%></td><td bgcolor=".$bg_color1."><font size=1><a href=#>".$date."</a></font><font size=2><strong> ".$nick."</strong><em> ".$message."</em></font><br></td></td><td width=1%></td><tr>";

$e=$e+'1';
if($e>='2') { $e='0'; }                                                                               
                 }

} else if($name=='Cyber') { // если не считано имя 


 ?>

<tr><td class=td_center width=10% height=100%><br><br><br><br><br><br><center><a href=../index.php>

<? if($style_run=='4') { ?>
<img src=../model/logo_color4.jpg width=40% />
<? } ?>

<? if($style_run=='6') { ?>
<img src=../model/logo_color6.jpg width=40% />
<? } ?>

<? if($style_run=='11') { ?>
<img src=../model/logo_color11.jpg width=40% />
<? } ?>

<? if($style_run=='16') { ?>
<img src=../model/logo_color16.jpg width=40% />
<? } ?>

</a></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td><tr>";

<?        }
?>

</table>
</div>


<?


if($chatmsg<>'стереть ип') {
if($file = fopen("chat.db", "r")) { echo ''; $b4=0;} 

while(!feof($file)) { 
if($messaged[]= fgets ($file)){$b4++;} }

fclose ($file); 

if($b4>2000) {         // $chatmsg='стереть ип';    $chatmsg1='стереть базу'; 


if($file = fopen("chat.db", "r")) { echo ''; $b4=0;} 

while(!feof($file)) { 
if($messageb[]= fgets ($file)){$b4++;} }

fclose ($file); 

 
$file = fopen("chat.db", "w"); 

for($a=$b4-5990;$a<$b4+1;$a++) { 
if(!fputs ($file, $messageb[$a])) {echo 'No save>index6';}
}

fclose ($file); 




   }}

 

?>


</body>