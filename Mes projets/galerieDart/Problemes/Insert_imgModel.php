<!-- récupérer
<?php
include($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/dbb_connect.php");



class ArtObjectModel
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    public function getArtObjectById($id_objet)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM objet_art WHERE id_objet = ?");
        $stmt->execute([$id_objet]);
        return $stmt->fetch();
    }
}




$file = $_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/Insert_imgModel.php";
if (file_exists($file)) {
    require_once($file);
} else {
    echo "Le fichier $file n'existe pas";
}


















// // récupéré les fonctions de la base de données pour afficher dans le tableau
// // Creer fonction qui active au moment de l ouverture de la page donc la vue 
// // Proposer une fonction qui va chercher les images dans la base de données.
// if (!function_exists('getImages')) {
//     function getImages()
//     {
//         global $bdd;
//         $query = $bdd->prepare("SELECT * FROM objet_art");
//         if (!$query->execute()) {
//             var_dump($query->errorInfo());
//             die();
//         }
//         //récupere tous les résultats requete sou forme d'objet
//         $result = $query->fetchAll(PDO::FETCH_OBJ);
//         // Retourner les résultats, ou un tableau vide si aucun résultat n'a été trouvé
//         return $result !== false ? $result : [];
//     }
// }
// // fonction pour chercher et stocker l'image
// function loadImages()
// {
//     global $images;
//     $images = getImages();
// }






// function getImages($id)
// {
//     global $bdd;
//     var_dump($bdd);
//     $query = $bdd->prepare("SELECT * FROM objet_art where id_objet = :id");
//     $query->bindParam(':id', $id);
//     $query->execute();
//     $result = $query->fetchAll(PDO::FETCH_OBJ);
//     return $result !== false ? $result : [];
// }
// {
//     // Connexion à la base de données
//     global $bdd;

//     // Préparez la requête SQL pour éviter les injections SQL
//     $stmt = $bdd->prepare('SELECT * FROM objet_art WHERE id_objet = :id');
//     $stmt->execute(['id' => $id]);

//     // Récupérez l'image
//     return $stmt->fetch(PDO::FETCH_ASSOC);
// }



    // premiere version{
//     // Connexion à la base de données
//     $bdd = new PDO('mysql:host=localhost;dbname=nom_deotre_base_de_donnees;charset=utf8', 'username', 'password');

//     // Récupération des images
//     $query = $bdd->query('SELECT * FROM objet_art');
//     return $query->fetchAll(PDO::FETCH_ASSOC);
// }
