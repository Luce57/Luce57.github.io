<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php"; ?>

<div class="container">
  <div class="h2_oeuvre">
    <h1>Dessins</h1>
  </div>
  <div class=fond_gradiant></div>
  <div class=container_dessin>
    <?php
    // foreach ($images as $image) {
    //   var_dump($image->url_image);
    //   echo '<div class="card_dessin">';
    //   echo '<div class="image-container">';
    //   echo '<a href="/galerieDart/view/oeuvre_page.php">';
    //   echo '<img src="' . $image->url_image . '" alt="">';
    //   echo '</a>';
    //   echo '<i class="fa-regular fa-heart"></i>';
    //   echo '</div>';
    //   echo '<p class="artiste">' . $image->artistes . '</p>';
    //   echo '<p class="titre_oeuvre">' . $image->titre . '</p>';
    //   echo '</div>';
    // // }
    // foreach ($images as $image) {
    //   echo '<img src="' . htmlspecialchars($image->url_image) . '">';
    // }
    // foreach ($GLOBALS['images'] as $image) {
    //   echo '<img src="' . htmlspecialchars($image->url_image) . '">';
    // }
    ?>
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/oeuvre_page.php">
          <img src=" C:\wamp\www\Mes projets\galerie_art\images\ai-generated-cat.jpg" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src="" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src="" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src="" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src="" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
  </div>
</div>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>