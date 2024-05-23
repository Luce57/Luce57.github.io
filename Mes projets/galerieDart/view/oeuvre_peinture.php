<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php"; ?>

<div class="container">
  <div class="h2_oeuvre">
    <h1>Peintures</h1>
  </div>
  <div class=fond_gradiant></div>
  <div class=container_dessin>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article1_peinture.php">
          <img src="/galerieDart/images_photos/oeuvres/peintures/bird.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Antoine Renardt</p>
      <p class="titre_oeuvre">L’Élan des Vagues</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article2_peinture.php">
          <img src="/galerieDart/images_photos/oeuvres/peintures/eye.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Isabella Morawetz</p>
      <p class="titre_oeuvre">Regard Intemporel</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article3_peinture.php">
          <img src="/galerieDart/images_photos/oeuvres/peintures/girl.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Léa Dupont </p>
      <p class="titre_oeuvre">Sérénité suspendue</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article4_peinture.php">
          <img src="/galerieDart/images_photos/oeuvres/peintures/window.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Isabelle Monet</p>
      <p class="titre_oeuvre">Fenêtre sur le Printemps</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article5_peinture.php">
          <img src="/galerieDart/images_photos/oeuvres/peintures/woman.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Lucas Girard</p>
      <p class="titre_oeuvre">Harmonie Éphémère</p>
    </div>
  </div>
</div>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>