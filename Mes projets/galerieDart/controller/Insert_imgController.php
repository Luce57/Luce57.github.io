<!-- // pour récupérer une image base de données ne pas oublier pour l insértion dans mes autres pages Oeuvres.php et contact.php
// d'ajouter le chemin de l'image dans la base de données et votre id -->


<?php
require($_SERVER['DOCUMENT_ROOT'] . "/model/Insert_imgModel.php");
// loadImages();

require($_SERVER['DOCUMENT_ROOT'] . "/model/Insert_imgModel.php");

class ArtObjectController
{
    private $model;

    public function __construct($bdd)
    {
        $this->model = new ArtObjectModel($bdd);
    }

    public function viewArtObject($id_objet)
    {
        $artObject = $this->model->getArtObjectById($id_objet);
        if ($artObject) {
            echo '<img src="' . htmlspecialchars($artObject['url_image']) . '">';
        } else {
            echo 'Image non trouvée';
        }
    }
}

$bdd = new PDO('mysql:host=localhost;dbname=your_database;charset=utf8', 'root', '');
$controller = new ArtObjectController($bdd);

$id_objet = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
if (filter_var($id_objet, FILTER_VALIDATE_INT)) {
    $controller->viewArtObject($id_objet);
} else {
    echo 'ID d\'objet non valide';
}
// $id_objet = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
// if (filter_var($id_objet, FILTER_VALIDATE_INT)) {
//     $controller->viewArtObject($id_objet);
// } else {
//     // Gérer l'erreur
//     echo 'ID d\'objet non valide';
// }








// foreach ($GLOBALS['images'] as $image) {
//     echo '<img src="' . htmlspecialchars($image->url_image) . '">';
// }
// // Récupérez les liens des images à l'aide de la fonction du modèle
// // $images = getImages();
// // var_dump($images);

// // Passez les liens des images à la vue
// include 'view/oeuvre_dessin.php';
