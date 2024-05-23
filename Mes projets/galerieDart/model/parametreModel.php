<?php
include($_SERVER['DOCUMENT_ROOT'] . "/model/dbb_connect.php");

function update($user_name, $email = null, $password = null)
{
    global $bdd;
    $querysqlData = "UPDATE users SET ";
    if ($email !== null && $email !== '') {
        $querysqlData .= "email= :email, ";
    }
    if ($password !== null && $password !== '') {
        $querysqlData .= "password= :password, ";
    }
    // Remove trailing comma and add WHERE clause
    $querysqlData = rtrim($querysqlData, ', ') . " WHERE user_name = :user_name";
    $stmtUsersInsert = $bdd->prepare($querysqlData);
    $stmtUsersInsert->bindParam(":user_name", $user_name);
    if ($email !== null && $email !== '') {
        $stmtUsersInsert->bindParam(":email", $email);
    }
    if ($password !== null && $password !== '') {
        $stmtUsersInsert->bindParam(":password", $password);
    }

    try {
        $stmtUsersInsert->execute();
    } catch (PDOException $e) {
        $message = "Une erreur s'est produite avec l'update.";
    }

    if (!isset($message)) {
        return true;
    }
    return false;
}
function get_current_password($user_name)
{
    global $bdd;
    $query = "SELECT password FROM users WHERE user_name = :user_name";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(":user_name", $user_name);

    try {
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['password'];
    } catch (PDOException $e) {
        return false;
    }
}
