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
            <img src="/images_photos/oeuvres/ai/moon.jpg" alt="">
        </div>
        <div class="texte_pageOeuvre">
            <h1>Sophie Martin
            </h1>
            <h2>Clair de lune mystique</h2>
            <p>
                Cette œuvre en noir et blanc capture un paysage montagneux éthéré baigné dans la lumière d’une lune pleine, majestueuse et lumineuse. Les étoiles scintillantes et les galaxies lointaines ornent le ciel nocturne, ajoutant une profondeur et une dimension mystiques à la scène. Un ruisseau sinueux serpente à travers les vallées sombres, reflétant la lumière lunaire et créant un contraste saisissant avec les ombres environnantes</p>
            <p>Prix :1200 €</p>
        </div>
    </div>
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
</body>

</html>