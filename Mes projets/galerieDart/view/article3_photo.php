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
            <img src="/images_photos/oeuvres/photographie/meduse.jpg" alt="">
        </div>
        <div class="texte_pageOeuvre">
            <h1>Marina Bleu
            </h1>
            <h2>Danse des Méduses</h2>
            <p>
                Cette œuvre captivante capture la beauté éthérée et le mouvement gracieux des méduses, illuminées d’une lumière dorée, flottant dans les profondeurs bleues sombres de l’océan. Les détails exquis et la luminosité des créatures contrastent magnifiquement avec le fond obscur, évoquant un sentiment de mystère et d’émerveillement
            <p>Prix : 1200 €</p>
        </div>
    </div>
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
</body>

</html>