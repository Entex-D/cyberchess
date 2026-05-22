<? include('./ochki/create_data_write.php'); ?>

<?

if($peshka_white>' ') {

$data_peshka_white[0]=$data_peshka_white[0]+$peshka_white;
$data_peshka_white[1]=$data_peshka_white[1]+$peshka_white_ball;


$xxd='./ochki/ochki/peshka_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_peshka_white[0]."\n".$data_peshka_white[1])) { }

fclose($openchatdb);

}














if($peshka_black>' ') {

$data_peshka_black[0]=$data_peshka_black[0]+$peshka_black;
$data_peshka_black[1]=$data_peshka_black[1]+$peshka_black_ball;


$xxd='./ochki/ochki/peshka_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_peshka_black[0]."\n".$data_peshka_black[1])) { }

fclose($openchatdb);

}














if($kon_white>' ') {

$data_kon_white[0]=$data_kon_white[0]+$kon_white;
$data_kon_white[1]=$data_kon_white[1]+$kon_white_ball;
$data_kon_white[0]=$data_kon_white[1] / 3;


$xxd='./ochki/ochki/kon_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_kon_white[0]."\n".$data_kon_white[1])) { }

fclose($openchatdb);

}














if($kon_black>' ') {

$data_kon_black[0]=$data_kon_black[0]+$kon_black;
$data_kon_black[1]=$data_kon_black[1]+$kon_black_ball;


$xxd='./ochki/ochki/kon_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_kon_black[0]."\n".$data_kon_black[1])) { }

fclose($openchatdb);

}

















if($slon_white>' ') {

$data_slon_white[0]=$data_slon_white[0]+$slon_white;
$data_slon_white[1]=$data_slon_white[1]+$slon_white_ball;


$xxd='./ochki/ochki/slon_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_slon_white[0]."\n".$data_slon_white[1])) { }

fclose($openchatdb);

}














if($slon_black>' ') {

$data_slon_black[0]=$data_slon_black[0]+$slon_black;
$data_slon_black[1]=$data_slon_black[1]+$slon_black_ball;


$xxd='./ochki/ochki/slon_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_slon_black[0]."\n".$data_slon_black[1])) { }

fclose($openchatdb);

}

















if($yastreb_white>' ') {

$data_yastreb_white[0]=$data_yastreb_white[0]+$yastreb_white;
$data_yastreb_white[1]=$data_yastreb_white[1]+$yastreb_white_ball;


$xxd='./ochki/ochki/yastreb_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_yastreb_white[0]."\n".$data_yastreb_white[1])) { }

fclose($openchatdb);

}














if($yastreb_black>' ') {

$data_yastreb_black[0]=$data_yastreb_black[0]+$yastreb_black;
$data_yastreb_black[1]=$data_yastreb_black[1]+$yastreb_black_ball;


$xxd='./ochki/ochki/yastreb_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_yastreb_black[0]."\n".$data_yastreb_black[1])) { }

fclose($openchatdb);

}

















if($medved_white>' ') {

$data_medved_white[0]=$data_medved_white[0]+$medved_white;
$data_medved_white[1]=$data_medved_white[1]+$medved_white_ball;


$xxd='./ochki/ochki/medved_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_medved_white[0]."\n".$data_medved_white[1])) { }

fclose($openchatdb);

}














if($medved_black>' ') {

$data_medved_black[0]=$data_medved_black[0]+$medved_black;
$data_medved_black[1]=$data_medved_black[1]+$medved_black_ball;


$xxd='./ochki/ochki/medved_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_medved_black[0]."\n".$data_medved_black[1])) { }

fclose($openchatdb);

}

















if($prizrak_white>' ') {

$data_prizrak_white[0]=$data_prizrak_white[0]+$prizrak_white;
$data_prizrak_white[1]=$data_prizrak_white[1]+$prizrak_white_ball;


$xxd='./ochki/ochki/prizrak_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_prizrak_white[0]."\n".$data_prizrak_white[1])) { }

fclose($openchatdb);

}














if($prizrak_black>' ') {

$data_prizrak_black[0]=$data_prizrak_black[0]+$prizrak_black;
$data_prizrak_black[1]=$data_prizrak_black[1]+$prizrak_black_ball;


$xxd='./ochki/ochki/prizrak_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_prizrak_black[0]."\n".$data_prizrak_black[1])) { }

fclose($openchatdb);

}

















if($princess_white>' ') {

$data_princess_white[0]=$data_princess_white[0]+$princess_white;
$data_princess_white[1]=$data_princess_white[1]+$princess_white_ball;


$xxd='./ochki/ochki/princess_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_princess_white[0]."\n".$data_princess_white[1])) { }

fclose($openchatdb);

}














if($princess_black>' ') {

$data_princess_black[0]=$data_princess_black[0]+$princess_black;
$data_princess_black[1]=$data_princess_black[1]+$princess_black_ball;


$xxd='./ochki/ochki/princess_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_princess_black[0]."\n".$data_princess_black[1])) { }

fclose($openchatdb);

}

















if($mag_white>' ') {

$data_mag_white[0]=$data_mag_white[0]+$mag_white;
$data_mag_white[1]=$data_mag_white[1]+$mag_white_ball;


$xxd='./ochki/ochki/mag_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_mag_white[0]."\n".$data_mag_white[1])) { }

fclose($openchatdb);

}














if($mag_black>' ') {

$data_mag_black[0]=$data_mag_black[0]+$mag_black;
$data_mag_black[1]=$data_mag_black[1]+$mag_black_ball;


$xxd='./ochki/ochki/mag_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_mag_black[0]."\n".$data_mag_black[1])) { }

fclose($openchatdb);

}

















if($capitan_white>' ') {

$data_capitan_white[0]=$data_capitan_white[0]+$capitan_white;
$data_capitan_white[1]=$data_capitan_white[1]+$capitan_white_ball;


$xxd='./ochki/ochki/capitan_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_capitan_white[0]."\n".$data_capitan_white[1])) { }

fclose($openchatdb);

}














if($capitan_black>' ') {

$data_capitan_black[0]=$data_capitan_black[0]+$capitan_black;
$data_capitan_black[1]=$data_capitan_black[1]+$capitan_black_ball;


$xxd='./ochki/ochki/capitan_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_capitan_black[0]."\n".$data_capitan_black[1])) { }

fclose($openchatdb);

}

















if($ladya_white>' ') {

$data_ladya_white[0]=$data_ladya_white[0]+$ladya_white;
$data_ladya_white[1]=$data_ladya_white[1]+$ladya_white_ball;


$xxd='./ochki/ochki/ladya_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_ladya_white[0]."\n".$data_ladya_white[1])) { }

fclose($openchatdb);

}














if($ladya_black>' ') {

$data_ladya_black[0]=$data_ladya_black[0]+$ladya_black;
$data_ladya_black[1]=$data_ladya_black[1]+$ladya_black_ball;


$xxd='./ochki/ochki/ladya_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_ladya_black[0]."\n".$data_ladya_black[1])) { }

fclose($openchatdb);

}

















if($ferz_white>' ') {

$data_ferz_white[0]=$data_ferz_white[0]+$ferz_white;
$data_ferz_white[1]=$data_ferz_white[1]+$ferz_white_ball;


$xxd='./ochki/ochki/ferz_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_ferz_white[0]."\n".$data_ferz_white[1])) { }

fclose($openchatdb);

}














if($ferz_black>' ') {

$data_ferz_black[0]=$data_ferz_black[0]+$ferz_black;
$data_ferz_black[1]=$data_ferz_black[1]+$ferz_black_ball;


$xxd='./ochki/ochki/ferz_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_ferz_black[0]."\n".$data_ferz_black[1])) { }

fclose($openchatdb);

}

















if($delf_white>' ') {

$data_delf_white[0]=$data_delf_white[0]+$delf_white;
$data_delf_white[1]=$data_delf_white[1]+$delf_white_ball;


$xxd='./ochki/ochki/delf_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_delf_white[0]."\n".$data_delf_white[1])) { }

fclose($openchatdb);

}














if($delf_black>' ') {

$data_delf_black[0]=$data_delf_black[0]+$delf_black;
$data_delf_black[1]=$data_delf_black[1]+$delf_black_ball;


$xxd='./ochki/ochki/delf_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_delf_black[0]."\n".$data_delf_black[1])) { }

fclose($openchatdb);

}


















if($dracon_white>' ') {

$data_dracon_white[0]=$data_dracon_white[0]+$dracon_white;
$data_dracon_white[1]=$data_dracon_white[1]+$dracon_white_ball;


$xxd='./ochki/ochki/dracon_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_dracon_white[0]."\n".$data_dracon_white[1])) { }

fclose($openchatdb);

}














if($dracon_black>' ') {

$data_dracon_black[0]=$data_dracon_black[0]+$dracon_black;
$data_dracon_black[1]=$data_dracon_black[1]+$dracon_black_ball;


$xxd='./ochki/ochki/dracon_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_dracon_black[0]."\n".$data_dracon_black[1])) { }

fclose($openchatdb);

}



















if($rozetta_white>' ') {

$data_rozetta_white[0]=$data_rozetta_white[0]+$rozetta_white;
$data_rozetta_white[1]=$data_rozetta_white[1]+$rozetta_white_ball;


$xxd='./ochki/ochki/rozetta_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_rozetta_white[0]."\n".$data_rozetta_white[1])) { }

fclose($openchatdb);

}














if($rozetta_black>' ') {

$data_rozetta_black[0]=$data_rozetta_black[0]+$rozetta_black;
$data_rozetta_black[1]=$data_rozetta_black[1]+$rozetta_black_ball;


$xxd='./ochki/ochki/rozetta_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_rozetta_black[0]."\n".$data_rozetta_black[1])) { }

fclose($openchatdb);

}



















if($strela_white>' ') {

$data_strela_white[0]=$data_strela_white[0]+$strela_white;
$data_strela_white[1]=$data_strela_white[1]+$strela_white_ball;


$xxd='./ochki/ochki/strela_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_strela_white[0]."\n".$data_strela_white[1])) { }

fclose($openchatdb);

}














if($strela_black>' ') {

$data_strela_black[0]=$data_strela_black[0]+$strela_black;
$data_strela_black[1]=$data_strela_black[1]+$strela_black_ball;


$xxd='./ochki/ochki/strela_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_strela_black[0]."\n".$data_strela_black[1])) { }

fclose($openchatdb);

}



















if($pauk_white>' ') {

$data_pauk_white[0]=$data_pauk_white[0]+$pauk_white;
$data_pauk_white[1]=$data_pauk_white[1]+$pauk_white_ball;


$xxd='./ochki/ochki/pauk_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_pauk_white[0]."\n".$data_pauk_white[1])) { }

fclose($openchatdb);

}














if($pauk_black>' ') {

$data_pauk_black[0]=$data_pauk_black[0]+$pauk_black;
$data_pauk_black[1]=$data_pauk_black[1]+$pauk_black_ball;


$xxd='./ochki/ochki/pauk_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_pauk_black[0]."\n".$data_pauk_black[1])) { }

fclose($openchatdb);

}





































if($legenda_white>' ') {

$data_legenda_white[0]=$data_legenda_white[0]+$legenda_white;
$data_legenda_white[1]=$data_legenda_white[1]+$legenda_white_ball;


$xxd='./ochki/ochki/legenda_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_legenda_white[0]."\n".$data_legenda_white[1])) { }

fclose($openchatdb);

}














if($legenda_black>' ') {

$data_legenda_black[0]=$data_legenda_black[0]+$legenda_black;
$data_legenda_black[1]=$data_legenda_black[1]+$legenda_black_ball;


$xxd='./ochki/ochki/legenda_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_legenda_black[0]."\n".$data_legenda_black[1])) { }

fclose($openchatdb);

}









if($otshelnik_white>' ') {

$data_otshelnik_white[0]=$data_otshelnik_white[0]+$otshelnik_white;
$data_otshelnik_white[1]=$data_otshelnik_white[1]+$otshelnik_white_ball;


$xxd='./ochki/ochki/otshelnik_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_otshelnik_white[0]."\n".$data_otshelnik_white[1])) { }

fclose($openchatdb);

}














if($otshelnik_black>' ') {

$data_otshelnik_black[0]=$data_otshelnik_black[0]+$otshelnik_black;
$data_otshelnik_black[1]=$data_otshelnik_black[1]+$otshelnik_black_ball;


$xxd='./ochki/ochki/otshelnik_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_otshelnik_black[0]."\n".$data_otshelnik_black[1])) { }

fclose($openchatdb);

}









if($egik_white>' ') {

$data_egik_white[0]=$data_egik_white[0]+$egik_white;
$data_egik_white[1]=$data_egik_white[1]+$egik_white_ball;


$xxd='./ochki/ochki/egik_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_egik_white[0]."\n".$data_egik_white[1])) { }

fclose($openchatdb);

}














if($egik_black>' ') {

$data_egik_black[0]=$data_egik_black[0]+$egik_black;
$data_egik_black[1]=$data_egik_black[1]+$egik_black_ball;


$xxd='./ochki/ochki/egik_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_egik_black[0]."\n".$data_egik_black[1])) { }

fclose($openchatdb);

}










if($krepost_white>' ') {

$data_krepost_white[0]=$data_krepost_white[0]+$krepost_white;
$data_krepost_white[1]=$data_krepost_white[1]+$krepost_white_ball;


$xxd='./ochki/ochki/krepost_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_krepost_white[0]."\n".$data_krepost_white[1])) { }

fclose($openchatdb);

}














if($krepost_black>' ') {

$data_krepost_black[0]=$data_krepost_black[0]+$krepost_black;
$data_krepost_black[1]=$data_krepost_black[1]+$krepost_black_ball;


$xxd='./ochki/ochki/krepost_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_krepost_black[0]."\n".$data_krepost_black[1])) { }

fclose($openchatdb);

}










if($surpris_white>' ') {

$data_surpris_white[0]=$data_surpris_white[0]+$surpris_white;
$data_surpris_white[1]=$data_surpris_white[1]+$surpris_white_ball;


$xxd='./ochki/ochki/surpris_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_surpris_white[0]."\n".$data_surpris_white[1])) { }

fclose($openchatdb);

}














if($surpris_black>' ') {

$data_surpris_black[0]=$data_surpris_black[0]+$surpris_black;
$data_surpris_black[1]=$data_surpris_black[1]+$surpris_black_ball;


$xxd='./ochki/ochki/surpris_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_surpris_black[0]."\n".$data_surpris_black[1])) { }

fclose($openchatdb);

}










if($serdce_white>' ') {

$data_serdce_white[0]=$data_serdce_white[0]+$serdce_white;
$data_serdce_white[1]=$data_serdce_white[1]+$serdce_white_ball;


$xxd='./ochki/ochki/serdce_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_serdce_white[0]."\n".$data_serdce_white[1])) { }

fclose($openchatdb);

}














if($serdce_black>' ') {

$data_serdce_black[0]=$data_serdce_black[0]+$serdce_black;
$data_serdce_black[1]=$data_serdce_black[1]+$serdce_black_ball;


$xxd='./ochki/ochki/serdce_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_serdce_black[0]."\n".$data_serdce_black[1])) { }

fclose($openchatdb);

}










if($zvezda_white>' ') {

$data_zvezda_white[0]=$data_zvezda_white[0]+$zvezda_white;
$data_zvezda_white[1]=$data_zvezda_white[1]+$zvezda_white_ball;


$xxd='./ochki/ochki/zvezda_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_zvezda_white[0]."\n".$data_zvezda_white[1])) { }

fclose($openchatdb);

}














if($zvezda_black>' ') {

$data_zvezda_black[0]=$data_zvezda_black[0]+$zvezda_black;
$data_zvezda_black[1]=$data_zvezda_black[1]+$zvezda_black_ball;


$xxd='./ochki/ochki/zvezda_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_zvezda_black[0]."\n".$data_zvezda_black[1])) { }

fclose($openchatdb);

}










if($geniy_white>' ') {

$data_geniy_white[0]=$data_geniy_white[0]+$geniy_white;
$data_geniy_white[1]=$data_geniy_white[1]+$geniy_white_ball;


$xxd='./ochki/ochki/geniy_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_geniy_white[0]."\n".$data_geniy_white[1])) { }

fclose($openchatdb);

}














if($geniy_black>' ') {

$data_geniy_black[0]=$data_geniy_black[0]+$geniy_black;
$data_geniy_black[1]=$data_geniy_black[1]+$geniy_black_ball;


$xxd='./ochki/ochki/geniy_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_geniy_black[0]."\n".$data_geniy_black[1])) { }

fclose($openchatdb);

}

















if($insider_white>' ') {

$data_insider_white[0]=$data_insider_white[0]+$insider_white;
$data_insider_white[1]=$data_insider_white[1]+$insider_white_ball;


$xxd='./ochki/ochki/insider_white.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_insider_white[0]."\n".$data_insider_white[1])) { }

fclose($openchatdb);

}














if($insider_black>' ') {

$data_insider_black[0]=$data_insider_black[0]+$insider_black;
$data_insider_black[1]=$data_insider_black[1]+$insider_black_ball;


$xxd='./ochki/ochki/insider_black.txt';

$openchatdb=fopen($xxd,"w");

if(fwrite($openchatdb,$data_insider_black[0]."\n".$data_insider_black[1])) { }

fclose($openchatdb);

}


















?>