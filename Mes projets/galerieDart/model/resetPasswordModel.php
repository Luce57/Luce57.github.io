<?php
// page connexion oublie de password
include($_SERVER['DOCUMENT_ROOT'] . "/model/dbb_connect.php");
function resetPassword($login, $new_password, $email)
{
    global $bdd;
    $sqlUtilisateur = "SELECT * FROM users WHERE user_name = :login AND email = :email";
    $stmtUtilisateur = $bdd->prepare($sqlUtilisateur);
    $stmtUtilisateur->bindParam(':login', $login);
    $stmtUtilisateur->bindParam(':email', $email);
    try {
        $stmtUtilisateur->execute();
    } catch (PDOException $e) {
        $message = "Erreur de connexion";
    }
    $user = $stmtUtilisateur->fetch();
    if ($user !== false) {
        $sqlUpdate = "UPDATE users SET password = :new_password WHERE user_name = :login";
        $stmtUpdate = $bdd->prepare($sqlUpdate);
        $stmtUpdate->bindParam(':new_password', $new_password);
        $stmtUpdate->bindParam(':login', $login);
        try {
            $stmtUpdate->execute();
        } catch (PDOException $e) {
            $message = "Erreur de connexion";
        }
        return true;
    }
    return false;
}
