<?php
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/compte_administrateurModel.php");
// session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);



$users = getusers();
// var_dump($users);
if ($users === false) {
    // Gérer l'erreur
    die('Erreur lors de la récupération des utilisateurs');
} // Maintenant, vous pouvez utiliser $users


$objet_art = getobjet_art();
// var_dump($objet_art);
if ($objet_art === false) {
    // Gérer l'erreur
    die('Erreur lors de la récupération des objets d\'art');
}

$contact = getcontact();
// var_dump($contact);
if ($contact === false) {
    // Gérer l'erreur
    die('Erreur lors de la récupération des contacts');
}

// include 'compte_administrateur.php';
// require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/compte_administrateur.php");
