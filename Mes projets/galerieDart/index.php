<?php
header('Location: /view/galerieArt.php');
require_once 'controllers/SearchController.php';

$bdd = new PDO('mysql:host=localhost;dbname=your_database;charset=utf8', 'username', 'password');

$controller = new SearchController($bdd);

if (isset($_GET['q'])) {
    $controller->search();
}
