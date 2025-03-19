<?php
$success = "";
$error = "";

// Connexion à la base de données
$host = "127.0.0.1";
$dbname = "user"; // Remplace par le nom de ta base
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
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $mot_de_passe = password_hash($_POST["mot_de_passe"], PASSWORD_DEFAULT); // Hachage du mot de passe
    $adresse = htmlspecialchars(trim($_POST["adresse"]));
    $ville = htmlspecialchars(trim($_POST["ville"]));
    $code_postal = htmlspecialchars(trim($_POST["code_postal"]));
    $pays = htmlspecialchars(trim($_POST["pays"]));
    $telephone = htmlspecialchars(trim($_POST["telephone"]));

    // Vérifier si l'email existe déjà
    //$stmt = $pdo->prepare("SELECT * FROM client WHERE email = :email");
    $stmt = $pdo->prepare("SELECT * FROM clients WHERE email = :email");

    $stmt->execute(["email" => $email]);

    if ($stmt->rowCount() > 0) {
        $error = "Cet email est déjà utilisé.";
    } else {
        // Insérer les données dans la base
        $stmt = $pdo->prepare("INSERT INTO clients (nom, prenom, email, mot_de_passe, adresse, ville, code_postal, pays, telephone, date_creation) 
                               VALUES (:nom, :prenom, :email, :mot_de_passe, :adresse, :ville, :code_postal, :pays, :telephone, NOW())");

        $stmt->execute([
            "nom" => $nom,
            "prenom" => $prenom,
            "email" => $email,
            "mot_de_passe" => $mot_de_passe,
            "adresse" => $adresse,
            "ville" => $ville,
            "code_postal" => $code_postal,
            "pays" => $pays,
            "telephone" => $telephone
            // "date_creation" => "Lundi",
            // "dernier_connexion" => "Lundi"
        ]);

        $success = "Inscription réussie ! Vous pouvez vous connecter.";
    }
}
?>

    <header>
        <h2>Inscription</h2>
    </header> 

    <section id="inscription">
        <form action="inscription.php" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse">

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville">

            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal">

            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays">

            <label for="telephone">Téléphone :</label>
            <input type="text" id="telephone" name="telephone">

            <?php if ($error): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <?php if ($success): ?>
                <p style="color: green;"><?php echo $success; ?></p>
                <a href="connexion.php">Se connecter</a>
            <?php endif; ?>

            <button type="submit">S'inscrire</button>
        </form>
    </section>
