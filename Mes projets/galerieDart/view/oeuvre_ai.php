<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php"; ?>
<div class="container">
  <div class="h2_oeuvre">
    <h1>Ai</h1>
  </div>
  <div class=fond_gradiant></div>
  <div class=container_dessin>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article1_ai.php">
          <img src="/galerieDart/images_photos/oeuvres/ai/ai-generated-cat.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Claude LeChat</p>
      <p class="titre_oeuvre">L’Élégance Féline</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article2_ai.php">
          <img src="/galerieDart/images_photos/oeuvres/ai/ai-generated-eyes.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Jeanne Dupont</p>
      <p class="titre_oeuvre">Mystique Émergence</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article3_ai.php">
          <img src="/galerieDart/images_photos/oeuvres/ai/ai-generated-amoureux.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Élise Valentin</p>
      <p class="titre_oeuvre">Étreinte Éternelle</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article4_ai.php">
          <img src="/galerieDart/images_photos/oeuvres/ai/ai-generated-women.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Clara Dumonie</p>
      <p class="titre_oeuvre">Harmonie Universelle</p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/article5_ai.php">
          <img src="/galerieDart/images_photos/oeuvres/ai/moon.jpg" alt="">
        </a>
        <!-- <i class="fa-regular fa-heart"></i> -->
      </div>
      <p class="artiste">Sophie Martins</p>
      <p class="titre_oeuvre">Clair de lune mystique</p>
    </div>
  </div>
</div>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>