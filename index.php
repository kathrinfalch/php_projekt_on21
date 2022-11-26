<?php 
    session_start();

    if(!isset($_SESSION['userid'])) {
        echo "nicht eingeloggt.";
    }
    else{
        echo "eingeloggt";

        $userid = $_SESSION['userid'];
        echo "</br> <h1> Hallo User: </h1>". $userid;
        echo "</br> Jetzt eine neue <a href = '../php/aufgabe_anlegen.php'> Erinnerung anlegen </a>.";
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