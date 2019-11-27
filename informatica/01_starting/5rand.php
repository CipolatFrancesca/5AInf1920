<?php
/**
 * Created by PhpStorm.
 * User: inf.cipolatf2709
 * Date: 25/10/2019
 * Time: 12:07
 */
$n = $_REQUEST["n"];
$nMin = $_REQUEST["nMin"];
$nMax = $_REQUEST["nMax"];

$jsonPari="[";
$jsonDisari="[";

for ($cnt=1;$cnt<$n;$cnt=$cnt+1){
   // if($cnt>1){
    $nRandom= rand($nMin,$nMax);
    if($nRandom%2){
        //pari
        $jsonPari=$nRandom.",";
        $jsonPari=$jsonPari.$cnt;
    } else {
        //dispari
        $jsonDispari = $nRandom . ",";
        $jsonDispari = $jsonDispari . $cnt;
       // }
    }

}

$jsonPari=$jsonPari."]";
echo $jsonPari;
$jsonDispari=$jsonDispari."]";
echo $jsonDispari;
?>