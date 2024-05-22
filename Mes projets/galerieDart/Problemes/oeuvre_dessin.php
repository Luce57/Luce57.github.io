<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php";
// include($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/dbb_connect.php");
// include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/controller/Insert_imgController.php";
// include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/Insert_imgModel.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/Insert_imgModel.php");
$model = new ArtObjectModel();
?>


<div class="container">
  <div class="h2_oeuvre">
    <h1>Dessins</h1>
  </div>
  <div class=fond_gradiant></div>
  <div class=container_dessin>
    <!-- <?php
          // $artObject = $model->getArtObjectById($id_objet);
          // if ($artObject) {
          //   echo '<div class="card_dessin">';
          //   echo '<div class="image-container">';
          //   echo '<a href="/galerieDart/view/oeuvre_page.php">';
          //   echo '<img src="' . $artObject['url_image'] . '" alt="">';
          //   echo '</a>';
          //   echo '<i class="fa-regular fa-heart"></i>';
          //   echo '</div>';
          //   echo '<p class="artiste">' . $artObject['artistes'] . '</p>';
          //   echo '<p class="titre_oeuvre">' . $artObject['titre'] . '</p>';
          //   echo '</div>';
          // }
          // 
          ?> -->
    <div class=card_dessin>
      <div class="image-container">
        <a href="/galerieDart/view/oeuvre_page.php">
          <?php
          $artObject = $model->getArtObjectById(1);
          echo '<img src="' . $artObject['url_image'] . '" alt="">';
          ?>
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"><?php echo $artObject['artistes']; ?></p>
      </p>
      <p class="titre_oeuvre"><?php echo $artObject['titre']; ?></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src="<?php $artObject = $model->getArtObjectById(2); ?>" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src=" C:\Users\momij\OneDrive\Documents\GitHub\Luce57.github.io\Mes projets\galerieDart\images_photos\oeuvres\dessin\sketch.jpg" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src="C:\Users\momij\OneDrive\Documents\GitHub\Luce57.github.io\Mes projets\galerieDart\images_photos\oeuvres\dessin\eye.jpg" alt="">
        </a>
        <i class="fa-regular fa-heart"></i>
      </div>
      <p class="artiste"></p>
      <p class="titre_oeuvre"></p>
    </div>
    <div class=card_dessin>
      <div class="image-container">
        <a href="#">
          <img src=" C:\Users\momij\OneDrive\Documents\GitHub\Luce57.github.io\Mes projets\galerieDart\images_photos\oeuvres\dessin\woman_cat.jpg" alt="">
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