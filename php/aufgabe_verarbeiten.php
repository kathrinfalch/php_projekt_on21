<?php
    session_start();

    $erinnerung = $_POST["erinnerung"];
    $notiz = $_POST["notiz"];
    $dringlichkeit = filter_input(INPUT_POST, "dringlichkeit", FILTER_VALIDATE_INT);

    $db_host =      "db";
    $db_user =      "kathrin";
    $db_passwort =  "kathrinphp";
    $db_name =      "erinnerungsliste_kathrinphp";

    $conn = new MySQLi($db_host, $db_user, $db_passwort, $db_name);

    if (mysqli_connect_errno()) {
        die("Verbindungsfehler: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO k_erinnerung (erinnerung, body, dringlichkeit)
            VALUES (?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssi", $erinnerung, $notiz, $dringlichkeit);

    mysqli_stmt_execute($stmt);

    echo "Eingabe erfolgreich gespeichert.";
    echo "</br> Eine neue <a href = '../php/aufgabe_anlegen.php'> Erinnerung anlegen </a>.";
    echo "</br> Klicke <a href = '../php/aufgaben_anzeigen.php'> hier </a> um dir deine Erinnerungsliste anzusehen.";
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