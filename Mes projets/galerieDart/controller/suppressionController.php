<?php
session_start();
require($_SERVER['DOCUMENT_ROOT'] . "/model/suppressionModel.php");

if (isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
    delete($user_name);
}
$_SESSION['account_deleted'] = "Votre compte a été supprimé avec succès.";
header("Location: /view/connexion.php");
exit();
