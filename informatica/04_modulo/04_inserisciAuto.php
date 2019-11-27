<?php
	$cognome=$_REQUEST["cognome"];
	//$cognome=$_GET["cognome"];
	//$cognome=$_POST["cognome"];
	$nome=$_REQUEST["nome"];
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	$marca=$_REQUEST["marca"];
	$modello=$_REQUEST["modello"];
	//optional è una checkbox -> selezione multipla -> vettore php
	$optional=$_REQUEST["optional"];
	$debug=1;
	if($debug){
		echo "cognome:".$cognome."<br>";
		echo "nome:".$nome."<br>";
		echo "email:".$email."<br>";
		echo "password:".$password."<br>";
		echo "marca:".$marca."<br>";
		echo "modello:".$modello."<br>";
		echo "optional:";
		foreach($optional as $opt){
			echo $opt.",";	
		}
	}



?>

