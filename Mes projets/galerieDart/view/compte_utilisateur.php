<?php include $_SERVER['DOCUMENT_ROOT'] ."/galerieDart/view/header.php"; ?>
<div class=container_utilisateur>
    <div class="profil">
        <div class="utilisateur">
            <h1>Pseudo</h1>
            <!-- <h2><a href="modifier_parametres.php" target="_blank">Paramètres</a></h2> -->
            <h2><a href="#" id="lienParametres">Paramètres</a></h2>
    <!-- Le formulaire sera ajouté ici -->
    <div id="modalParametres" style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.4);">
    <div style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 500px; display: flex; flex-direction: column; align-items: center;">
            <form action="<?php $_SERVER['DOCUMENT_ROOT']?>/galerieDart/controller/parametreController.php" method="POST">
            <label for="email_actuel">Email actuel :</label>
            <input type="email" id="email_actuel" name="email_actuel" required><br>

            <label for="nouvel_email">Nouvel email :</label>
            <input type="email" id="nouvel_email" name="nouvel_email" required><br>

            <label for="mot_de_passe_actuel">Mot de passe actuel :</label>
            <input type="password" id="mot_de_passe_actuel" name="mot_de_passe_actuel" required><br>

            <label for="nouveau_mot_de_passe">Nouveau mot de passe :</label>
            <input type="password" id="nouveau_mot_de_passe" name="nouveau_mot_de_passe" required><br>

            <input type="submit" name=bValider value="Modifier">
            </form>
        </div>
        </div>
    </div>
    <div class="avatar">
            <img src="/galerieDart/images_photos/galerie/artiste2.jpg" alt="">
        </div>
        <h2><a href="<?php $_SERVER['DOCUMENT_ROOT']?>/galerieDart/controller/deconnexionController.php">Déconnexion</a></h2>
</div>  
        </div>
        
    </div>
    <div class="fond_utilisateur"></div>
    <div class="container_favoris">
        <div class="titre_favoris">
            <h3>Favoris</h3>
        </div>
        <div class=favoris>
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
            </div>
        </div>
    </div>
</div>
<h2><a class="delete-account" href="/galerieDart/controller/suppressionController.php" onclick="return confirmDelete()">Supprimer le compte</a></h2>
<script>
// Lorsque l'élément avec l'ID 'lienParametres' est cliqué
document.getElementById('lienParametres').onclick = function() {
    // L'élément avec l'ID 'modalParametres' est rendu visible
    document.getElementById('modalParametres').style.display = "block";
}

// Lorsqu'un clic est détecté n'importe où dans la fenêtre
window.onclick = function(event) {
    // Si l'élément sur lequel on a cliqué est l'élément avec l'ID 'modalParametres'
    if (event.target == document.getElementById('modalParametres')) {
        // L'élément avec l'ID 'modalParametres' est rendu invisible
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

<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>