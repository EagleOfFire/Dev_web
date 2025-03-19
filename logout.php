<?php
session_start();

// Supprimer le cookie
setcookie("user_email", "", time() - 3600, "/");

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header("Location: index.php");
exit();
?>
