<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php"; ?>
<div class="container_inscription">
    <div class="fond_formulaire"></div>
    <div class="inscription">
        <h1>Inscription</h1>
        <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/galerieDart/controller/inscriptionController.php" method="POST">
            <input type="text" id="pseudo" name="user_name" placeholder="Pseudo" required autofocus><br>
            <input type="text" id="name" name="nom" placeholder="Nom" required><br>
            <input type="text" id="name" name="prenom" placeholder="Prenom" required><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required><br>
            <input type="password" id="password2" name="password2" placeholder="Confirmer mot de passe" required><br>
            <input class="cta" type="submit" name="bValider" value="Entrer">
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>