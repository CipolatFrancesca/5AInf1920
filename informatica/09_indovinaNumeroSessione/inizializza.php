<?php
	session_start();
    $_SESSION["nGenerato"]=rand(0,10);
    $_SESSION["tentativi"]=0;
    $_SESSION["vittoria"]=0;
    echo "inizializzazione e inizio del gioco";
?>