<?php
require_once "model/dataBase.php";
require "model/entity/user.php";
class userManager extends DataBase {
  // Récupère tous les utilisateurs
  public function getUsers():Array {
    $query = $this->getDB()->prepare (
      "SELECT *
      FROM user"
    );
    $query->execute();
    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $key=>$user) {
      $users[$key] = new User($user);
    }
    return $users;
  }

  // Récupère un utilisateur par son id
  public function getUserById($user_id):User {
    $query = $this->getDB()->prepare (
      "SELECT *
      FROM user
      WHERE id = :user_id"
    );
    $query->execute(["user_id=>$user_id"]);
    $user = $query->fetchAll(PDO::FETCH_ASSOC);
    $user = new User($user[0]);
    return $user;
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}
