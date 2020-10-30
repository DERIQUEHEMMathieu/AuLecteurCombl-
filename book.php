<?php
// Controleur qui gère l'affichage du détail d'un livre
$site_title = "Détails du livre";
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";

if (isset($_GET) && !empty($_GET)) {
    $book = new BookManager();
    $book = $book->getBook(htmlspecialchars($_GET["id"]));
}

include "view/livreView.php";
include "view/template/footer.php";