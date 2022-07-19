<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/themes.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>THÈME BAPTEME</title>
    <link rel='stylesheet' href='css/style.css'>
    <link href="css/fonts/Raleway-Regular.ttf" rel="stylesheet">
   <!-- <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet"> -->

    <style>
    body {
        background-color: #eed6ca;
    }
</style>

</head>
<body class="filigrane" id="background">
    <?php
        include_once "includes/header.php";
    ?>
    <main>   
<section>  

<h2 class="theme-h2">Baptême</h2>

<div class="row">
    <article class="image"> 
        <figure>       
            <div>  
                <img src="images/Stickers_Bapteme/b1.png" alt="baptême 1">
            </div>
            <figcaption>
                <h4 class="theme-h4">Stickers Petits pieds</h4>
                <p>Lot de 6 : 4,99€<br>Taille unique : L 4 cm, H 4 cm</p>
                <label for="panier" class="label-input">Ajouter au panier</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Valider</button></p>
            </figcaption>
        </figure>
    </article>
    
    <article class="image"> 
        <figure>
            <div>    
                <img src="images/Stickers_Bapteme/b2.png" alt="baptême 2">
            </div>
            <figcaption>
                <h4 class="theme-h4">Stickers Ma lumière</h4>
                <p>Lot de 6 : 4,99€<br>Taille unique : L 4 cm, H 4 cm</p>
                <label for="panier" class="label-input">Ajouter au panier</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Valider</button>
            </figcaption>
        </figure>
    </article>

    <article class="image"> 
        <figure>
            <div>
                <img src="images/Stickers_Bapteme/b3.png" alt="baptême 3">
            </div>
            <figcaption>
            <h4 class="theme-h4">Stickers Bébé</h4>
                 <p>Lot de 6 : 4,99€<br>Taille unique : L 4 cm, H 4 cm</p>
                <label for="panier" class="label-input">Ajouter au panier</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Valider</button>
            </figcaption>
        </figure>
    </article>

    <article class="image"> 
        <figure>
            <div>
                <img src="images/Stickers_Bapteme/b4.png" alt="baptême 4">
            </div>     
            <figcaption>
                <h4 class="theme-h4">Stickers Mon petit ange</h4>
                <p>Lot de 6 : 4,99€<br>Taille unique : L 4 cm, H 4 cm</p>
                <label for="panier" class="label-input">Ajouter au panier</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Valider</button>
            </figcaption>
        </figure>
    </article>

    <article> 
        <figure>
            <div class="image">
            <img src="images/Stickers_Bapteme/b5.png" alt="baptême 5">
            </div>
            <figcaption>
                <h4 class="theme-h4">Stickers Garçon</h4>
                <p>Lot de 6 : 4,99€<br>Taille unique : L 5 cm, H 3 cm</p>
                <label for="panier" class="label-input">Ajouter au panier</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Valider</button>
            </figcaption>
        </figure>
    </article>

    <article class="image"> 
        <figure>
            <div>
            <img src="images/Stickers_Bapteme/b6.png" alt="baptême 6">
            </div>
        <figcaption>
            <h4 class="theme-h4">Stickers Mon petit arc-en-ciel</h4>
                <p>Lot de 6 : 4,99€<br>Taille unique : L 4 cm, H 4 cm</p>
                <label for="panier" class="label-input">Ajouter au panier</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Valider</button>
            </figcaption>
        </figure>
    </article>
</div>
</section>

<script type="text/javascript" src="css/script.js"></script>
</main> 

    <?php
        include_once "includes/footer.php";
    ?>
</body>

</html>