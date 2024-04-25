<!-- dans le controler appel fonction  et applique la fonction dans l'oeuvre -->
<?php
session_start();
// j'inclus le fichier oeuvreModel.php qui contient la fonction getImage 
require($_SERVER['DOCUMENT_ROOT']."/galerieDart/model/oeuvreModel.php");

// // include($_SERVER['DOCUMENT_ROOT']."/galerie d'art/model/oeuvreModel.php");
// // visibilité de l oeuvre
// // fonction pour afficher la page oeuvre
// function showOeuvrePage($id){
//     // je recupere l id de l image avec la fontion getImage
//     $url_image = getImage($id);
//     // var_dump($imageUrl)
//     return $url_image;
//     if (array_key_exists('url_image', $votre_tableau)) {
//         $url_image = $votre_tableau['url_image'];
//     } else {
//         $url_image = 'chemin/vers/image/par/defaut.jpg'; // Utilisez une image par défaut si 'url_image' n'est pas défini
//     }
// }
// $_SESSION['url_image']=showOeuvrePage(6);
//  // inclure le fichier oeuvre_dessin.php pour afficher l'oeuvre dessin
include($_SERVER['DOCUMENT_ROOT']."/galerieDart/view/oeuvre_dessin.php");

?>
