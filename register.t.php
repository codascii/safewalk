<?php

if(isset($_POST['btr'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $ddn = htmlspecialchars($_POST['ddn']);
    $ville = htmlspecialchars($_POST['ville']);
    $mail = htmlspecialchars($_POST['mail']);
    $pass = htmlspecialchars($_POST['pass']);
}