<?php //json dinamico
	require("./connection.php");
	
	//Filter - Begin
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
	if(isset($_REQUEST["marcaCase"])){
		$marcaCase=$_REQUEST["marcaCase"];
	} else{
		$marcaCase="";
	}
	//Filter - End

	$sql = "update persona set marcaTastiera='$marcaTastiera',marcaVideo='$marcaVideo',marcaCase='$marcaCase'  where id='$id'";
	$rs=$con->query($sql);
	if($rs==false){
		die("sql error".$con->error."<br/>".$sql);
		$json="{result:0}";
	} else{
		$json="{result:1}";
		}
	echo $json; //stampa del json

?>