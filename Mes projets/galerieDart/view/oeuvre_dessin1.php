<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";

?>

<div class="container">
    <div class="h2_oeuvre">
        <h1>Dessins</h1>
    </div>
    <div class=fond_gradiant></div>
    <div class=container_dessin>

        <div class=card_dessin>
            <div class="image-container">
                <a href="/view/article1_dessin.php">
                    <img src="/images_photos/oeuvres/dessin/girl_lavande.jpg" alt="">
                </a>
                <!-- <i class="fa-regular fa-heart"></i> -->
            </div>
            <p class="artiste">Clara Monet </p>
            </p>
            <p class="titre_oeuvre">Harmonie en Rouge</p>
        </div>
        <div class=card_dessin>
            <div class="image-container">
                <a href="/view/article2_dessin.php">
                    <img src="/images_photos/oeuvres/dessin/dog.jpg" alt="">
                </a>
                <!-- <i class=" fa-regular fa-heart"></i> -->
            </div>
            <p class="artiste">Sophie Lemoine</p>
            <p class="titre_oeuvre">Regard Loyal</p>
        </div>
        <div class=card_dessin>
            <div class="image-container">
                <a href="/view/article3_dessin.php">
                    <img src=" /images_photos/oeuvres/dessin/sketch.jpg" alt="">
                </a>
                <!-- <i class="fa-regular fa-heart"></i> -->
            </div>
            <p class="artiste">Juliette Rousseau</p>
            <p class="titre_oeuvre">Fragmentation de l’âme</p>
        </div>
        <div class=card_dessin>
            <div class="image-container">
                <a href="/view/article4_dessin.php">
                    <img src="/images_photos/oeuvres/dessin/eye.jpg" alt="">
                </a>
                <!-- <i class="fa-regular fa-heart"></i> -->
            </div>
            <p class="artiste">Camille Delaroche</p>
            <p class="titre_oeuvre">Regard Intérieur</p>
        </div>
        <div class=card_dessin>
            <div class="image-container">
                <a href="/view/article5_dessin.php">
                    <img src="/images_photos/oeuvres/dessin/woman_cat.jpg" alt="">
                </a>
                <!-- <i class="fa-regular fa-heart"></i> -->
            </div>
            <p class="artiste">Amélie Durand </p>
            <p class="titre_oeuvre">La Rencontre Mystique</p>
        </div>
    </div>
</div>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>