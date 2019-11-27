<?php
/**
 * Created by PhpStorm.
 * User: inf.cipolatf2709
 * Date: 25/10/2019
 * Time: 12:07
 */
$value1 = $_REQUEST["key1"];
$value2 = $_REQUEST["key2"];

$json="[";

for($i=$value1; $i<$value2;$i=$i+2){
    if($i>$value1)
        $json=$json.",";

    $json=$json.$i;

}
$json=$json."]";
echo $json;
?>