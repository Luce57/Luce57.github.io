<?php
include($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/dbb_connect.php");

if (!function_exists('getusers')) {
    function getusers()
    {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM users");
        if (!$query->execute()) {
            var_dump($query->errorInfo());
            die();
        }
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result !== false ? $result : [];
    }
}

if (!function_exists('getobjet_art')) {
    function getobjet_art()
    {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM objet_art");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result !== false ? $result : [];
    }
}

if (!function_exists('getcontact')) {
    function getcontact()
    {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM contact");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result !== false ? $result : [];
    }
}
