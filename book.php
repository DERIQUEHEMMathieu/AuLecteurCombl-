<?php
// Controleur qui gère l'affichage du détail d'un livre
$site_title = "Détails du livre";
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/bookManager.php";
require_once "model/userManager.php";

// Affichage livre
if (isset($_GET) && !empty($_GET)) {
    $bookSingle = new BookManager();
    $book = $bookSingle->getBook(htmlspecialchars($_GET["id"]));
}

if (isset($_POST) && !empty($_POST)) {
    $userID =(!empty($_POST["user_id"]))? intval(htmlspecialchars($_POST["user_id"])):NULL;
    $bookStatus = $bookSingle->updateBookStatus($book, $userID);
}

// Affichage des coordonnées de l'abonné qui a emprunté le livre
if (!empty($book->getUser_id())){
    $user = new UserManager();
    // $user= $user->getUserById($book->getUser_id());
}

// Suppression d'un livre
if (isset($_POST["bookDelete"]) && ($book->getUser_id() == NULL)){
    $bookDelete = new BookManager();
    $result = $bookDelete->bookDelete($book);
}

include "view/livreView.php";
include "view/template/footer.php";