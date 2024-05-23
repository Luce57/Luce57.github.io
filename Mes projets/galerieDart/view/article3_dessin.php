<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php"; ?>
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


    <div class="container_pgOeuvre">
        <div class="img_pageOeuvre">
            <img src="/images_photos/oeuvres/dessin/sketch.jpg" alt="">
        </div>
        <div class="texte_pageOeuvre">
            <h1>Juliette Rousseau</h1>
            <h2>Fragmentation de l’âme</h2>
            <p>
                Cette œuvre est une représentation graphique complexe et détaillée, où le visage d’une personne est partiellement obscurci, illustrant peut-être la complexité et la multifacette de l’identité humaine. Les lignes fines et les ombres créent un effet dramatique, tandis que les éléments abstraits ajoutent une dimension mystérieuse à l’image.</p>
            <p>Prix : 450 €</p>
        </div>
    </div>
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
</body>

</html>