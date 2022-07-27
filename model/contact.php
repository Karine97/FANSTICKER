<?php
include_once 'model/database.php';

function insertMessage(array $message) : bool {
    $db = dbConnect();

    // On prépare la requête d'ajout d'un enregristement en base de données d'un nouvel utilisateur
    $query = $db->prepare('INSERT INTO `message` (`firstname`, `name`, `email`, `content`) VALUES (:firstname, :name, :email, :content)');

    // On hache le mot de passe
   

    // On exécute la requête
    $result = $query->execute($message);

    return $result;
}