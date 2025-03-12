<?php
$error = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Identifiants de test (à remplacer par une base de données)
    $user_valid = "admin";
    $password_valid = "1234";

    // Récupérer et nettoyer les entrées
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    // Vérifier les identifiants
    if ($username === $user_valid && $password === $password_valid) {
        $_SESSION["user"] = $username;
        header("Location: index.php"); // Rediriger vers la page principale
        exit();
    } else {
        $error = "Identifiant ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h2>Connexion</h2>
    </header>

    <section>
        <form action="connexion.php" method="POST">
            <label for="username">Identifiant :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <?php if ($error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <button type="submit">Se connecter</button>
        </form>
    </section>

</body>
</html>
