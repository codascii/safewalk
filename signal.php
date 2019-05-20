<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/safewalk.css"/>
        <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
        <title>Signal - Safewalk</title>
    </head>
    <body>
        <div id="signal">
            <div id="retour" class="animated zoomIn delay-600ms">
                <p>
                    <a href="<?= $_GET['back'] ?>"><i class="fas fa-angle-left"></i></a>
                </p>
            </div>
            <div id="retard-moins-30-min" class="animated fadeInRight delay-100ms faster">
                <p>Retard < 30min</p>
            </div>
            <div id="retard-plus-30-min" class="animated fadeInRight delay-200ms faster"><p>Retard > 30min</p></div>
            <div id="agression" class="animated fadeInRight delay-300ms faster"><p>Agression subie</p></div>
            <div id="urgence-medicale" class="animated fadeInRight delay-400ms faster"><p>Urgence médicale</p></div>
            <div id="autre" class="animated fadeInRight delay-500ms faster"><p>Autre</p></div>
        </div>
        <script type="text/javascript" src="js/std.js"></script>
    </body>
</html>