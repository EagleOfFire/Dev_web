<footer>
        <p>&copy; 2025 Vente de Bières Artisanales - Tous droits réservés.</p>
</footer>
<script src="script.js"></script>

<?php if (isset($_COOKIE["dernier_page"])) {
    echo "Dernière page visitée : " . htmlspecialchars($_COOKIE["dernier_page"]);
} else {
    echo "Aucune page consultée récemment.";
}?>
