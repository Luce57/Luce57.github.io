<?php

session_start();

// on recupere le model avec toutes les fonctions
require($_SERVER['DOCUMENT_ROOT'] . "/model/inscriptionModel.php");

if (isset($_POST['bValider'])) {
    $user_name = htmlspecialchars($_POST['user_name']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);

    // var_dump($user_name, $nom, $prenom, $email, $password, $password2);
    //  si les données recupere non vide
    if (!empty($user_name) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($password2)) {
        // si les mots de passe sont identiques
        if ($password == $password2) {
            // on hache le mot de passe
            $password = password_hash($password, PASSWORD_DEFAULT);
            // on appelle la fonction inscription
            $inscription = inscription($user_name, $nom, $prenom, $email, $password);
            // var_dump($inscription);
            // si l'inscription est reussie
            // si l'inscription est reussie
            if ($inscription) {
                $_SESSION['success'] = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                // on redirige vers la page de connexion
                header("Location: /view/connexion.php");
                exit();
            } else {
                // L'utilisateur existe déjà ou une autre erreur s'est produite
                $message = "Erreur lors de l'inscription. L'utilisateur existe peut-être déjà.";
                echo $message;
                echo '<br><a href="/view/inscription.php">Retour au formulaire</a>';
            }
        }
    } else {
        $message = "Les mots de passe ne sont pas identiques";
        echo $message;
        echo '<br><a href="/view/inscription.php">Retour au formulaire</a>';
    }
}
