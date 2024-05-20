<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/controller/compte_administrateurController.php");
?>
<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
    }
</style>
<form method="POST" action="Update_Users.php">
    <input type="hidden" name="id" value="ID_UTILISATEUR">
    <input type="text" name="id_user" placeholder="ID" required>
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="text" name="role" placeholder="Rôle" required>
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="submit" name="update" value="Modifier">
</form>
<div style='text-align: center;    margin-bottom: 3rem;'><a href="compte_administrateur.php">Retour à la page d'administration</a></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>