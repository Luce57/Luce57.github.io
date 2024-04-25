<?php
echo "Script is running";
session_start();
var_dump($_SESSION);
echo "Session started";
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/parametreModel.php");
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/connexionModel.php");

if (isset($_POST['bValider'])){
    echo "Button clicked";
    if (isset($_SESSION['user_name'])) {
        // Le code ici sera exécuté si $_SESSION['user_name'] est défini
        echo "User is logged in";
        $user_name = $_SESSION['user_name'];
        $email_actuel = htmlspecialchars($_POST['email_actuel']);
        $nouvel_email = htmlspecialchars($_POST['nouvel_email']);
        $mot_de_passe_actuel = htmlspecialchars($_POST['mot_de_passe_actuel']);
        $nouveau_mot_de_passe = htmlspecialchars($_POST['nouveau_mot_de_passe']);

        $nouveau_mot_de_passe_hashed = password_hash($nouveau_mot_de_passe, PASSWORD_DEFAULT);
        $utilisateur = update($user_name, $nouvel_email, $nouveau_mot_de_passe_hashed);

        var_dump($utilisateur);

        if ($utilisateur) {
            // Les données de l'utilisateur ont été mises à jour avec succès
            echo "Les données de l'utilisateur ont été mises à jour avec succès.";
            // Rediriger vers la page de profil de l'utilisateur
            header("Location: /galerieDart/view/compte_utilisateur.php");
            exit();
        } else {
            // Une erreur s'est produite lors de la mise à jour des données de l'utilisateur
            echo "Une erreur s'est produite lors de la mise à jour des données de l'utilisateur.";
        }
    } else {
        // Le code ici sera exécuté si $_SESSION['user_name'] n'est pas défini
        echo "User is not logged in";
        // Rediriger vers la page de connexion
        header("Location: /galerieDart/view/connexion.php");
        exit();
    }
}
