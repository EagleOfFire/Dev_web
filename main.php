<?php
setcookie("dernier_page", basename($_SERVER['PHP_SELF']), time() + 3600, "/");
?>

<section id="accueil">
    <h2>À propos de nous</h2>
    <p>
        Passionnés par la bière artisanale depuis plus de 55 ans, nous mettons notre savoir-faire et notre expertise au service de votre plaisir.<br />
        Notre équipe dédiée est là pour vous conseiller et vous guider dans le choix de la bière qui correspond le mieux à vos goûts et vos envies.
    </p>
</section>
<section id="acheter">
    <h2>Acheter des bières</h2>
    <p>Choisissez parmi notre sélection de bières artisanales.</p>
    <table>
        <colgroup>
            <col style="width: 25%;" />
            <col style="width: 25%;" />
            <col style="width: 50%;" />
        </colgroup>
        <thead>
            <tr>
                <th>Nom de la bière</th>
                <th>Prix</th>
                <th class="double-header">
                    <span>Quantité</span>
                    <span>Ajouter</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="table_content">
                <td>La P'tite Mousse</td>
                <td>1€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="La P'tite Mousse" />
                        <input type="hidden" name="prix" value="1" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>L'Ambrée Tendre</td>
                <td>2€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="L'Ambrée Tendre" />
                        <input type="hidden" name="prix" value="2" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>La Brune Mystère</td>
                <td>3€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="La Brune Mystère" />
                        <input type="hidden" name="prix" value="3" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>La Blonde Affaire</td>
                <td>4€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="La Blonde Affaire" />
                        <input type="hidden" name="prix" value="4" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>L'Ambrée Royale</td>
                <td>5€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="L'Ambrée Royale" />
                        <input type="hidden" name="prix" value="5" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>La Brune Costaud</td>
                <td>6€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="La Brune Costaud" />
                        <input type="hidden" name="prix" value="6" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>La Blonde Élite</td>
                <td>7€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="La Blonde Élite" />
                        <input type="hidden" name="prix" value="7" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>L'Ambrée Suprême</td>
                <td>8€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="L'Ambrée Suprême" />
                        <input type="hidden" name="prix" value="8" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>La Brune Fatale</td>
                <td>9€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="La Brune Fatale" />
                        <input type="hidden" name="prix" value="9" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
            <tr class="table_content">
                <td>L'Impériale Brune</td>
                <td>100000€</td>
                <td class="form-cell">
                    <form action="ajouter_panier.php" class="buy_form" method="POST">
                        <input type="hidden" name="nom" value="L'Impériale Brune" />
                        <input type="hidden" name="prix" value="100000" />
                        <input type="number" name="quantite" min="1" value="1" />
                        <button class="add_shopping_cart_button"><span>Add</span></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</section>
<section id="creer">
    <h2>Créer votre propre bière</h2>
    <p>Apprenez à brasser votre propre bière grâce à nos guides détaillés.</p>
    <ol>
        <li><strong>Choisir ses ingrédients :</strong> Eau, malt, houblon et levure.</li>
        <li><strong>Concassage du malt :</strong> Broyer le malt pour libérer les sucres.</li>
        <li><strong>Empâtage :</strong> Chauffer le malt avec de l'eau pour extraire les sucres fermentescibles.</li>
        <li><strong>Filtration et rinçage :</strong> Séparer le liquide (moût) des résidus solides.</li>
        <li><strong>Ébullition et houblonnage :</strong> Faire bouillir le moût et ajouter le houblon pour l'amertume et les arômes.</li>
        <li><strong>Refroidissement :</strong> Abaisser la température rapidement avant fermentation.</li>
        <li><strong>Fermentation :</strong> Ajouter la levure et laisser fermenter plusieurs jours.</li>
        <li><strong>Maturation :</strong> Laisser reposer la bière pour développer ses arômes.</li>
        <li><strong>Mise en bouteille :</strong> Ajouter du sucre, embouteiller et laisser refermenter.</li>
        <li><strong>Dégustation :</strong> Savourer votre bière maison après quelques semaines de patience !</li>
    </ol>
</section>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/biere1.jpg" class="d-block w-100" alt="Bière artisanale n°1" />
        </div>
        <div class="carousel-item">
            <img src="/images/biere2.jpg" class="d-block w-100" alt="Bière artisanale n°2" />
        </div>
        <div class="carousel-item">
            <img src="/images/biere3.jpg" class="d-block w-100" alt="Bière artisanale n°3" />
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section id="contact">
    <h2>Contact</h2>
    <p>Contactez-nous pour toute question ou commande.</p>
    <form id="contactForm">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required />
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required />
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="contact_submit_button"><span>Envoyer</span></button>
    </form>
</section>
