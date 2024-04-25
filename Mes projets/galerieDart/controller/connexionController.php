<?php
  session_start();
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/connexionModel.php");
// recuperation des données du formulaire
if(isset($_POST['bValider'])){
    $user_name = htmlspecialchars(trim($_POST['user_name']));
    $password = htmlspecialchars(trim($_POST['password']));
    $user= connexion($user_name, $password);

    if($user){
    $_SESSION['user_name'] = $user_name;
    // $_SESSION['password'] = $password;
    if($user['role'] == 'admin'){
        header("Location: /galerieDart/view/compte_administrateur.php");
        exit;
    } else {
        header("Location: /galerieDart/view/compte_utilisateur.php");
        exit;
    }
}else{
    echo "Login ou mot de passe incorrect";
}

}