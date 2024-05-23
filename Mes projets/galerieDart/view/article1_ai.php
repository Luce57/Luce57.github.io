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
            <img src="/images_photos/oeuvres/ai/ai-generated-cat.jpg" alt="">
        </div>
        <div class="texte_pageOeuvre">
            <h1>Claude LeChat
            </h1>
            <h2>L’Élégance Féline</h2>
            <p>
                Cette œuvre captivante présente trois chats majestueux vêtus de costumes victoriens élégants, illustrant une fusion harmonieuse entre la noblesse animale et humaine. Le chat à gauche, avec son pelage roux éclatant, dégage une aura chaleureuse et accueillante. Au centre, un chat mystérieux portant un chapeau est enveloppé dans un manteau sombre, évoquant une présence autoritaire. À droite, un chat au pelage gris sombre affiche une expression sérieuse et distinguée. Ensemble, ils incarnent l’élégance et la grandeur, capturées magistralement dans un style artistique réaliste empreint de romantisme.</p>
            <p>Prix : 1200 €</p>
        </div>
    </div>
    <!-- footer -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>
</body>

</html>