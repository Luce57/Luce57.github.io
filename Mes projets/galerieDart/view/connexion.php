<?php 
include $_SERVER['DOCUMENT_ROOT'] ."/galerieDart/view/header.php"; 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="container_inscriptionConnexion">
<div class="fond_formulaireConnexion"></div>
<div class="inscription">
<?php
    // session_start();
// lors de la redirection de la page d insciption quand c une reussite
    // Vérifier si le message de succès est défini
    if (isset($_SESSION['success'])) {
        echo '<p class="success">' . $_SESSION['success'] . '</p>';
        // Supprimer le message de succès après l'avoir affiché
        unset($_SESSION['success']);
    }
    // Vérifier si le message de suppression de compte est défini
    if (isset($_SESSION['account_deleted'])) {
        echo '<p class="success">' . $_SESSION['account_deleted'] . '</p>';
        // Supprimer le message de suppression de compte après l'avoir affiché
        unset($_SESSION['account_deleted']);
         // Détruire la session après avoir affiché le message
         session_destroy();
    }
    ?>
    <h1>Connexion</h1>
    <form action="<?php $_SERVER['DOCUMENT_ROOT']?>/galerieDart/controller/connexionController.php" method="POST">
        <input type="text" id="login" name="user_name" placeholder="Login" required autofocus><br>
        <input type="password" id="password" name="password" placeholder="Mot de passe" required><br>
        <a href="#" onclick="showResetForm(event)">mot de passe oublié</a><br>
        <!-- A enlever le onclick m aide juste a la partit front pour aller gere le compte utilisateur -->
        <!-- <input class ="cta" type="submit" name="bValider" value="Entrer" onclick="window.location.href='/galerieDart/view/compte_utilisateur.php'; return false;"> -->
        <input class ="cta" type="submit" name="bValider" value="Entrer">
    </form>
</div>
</div>
<!-- Formulaire de réinitialisation de mot de passe -->
<div id="resetForm" style="display: none;">
    <h1>Réinitialiser le mot de passe</h1>
    <form action="<?php $_SERVER['DOCUMENT_ROOT']?>/galerieDart/controller/resetPasswordController.php" method="POST">
        <input type="text" id="login_reset" name="login_reset" placeholder="Login" required autofocus><br>
        <input type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe" required><br>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer le nouveau mot de passe" required><br>
        <input type="email" id="email" name="email" placeholder="Email" required><br>
        <input class ="cta" type="submit" name="bReset" value="Réinitialiser">
    </form>
</div>

<script>
function showResetForm(e) {
    e.preventDefault();
    document.getElementById('resetForm').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>