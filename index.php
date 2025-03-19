<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beerstro.com</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="information_account.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <?php session_start(); ?>
    <?php include "header.php"; ?>

    <?php if (isset($_GET["page"])) {
        switch ($_GET["page"]) {
            case "panier":
                include "panier.php";
                break;
            case "connexion":
                include "connexion.php";
                break;
            case "information_account":
                include "information_account.php";
                break;
            case "inscription":
                include "inscription.php";
                break;
            default:
                include "main.php";
                break;
        }
    } else {
        include "main.php";
    } ?>

    <?php include "beer.php"; ?>
    <?php include "footer.php"; ?>
    
</body>
</html>