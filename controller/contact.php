<?php
include_once 'controller/signup.php';

// On initialise les variables pour éviter les problèmes de variables manquantes à l'affichage
$firstname = null;
$name = null;

// On vérifie que le formulaire a été soumis avec la fonction count
if(count($_POST) > 0) {
    // On  met les données du formulaire dans les variables
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];

    // On ajoute les même données en session pour permettre leur utilisation dans les autres pages du site
    $_SESSION['firstname'] = $firstname;
    $_SESSION['name'] = $name;
}

include 'view/contact.php';