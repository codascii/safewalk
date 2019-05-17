<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/sidemenubar.css"/>
        <link rel="stylesheet" type="text/css" href="css/profil.css">
        <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
        <title>Profil</title>
    </head>
    <body>
        <header>
            <div id="menu"><i class="fas fa-bars" style="font-size: 1.3em;"></i></div>
            <div><p style="font-weight: bold;margin:0;">PROFIL</p></div>
            <div><i class="fas fa-ellipsis-v" style="font-size: 1.3em;"></i></div>
        </header>
        <div id="core">
            <div id="photo">
                <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_640.png" alt="Photo de profil">
            </div>
            <div>
                <h2>Lola</h2>
                <span>Lyon, Fr</span>
            </div>
            <div style="margin: 40px 0px;">
                <p>Je suis étudiante à Lyon.</p>
                <p>Je soufre de diabète depuis l'enfance.</p>
            </div>
            <div id="horizontal">
                <div id="age">
                    <p class="chiffre">20</p>
                    <p>ANS</p>
                </div>
                <div>
                    <p id="ville">Lyon</p>
                </div>
                <div id="safehelpers">
                    <p class="chiffre">6</p>
                    <p>safehelpers</p>
                </div>
            </div>
            <div>
                <button>SOS</button>
            </div>
        </div>
                
        <?php include 'include/navigation.php' ?>
        <script type="text/javascript" src="js/contact.js"></script>
        <script type="text/javascript" src="js/std.js"></script>
    </body>
</html>