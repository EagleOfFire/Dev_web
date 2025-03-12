<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $prix = floatval($_POST["prix"]);
    $quantite = intval($_POST["quantite"]);

    if (!isset($_SESSION["panier"])) {
        $_SESSION["panier"] = [];
    }

    // Vérifie si l'article existe déjà dans le panier
    $existe = false;
    foreach ($_SESSION["panier"] as &$article) {
        if ($article["nom"] === $nom) {
            $article["quantite"] += $quantite;
            $existe = true;
            break;
        }
    }

    // Si l'article n'existe pas, on l'ajoute
    if (!$existe) {
        $_SESSION["panier"][] = [
            "nom" => $nom,
            "prix" => $prix,
            "quantite" => $quantite
        ];
    }
}

// Redirection vers la page panier
header("Location: index.php?page=panier");
exit();
?>
