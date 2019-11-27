<?php
/*
TESTO ESERCIZIO:
indovina un numero casuale da 0 a 10
introdurre u numero in un campo di testo: dire se è maggiore o minore del numero casuale estratto
max di tentativi 4 oppure indovinato
*//*
	session_start();
	
	$fine=false;
	$tentativi=$_SESSION["primoTentativo"];
	while($fine!=true && $tentativi!=4){
	$nIndovinare=rand(0,10);
	$num=$_REQUEST["nInserito"];
	echo "numero inserito:".$num;
	
	if($num==$nIndovinare){
		echo "Hai indovinato!"
		$tentativi++;
		$fine=true;
	} else{
		echo "Ritenta..."
		$tentativi++;
	}
	echo "fine del gioco";
	}
	
	
*/
	
    session_start();
    $_SESSION["tentativi"] = $_SESSION["tentativi"] +1;
    $nInserito = $_REQUEST["nInserito"];
	if($_SESSION["vittoria"]=0 && $_SESSION["tentativi"]>=4){
        echo "Hai usato tutti i tentativi disponibili... Hai perso... Il numero da indovinare era:". $_SESSION["nGenerato"];
    }else{
        if($_SESSION["vittoria"]==0){
			echo "ritenta...";
            require 'grafica.html';
        }else{
            echo "Fine del gioco";
        }
    }
    if($_SESSION["nGenerato"]==$nInserito){
        echo "Hai vinto! Il numero era: ". $_SESSION["nGenerato"]. "<br>";
        $_SESSION["vittoria"]=1;
    }
    if($_SESSION["nGenerato"]>$nInserito){
        echo "Hai sbagliato... Il numero è maggiore di ". $nInserito. "<br>";
    }
    if($_SESSION["nGenerato"]<$nInserito){
        echo "Hai sbagliato... Il numero è minore di ". $nInserito. "<br>";
    }
	
	session_unset();
	session_destroy();
	
?>