<?php
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/oeuvre_pageModel.php");
$db = new PDO('mysql:host=localhost;dbname=galerie_art;charset=utf8', 'username', 'password');
$artModel = new ArtModel($db);
$artObjects = $artModel->getArtObjects();
include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/oeuvre_page.php";
