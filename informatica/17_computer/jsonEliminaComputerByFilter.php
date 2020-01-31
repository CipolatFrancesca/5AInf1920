<?php //json dinamico
	require("./connection.php");
	
	//Filter - Begin
	if(isset($_REQUEST["id"])){
			$id=$_REQUEST["id"];
		} else{
			$id="";
		}
	
	//Filter - End

	$sql = "delete from computer	where id='$id'";
	$rs=$con->query($sql);
	if($rs==false){
		$json="{result:0 $con->error}";
	} else{
		$json="{result:1}";
		}
	echo $json; //stampa del json

?>