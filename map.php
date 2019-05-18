<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="stylesheet" type="text/css" href="css/safewalk.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
        <title>Carte - Safewalk</title>
    </head>
    <body>        
        <div id="blocksmap">
            <div class="innerBlock">
                <ul>
                    <li><input type="text" name="depart" id="depart" placeholder="Départ" /></li>
                    <li><input type="text" name="arrivee" id="arrivee" placeholder="Arrivée"/></li>
                </ul>
                <div id="arrows">
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
            <div class="innerBlock">
                <div class="info">
                    <h5>Marge de temps</h5>
                    <span>xxx</span>
                </div>
                <div class="info">
                    <h5>Safehelper</h5>
                    <span>John Doe</span>
                </div>
            </div>
        </div>
        <div id="map"></div>
        <?php include 'include/navigation.php' ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
        <script type="text/javascript" src="js/std.js"></script>
    </body>
</html>