<?php
include($_SERVER['DOCUMENT_ROOT']."/galerieDart/model/dbb_connect.php");

// creer fonction connection
function connexion($user_name, $password){
    global $bdd;
    $sqlUtilisateur= "SELECT * FROM users WHERE user_name = :user_name";
$stmtUtilisateur = $bdd->prepare($sqlUtilisateur);
$stmtUtilisateur->bindParam(':user_name', $user_name);
// $stmtUtilisateur->bindParam(':password', $password);
try{
    $stmtUtilisateur->execute();
}catch(PDOException $e){
    $message="Erreur de connexion";
}

$user = $stmtUtilisateur->fetch();
// var_dump($user);
if(!$user !== false){
    return false;
}
  // Vérifiez si le mot de passe entré correspond au mot de passe haché stocké dans la base de données
if (!password_verify($password, $user['password'])) {
    return false;
}

$_SESSION['user_name'] = $user['user_name'];
return $user;
}