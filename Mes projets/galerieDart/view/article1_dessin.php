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
            <img src="/images_photos/oeuvres/dessin/girl_lavande.jpg" alt="">
        </div>
        <div class="texte_pageOeuvre">
            <h1>Clara Monet</h1>
            <h2>Harmonie en Rouge</h2>
            <p>
                Harmonie en Rouge” est une œuvre d’art captivante qui illustre une femme (dont le visage est flouté pour préserver l’anonymat) vêtue d’une robe rouge éclatante, tenant un panier rempli de fleurs noires. La technique mixte utilisée confère à l’image un aspect à la fois réaliste et abstrait, où les couleurs vives et les formes distinctes se mêlent à des traits de pinceau expressifs et des éclaboussures d’encre, symbolisant la fusion de la beauté naturelle et de l’énergie artistique.</p>
            <p>Prix : 1200 €</p>
        </div>
    </div>
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
</body>

</html>