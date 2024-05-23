<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galerie d'art</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap");
  </style>
  <script src="https://kit.fontawesome.com/4fddd04353.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/assets/galerieArt.css" />
</head>

<body>
  <div class="titre_acceuil">
    <h2>A propos</h2>
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
      <button class="cta">En savoir plus</button>
    </div>
  </div>

  <script>
    var images = ["/images_photos/galerie/equipe.jpg", "/galerieDart/images_photos/galerie/galerie2.jpg", "/galerieDart/images_photos/galerie/equipe4.jpg"];
    var currentIndex = 0;
    var carousel = document.getElementById("carousel_propos");
    setInterval(function() {
      currentIndex = (currentIndex + 1) % images.length;
      carousel.src = images[currentIndex];
    }, 4000);
  </script>

</html>