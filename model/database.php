<?php
    function dbConnect() {
        // try permet de demander à php "d'essayer" d'exécuter le code (le code n'est pas simulé, il est réellement exécuter)
        // catch permet d'exécuter un code précis si une erreur survient, cela permet de mieux gérer le comportement du code en cas de problème
        try {
            $bdd = new PDO(
                'mysql:host=localhost;dbname=fansticker;charset=utf8',
                'root',
                'root'
            );
        } catch(PDOException $e) {
            // die arrête l'exécution du code et affiche ce qui lui est envoyé en paramètre
            // $e est un élément qui contient des données et un ensemble de fonctions qui concerne l'erreur (ou exception) qui est survenue
            // getMessage() permet d'obtenir le message décrivant l'erreur
            die($e->getMessage());
        }

        return $bdd;
    }