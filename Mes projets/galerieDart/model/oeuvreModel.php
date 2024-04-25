
<!-- recupere img dans base de données -->
<?php
// etablir connexion base de données
include($_SERVER['DOCUMENT_ROOT']."/galerieDart/model/dbb_connect.php");
//je creer une fonction qui va me permettre de recuperer l'id de l image
// function getImage($id){
//     // variable global on l appel pour la fonction dans la page dbb_connect
//     global $bdd;
//      // Requête SQL pour récupérer l'URL de l'image où l'ID correspond au paramètre
//     // je creer une requete sql qui va me permettre de recuperer l id de l image
//     $querysql="SELECT url_img FROM objet_art where id=?";
//     // statement $stmt veut dire enoncé 
//     // je prepare ma requete
//     $stmt = $bdd->prepare($querysql);
//     // lier le parametre id de la requete sql 
//     $stmt->bind_param("i", $id);
//     // executer la requete sql
//     $stmt->execute();
//     //recupere le resultat de la requete SQl
//     $result=$stmt->get_result();
//     // si le resultat contient au moins une ligne
//     if ($result->num_rows > 0) {
//         // row variable qui represente une ligne de données renvoyée par la requête
//         //je parcours et je recupere le resultat
//         while($row = $result->fetch_assoc()) {
//             // fetch_assoc() renvoie une ligne de données sous forme de tableau associatif
//             //je retourne l url de l image 
//             // on stocke l'url de l'image dans la variable row
//             return $row["url_image"];
//         }
//     } else {
//         //Si aucune ligne n'a été trouvée, retourner null
//         return null;
//     }
// }


?>

