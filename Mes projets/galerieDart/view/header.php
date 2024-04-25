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
  <link rel="stylesheet" href="/galerieDart/assets/galerieArt.css" />
</head>

<body>
  <?php
  session_start();

  ?>
  <header>
    <img class="logo" src="/galerieDart/images_photos/galerie/logo_eclat.png " alt="logo" />
    <div class="navigation_1">
      <div class="recherche">
        <nav>
          <input type="search" id="site-search" name="chercher" aria-label="Recherche sur le site" placeholder="Recherche" pattern="^[a-zA-Z0-9_]+$" required autofocus />
          <button class="search-icon">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
          </button>

          <ul>
            <li><a href="/galerieDart/view/galerieArt.php/#gallerie">Gallerie</a></li>
            <li><a href="/galerieDart/view/galerieArt.php/#propos">A propos</a></li>
            <li><a href="/galerieDart/view/galerieArt.php/#contact">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="navigation_2">
      <button class="home">
        <a href="/galerieDart/view/galerieArt.php">
          <i class="fa-solid fa-house house-icon"></i>
        </a>
      </button>
      <ul>
        <li><a href="/galerieDart/view/inscription.php">s'inscrire</a></li>
        <li><a href="/galerieDart/view/connexion.php">connexion</a></li>
      </ul>
    </div>
  </header>