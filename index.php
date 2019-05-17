<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/safewalk.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
        <title>Safewalk</title>
    </head>
    <body>
        <div id="logo">
            <img src="img/logo.png" alt="Logo de Safewalk"/>
            <h1>Safewalk</h1>
        </div>
        <div id="bottom">
            <form action="profil.php">
                <input type="email" name="mail" id="mail" placeholder="Adresse email"/>
                <input type="password" name="pass" id="pass" placeholder="Mot de passe"/>
                <hr/>
                <button id="login">SE CONNECTER</button>
            </form>
            <button id="facebook-login">
                <i class="fab fa-facebook-f"></i>
                <span>SE CONNECTER AVEC FACEBOOK</span>
            </button>
        </div>
        <script type="text/javascript" src="js/std.js"></script>  
        <?php include 'include/navigation.php' ?>
    </body>
</html>