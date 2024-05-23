<?php
require($_SERVER['DOCUMENT_ROOT'] . "/model/compte_administrateurModel.php");
// session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);



$users = getusers();
// var_dump($users);
if ($users === false) {
    // Gérer l'erreur
    die('Erreur lors de la récupération des utilisateurs');
} // Maintenant, vous pouvez utiliser $users


$objet_art = getobjet_art();
// var_dump($objet_art);
if ($objet_art === false) {
    // Gérer l'erreur
    die('Erreur lors de la récupération des objets d\'art');
}

$contact = getcontact();
// var_dump($contact);
if ($contact === false) {
    // Gérer l'erreur
    die('Erreur lors de la récupération des contacts');
}


if (isset($_POST['create'])) {
    $username = $_POST['username'];
    $role = $_POST['role'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (createUser($username, $role, $nom, $prenom, $email, $password)) {
        echo "<p style='color: green; font-size: 25px;text-align:center'>Utilisateur créé avec succès</p>";
    } else {
        echo "<p style='color: red; font-size: 25px;text-align:center ;'>Erreur lors de la création de l'utilisateur</p>";
    }
}

// Modifier un utilisateur
if (isset($_POST['update'])) {
    $id = $_POST['id_user'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (updateUser($id, $username, $role, $nom, $prenom, $email, $password)) {
        echo "<p style='color: green; font-size: 25px;text-align:center'>Utilisateur modifié avec succès</p>";
    } else {
        echo "<p style='color: red; font-size: 25px;text-align:center'>Erreur lors de la modification de l'utilisateur</p>";
    }
}

// Supprimer un utilisateur
if (isset($_POST['delete'])) {
    $id = $_POST['id_user'];
    if (deleteUser($id)) {
        echo "Utilisateur supprimé avec succès";
    } else {
        echo "Erreur lors de la suppression de l'utilisateur";
    }
}

//supprimer contact
if (isset($_POST['delete_contact'])) {
    $id = $_POST['id_contact'];
    if (deleteContact($id)) {
        echo "<p style='color: green; font-size: 25px;text-align:center'>Contact supprimé avec succès</p>";
    } else {
        echo "<p style='color: red; font-size: 25px;text-align:center'>Erreur lors de la suppression du contact</p>";
    }
}

// creer oeuvre
if (isset($_POST['create_oeuvre'])) {
    $type = $_POST['type'];
    $artistes = $_POST['artistes'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $url_image = $_POST['url_image'];
    if (createOeuvre($type, $artistes, $titre, $description, $prix, $url_image)) {
        echo "<p style='color: green; font-size: 25px;text-align:center'>Oeuvre créée avec succès</p>";
    } else {
        echo "<p style='color: red; font-size: 25px;text-align:center'>Erreur lors de la création de l'oeuvre</p>";
    }
}
// modifier oeuvre
if (isset($_POST['update_objet'])) {
    $id = $_POST['id_objet'];
    $type = $_POST['type'];
    $artistes = $_POST['artistes'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $url_image = $_POST['url_image'];
    if (updateOeuvre($id, $type, $artistes, $titre, $description, $prix, $url_image)) {
        echo "<p style='color: green; font-size: 25px;text-align:center'>Oeuvre modifiée avec succès</p>";
    } else {
        echo "<p style='color: red; font-size: 25px;text-align:center'>Erreur lors de la modification de l'oeuvre</p>";
    }
}
// supprimer oeuvre
if (isset($_POST['delete_objet'])) {
    $id = $_POST['id_objet'];
    if (deleteOeuvre($id)) {
        echo "<p style='color: green; font-size: 25px;text-align:center'>Oeuvre supprimée avec succès</p>";
    } else {
        echo "<p style='color: red; font-size: 25px;text-align:center'>Erreur lors de la suppression de l'oeuvre</p>";
    }
}

// pour récupérer une image base de données  ne pas oublier pour l insértion dans mes autres pages Oeuvres.php et contact.php 
// d'ajouter le chemin de l'image dans la base de données et votre id 
// <?php
//     $query = "SELECT image_path FROM images WHERE id = votre_id";
//     // Exécutez la requête et récupérez le résultat ici

//     $image_path = $resultat;
//     echo '<img src="'.$image_path.'" alt="Image">';
// 


// // potentielle code pour télécharger une image sur le serveur
// // <?php
//     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['userfile'])) {
//         $upload_dir = '/chemin/vers/votre/dossier/';
//         $upload_file = $upload_dir . basename($_FILES['userfile']['name']);

//         if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
//             echo "Le fichier a été téléchargé avec succès.";
//         } else {
//             echo "Erreur lors du téléchargement du fichier.";
//         }
//     }
// 
