<?php
/**
 * Created by PhpStorm.
 * User: inf.cipolatf2709
 * Date: 25/10/2019
 * Time: 12:08
 */

// indirizzo da evocare -> http://localhost:80/5AInf/starting/3Request.php
// indirizzo da evocare con parametro -> http://localhost:80/5AInf/starting/3Request.php?key1=value1&key2=value2

//$REQUEST(""): vettore associativo creato in automatico quando carico la pagna
//vettore associativo:l'indice è una stringa
$value1 = $_REQUEST["key1"];
$value2 = $_REQUEST["key2"];

echo $value1."<br>";
echo $value2;

?>