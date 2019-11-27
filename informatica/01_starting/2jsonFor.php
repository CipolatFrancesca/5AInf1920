<?php
/**
 * Created by PhpStorm.
 * User: inf.cipolatf2709
 * Date: 25/10/2019
 * Time: 11:55
 */
    $json="[";
    for ($cntJson=1;$cntJson<12;$cntJson=$cntJson+2){
        if($cntJson>1)
            $json=$json.",";

        $json=$json.$cntJson;

    }
    $json=$json."]";
    echo $json;
?>