<?php
    session_start();

    if ( $_SESSION['userid']) {
        $id = $_GET["aufgabe"];

        require("conn.php");

        $befehl = "SELECT * FROM k_erinnerung WHERE id = $id";
        $ergebnis = $sql->query($befehl);
        $ergebnis = $ergebnis->fetch_assoc();
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
    <title>Erinnerungsliste</title>
    
  </head>
  <body>

        <div style="display: flex; justify-content: space-between; margin-bottom: 5%;">
            <h1>Meine Erinnerungen eintragen</h1>
            <button><a href='../logout.php'>Abmelden</a></button>
        </div>
      
      <br>

    <form action="aufgabe_bearbeiten_funktion.php?aufgabe=<?php echo $id; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <label for="erinnerung">Erinnerung</label>
        <input type="text" id="erinnerung" name="erinnerung" value="<?php echo $ergebnis["erinnerung"];?>">

        <label for="notiz">Notiz</label>
        <textarea id="notiz" name="notiz"><?php echo $ergebnis["body"];?></textarea>

        <label for="dringlichkeit">Dringlichkeit</label>
        <select id="dringlichkeit" name="dringlichkeit">
            <option value="1" <?php if( $ergebnis["dringlichkeit"] == 1) { echo "selected";} ?>>Niedrig</option>
            <option value="2" <?php if( $ergebnis["dringlichkeit"] == 2) { echo "selected";} ?>>Mittel</option>
            <option value="3" <?php if( $ergebnis["dringlichkeit"] == 3) { echo "selected";} ?>>Hoch</option>
        </select>

        <br>

        <button>Bestätigen</button>

    </form>
  </body>
</html>