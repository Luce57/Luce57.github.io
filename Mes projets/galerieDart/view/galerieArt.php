<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php"; ?>
<!-- banniere -->
<div class="banniere">
  <!-- creer un carrouselle d 'images' -->
  <img id="carousel" src="/images_photos/img_acceuil/banniere0.jpg" alt="image1" />
  <div class="titre_banniere">
    <h1>L'Éclat des songes</h1>
  </div>
</div>

<!-- oeuvre a la une -->
<div class="titre_acceuil">
  <h2>Oeuvres à la une</h2>
</div>
<div class=oeuvre_a_la_une>
  <img class="oeuvreUne" src="/images_photos/oeuvres/peintures/woman.jpg" alt="">
  <img class="oeuvreUne" src="/images_photos/img_acceuil/banniere3.jpg" alt="">
  <img class="oeuvreUne" src="/images_photos/oeuvres/dessin/girl_lavande.jpg" alt="">
</div>
<!-- gallerie -->
<div class="titre_acceuil">
  <h2 id="gallerie">Gallerie</h2>
</div>
<div class="fond">
</div>
<div class="type">
  <div class="card_1">
    <a href="/view/oeuvre_dessin1.php">Dessin</a>
    <img src="/images_photos/img_acceuil/dessins.jpg" alt="dessin">
  </div>
  <div class="card_1">
    <a href="/view/oeuvre_peinture.php">peinture</a>
    <img src="/images_photos/img_acceuil/peinture.jpg" alt="peinture">
  </div>
  <div class="card_1">
    <a href="/view/oeuvre_photo.php">Photos</a>
    <img src="/images_photos/img_acceuil/photos.jpg" alt="photos">
  </div>
  <div class="card_1">
    <a href="/view/oeuvre_ai.php">Ai</a>
    <img src="/images_photos/img_acceuil/ai.jpg" alt="ai">
  </div>
</div>
<!-- a propos -->
<div class="propos">
  <div class="titre_acceuil">
    <h2 id="propos">A propos</h2>
  </div>
  <div class=a_propos>
    <div class="carousel">
      <img id="carousel_propos" src="/images_photos/galerie/equipe.jpg" alt="image1" />
    </div>
    <div class="texte">
      <p>Bienvenue à “L’Éclat des Songes”</p>
      <p>Découvrez un monde où l’art prend vie, où les rêves se matérialisent et où chaque coup de pinceau raconte une histoire. “L’Éclat des Songes” est bien plus qu’une galerie d’art : c’est un voyage au cœur de l’imagination, un lieu où les âmes créatives se rencontrent.</p>
      <p>Explorez nos toiles vibrantes, nos sculptures évocatrices, nos dessins captivants et nos photographies figées dans le temps. Chaque œuvre est un éclat d’âme, une invitation à rêver, à ressentir et à réfléchir.</p>
      <p>Entrez dans notre univers lumineux, laissez-vous emporter par la magie des songes et rejoignez-nous pour célébrer l’art sous toutes ses formes.</p>
      <p>Bienvenue à “L’Éclat des Songes”. </p>
      <!-- <button class="cta">En savoir plus</button> -->
      <a href="/view/aPropos.php" class="cta">En savoir plus</a>
    </div>
  </div>
</div>
<div class="contact">
  <div class="fond_contact"></div>
  <div class="titre_acceuil">
    <h2 id="contact">Contact</h2>
  </div>
  <div class=texte_contact>
    <p>“L’Éclat des Songes” : Osez Révéler Votre Créativité !</p>
    <p>Découvrez notre galerie d’art où chaque œuvre est un éclat d’âme. Contactez-nous pour plonger dans ce monde de rêves et de couleurs.</p>
    <p>🌟 Explorez. Rêvez. Créez. 🌟</p>
    <!-- <button class="cta">Contactez-nous</button> -->
    <a href="/view/contact.php" class="cta">Contactez-nous</a>
  </div>
</div>
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
<!-- pour les script en java les carrouselle rentre en conflit car j appele la meme fonction currentIndex pour y
remedier j'utilise function() cela permet de faire appel independamment de chaque carroussel la meme fonction -->
<!-- chaque script a sa propre variable meme si elle sont nomme de la meme maniere -->
<script>
  (function() {
    var images = ["/images_photos/galerie/equipe.jpg", "/images_photos/galerie/galerie2.jpg", "/images_photos/galerie/equipe4.jpg"];
    var currentIndex = 0;
    var carousel = document.getElementById("carousel_propos");
    setInterval(function() {
      currentIndex = (currentIndex + 1) % images.length;
      carousel.src = images[currentIndex];
    }, 4000);
  })();
</script>
<script>
  (function() {
    var images = ["/images_photos/img_acceuil/banniere0.jpg", "/images_photos/img_acceuil/banniere1.jpg", "/images_photos/img_acceuil/banniere2.jpg"];
    var currentIndex = 0;
    var carousel = document.getElementById("carousel");
    setInterval(function() {
      currentIndex = (currentIndex + 1) % images.length;
      carousel.src = images[currentIndex];
    }, 3000);
  })();
</script>