<?php
include($_SERVER['DOCUMENT_ROOT'] . "/model/dbb_connect.php");

// récupéré les fonctions de la base de données pour afficher dans le tableau
if (!function_exists('getusers')) {
    function getusers()
    {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM users");
        if (!$query->execute()) {
            var_dump($query->errorInfo());
            die();
        }
        //récupere tous les résultats requete sou forme d'objet
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        // Retourner les résultats, ou un tableau vide si aucun résultat n'a été trouvé
        return $result !== false ? $result : [];
    }
}

if (!function_exists('getobjet_art')) {
    function getobjet_art()
    {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM objet_art");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result !== false ? $result : [];
    }
}

if (!function_exists('getcontact')) {
    function getcontact()
    {
        global $bdd;
        $query = $bdd->prepare("SELECT * FROM contact");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return $result !== false ? $result : [];
    }
}


// Créer un utilisateur
function createUser($username, $role, $nom, $prenom, $email, $password)
{
    global $bdd;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = $bdd->prepare("INSERT INTO users (user_name, role, nom, prenom, email, password, date_creation,d_connect) VALUES (:user_name, :role, :nom, :prenom, :email, :password, NOW(),NOW())");
    $query->bindParam(':user_name', $username);
    $query->bindParam(':role', $role);
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashedPassword);
    return $query->execute();
}

// Modifier un utilisateur
function updateUser($id, $username, $role, $nom, $prenom, $email, $password)
{
    global $bdd;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = $bdd->prepare("UPDATE users SET user_name = :user_name, role = :role, nom = :nom, prenom = :prenom, email = :email, password = :password WHERE id_user = :id_user");
    $query->bindParam(':id_user', $id);
    $query->bindParam(':user_name', $username);
    $query->bindParam(':role', $role);
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashedPassword);
    return $query->execute();
}

// Supprimer un utilisateur
function deleteUser($id)
{
    global $bdd;
    $query = $bdd->prepare("DELETE FROM users WHERE id_user = :id_user");
    $query->bindParam(':id_user', $id);
    return $query->execute();
}
function deleteContact($id)
{
    global $bdd;
    $query = $bdd->prepare("DELETE FROM contact WHERE id_contact = :id_contact");
    $query->bindParam(':id_contact', $id);
    return $query->execute();
}

// creer oeuvre
function createOeuvre($type, $artistes, $titre, $description, $prix, $url_image)
{
    global $bdd;
    $query = $bdd->prepare("INSERT INTO objet_art (type, artistes, titre, description, prix, url_image) VALUES (:type, :artistes, :titre, :description, :prix, :url_image)");
    $query->bindParam(':type', $type);
    $query->bindParam(':artistes', $artistes);
    $query->bindParam(':titre', $titre);
    $query->bindParam(':description', $description);
    $query->bindParam(':prix', $prix);
    $query->bindParam(':url_image', $url_image);
    // return $query->execute();
    if (!$query->execute()) {
        var_dump($query->errorInfo());
        die();
    }
    return true;
}
// modifier oeuvre
function updateOeuvre($id, $type, $artistes, $titre, $description, $prix, $url_image)
{
    global $bdd;
    $query = $bdd->prepare("UPDATE objet_art SET type = :type, artistes = :artistes, titre = :titre, description = :description, prix = :prix, url_image = :url_image WHERE id_objet = :id_objet");
    $query->bindParam(':id_objet', $id);
    $query->bindParam(':type', $type);
    $query->bindParam(':artistes', $artistes);
    $query->bindParam(':titre', $titre);
    $query->bindParam(':description', $description);
    $query->bindParam(':prix', $prix);
    $query->bindParam(':url_image', $url_image);
    if (!$query->execute()) {
        var_dump($query->errorInfo());
        die();
    }
    return true;
}
// supprimer oeuvre
function deleteOeuvre($id)
{
    global $bdd;
    $query = $bdd->prepare("DELETE FROM objet_art WHERE id_objet = :id_objet");
    $query->bindParam(':id_objet', $id);
    if (!$query->execute()) {
        var_dump($query->errorInfo());
        die();
    }
    return true;
}
