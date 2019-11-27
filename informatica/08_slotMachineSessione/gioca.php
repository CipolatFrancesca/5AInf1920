<?php
/*
TESTO ESERCIZIO:
invocata azzera il punteggio
l'altra genera (slot machine) tre numeri casuali (r g b) da (1.2.3)
se rgb sono uguali, il punteggio viene incrementato di 3
se due sono = il punteggio viene incrementato di 2
il numero di lanci è limitato fino a quando non si ottiene nessun punto per 3 volte consecutive (3 volte 0)

iniziaPartita.php -> azzera il punteggio (chiamata una volta)

gioca.php (chiamata n volte) -> finchè punteggio != 0
btn/href gioca 
$vet["r","g","b"];
$ind=random()*3;

$_session["punteggio"];
$_session["nGiocate"];
$_session["nPartiteSenzaPunti"];
*/

/*
<img src="img/r.png" width="400" hegth="300"   />
				|
			  r.png
		      g.png
			  b.png

*/


//la sessione scade dopo 30 minuti
	session_start();
	
	$frutta=["R","G","B"];
	$estrazione=[];
	$valEstratti=[];
	$esistePunteggioUltime3Mani=0;
	
	if(isset($_SESSION["nPartiteSenzaPunti"])){
		$esistePunteggioUltime3Mani=$_SESSION["nPartiteSenzaPunti"];
	} else{
		$esistePunteggioUltime3Mani=0;
	}
	
	for($cntEstrazioni=0;$cntEstrazioni<3;$cntEstrazioni++){
		/*
		$valEstratti[$cntEstrazioni]=$frutta[rand(0,2)];
		*/
		//può essere 0,1,2
		$estrazione[$cntEstrazioni]=rand(0,2);
		//viene fuori r,g,b
		$valEstratti[$cntEstrazioni]=$frutta[$estrazione[$cntEstrazioni]];
	}
	
	$risultato=$valEstratti[0].",".$valEstratti[1].",".$valEstratti[2];
	$newPoint=calcolaPuntiTurno($estrazione);
	
	if($newPoint!=0){
		$_SESSION["nPartiteSenzaPunti"]=0;
	} else{
		$_SESSION["nPartiteSenzaPunti"]++;
	}
	
	if($_SESSION["nPartiteSenzaPunti"]==3){
		echo "game over !!<br>";
	} else{
		//window.locazion='gioca.php'; window.load(); ->2 commands javascript
		echo "<input type=\"button\" name=\"bInvia\" value=\"gioca\" onclick=\"window.locazion='gioca.php'; window.load();\"/>";
		/* 
		COME FARE UN BOTTONE DI INVIO
		SOLUZIONE 1
		echo "<input type=\"button\" name=\"bInvia\" value=\"gioca\" onclick=\"window.locazion='gioca.php'; window.load();\"/>";
		SOLUZIONE 2
		<form action="gioca.php">
			<input type="button" vlaue="invia" />
		</form>
		*/
	}
		
	//verifico se esiste
	if(isset($_SESSION["punteggio"])){
		$_SESSION["punteggio"]=$_SESSION["punteggio"]+$newPoint;
	} else{
		$_SESSION["punteggio"]=$newPoint;
	}
	
	if(isset($_SESSION["nGiocate"])){
		$_SESSION["nGiocate"]=$_SESSION["nGiocate"]+1;
	} else{
		$_SESSION["nGiocate"]=1;
	}
	
	echo $risultato;
	echo " punteggio:".$_SESSION["punteggio"];
	
	
	
	
	function calcolaPuntiTurno($estrazione){
		$handlePoint=0;
		//verifico coppie
		if($estrazione[0]==$estrazione[1] || $estrazione[0]==$estrazione[2] || $estrazione[1]==$estrazione[2]){
			$handlePoint=$handlePoint+2;
		}
		//verifico tris
		if($estrazione[0]==$estrazione[1] || $estrazione[1]==$estrazione[2]){
			$handlePoint=$handlePoint+3;
		}
		return $handlePoint;
	}

 session_unset();
 session_destroy();
?>