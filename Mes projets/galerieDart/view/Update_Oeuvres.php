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
<form action="Update_Oeuvres.php" method="POST">

    <input type=text name="id_objet" placeholder="ID" required>
    <input type=text name="type" placeholder="type" required>
    <input type=text name="artistes" placeholder="artistes" required>
    <input type=text name="titre" placeholder="titre" required>
    <input type=text name="description" placeholder="description" required>
    <input type=number name="prix" placeholder="prix" required>
    <input type=text name="url_image" placeholder="url_image" required>
    <input type="submit" name="update_objet" value="Modifier">


</form>
<div style='text-align: center;    margin-bottom: 3rem;'><a href="compte_administrateur.php">Retour à la page d'administration</a></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>