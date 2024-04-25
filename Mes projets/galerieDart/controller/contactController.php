<?php
session_start();
// j'inclus le fichier oeuvreModel.php qui contient la fonction getImage 
require($_SERVER['DOCUMENT_ROOT'] . "/galerieDart/model/contactModel.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_prenom = $_POST['nom_prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($nom_prenom !== NULL && $nom_prenom !== '') {
        $result = saveMessage($nom_prenom, $email, $message);
        if ($result) {
            $_SESSION['message'] = "Votre message a bien été envoyé et sera traité dans les plus brefs délais.";
        } else {
            $_SESSION['message'] = "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
        }
    } else {
        $_SESSION['message'] = "Le champ 'nom_prenom' ne peut pas être vide.";
    }
    header('Location: /galerieDart/view/contact.php'); // Redirige vers la page de contact
    exit();
}
