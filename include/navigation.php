<div id="navigation">
    <div id="box">
        <div id="navbar">
            <div id="navbar-content">
                <div id="icones">
                    <a href="contacts.php">
                        <i class="fas fa-address-book"></i>
                    </a>
                    <a href="map.php">
                        <i class="fas fa-map-marker-alt"></i>
                    </a>
                </div>
                <div id="signal">
                    <a href="signal.php?back= <?= substr($_SERVER['REQUEST_URI'], 1) ?>">SIGNAL</a>
                </div>
            </div>
            <div id="photo" class="">
                <img src="img/img-profil.png" alt="Photo de profil">
            </div>
        </div>
        <div id="informations">
            <h2>Lola</h2>
            <span id="ville">Lyon, Fr</span>
            <div id="description">
                <p>Je suis étudiante à Lyon.</p>
                <p>Je soufre de diabète depuis l'enfance.</p>
            </div>
            <div id="horizontal">
                <div id="age">
                    <p class="chiffre">20</p>
                    <p>ANS</p>
                </div>
                <div>
                    <p id="hville">Lyon</p>
                </div>
                <div id="safehelpers">
                    <p class="chiffre">6</p>
                    <p>safehelpers</p>
                </div>
            </div>
        </div>
    </div>
</div>