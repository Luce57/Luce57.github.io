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
            <img src="/images_photos/oeuvres/photographie/bird.jpg" alt="">
        </div>
        <div class="texte_pageOeuvre">
            <h1>Monique Lévesque
            </h1>
            <h2>Élégance Naturelle</h2>
            <p>
                Cette œuvre captivante capture un moment exquis où un oiseau aux couleurs vives, avec des ailes déployées, se perche délicatement sur une branche ornée de baies dorées. Le fond flou met en valeur la clarté et la précision de l’oiseau et des baies, évoquant une danse délicate entre la nature et la lumière.
            <p>Prix : 450 €</p>
        </div>
    </div>
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
</body>

</html>