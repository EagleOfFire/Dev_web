<?php
$error = "";

// Connexion à la base de données
$host = "127.0.0.1";
$dbname = "user";
$username_db = "root";
$password_db = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username_db, $password_db);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Vérifier si l'utilisateur est déjà connecté via un cookie
if (isset($_COOKIE["user_email"])) {
    header("Location: information_account.php");
    exit();
}

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$email = htmlspecialchars(trim($_POST["username"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    // Vérifier les identifiants dans la base de données
    $stmt = $pdo->prepare("SELECT * FROM client WHERE email = :email");
    $stmt->execute(["email" => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["mot_de_passe"])) {
        // Démarrer une session
        $_SESSION["user_email"] = $user["email"];

        // Créer un cookie valable 7 jours
        setcookie("user_email", $user["email"], time() + (7 * 24 * 60 * 60), "/");

        header("Location: information_account.php");
        exit();
    } else {
        $error = "Identifiant ou mot de passe incorrect.";
    }
}
?>

<h2>Connexion</h2>

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