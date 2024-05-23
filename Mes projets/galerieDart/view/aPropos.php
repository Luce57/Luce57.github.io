<!-- bien mettre $_server variable super global sinon ne trouve pas le chemin du fichier -->
<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php"; ?>
<div class="Propos">
  <div class="img_galerie">
    <div class="img_galerie1">
      <img src="/images_photos/galerie/galerie2.jpg" alt="image1" />
    </div>
    <div class="img_galerie2">
      <img src="/images_photos/galerie/equipe3.jpg" alt="image2" />
    </div>
    <div class="img_galerie3">
      <img src="/images_photos/galerie/galerie3.jpg" alt="image3" />
    </div>
  </div>
  <div class="texte_Propos">
    <div class="titre_Propos">
      <h1>“L’Éclat des Songes”</h1>
    </div>
    <div class="texteP1">
      <p>Bienvenue à “L’Éclat des Songes”, une galerie d’art où la magie et la créativité se rencontrent. Notre mission est de capturer l’âme des rêves et de les exposer sous forme d’œuvres d’art éblouissantes.</p>
    </div>
    <div class="texteP2">
      <h2>Notre Vision</h2>
      <p>Nous croyons que chaque coup de pinceau, chaque sculpture et chaque photographie sont des éclats d’imagination. Chaque artiste qui expose ici apporte sa propre lumière, sa propre vision. Ensemble, nous créons un kaléidoscope d’émotions, de couleurs et de formes.</p>
    </div>
    <div class="texteP3">
      <h2>Notre Collection</h2>
      <p>Découvrez des toiles qui vous transportent dans des mondes oniriques, des sculptures qui donnent vie à des histoires anciennes, des dessins qui capturent l’instant présent, et des photographies qui figent l’éphémère. Chaque pièce est soigneusement sélectionnée pour son éclat unique.</p>
    </div>
    <div class="texteP4">
      <h2>Notre Engagement</h2>
      <p>“L’Éclat des Songes” est plus qu’une galerie d’art. C’est un lieu de rencontres, d’échanges et d’inspiration. Nous organisons des ateliers, des conférences et des événements pour nourrir votre âme créative. Venez partager vos rêves avec nous !</p>
    </div>
    <div class="texteP5">
      <h2>Nous Contacter</h2>
      <p>N’hésitez pas à nous rendre visite dans notre espace lumineux au cœur de la ville. Vous pouvez également nous suivre sur les réseaux sociaux pour rester informé(e) de nos dernières expositions et activités.
        Venez, explorez, rêvez avec nous à “L’Éclat des Songes”.
        Nous sommes impatients de vous accueillir dans notre galerie d’art et de partager avec vous ces éclats d’âme et de rêves.</p>
    </div>
    <div class="bouton_propos">
      <a href="contact.php" class="cta">Contactez-nous</a>
    </div>
  </div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php"; ?>