<?php
session_start();
session_destroy();
header("Location: /galerieDart/view/connexion.php");
exit();
?>