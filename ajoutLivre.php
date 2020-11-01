<?php
$site_title = "Ajout d'un livre";
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";
include "view/ajoutLivreView.php";

$bookToAdd = new BookManager();
if(isset($_POST) && !empty($_POST)){
    $newBook = new Book($_POST);
    $result = $bookToAdd->addBook($newBook);
}

include "view/template/footer.php";
?>