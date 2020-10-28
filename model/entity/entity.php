<?php
// Classe représetant les livres stockés en base de données
abstract class Entity {
  protected int $id;

  public function setId(int $id){
    $id = intval($id);
    $this->id=htmlspecialchars($id);
  }
  public function getId(){
  return $this->id;
  }

  public function __construct($data) {
    $this->hydrate($data);
  }
  public function hydrate(array $data) {
    foreach ($data as $key => $value) {
      $method = "set" . ucfirst($key);
      if(method_exists($this, $method)) {
        $this->$method(htmlspecialchars($value));
      }
    }
  }
}
?>
