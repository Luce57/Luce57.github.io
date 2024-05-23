<?php
include($_SERVER['DOCUMENT_ROOT'] . "/model/dbb_connect.php");
function saveMessage($nom_prenom, $email, $message)
{
    global $bdd;
    $query = $bdd->prepare("INSERT INTO contact (nom_prenom, email, message) VALUES (:nom_prenom, :email, :message)");
    $query->bindParam(":nom_prenom", $nom_prenom);
    $query->bindParam(":email", $email);
    $query->bindParam(":message", $message);
    $result = $query->execute();
    $query->closeCursor();
    $query = NULL;
    $bdd = NULL;
    return $result;
}
