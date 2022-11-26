<?php
    session_start();
    
    if ( $_SESSION['userid']) {
        $id = $_GET["aufgabe"];
        
        require("conn.php");

        $befehl = "DELETE FROM k_erinnerung WHERE id=$id";
        $ergebnis = $sql->prepare($befehl);
        $ergebnis = $ergebnis->execute();
        
        if ($ergebnis) {
            echo "Aufgabe erledigt.";
        }
    }
    else {
        echo "Bitte einloggen.";
    } 
?>