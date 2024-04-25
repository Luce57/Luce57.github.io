<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galerie d'art</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap");
    </style>
    <script
      src="https://kit.fontawesome.com/4fddd04353.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="/galerieDart/assets/galerieArt.css" />
  </head>
  <body>
    <div class="banniere">
      <!-- creer un carrouselle d 'images' -->
      <img id="carousel" src="/galerieDart/images_photos/img_acceuil/banniere0.jpg" alt="image1" />
    </div>
    <div class="titre_banniere">
      <h1>L'Éclat des songes</h1>
    </div>
    <script>
  var images = ["/galerieDart/images_photos/img_acceuil/banniere0.jpg", "/galerieDart/images_photos/img_acceuil/banniere1.jpg", "/galerieDart/images_photos/img_acceuil/banniere2.jpg"];
  var currentIndex = 0;
  var carousel = document.getElementById("carousel");

  setInterval(function() {
    currentIndex = (currentIndex + 1) % images.length;
    carousel.src = images[currentIndex];
  }, 3000);
</script>
  </body>
</html>
