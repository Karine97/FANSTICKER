<?php
include_once 'model/database.php';

function insertUser(array $user) : bool {
    $db = dbConnect();

    // On prépare la requête d'ajout d'un enregristement en base de données d'un nouvel utilisateur
    $query = $db->prepare('INSERT INTO `user` (`firstname`, `name`, `email`, `password`) VALUES (:firstname, :name, :email, :password)');

    // On hache le mot de passe
    $user['password'] = password_hash($user['password'], PASSWORD_BCRYPT);

    // On exécute la requête
    $result = $query->execute($user);

    return $result;
}