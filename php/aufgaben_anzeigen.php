<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet" 
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">    
    </head>
    <body style="margin: 50px;">

        <div style="display: flex; justify-content: space-between; margin-bottom: 5%;">
            <h1>Alle Erinnerungen</h1>
            <button><a href='../logout.php'>Abmelden</a></button>
        </div>

        <button><a href='../php/aufgabe_anlegen.php'>Neue Erinnerung</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th>Nummer</th>
                    <th>Erinnerung</th>
                    <th>Notiz</th>
                    <th>Dringlichkeit</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $db_host =      "db";
                $db_user =      "kathrin";
                $db_passwort =  "kathrinphp";
                $db_name =      "erinnerungsliste_kathrinphp";

                $conn = new MySQLi($db_host, $db_user, $db_passwort, $db_name);

                if ($conn->connect_error) {
                    die ("Verbindung fehlgeschlagen: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM k_erinnerung";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Ungültig: " . $conn->error);
                }

                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row ["id"] . "</td>
                            <td>" . $row ["erinnerung"] . "</td>
                            <td>" . $row ["body"] . "</td>
                            <td>" . $row ["dringlichkeit"] . "</td>
                            <td>
                                <a href='/php/aufgabe_bearbeiten.php?aufgabe=" . $row["id"] . "'>Bearbeiten</a> </br>
                                <a class='erledigt-button' href='/php/aufgabe_löschen.php?aufgabe=" . $row["id"] . "''>Erledigt</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="/script.js"></script>
    </body>
</html>