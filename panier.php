<?php
setcookie("dernier_page", basename($_SERVER['PHP_SELF']), time() + 3600, "/");
?>

<section id="panier">
    <h2>Votre panier</h2>
    <p>Retrouvez ici les articles que vous avez ajoutés à votre panier.</p>

    <table>
        <thead>
            <tr>
                <th>Nom de la bière</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            if (isset($_SESSION["panier"]) && !empty($_SESSION["panier"])) {
                foreach ($_SESSION["panier"] as $index => $article) {
                    $sousTotal = $article["prix"] * $article["quantite"];
                    $total += $sousTotal;
                    echo "<tr>
                        <td>{$article['nom']}</td>
                        <td>{$article['prix']}€</td>
                        <td>{$article['quantite']}</td>
                        <td>{$sousTotal}€</td>
                        <td>
                            <form action='supprimer_article.php' method='POST'>
                                <input type='hidden' name='index' value='{$index}'>
                                <button type='submit'>❌</button>
                            </form>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Votre panier est vide.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Total : <?php echo $total; ?>€</h3>

    <form action="vider_panier.php" method="POST">
        <button type="submit">Vider le panier</button>
    </form>
</section>
