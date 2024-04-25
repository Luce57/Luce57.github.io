<?php
include($_SERVER['DOCUMENT_ROOT']."/galerieDart/model/dbb_connect.php");

function update($user_name, $email, $password){
    global $bdd;
    $querysqlData = "UPDATE users SET email= :email, password= :password WHERE user_name = :user_name";
    $stmtUsersInsert = $bdd->prepare($querysqlData);
    $stmtUsersInsert->bindParam(":user_name", $user_name);
    $stmtUsersInsert->bindParam(":email", $email);
    $stmtUsersInsert->bindParam(":password", $password);
    
    try{
       $stmtUsersInsert->execute();
    }catch(PDOException $e){
        $message = "Une erreur s'est produite avec l'update.";
    }
    
    if(!isset($message)){
        return true;
    }
    return false;
    
    if(!isset($message)){
        return true;
    }
    return false;
}