<?php
include_once 'model/user.php';

// On vérifie si on est sur une soumission de formulaire et si le formulaire est bien celui d'inscripiton
if(count($_POST) && isset($_POST['action']) && $_POST['action'] === 'signup') {
    unset($_POST['action']);

    // var_dump($result);
    $result = insertMessage($_POST);
    // On redirige l'utlisateur vers la page d'accueil (attention, l'url après Location est celui de votre système) si tout va bien ou un message d'erreur en cas de problème lors de l'enregistrement en base de données.
    if($result !== false) {
        header('Location: contact.php');
    } else {
        $errorMessage = 'Echec de l\'envoi du message!';
    }
}