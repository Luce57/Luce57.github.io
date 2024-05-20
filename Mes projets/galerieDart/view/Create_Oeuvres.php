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
<form action="Create_Oeuvres.php" method="POST">
    <input type="text" name="type" placeholder="Type" required autofocus>
    <input type="text" name="artistes" placeholder="Artistes" required>
    <input type="text" name="titre" placeholder="Titre" required>
    <input type="text" name="description" placeholder="Description" required>
    <input type="number" name="prix" placeholder="Prix" required>
    <input type="text" name="url_image" placeholder="URL de l'image" required>
    <input type="submit" name="create_oeuvre" value="Créer">

</form>
<div style='text-align: center;    margin-bottom: 3rem;'><a href="compte_administrateur.php">Retour à la page d'administration</a></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>