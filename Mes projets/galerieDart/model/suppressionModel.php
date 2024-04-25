<?php
include($_SERVER['DOCUMENT_ROOT']."/galerieDart/model/dbb_connect.php");

function delete($user_name) {
    global $bdd;

    $sql = "DELETE FROM users WHERE user_name = :user_name";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':user_name', $user_name);
    $stmt->execute();

    return true;
}