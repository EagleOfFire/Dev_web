<?php
session_start();

// Vérification de l'authentification
if (!isset($_SESSION['user'])) {
    header("Location: connexion.php");
    exit();
}

// Exemple de données utilisateur (remplace par une récupération depuis ta base de données)
$user = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "email" => "jean.dupont@example.com",
    "telephone" => "0601020304",
    "adresse" => "12 rue des Champs, 75000 Paris",
    "code_postal" => "75000",
    "ville" => "Paris",
    "pays" => "France"
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil utilisateur</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include "header.php"; ?>

    <section>
        <h2>Profil utilisateur</h2>
        <p><strong>Nom :</strong> <?= htmlspecialchars($user["nom"]) ?></p>
        <p><strong>Prénom :</strong> <?= htmlspecialchars($user["prenom"]) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($user["email"]) ?></p>
        <p><strong>Téléphone :</strong> <?= htmlspecialchars($user["telephone"]) ?></p>
        <p><strong>Adresse :</strong> <?= htmlspecialchars($user["adresse"]) ?></p>
        <p><strong>Code Postal :</strong> <?= htmlspecialchars($user["code_postal"]) ?></p>
        <p><strong>Ville :</strong> <?= htmlspecialchars($user["ville"]) ?></p>
        <p><strong>Pays :</strong> <?= htmlspecialchars($user["pays"]) ?></p>

        <a href="modifier_profil.php" class="button">Modifier mes infos</a>
    </section>

    <?php include "footer.php"; ?>

</body>
</html>
