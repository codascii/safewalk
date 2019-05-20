<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/safewalk.css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <title>Profil de John Doe</title>
    </head>
    <body>
        <p style="position:absolute;top:15px;left:15px;margin:0px;z-index:99999999;font-size:2em;">
            <a href="contacts.php" style="color: #4672E8;">
                <i class="fas fa-arrow-left"></i>
            </a>
        </p>
        <div id="map"></div>
        <div id="core">
            <div style="display:flex;justify-content:center;">
                <div id="img-rounded">
                    <img src="img/img-profil.png" alt="Photo de profil">
                </div>
            </div>
            <div style="margin-top: 90px;">                
                <h3 style="margin:0px;">John Doe</h3>
                <p style="margin-top: 5px;">Lyon</p>
            </div>
            <div id="blocks">
                <div class="block">
                    <i class="fas fa-phone"></i>
                    <span class="label">Mobile</span>
                    <span class="value">06 06 12 34 56</span>
                </div>
                <div class="block">
                    <i class="fas fa-envelope"></i>
                    <span class="label">Email</span>
                    <span class="value">john.doe@mail.com</span>
                </div>
                <div class="block">
                    <i class="fas fa-envelope"></i>
                    <span class="label">Message</span>
                    <span class="value">06 06 12 34 56</span>
                </div>
                <div class="block">
                    <i class="fas fa-spa"></i>
                    <span class="label">Code safewalk</span>
                    <span class="value">Raz19!</span>
                </div>
            </div>
        </div>        
        <script type="text/javascript" src="js/contact.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/std.js"></script>
    </body>
</html>