<?php
// Controleur qui gère l'affichage de tous les utilisateurs
$site_title = "Liste des abonnés";
include "view/template/header.php";
include "view/template/nav.php";
require_once "model/userManager.php";

$userslist =new UserManager();
$users = $userslist -> getUsers();

include "view/usersView.php";


include "view/template/footer.php";