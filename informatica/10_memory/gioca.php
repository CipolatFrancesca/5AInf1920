<?php
    $_SESSION["selezionate"]=0;
    echo "accoppiate ".$_SESSION["r1"].",".$_SESSION["c1"]." con ".$_SESSION["r2"].",".$_SESSION["c2"]."<br>";
    $immagine1= $_SESSION["vettoreImmagini"][$_SESSION["r1"]*2+$_SESSION["c1"]];
    $immagine2= $_SESSION["vettoreImmagini"][$_SESSION["r2"]*2+$_SESSION["c2"]];
    if($immagine1==$immagine2){
        $_SESSION["trovate"]=$_SESSION["trovate"]+1;
        $_SESSION["coppia".$_SESSION["trovate"]] = "<br> <img src=\"".$immagine1."\" width=50 height=50> <img src=\"".$immagine2."\" width=50 height=50> <br>";
        echo $_SESSION["coppia".$_SESSION["trovate"]];
    }else{
        echo "<br> <img src=\"".$immagine1."\" width=50 height=50> <img src=\"".$immagine2."\" width=50 height=50> <br>";
    }
    if($_SESSION["trovate"]==4){
        echo "HAI TROVATO TUTTE LE COPPIE";
        echo "<table border=\"2\">  <tr> <td> <img src=\"".$_SESSION["vettoreImmagini"][0]."\"  width=50 height=50 /> </td> <td> <img src=\"".$_SESSION["vettoreImmagini"][1]."\" width=50 height=50 /> </td> </tr>
                                  <tr> <td> <img src=\"".$_SESSION["vettoreImmagini"][2]."\" width=50 height=50 /> </td> <td> <img src=\"".$_SESSION["vettoreImmagini"][3]."\" width=50 height=50 /> </td> </tr>
                                  <tr> <td> <img src=\"".$_SESSION["vettoreImmagini"][4]."\" width=50 height=50 /> </td> <td> <img src=\"".$_SESSION["vettoreImmagini"][5]."\" width=50 height=50 /> </td> </tr>
                                  <tr> <td> <img src=\"".$_SESSION["vettoreImmagini"][6]."\" width=50 height=50 /> </td> <td> <img src=\"".$_SESSION["vettoreImmagini"][7]."\" width=50 height=50 /> </td> </tr>
                </table>";
    }else{
        require 'memory.html';
    }
?>