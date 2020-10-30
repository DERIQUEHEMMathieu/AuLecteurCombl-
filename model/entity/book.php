<?php
require_once "model/entity/Entity.php";

// Classe représetant les livres stockés en base de données
final class Book extends Entity {

    protected string $title;
    protected string $author;
    protected string $resume;
    protected string $date;
    protected string $category;
    protected int $user_id;

    public function setTitle(string $title) {
        $this->title=htmlspecialchars(ucfirst($title));
    }
    public function getTitle() {
        return $this->title;
    }

    public function setAuthor(string $author) {
        $this->author=htmlspecialchars(ucfirst($author));
    }
    public function getAuthor() {
        return $this->author;
    }

    public function setResume(string $resume) {
        $this->resume=htmlspecialchars(ucfirst($resume));
    }
    public function getResume() {
        return $this->resume;
    }

    public function setDate(string $date) {
        $this->date=htmlspecialchars($date);
    }
    public function getDate() {
        return $this->date;
    }

    public function setCategory(string $category) {
        $this->category=htmlspecialchars(ucfirst($category));
    }
    public function getCategory() {
        return $this->category;
    }

    public function setUser_id(string $user_id) {
        $user_id = intval($user_id);
        $this->user_id=htmlspecialchars($user_id);
    }
    public function getUser_id() {
        return $this->user_id;
    }

    public function __construct($data) {
        $this->hydrate($data);
    }
}
?>