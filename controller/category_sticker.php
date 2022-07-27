<?php
include_once 'model/category_sticker.php';
include_once 'model/product.php';
include_once 'controller/signup.php';

// var_dump($_GET);

$category_id = $_GET['id'];

$datas = getProductsBySticker($sticker_id);

$category = getSticker($sticker_id)[0];

// var_dump($sticker);

include 'view/stickers_anniversaire.php';
include 'view/stickers_baptheme.php';
include 'view/stickers_naissance.php';
