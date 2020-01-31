<?php //json dinamico
	require("./connection.php");
	
	//Filter - Begin
	
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
		if(isset($_REQUEST["marcaCase"])){
		$marcaCase=$_REQUEST["marcaCase"];
	} else{
		$marcaCase="";
	}
	//Filter - End
	//applico i filtri alla query
	$sql = "insert into computer(marcaTastiera,marcaVideo,marcaCase) values('$marcaTastiera','$marcaVideo','$marcaCase')";
	//isempty($id)
	$rs=$con->query($sql);
	if($rs==false){
		die("sql error".$con->error."<br/>".$sql);
		$json="{result:0}";
	} else{
		$json="{result:1}";
		}
	echo $json; //stampa del json

?>