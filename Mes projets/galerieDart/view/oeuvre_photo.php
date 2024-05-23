<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php"; ?>
<div class="container">
  <div class="h2_oeuvre">
    <h1>Photos</h1>
  </div>
  <div class=fond_gradiant></div>
  <div class=container_dessin>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/view/article1_photo.php">
          <img src="/images_photos/oeuvres/photographie/bird.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Monique Lévesque</p>
      <p class="titre_oeuvre">Élégance Naturelle</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/view/article2_photo.php">
          <img src="/images_photos/oeuvres/photographie/colors.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Alexia Dupont</p>
      <p class="titre_oeuvre">Éclat de Couleurs</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/view/article3_photo.php">
          <img src="/images_photos/oeuvres/photographie/meduse.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Marina Bleu</p>
      <p class="titre_oeuvre">Danse des Méduses</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/view/article4_photo.php">
          <img src="/images_photos/oeuvres/photographie/renard.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Maxime Lefèvre</p>
      <p class="titre_oeuvre">La Sérénité du Renard</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/view/article5_photo.php">
          <img src="/images_photos/oeuvres/photographie/thunderstorm.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Léa Dons</p>
      <p class="titre_oeuvre">La Danse des Éléments</p>
    </div>
  </div>
</div>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>