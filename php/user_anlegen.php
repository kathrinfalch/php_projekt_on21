<?php
    session_start();
    
    require("conn.php");

    $new_username   = "user";
    $new_password   = "passwort";
    $new_email      = "test@test.de";

    $new_password   = password_hash($new_password, PASSWORD_DEFAULT);

    $abfrage = "INSERT INTO k_user (username, passwort, email) 
                VALUES ('" .$new_username. "', '" .$new_password. "', '" .$new_email. "')";


    if($sql->query($abfrage) === TRUE){
        echo "Benutzer angelegt.";
    }
    else {
        echo "Anlegen fehlgeschlagen.";
    }

   


?>