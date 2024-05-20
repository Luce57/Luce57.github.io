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
<form method="POST" action="delete_contact.php">
    <input type="hidden" name="id" value="ID_contact">
    <input type="text" name="id_contact" placeholder="ID" required>
    <input type="submit" name="delete_contact" value="Supprimer">
</form>
<div style='text-align: center;    margin-bottom: 3rem;'><a href='compte_administrateur.php'>Retour à la page d'administration</a></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>