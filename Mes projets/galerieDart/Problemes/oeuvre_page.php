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
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/header.php"; ?>
  <?php
  $artObjects = [
    [
      'url_image' => '/galerieDart/images_photos/oeuvres/dessin/girl_lavande.jpg',
      'artistes' => 'Clara Monet',
      'type' => 'Harmonie en Rouge',
      'description' => '“Harmonie en Rouge” est une œuvre d’art captivante qui illustre une femme (dont le visage est flouté pour préserver l’anonymat) vêtue d’une robe rouge éclatante, tenant un panier rempli de fleurs noires. La technique mixte utilisée confère à l’image un aspect à la fois réaliste et abstrait, où les couleurs vives et les formes distinctes se mêlent à des traits de pinceau expressifs et des éclaboussures d’encre, symbolisant la fusion de la beauté naturelle et de l’énergie artistique.',
      'prix' => 1200,
      'page_url' => '/galerieDart/view/page1.php'
    ],
    [
      'url_image' => '/galerieDart/images_photos/oeuvres/dessin/dog.jpg',
      'artistes' => 'Sophie Lemoine',
      'type' => 'Regard Loyal',
      'description' => '“Regard Loyal” est une œuvre d’art exquise qui capture la beauté et l’innocence d’un chiot. Chaque trait est méticuleusement dessiné, révélant les détails fins et délicats du pelage doux et soyeux du chien. Le regard intense et pénétrant du chiot exprime une loyauté et une affection incommensurables, évoquant un sentiment de connexion profonde entre l’homme et l’animal.',
      'prix' => 450,
      'page_url' => '/galerieDart/view/page2.php'
    ],
    // Ajoutez plus d'objets d'art ici...
  ];
  foreach ($artObjects as $artObject) { ?>

    <div class="container_pgOeuvre">
      <div class="img_pageOeuvre">
        <a href="<?php echo $artObject['page_url']; ?>">
          <img src="<?php echo $artObject['url_image']; ?>" alt="">
        </a>
      </div>
      <div class="texte_pageOeuvre">
        <h1><?php echo $artObject['artistes']; ?></h1>
        <h2><?php echo $artObject['type']; ?></h2>
        <p>
          <?php echo $artObject['description']; ?></p>
        <p>Prix : <?php echo $artObject['prix']; ?> €</p>
      </div>
    </div>
  <?php } ?>

  <!-- footer -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/view/footer.php"; ?>
</body>

</html>