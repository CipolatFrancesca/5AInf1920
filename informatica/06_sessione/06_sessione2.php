<?php
 session_start();
 echo "variabile: ".$_SESSION['variabile'];
 session_unset();
 session_destroy();
?>