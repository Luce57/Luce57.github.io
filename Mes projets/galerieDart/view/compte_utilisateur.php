<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php"; ?>
<!-- permet de faire apparaitre les massage des parametres -->
<?php
if (isset($_SESSION['message'])) {
    echo '<div class="message">' . $_SESSION['message'] . '</div>';
    unset($_SESSION['message']);  // supprimer le message après l'affichage
}
?>
<div class=container_utilisateur>
    <div class="profil">
        <div class="utilisateur">
            <h1><?php echo htmlspecialchars($_SESSION['user_name']); ?></h1>
            <!-- <h2><a href="modifier_parametres.php" target="_blank">Paramètres</a></h2> -->
            <h2>
                <a href="#" id="lienParametres">Paramètres</a>
                <div id="parametresOptions" style="display: none;">
                    <button id="showEmailForm">Modifier l'email</button>
                    <button id="showPasswordForm">Modifier le mot de passe</button>
                </div>
            </h2>
            <!-- Le formulaire sera ajouté ici -->

            <div id="modalParametres" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
                <div style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 500px; display: flex; flex-direction: column; align-items: center;">
                    <div id="emailForm" style="display: none;">
                        <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/controller/parametreController.php" method="POST">
                            <label for="email_actuel">Email actuel :</label>
                            <input type="email" id="email_actuel" name="email_actuel" required><br>

                            <label for="nouvel_email">Nouvel email :</label>
                            <input type="email" id="nouvel_email" name="nouvel_email" required><br>

                            <input type="submit" name=bValider value="Modifier">
                        </form>
                    </div>

                    <div id="passwordForm" style="display: none;">
                        <form action="<?php $_SERVER['DOCUMENT_ROOT'] ?>/controller/parametreController.php" method="POST">
                            <label for="mot_de_passe_actuel">Mot de passe actuel :</label>
                            <input type="password" id="mot_de_passe_actuel" name="mot_de_passe_actuel" required><br>

                            <label for="nouveau_mot_de_passe">Nouveau mot de passe :</label>
                            <input type="password" id="nouveau_mot_de_passe" name="nouveau_mot_de_passe" required><br>

                            <input type="submit" name=bValider value="Modifier">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="avatar">
            <img src="/images_photos/galerie/artiste2.jpg" alt="">
        </div>
        <h2><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/controller/deconnexionController.php">Déconnexion</a></h2>
    </div>
</div>
</div>
</div>
<div class="fond_utilisateur"></div>
<div class="container_favoris">
    <div class="titre_favoris">
        <h3>Favoris</h3>
        <p>En cours de developpement!</p>
    </div>
    <!-- <div class=favoris>
        <div class="oeuvre_favoris">
            <img src="/galerieDart/images_photos/oeuvres/photographie/renard.jpg">
        </div>
        <div class="oeuvre_favoris">
            <img src="/galerieDart/images_photos/oeuvres/peintures/girl.jpg">
        </div>
        <div class="oeuvre_favoris">
            <img src="/galerieDart/images_photos/oeuvres/dessin/girl_lavande.jpg">
        </div>
        <div class="oeuvre_favoris">
            <img src="/galerieDart/images_photos/oeuvres/ai/ai-generated-amoureux.jpg">
        </div>
        <div class="oeuvre_favoris">
            <img src="/galerieDart/images_photos/oeuvres/dessin/sketch.jpg">
        </div> -->
</div>
</div>
</div>
<h2><a class="delete-account" href="/controller/suppressionController.php" onclick="return confirmDelete()">Supprimer le compte</a></h2>

<script>
    document.getElementById('lienParametres').onclick = function() {
        document.getElementById('parametresOptions').style.display = "block";
    }

    document.getElementById('showEmailForm').onclick = function() {
        document.getElementById('modalParametres').style.display = "block";
        document.getElementById('emailForm').style.display = "block";
        document.getElementById('passwordForm').style.display = "none";
    }

    document.getElementById('showPasswordForm').onclick = function() {
        document.getElementById('modalParametres').style.display = "block";
        document.getElementById('passwordForm').style.display = "block";
        document.getElementById('emailForm').style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == document.getElementById('modalParametres')) {
            document.getElementById('modalParametres').style.display = "none";
        }
    }
</script>
<script>
    // Fonction qui affiche une boîte de dialogue de confirmation lorsque l'utilisateur tente de supprimer son compte
    function confirmDelete() {
        // Affiche une boîte de dialogue de confirmation avec le message "Êtes-vous sûr de vouloir supprimer votre compte ?"
        // Si l'utilisateur clique sur "OK", la fonction retourne true
        // Si l'utilisateur clique sur "Annuler", la fonction retourne false
        return confirm("Êtes-vous sûr de vouloir supprimer votre compte ?");
    }
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>