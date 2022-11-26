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
    <title>Erinnerungsliste</title>
    
  </head>
  <body>

        <div style="display: flex; justify-content: space-between; margin-bottom: 5%;">
            <h1>Meine Erinnerungen eintragen</h1>
            <button><a href='../logout.php'>Abmelden</a></button>
        </div>
      
      <br>

    <form action="aufgabe_verarbeiten.php" method="post">
        <label for="erinnerung">Erinnerung</label>
        <input type="text" id="erinnerung" name="erinnerung">

        <label for="notiz">Notiz</label>
        <textarea id="notiz" name="notiz"></textarea>

        <label for="dringlichkeit">Dringlichkeit</label>
        <select id="dringlichkeit" name="dringlichkeit">
            <option value="1">Niedrig</option>
            <option value="2" selected>Mittel</option>
            <option value="3">Hoch</option>
        </select>

        <br>

        <button>Bestätigen</button>

    </form>
  </body>
</html>