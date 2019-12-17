<?php
	//costanti
	define('DBHOST','localhost');
	define('DBUSER','root');
	define('DBPASS','');
	define('DBNAME','5ainf1920');

	$conn=new $mysql(DBHOST,DBUSER,DBPASS,DBNAME);
	//-> specifica il campo 
	if($conn->connect_errno){
		//0=false:ko
		$codice=$conn->connect_errno;
		$errore=$conn->connect_errno;
		die("Errore di connessione: $codice - $errore");
	}
	//charset:associazione tabella simboli(codifica utf-8)
	$conn->set_charset("utf-8");



?>