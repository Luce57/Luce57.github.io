<?php
// page connexion oublie de password
session_start();
if (isset($_POST['bReset'])) {
    require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/resetPasswordModel.php");
    $login = htmlspecialchars(trim($_POST['login_reset']));
    $new_password = htmlspecialchars(trim($_POST['new_password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Vérifiez si le nouveau mot de passe et la confirmation du mot de passe correspondent
    if ($new_password !== $confirm_password) {
        echo "Les mots de passe ne correspondent pas.";
        exit();
    }

    // Hachez le nouveau mot de passe avant de le passer à la fonction resetPassword()
    // si on le hache plus haut probleme de concordance
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $user = resetPassword($login, $hashed_password, $email);
    if ($user) {
        echo "Mot de passe réinitialisé <br>";
        echo '<a href="/galerieDart/view/connexion.php" class="button">Retourner au formulaire de connexion</a>';
    } else {
        echo "Login ou email incorrect <br>";
        echo '<a href="/galerieDart/view/connexion.php" class="button">Retourner au formulaire de connexion</a>';
    }
}
