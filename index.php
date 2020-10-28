<?php
$site_title = "Au lecteur joyeux";
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";

// Controlleur qui gérer l'affichage de tous les livres

$allBooks = new BookManager();
$books = $allBooks->getBooks();

require "view/indexView.php";
include "view/template/footer.php";
?>