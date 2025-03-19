<?php
session_start();

// Vérifier si l'utilisateur est connecté via un cookie
if (!isset($_COOKIE["user_email"])) {
    header("Location: connexion.php");
    exit();
}

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

// Récupérer les informations de l'utilisateur
$email = $_COOKIE["user_email"];
$stmt = $pdo->prepare("SELECT * FROM clients WHERE email = :email");
$stmt->execute(["email" => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    header("Location: connexion.php");
    exit();
}
?>

<section id="information_account">
<h2>Bienvenue, <?php echo htmlspecialchars($user["prenom"] . " " . $user["nom"]); ?> !</h2>
<p>Email: <?php echo htmlspecialchars($user["email"]); ?></p>
<p>Adresse: <?php echo htmlspecialchars($user["adresse"]); ?></p>
<p>Ville: <?php echo htmlspecialchars($user["ville"]); ?></p>
<p>Pays: <?php echo htmlspecialchars($user["pays"]); ?></p>
<p>Téléphone: <?php echo htmlspecialchars($user["telephone"]); ?></p>

<a href="logout.php">Se déconnecter</a>
</section>