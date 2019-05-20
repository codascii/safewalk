<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/safewalk.css"/>
        <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
        <title>Signal - Safewalk</title>
    </head>
    <body>
        <div id="signal">
            <div id="retour">
                <p>
                    <a href="<?= $_GET['back'] ?>"><i class="fas fa-angle-left"></i></a>
                </p>
            </div>
            <div id="retard-moins-30-min">
                <p>Retard < 30min</p>
            </div>
            <div id="retard-plus-30-min"><p>Retard > 30min</p></div>
            <div id="agression"><p>Agression subie</p></div>
            <div id="urgence-medicale"><p>Urgence médicale</p></div>
            <div id="autre"><p>Autre</p></div>
        </div>
        <script type="text/javascript" src="js/std.js"></script>
    </body>
</html>