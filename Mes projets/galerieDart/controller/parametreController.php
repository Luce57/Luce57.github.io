<?php
// Affiche un message pour indiquer que le script est en cours d'exécution
echo "Script is running";

// Démarre une nouvelle session ou reprend une session existante
session_start();

// Affiche le contenu de la variable de session
var_dump($_SESSION);

echo "Session started";

// Inclut les fichiers de modèle nécessaires
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/parametreModel.php");
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/connexionModel.php");

// Vérifie si le bouton 'bValider' a été cliqué
if (isset($_POST['bValider'])) {
    echo "Button clicked";

    // Vérifie si l'utilisateur est connecté
    if (isset($_SESSION['user_name'])) {
        echo "User is logged in";

        // Récupère les données du formulaire
        $user_name = $_SESSION['user_name'];
        $email_actuel = htmlspecialchars($_POST['email_actuel']);
        $nouvel_email = htmlspecialchars($_POST['nouvel_email']);
        $mot_de_passe_actuel = htmlspecialchars($_POST['mot_de_passe_actuel']);
        $nouveau_mot_de_passe = htmlspecialchars($_POST['nouveau_mot_de_passe']);

        // Vérifie si un nouvel email a été fourni et met à jour l'email si c'est le cas
        if (!empty($nouvel_email) && $nouvel_email != $email_actuel) {
            $utilisateur = update($user_name, $nouvel_email, null);
            if (!$utilisateur) {
                // Stocke un message d'erreur dans la variable de session si la mise à jour de l'email a échoué
                $_SESSION['message'] = "Une erreur s'est produite lors de la mise à jour de l'email.";
                header("Location: /galerieDart/view/compte_utilisateur.php");
                exit();
            } else {
                // Stocke un message de succès dans la variable de session si la mise à jour de l'email a réussi
                $_SESSION['message'] = "L'email a été mis à jour avec succès.";
            }
        }

        // Vérifie si un nouveau mot de passe a été fourni et met à jour le mot de passe si c'est le cas
        if (!empty($nouveau_mot_de_passe)) {
            $current_password_hashed = get_current_password($user_name);
            if ($current_password_hashed === false || !password_verify($mot_de_passe_actuel, $current_password_hashed)) {
                // Stocke un message d'erreur dans la variable de session si le mot de passe actuel est incorrect
                $_SESSION['message'] = "Le mot de passe actuel est incorrect.";
                header("Location: /galerieDart/view/compte_utilisateur.php");
                exit();
            }
            $nouveau_mot_de_passe_hashed = password_hash($nouveau_mot_de_passe, PASSWORD_DEFAULT);
            $utilisateur = update($user_name, null, $nouveau_mot_de_passe_hashed);
            if (!$utilisateur) {
                // Stocke un message d'erreur dans la variable de session si la mise à jour du mot de passe a échoué
                $_SESSION['message'] = "Une erreur s'est produite lors de la mise à jour du mot de passe.";
                header("Location: /galerieDart/view/compte_utilisateur.php");
                exit();
            } else {
                // Stocke un message de succès dans la variable de session si la mise à jour du mot de passe a réussi
                $_SESSION['message'] = "Le mot de passe a été mis à jour avec succès.";
            }
        }

        // Redirige l'utilisateur vers la page de profil
        header("Location: /galerieDart/view/compte_utilisateur.php");
        exit();
    } else {
        // Stocke un message d'erreur dans la variable de session si l'utilisateur n'est pas connecté
        $_SESSION['message'] = "User is not logged in";
        // Redirige l'utilisateur vers la page de connexion
        header("Location: /galerieDart/view/connexion.php");
        exit();
    }
}
