<?php
include_once 'model/database.php';

// 2ème méthode
function getProducts_sticker_fetchAll() : array {
    // On se connecte à la base de données et on récupère le retour de la fonction qui nous servira pour les interactions avec cette dernière
    $bdd = dbConnect();

    // Création de la requête
    $query = $bdd->query('SELECT * FROM `Products_sticker`');

    // On récupère les données grâce au fetchAll
    $datas = $query->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($datas);

    // On renvois les données pour affichage
    return $datas;
}

function getStickerByCategory(int $sticker_id) : array {
    // On se connecte à la base de données
    $bdd = dbConnect();

    // On crée une requête préparée en mettant un ? à l'endroit où est censé mettre une information
    $query = $bdd->prepare('SELECT * FROM `products_sticker` WHERE `sticker_id` = ?');

    // On lance l'exécution de la requête en mettant en paramètre les données attendues par la requête préparée dans l'ordre où elles apparaissent.
    $query->execute([$sticker_id]);

    // On récupère les données et on les envoie pour affichage.
    return $query->fetchAll(PDO::FETCH_ASSOC);
}