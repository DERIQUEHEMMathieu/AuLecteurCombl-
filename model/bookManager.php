<?php
require_once "model/dataBase.php";
require "model/entity/book.php";
class BookManager extends DataBase {
  // Récupère tous les livres
  public function getBooks():Array {
    $query = $this->getDB()->prepare (
      "SELECT *
      FROM book"
    );
    $query->execute();
    $books =$query -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key => $book) {
      $books[$key] = new Book($book);
    }
    return $books;
  }

  // Récupère un livre
  public function getBook($book_id):Book {
    $query = $this->getDB()->prepare (
      "SELECT *
      FROM book
      WHERE id = :book_id"
    );
    $query->execute([
      "book_id" => $book_id
    ]);
    $book = $query -> fetchAll(PDO::FETCH_ASSOC);
    $book = new Book($book[0]);
    return $book;
  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }
}
