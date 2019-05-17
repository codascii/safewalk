<?php include 'register.t.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" type="text/css" href="css/header.css"/>
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
        <title>Safewalk - S'inscrire</title>
    </head>
    <body>
        <div id="top">
            <h1>Safewalk - S'inscrire</h1>
        </div>
        <div id="bottom">
            <form action="#" method="post">
                <input type="text" name="nom" id="nom" placeholder="Nom"/>
                <input type="text" name="prenom" id="prenom" placeholder="Prénom"/>
                <input type="date" name="ddn" id="ddn"/>
                <input type="text" name="ville" id="ville" placeholder="Ville"/>
                <input type="email" name="mail" id="mail" placeholder="Adresse email"/>
                <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
                <hr/>
                <button id="register" name="btr">S'INSCRIRE</button>
            </form>
        </div>
        <script type="text/javascript">
        </script>
    </body>
</html>