<?php
// Active l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclut le modèle
require($_SERVER['DOCUMENT_ROOT'] . "/model/_.php");

// Récupère les images
$images = getImages();

// Affiche le résultat
var_dump($images);
