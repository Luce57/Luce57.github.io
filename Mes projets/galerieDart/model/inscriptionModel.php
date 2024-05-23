<?php
include($_SERVER['DOCUMENT_ROOT'] . "/model/dbb_connect.php");
function inscription($user_name, $nom, $prenom, $email, $password)
{
    global $bdd;

    // Vérifier si l'utilisateur existe déjà
    $sql = "SELECT * FROM users WHERE user_name = :user_name OR email = :email";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        // L'utilisateur existe déjà
        return false;
    }

    // Si l'utilisateur n'existe pas, continuez l'inscription
    $role = 'utilisateur'; //définir le role lors de l'inscription
    $date_creation = date('Y-m-d H:i:s');
    $d_connect = date('Y-m-d H:i:s');
    $sql = "INSERT INTO users (user_name, role, nom, prenom, email, password, date_creation, d_connect ) VALUES (:user_name, :role, :nom, :prenom, :email, :password, :date_creation, :d_connect)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':user_name', $user_name);
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':date_creation', $date_creation);
    $stmt->bindParam(':d_connect', $d_connect);
    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage(); // Afficher l'erreur PDO
        return false;
    }
}
// partit du code pour tester la connexion à la base de donnée mettre en comment le try au desssus 
    // try {
    //     $sql = "SELECT * FROM users";
    //     $result = $bdd->query($sql);
    
    //     if ($result->rowCount() > 0) {
    //         echo "Connexion réussie, " . $result->rowCount() . " lignes sélectionnées.";
    //     } else {
    //         echo "Connexion réussie, mais aucune ligne sélectionnée.";
    //     }
    // } catch(PDOException $e) {
    //     echo "Erreur lors de la connexion : " . $e->getMessage();
    // }
