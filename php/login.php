<?php
    session_start();
    
    require("conn.php");

    $login_user         = $_POST["username"];
    $login_password     = $_POST["password"];

    $abfrage = "SELECT * FROM k_user WHERE username = '" . $login_user . "' ";
    $result = $sql->query($abfrage);
    $user = $result->fetch_assoc();

    if($user){
        if(password_verify($login_password, $user['passwort'])){
            $_SESSION['userid'] = $user['id'];
            header('Location: ../php/aufgabe_anlegen.php');
            exit();
        }
        else{
            echo "Passwort stimmt nicht.
                </br> Jetzt <a href = '../login.php'> nochmal probieren </a>.";
        }
    }
    else{
        echo " </br> User nicht gefunden";
        echo "</br> Jetzt <a href = '../login.php'> nochmal probieren </a>.";
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