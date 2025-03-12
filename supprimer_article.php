<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $index = $_POST["index"];
    if (isset($_SESSION["panier"][$index])) {
        array_splice($_SESSION["panier"], $index, 1);
    }
}

header("Location: index.php?page=panier");
exit();
?>
