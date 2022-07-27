<?php
    include_once 'model/product.php';
    include_once 'controller/signup.php';

    // On récupère toute la liste de produits dans $datas
    $datas = getProducts_sticker_fetchAll();

    //// Si on veut filtrer les résultats pour n'en afficher qu'une partie ////
    // On prépare une variable qui contiendra la liste des produits dont le prix est inférieur
    $filteredDatas = [];

    // On parcours la liste complète et on vérifie que le prix est inférieur à 30, si oui on l'ajoute à la variable qui doit contenir la liste de produits filtrés.
    foreach ($datas as $data) {
        if($data['price'] < 30) {
            $filteredDatas[] = $data;
        }
    }

    include 'view/products_sticker.php';