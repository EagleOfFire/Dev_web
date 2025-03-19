<?php
$error = "";

// Connexion à la base de données
$host = "127.0.0.1"; // Adresse du serveur
$dbname = "user"; // Remplace par le nom de ta base de données
$username_db = "root"; // Remplace par ton utilisateur MySQL
$password_db = ""; // Remplace par ton mot de passe MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username_db, $password_db);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    // Vérifier les identifiants dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM clients WHERE email = :email");
    $stmt->execute(["email" => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["mot_de_passe"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        header("Location: index.php"); // Rediriger après connexion
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
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <?php if ($error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <button type="submit">Se connecter</button>
        </form>

        <!-- Bouton d'inscription -->
        <form action="inscription.php" method="GET">
            <button type="submit">S'inscrire</button>
        </form>

    </section>

</body>
</html>
