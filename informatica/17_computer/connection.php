<?php //ACCESSO AL DATABASE
	define('DBNAME', '5ainf1920');
	define('DBHOST', 'localhost'); //il db è sualla stessa macchina del client
	define('DBUSER', 'root');
	define('DBPASS', '');
	//mysqli-> interfaccia ad oggetti 
	$con = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
	// -> puntatore
	if($con->connect_errno) { //connect_errno=0 -> if(falso)
		$codice=$con->connecr_errno;//codice errore
		$descErrore=$con->connect_error; //descizione errore
		die("Errore di connessione: $codice - $errore"); //invia tutto al client e uccide il processo in memoria
	}
	$con->set_charset("utf-8"); //Imposto il set id caratteri
?>