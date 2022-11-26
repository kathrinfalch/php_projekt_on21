<?php
    session_start();
    
    if ( $_SESSION['userid']) {
        $id = $_GET["aufgabe"];
        
        require("conn.php");
        
        $erinnerung = $_POST["erinnerung"];
        $notiz = $_POST["notiz"];
        $dringlichkeit = $_POST["dringlichkeit"];

        $befehl = "UPDATE k_erinnerung SET erinnerung='$erinnerung', body='$notiz', dringlichkeit='$dringlichkeit' WHERE id = $id";
        $ergebnis = $sql->prepare($befehl);
        $ergebnis = $ergebnis->execute();
        
        if ($ergebnis) {
            echo "Eingabe erfolgreich gespeichert.";
            echo "</br> Eine neue <a href = '../php/aufgabe_anlegen.php'> Erinnerung anlegen </a>.";
            echo "</br> Klicke <a href = '../php/aufgaben_anzeigen.php'> hier </a> um dir deine Erinnerungsliste anzusehen.";
        }
    }
    else {
        header ("location: /login.php");
            exit;
    } 
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet" 
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">    
    </head>
    <body>
    </body>
</html>