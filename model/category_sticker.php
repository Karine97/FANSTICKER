<?php
    include 'model/database.php';

    function getSticker($id) {
        // On se connecte à la base de données
        $db = dbConnect();        

        // On crée une requête préparée
        $query = $db->prepare('SELECT * FROM `sticker` WHERE `sticker_id` = :sticker_id');

        // On lance l'exécution de la requête
        $query->execute(['sticker_id' => $id]);

        // On envoie les informations pour affichage
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }