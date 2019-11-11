<?php
/**
 * Created by PhpStorm.
 * User: inf.cipolatf2709
 * Date: 30/10/2019
 * Time: 13:06
 */
    $biscottiScelti=$_REQUEST["biscotti"];
echo "marca di biscotti scelta: ".$biscottiScelti."<br>";
$nBiscotti=$_REQUEST["nBiscotti"];
echo "numero di biscotti disedirati: ".$nBiscotti."<br>";
$sceltaCioccolato=$_REQUEST["cioccolato"];
echo "Ti piacciono i biscotti al cioccolato? ";
if($sceltaCioccolato==1){
	echo " SI";
}
if($sceltaCioccolato==2){
	echo " NO";
}

?>