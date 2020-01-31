<?php //json dinamico
	require("./connection.php");
	
	//Filter - Begin
	$API_ID="ciao";
	$API_ID_CRIPTO="ekcq"; //chiave = 2 cifrario di cesare
	$accesso=false;
	if(isset($_REQUEST["token"])){
		$token=$_REQUEST["token"];
		$token=;
	} else{
		$token="";
	}
	if($token==$API_ID){
		$accesso=true;
	}
	if($accesso){
		if(isset($_REQUEST["id"])){
			$id=$_REQUEST["id"];
		} else{
			$id="";
		}
		
		if(isset($_REQUEST["marcaTastiera"])){
			$marcaTastiera=$_REQUEST["marcaTastiera"];
		} else{
			$marcaTastiera="";
		}
		
		if(isset($_REQUEST["marcaVideo"])){
			$marcaVideo=$_REQUEST["marcaVideo"];
		} else{
			$marcaVideo="";
		}
			if(isset($_REQUEST["cognome"])){
			$cognome=$_REQUEST["cognome"];
		} else{
			$cognome="";
		}
		if(isset($_REQUEST["order"])){
			$order=$_REQUEST["order"];
		} else{
			$order=false;
		}
		
		//Filter - End
		//applico i filtri alla query
		$sql = "select * from computer ";
		//isempty($id)
		//http://localhost/15_persona/php/jsonElencoPersonaByFilter.php?id=2
		if($id!=""){//concateno (non posso usare la isset perche gia dichiarata)
		$sql .= "where id=$id ";
		}
		if($nome!=""){
		$sql .= " where marcaTastiera= $marcaTastiera ";
		}
		if($marcaVideo!=""){
		$sql .= "where marcaVideo= $marcaVideo ";
		}
		if($marcaCase!=""){
		$sql .= "where marcaCase= $marcaCase ";
		}
		if($order){
		$sql .= " order by $order ";
		}
		
		$rs=$con->query($sql);
		if($rs==false){
			die("sql error".$con->error."<br/>".$sql);
		}
		$vet=array();
		//fetch_assoc() -> $record["id"],$record["cognome"],$record["nome"]
		while($record=$rs->fetch_assoc()){
			array_push($vet,$record);//gestisce un vettore
		}
		//funzione che traduce un vettore associativo in un json semantico
		//crea un json con il contenuto del vettore
		$json=json_encode($vet);
		echo $json; //stampa del json
	} else{
		die("403 - forbidden");
	}
?>