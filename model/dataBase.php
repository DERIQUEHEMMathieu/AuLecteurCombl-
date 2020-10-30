<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

abstract class DataBase {
    const HOST = "localhost";
    const DBNAME = "librairie";
    const USER = "root";
    const PASSWORD = "";
    private $db;

    public function setDB(PDO $connexion) {
      $this->db = $connexion;
    }

    public function getDB():PDO {
      return $this->db;
    }

    public static function DB() {
      try {
        $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
        return $db;
      }
      catch (\Exception $e) {
        echo "Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br/>";
        die();
      }
    }

    public function __construct()
    {
      	$this->setDB(self::DB());
    }
}
?>