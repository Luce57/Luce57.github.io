<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/controller/compte_administrateurController.php");
?>
<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 2rem;
    }
</style>
<form method="POST" action="Create_Users.php">
    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
    <input type="text" name="role" placeholder="Rôle" required>
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <input type="submit" name="create" value="Créer">
</form>
<div style='text-align: center;    margin-bottom: 3rem;'><a href="compte_administrateur.php">Retour à la page d'administration</a></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>