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
        <title>Login - Erinnerungsliste </title>
    </head>
    <body>
        <form action="php/login.php" method="post">
            <input name = "username" id = "username" type = "text" placeholder = "Benutzername" />
            <input name = "password" id = "password" type = "password" placeholder = "********" />

            <input name= "submit" id = "sumit" type = "submit" value = "Einloggen" />
        </form>
    </body>
</html>
