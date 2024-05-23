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
<form action="Delete_Oeuvres.php" method="post">
    <input type="hidden" name="id" value="ID_objet">
    <input type="text" name="id_objet" placeholder="ID" required>
    <input type="submit" name="delete_objet" value="Supprimer">
</form>
<div style='text-align: center;    margin-bottom: 3rem;'><a href='compte_administrateur.php'>Retour à la page d'administration</a></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>